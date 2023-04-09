<?php

namespace App\Http\Controllers;
use App\Models\shirtsize;
use App\Models\shirtcolor;
use App\Models\orderdetail;
use App\Models\color;
use App\Models\order;
use App\Models\transport;
use App\Models\block;
use App\Models\sample;
use App\Models\freight;
use App\Models\payment;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Http\Request;

class OrderfController extends Controller
{
    
    public function index(){
        $shirtcolor = shirtcolor::all();
        $shirtsize = shirtsize::all();
        $shirtsize1 = shirtsize::all();
        $oldimage = order::where('order_orderdate','>',date("Ymd", strtotime(" -3 Month ")))->get();
        return view('Frontend.order', compact(['shirtcolor','shirtsize','shirtsize1','oldimage']));
    }

    public function color(){
        $shirtcolor = shirtcolor::all();
        $output='<option value="" selected disabled>เลือกสี</option>';
        foreach ($shirtcolor as $row){
            $output.='<option value="'.$row->id_shirtcolor.'">'.$row->shirtcolor_name.'</option>';
        }
        echo $output;   
    }

    public function shopping(){
        $order = order::where('id_user', session('id_user'))->get();
        return view('Frontend.shopping', compact(['order']));
    }
    
    public function buycolor(Request $request){     
<<<<<<< Updated upstream
=======
         
>>>>>>> Stashed changes
        $request->validate([
            'demo-priority' => 'required',
            'demo-priority1' => 'required',
        ],[
            'demo-priority.required' => 'กรุณาเลือกไซส์เสื้อ',
            'demo-priority1.required' => 'กรุณากรอกสีเสื้อ',
        ]);
         $imageName="";
         if (!empty($request->file('logofile'))) {
            $imageName = hexdec(uniqid()) . '.' . $request->file('logofile')->extension();
            $request->file('logofile')->move(public_path('assets/images/'), $imageName);
        }else{
            $image=explode(',',$request->oldimage);
            $imageName=$image[0];
        }
        $id = explode(",",$request->oldimage);
        $order = order::join('orderdetails','orderdetails.id_order','=','orders.id_order')
        ->where('orders.id_order',$id[1])->get();
        $screencolor = color::orderBy('color_name')->get();
        $transport = transport::all();
        $shirtsize = shirtsize::all();
        $shirtcolor = shirtcolor::all();
        return view('Frontend.buy', compact(['screencolor','transport','shirtsize','shirtcolor','order','imageName']));
    }

    public function checkorder(Request $request){
         
        $block = block::orderBy('block_wide')->get();
        $screencolor = color::where('id_color', $request->screen_color)->get();
        $transporter = transport::where('id_tramsport', $request->transport)->get();
        $shirtsize = shirtsize::all();
        $shirtcolor = shirtcolor::all(); 
        $data1 = freight::where('id_transport', $request->transport)->get();
        return view('Frontend.checkorder3', compact(['block','screencolor','transporter','shirtsize','data1','shirtcolor']));
    }

    public function checkorderdetail(Request $request){
        $order = order::where('id_order', $request->id)->get();
        $purchase = order::join('payments','payments.id_order','orders.id_order')->where('orders.id_order', $request->id)
        ->orderBy('payments.id_payment','desc')->get();
        $screencolor = color::all();
        $shirtcolor = shirtcolor::all();
        $shirtsize = shirtsize::all();
        $orderdetail = orderdetail::join('shirtcolors','shirtcolors.id_shirtcolor','=','orderdetails.id_shirtcolor')
        ->join('shirtsizes','shirtsizes.id_shirtsize','=','orderdetails.id_shirtprice')
        ->where('id_order', $order[0]->id_order)->get();
        $transport = transport::all();
        return view('Frontend.checkorder4', compact(['order','purchase','screencolor','orderdetail','shirtcolor','shirtsize','transport']));
    }

    public function sample(Request $request){
        $order = order::where('id_order', $request->id)->get();
        $sample = sample::where('id_sample', $order[0]->id_sample)->get();
        $orderdetail = orderdetail::where('id_order', $order[0]->id_order)->get();
        $transport = transport::all();
        return view('Frontend.simple', compact(['order','orderdetail','sample']));
    }

    public function confirmsample(Request $request){
        $order = order::join('samples','samples.id_sample','=','orders.id_sample')->where('samples.id_sample', $request->id)->update([
            'id_status' => 7,
             
        ]);
        $sample = sample::where('id_sample', $request->id)->update([
            'sample_status' => $request->fix,
            'sample_detail' => $request->message,
        ]);
        return redirect()->route('shopping');
    }

