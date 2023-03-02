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
        return view('Frontend.order', compact(['shirtcolor','shirtsize','shirtsize1']));
    }

    public function shopping(){
        
        $order = order::where('id_user', 1)->get();
        foreach($order as $key => $order1){
        $orderdetail = orderdetail::where('id_order', $order1->id_order)->get();
        }
        return view('Frontend.shopping', compact(['order','orderdetail']));
    }
    
    public function buycolor(){
        
        $screencolor = color::all();
        $transport = transport::all();
        return view('Frontend.buy', compact(['screencolor','transport']));
    }

    public function checkorder(Request $request){
        
        $block = block::orderBy('block_wide')->get();
        $screencolor = color::all();
        $transport = transport::all();
        $shirtsize = shirtsize::all();
        $data1 = freight::where('id_transport', $request->transport)->get();
         
        return view('Frontend.checkorder3', compact(['block','screencolor','transport','shirtsize','data1']));
    }

    public function checkorderdetail(Request $request){
         
        $order = order::where('id_order', $request->id)->get();
        $shirtcolor = shirtcolor::all();
        $shirtsize = shirtsize::all();
        $orderdetail = orderdetail::where('id_order', $order[0]->id_order)->get();
        $transport = transport::all();
        return view('Frontend.checkorder4', compact(['order','orderdetail','shirtcolor','shirtsize','transport']));
    }

    public function sample(Request $request){
         
        $order = order::where('id_order', $request->id)->get();
        $sample = sample::where('id_sample', $order[0]->id_sample)->get();
         
        $orderdetail = orderdetail::where('id_order', $order[0]->id_order)->get();
        $transport = transport::all();
        return view('Frontend.simple', compact(['order','orderdetail','sample']));
    }

    public function confirmsample(Request $request){
         
        
        $sample = sample::where('id_sample', $request->id)->update([
            'sample_status' => $request->fix,
            'sample_detail' => $request->message,
        ]);
        return redirect()->route('shopping');
    }

    public function purchase(Request $request){
         
        
        $purchase = order::where('id_order', $request->id)->get();
         
        return view('Frontend.purchase_1', compact(['purchase']));
    }

    public function payment(Request $request){
         
        
        $imageName="";
        
         $image = $request->bill->getClientOriginalName();
         
        
         
          
             $generate = hexdec(uniqid());
             $imageName = time() . '.' . $request->bill->extension();
              
             $request->bill->move(public_path('assets/images/'), $imageName);
              
        $payment = payment::create([
            'id_order' => $request->id,
            'id_statuspayment' => $request->mf,
            'payment_slip' => $imageName,
            'payment_4num' => $request->num,
            'payment_date' => $request->date,
        ]);
         
        return redirect()->route('shopping');
    }

    public function storedetail(Request $request){
         
        $t=time();
        $order = order::create([
            'id_user' => '1',
            'picture' => $request->screenPicture[0],
            'id_shirtcolor' => $request->colorname[0],
            'id_color' => $request->screencolor[0],
            'id_post' => $request->transport,
            'order_id' => 'BTS123',
            'order_type' => $request->number,
            'blockprice' => $request->blockprice,
            'order_orderdate' => date("Y-m-d",$t),
        ]);
         
        if($request->number==1){
        for($i=0;$i<count($request->unitprice);$i++){
        $model = orderdetail::create([
            
             
            'id_shirtprice' => $request->size_id[$i],
            'id_order' => $order->id,
            
             
            'orderdetail_upper' => $request->w[$i],
            'orderdetail_lower' => $request->s[$i],
            'orderdetail_left' => $request->a[$i],
            'orderdetail_right' => $request->d[$i],
            'orderdetail_wide' => $request->wide[$i],
            'orderdetail_long' => $request->long[$i],
            'orderdetail_price' => $request->unitprice[$i],
            'quantity' => $request->quantity[$i],
            'wpu' => $request->wpu[$i],
            
        ]);
        order::where('id_order', $order->id)->update([
            'order_price' => $request->sum,
            'id_status' => '2',
        ]);
    }
}else{
    for($i=0;$i<count($request->unitprice);$i++){
        $model = orderdetail::create([
             
             
            'id_shirtprice' => $request->size_id[$i],
            'id_order' => $order->id,
             
            'orderdetail_upper' => $request->w[$i],
            'orderdetail_lower' => $request->s[$i],
            'orderdetail_left' => $request->a[$i],
            'orderdetail_right' => $request->d[$i],
            'orderdetail_wide' => $request->wide[$i],
            'orderdetail_long' => $request->long[$i],
            'quantity' => $request->quantity[$i],
             
        ]);
order::where('id_order', $order->id)->update([
            'id_status' => '1',
        ]);

}
}
 
        return redirect()->route('shopping');
    }
}
