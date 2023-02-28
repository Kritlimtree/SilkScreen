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

    public function storedetail(Request $request){
         
        $t=time();
        $order = order::create([
            'id_user' => '1',
             
            'id_post' => $request->transport,
            'order_id' => 'BTS123',
            'order_type' => $request->number,
            
            'order_orderdate' => date("Y-m-d",$t),
        ]);
         
        if($request->number==1){
        for($i=0;$i<count($request->unitprice);$i++){
        $model = orderdetail::create([
            'id_shirtcolor' => $request->colorname[$i],
             
            'id_shirtprice' => $request->size_id[$i],
            'id_order' => $order->id,
            'orderdetail_picture' => $request->screenPicture[$i],
            'orderdetail_number' => $request->quantity[$i],
            'orderdetail_upper' => $request->w[$i],
            'orderdetail_lower' => $request->s[$i],
            'orderdetail_left' => $request->a[$i],
            'orderdetail_right' => $request->d[$i],
            'orderdetail_wide' => $request->wide[$i],
            'orderdetail_long' => $request->long[$i],
            'orderdetail_price' => $request->price[$i],
            'quantity' => $request->quantity[$i],
            'id_color' => $request->screencolor[0],
            
        ]);
        order::where('id_order', $order->id)->update([
            'order_price' => $request->sum,
            'id_status' => '2',
        ]);
    }
}else{
    for($i=0;$i<count($request->unitprice);$i++){
        $model = orderdetail::create([
            'id_shirtcolor' => $request->colorname[$i],
             
            'id_shirtprice' => $request->size_id[$i],
            'id_order' => $order->id,
            'orderdetail_picture' => $request->screenPicture[$i],
            'orderdetail_number' => $request->quantity[$i],
            'orderdetail_upper' => $request->w[$i],
            'orderdetail_lower' => $request->s[$i],
            'orderdetail_left' => $request->a[$i],
            'orderdetail_right' => $request->d[$i],
            'orderdetail_wide' => $request->wide[$i],
            'orderdetail_long' => $request->long[$i],
            'quantity' => $request->quantity[$i],
            'id_color' => $request->screencolor[0],
        ]);
order::where('id_order', $order->id)->update([
            'id_status' => '1',
        ]);

}
}
        return view('Frontend.shopping');
    }
}