    public function purchase(Request $request){
         $purchase = order::where('id_order', $request->id)->get();
        if($purchase[0]->id_status==4||$purchase[0]->id_status==9||$purchase[0]->id_status==11){
            $purchase = order::join('payments','payments.id_order','orders.id_order')->where('orders.id_order', $request->id)
        ->orderBy('payments.id_payment','desc')->get();
        }
        return view('Frontend.purchase_1', compact(['purchase']));
    }

    public function payment(Request $request){
        $item = explode(",", $request->mf);
        $imageName="";
        $image = $request->bill->getClientOriginalName();
             $generate = hexdec(uniqid());
             $imageName = time() . '.' . $request->bill->extension();
             $request->bill->move(public_path('assets/images/'), $imageName);
              $order = order::where('id_order',$request->id)->get();
              if($order[0]->id_status <3){
              order::where('id_order',$request->id)->update([
                'id_status' => 3,
              ]);
            }else if($order[0]->id_status ==4){
                order::where('id_order',$request->id)->update([
                    'id_status' => 5,
                  ]);
            }else if($order[0]->id_status ==9){
                order::where('id_order',$request->id)->update([
                    'id_status' => 10,
                  ]);
            }else if($order[0]->id_status ==11){
                order::where('id_order',$request->id)->update([
                    'id_status' => 12,
                  ]);
            }
        $payment = payment::create([
            'id_order' => $request->id,
            'id_statuspayment' => $item[0],
            'payment_slip' => $imageName,
            'payment_4num' => $request->num,
            'payment_arrears' => $request->price,
            'payment_paid' => $item[1],
            'payment_date' => $request->date,
        ]);
        return redirect()->route('shopping');
    }

    public function storedetail(Request $request){  
        $t=time();
        $lastUsedSerialNumber = order::query()->orderByDesc('order_id')->first();
        $order = order::create([
            'id_user' => session('id_user'),
            'picture' => $request->imageName,
            'delivery_price' => $request->wpu[0],
            'id_color' => $request->screencolor[0],
            'id_post' => $request->transport,
            'numshirtcolor' => $request->count,
            'order_type' => $request->number,
            'blockprice' => $request->blockprice,
            'status_payment' => 0,
            'order_orderdate' => date("Y-m-d",$t),
        ]);
        if($lastUsedSerialNumber==null){
            order::where('id_order', $order->id)->update([
                'order_id' => 'BTS'.date("ymd").'001',
            ]);
        }else{
            $numbers = preg_replace('/[^0-9]/', '', $lastUsedSerialNumber->order_id);
            $date = substr($numbers, 0, -3);
            $threenumber = substr($numbers,-3);
            if ($date == date('ymd')) {           
                $threenumber = str_pad(++$threenumber, 3, '0', STR_PAD_LEFT);       
              }else{
                $date = date('ymd');
                $threenumber = '001'; 
              }
              order::where('id_order', $order->id)->update([
                'order_id' => 'BTS'.$date.$threenumber,
            ]);     
        }
        if($request->number==1){
        for($i=0;$i<count($request->screen_color1);$i++){
        $model = orderdetail::create([
            'id_shirtprice' => $request->screen_color1[$i][0],
            'id_order' => $order->id, 
            'id_shirtcolor' => $request->screen_color1[$i][2],
            'orderdetail_upper' => $request->w[$i%count($request->w)],
            'orderdetail_lower' => $request->s[$i%count($request->s)],
            'orderdetail_left' => $request->a[$i%count($request->a)],
            'orderdetail_right' => $request->d[$i%count($request->d)],
            'orderdetail_wide' => $request->wide[0],
            'orderdetail_long' => $request->long[0],
            'orderdetail_price' => $request->screen_color1[$i][3]/$request->screen_color1[$i][1],
            'quantity' => $request->screen_color1[$i][1],
        ]);
        order::where('id_order', $order->id)->update([
            'order_price' => $request->sum,
            'id_status' => '2',
        ]);
    }
}else{
    for($i=0;$i<count($request->screen_color1);$i++){
        $model = orderdetail::create([
            'id_shirtprice' => $request->screen_color1[$i][0],
            'id_order' => $order->id,
            'id_shirtcolor' => $request->screen_color1[$i][2],
            'orderdetail_upper' => $request->w[$i%count($request->w)],
            'orderdetail_lower' => $request->s[$i%count($request->s)],
            'orderdetail_left' => $request->a[$i%count($request->a)],
            'orderdetail_right' => $request->d[$i%count($request->d)],
            'orderdetail_wide' => $request->wide[0],
            'orderdetail_long' => $request->long[0],
            'quantity' => $request->screen_color1[$i][1],
        ]);
order::where('id_order', $order->id)->update([
            'id_status' => '1',
        ]);
}
}
        return redirect()->route('shopping');
    }
}
