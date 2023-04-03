<?php

namespace App\Http\Controllers;
use App\Models\shirtsize;
use App\Models\shirtcolor;
use App\Models\orderdetail;
use App\Models\color;
use App\Models\order;
use App\Models\transport;
use App\Models\block;
use App\Models\freight;
use App\Models\status;
use App\Models\statuspayment;
use App\Models\sample;
use App\Models\payment;
use App\Models\usershop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class OrderAdminController extends Controller
{ 
    public function index(){
        
        $order = order::join('usershops','orders.id_user','=','usershops.id_user')
        ->join('statuses','orders.id_status','=','statuses.id_status')
         
        ->get(['id_order','user_name','user_fname','order_orderdate','order_id','status_name']);
         
        return view('Backend.order', compact(['order']));
    }

     

    public function OrderAdminController(){
        
        $order = order::join('usershops','orders.id_user','=','usershops.id_user')
        ->join('statuses','orders.id_status','=','statuses.id_status')
         
        ->get(['id_order','user_name','user_fname','order_orderdate','order_id','status_name']);
         
        return view('Backend.order', compact(['order']));
    }

    public function indexLoginIsTrue(){
        
        $order1 = order::join('usershops','orders.id_user','=','usershops.id_user')
        ->join('statuses','orders.id_status','=','statuses.id_status')
        ->where('orders.id_status','<',13)
        ->get();
         
        $order2 = order::join('usershops','orders.id_user','=','usershops.id_user')
        ->join('statuses','orders.id_status','=','statuses.id_status')
        ->where('orders.id_status','<',2)
        ->get();
        $sample = sample::join('orders','orders.id_sample','=','samples.id_sample')
        ->where('samples.sample_status',2)->get();
         
        return view('Backend.indexLoginIsTrue', compact(['order1','order2','sample']));
    }

    public function user(){
        
        $user = usershop::all();
         
        return view('Backend.checkorder', compact(['user']));
    }

    public function user_show(Request $request){
         
        $user = usershop::join('districts','districts.id','=','usershops.id_tumbon')
        ->join('amphures','amphures.id','=','districts.amphure_id')
        ->join('provinces','provinces.id','=','amphures.province_id')->where('usershops.id_user',$request->id_user)->get();
         
        return view('Backend.userdetail', compact(['user']));
    }

    public function purchase(){
        
        $payment = payment::join('orders','orders.id_order','=','payments.id_order')
        ->join('statuspayments','statuspayments.id_statuspayment','=','payments.id_statuspayment')
        ->get();
         
        return view('Backend.purchase', compact(['payment']));
    }

    public function detailpurchase(Request $request){
       
        $payment = payment::join('orders','orders.id_order','=','payments.id_order')
        ->join('statuspayments','statuspayments.id_statuspayment','=','payments.id_statuspayment')
        ->join('usershops','usershops.id_user','=','orders.id_user')
        ->join('districts','districts.id','=','usershops.id_tumbon')
        ->join('amphures','amphures.id','=','districts.amphure_id')
        ->join('provinces','provinces.id','=','amphures.province_id')
        ->where('payments.id_order',$request->id)->orderBy('payments.created_at')->get();
        
        return view('Backend.detailPurchase', compact(['payment']));
    }

    public function detailpurchase_store(Request $request){
         
        $payment = payment::where('id_payment',$request->id)
        ->join('orders','orders.id_order','payments.id_order')
        ->get();
        
        if($request->st==1){
            if($request->id_status==1||$request->id_status==2||$request->id_status==5){
                payment::where('id_payment',$request->id)
        ->join('orders','orders.id_order','payments.id_order')->update([
                    'orders.id_status' => '4',
                ]);
            }else if($request->id_status==3||$request->id_status==5){
                payment::where('id_payment',$request->id)
        ->join('orders','orders.id_order','payments.id_order')->update([
                    'orders.id_status' => '10',
                ]);
            }
            if($payment[0]->payment_arrears-$request->price <= 0){
                $price = 0;
            }else{
                $price = $payment[0]->payment_arrears-$request->price;
            }
        }else{
            if($request->id_status==1||$request->id_status==2||$request->id_status==4){
                payment::where('id_payment',$request->id)
        ->join('orders','orders.id_order','payments.id_order')->update([
                    'orders.id_status' => '6',
                ]);
            }else if($request->id_status==3||$request->id_status==5){
                payment::where('id_payment',$request->id)
        ->join('orders','orders.id_order','payments.id_order')->update([
                    'orders.id_status' => '12',
                    'payments.id_statuspayment' => '6',
                ]);
            }
        if($payment[0]->payment_arrears-$payment[0]->payment_paid <= 0){
            
            $price = 0;
        }else{
            $price = $payment[0]->payment_arrears-$payment[0]->payment_paid;
        }
        }
         
        payment::where('id_payment',$request->id)->update([
            'payment_arrears' => $price, 
            'payment_paid' => $request->price, 
        ]);
        
         
        return redirect(route('purchaseback'));
    }

    public function payment(){
        
        $order = order::join('usershops','orders.id_user','=','usershops.id_user')
        ->join('statuses','orders.id_status','=','statuses.id_status')
        ->join('payments','payments.id_order','=','orders.id_order')
        ->get();
        
        return view('Backend.purchase', compact(['order']));
    }

    public function detail(Request $request){
        $order1 = order::where('id_order',$request->id)->get();
         
         if($order1[0]->id_sample != ''){
        $order = order::
        join('usershops','orders.id_user','=','usershops.id_user')
        ->join('statuses','orders.id_status','=','statuses.id_status')
        ->join('orderdetails','orders.id_order','=','orderdetails.id_order')
        ->join('transports','transports.id_tramsport','=','orders.id_post')
        ->join('shirtcolors','orderdetails.id_shirtcolor','=','shirtcolors.id_shirtcolor')
        ->join('shirtsizes','orderdetails.id_shirtprice','=','shirtsizes.id_shirtsize')
        ->join('samples','orders.id_sample','=','samples.id_sample')

        ->join('districts','districts.id','=','usershops.id_tumbon')
        ->join('amphures','amphures.id','=','districts.amphure_id')
        ->join('provinces','provinces.id','=','amphures.province_id')

        ->where('orders.id_order',$request->id)->orderBy('orderdetails.id_order','ASC')->get();
         }else{
            $order = order::
        join('usershops','orders.id_user','=','usershops.id_user')
        ->join('statuses','orders.id_status','=','statuses.id_status')
        ->join('orderdetails','orders.id_order','=','orderdetails.id_order')
        ->join('transports','transports.id_tramsport','=','orders.id_post')
        ->join('shirtcolors','orderdetails.id_shirtcolor','=','shirtcolors.id_shirtcolor')
        ->join('shirtsizes','orderdetails.id_shirtprice','=','shirtsizes.id_shirtsize')
        ->join('districts','districts.id','=','usershops.id_tumbon')
        ->join('amphures','amphures.id','=','districts.amphure_id')
        ->join('provinces','provinces.id','=','amphures.province_id')
        ->where('orders.id_order',$request->id)->orderBy('orderdetails.id_order','ASC')->get();
         }
        $status = status::all();
        $transport = transport::all();
         
        return view('Backend.test2-2', compact(['order','status','transport']));
    }

    public function edit(Request $request){
        
        if($request->sample != null){
        $imageName="";
         
         $image = $request->sample->getClientOriginalName();
         
        
         
          
             $generate = hexdec(uniqid());
             $imageName = time() . '.' . $request->sample->extension();
              
             $request->sample->move(public_path('assets/images/'), $imageName);
          
        }
        $order1 = orderdetail::where('id_order',$request->id)->orderBy('id_orderdetail','ASC')->get();
        $order = order::join('usershops','orders.id_user','=','usershops.id_user')
        ->join('statuses','orders.id_status','=','statuses.id_status')
        ->get(['id_order','user_name','user_fname','order_orderdate','order_id','status_name']);
        $i=0;
        $sum=0;
        
        

        if($request->type==2){
            if($request->appraise!=''){
        foreach($order1 as $key => $orders){
             
            $od = orderdetail::where('id_orderdetail',$request->idorder[$i])->get();
           $c=0;
            foreach($request->shirt as $value ){
                
                if($od[0]->id_shirtprice==$request->shirt[$c]){
                    orderdetail::where('id_orderdetail',$request->idorder[$i])->update([
                        'orderdetail_price' => $request->appraise[$c]*$od[0]->quantity,
                    ]);
                    $sum=$sum+($request->appraise[$c]*$orders->quantity);
                }
                
                $c++;

            }
            
            $i++;
        }
    
        order::where('id_order',$request->id)->update([
            'order_price' => $sum+$request->blockprice+$request->delivery,
        ]);
    }
    }
     
    if($request->sample != null){
        $sample = sample::create([
            'id_order' => $request->id,
            'sample_picture' => $imageName,
        ]);
        order::where('id_order',$request->id)->update([
            'id_sample' => $sample->id,
        ]);
    }
         order::where('id_order',$request->id)->update([
            'postcode' => $request->serial,
            'id_status' => $request->option,
             
        ]);
        if($request->option==14){
            order::where('id_order',$request->id)->update([
                'order_deliverydate' => date('Ymd'),
                'id_status' => $request->option,
                 
            ]);
        }
        if($request->tp != null){
            order::where('id_order',$request->id)->update([
 
                'id_post' => $request->tp,
            ]);
        }
        return redirect()->route('orderadmin');
    }
}
