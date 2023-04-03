<?php

namespace App\Http\Controllers;
use App\Models\freight;
use App\Models\transport;
use Illuminate\Http\Request;

class FreightController extends Controller
{
    public function index(){
        $transport_category = '1';
        $data2 = transport::all();
        $data1 = freight::where('id_transport', '1')->get();
        return view('Backend.managementTransport', compact(['data1','data2','transport_category']));
    }

    public function store(Request $request){
        $model = freight::create([

            'id_transport' => $request->id_transport,
            'min' => $request->min,
            'max' => $request->max,
            'price' => $request->price,
            
        ]);
        return redirect()->route('managementTransport');
    }

    public function edit($id)
    {
        
        $freight = freight::where('id_freight', $id)->get();
        return response()->json([
            'status'=>200,
            'freight'=>$freight,
        ]);
    }

    public function search(Request $id)
    {
        $transport_category = $id->transportation_category;
        $data2 = transport::all();
        $data1 = freight::where('id_transport', $id->transportation_category)->get();
        return view('Backend.managementTransport', compact(['data1','data2','transport_category']));
    }

    public function update(Request $request)
    {
        freight::where('id_freight', $request->id_freight)->update([
            'id_transport' => $request->input('id_transport'),
            'min' => $request->input('min'),
            'max' => $request->input('max'),
            'price' => $request->input('price'),
        ]);
        return redirect()->route('managementTransport');
    }


    public function destroy(Request $id)
    {
       
        freight::where('id_freight', $id->id_freight)->delete();
        return redirect()->route('managementTransport');
    }

    public function select($id)
    {
        $freight = freight::where('id_transport', $id)->get();
        
        return response()->json([
            'status'=>200,
            'freight'=>$freight,
        ]);
    }

    public function transport(Request $request)
    {
        $id = $request->get('select');
        $result=array();
        $data1 = transport::join('freights','freights.id_transport','=','transports.id_transport')
        ->where('transports.id_transport',$id)->orderBy('transports.id_transport')
        ->get(['transports.id_transport','transports.transport_name','transports.min','transports.max','transports.price']);
       
        $output='<thead>
        <tr>
            <td>น้ำหนักอย่างน้อย(กิโลกรัม)</td>
            <td>น้ำหนักไม่เกิน(กิโลกรัม)</td>
            <td>ราคา(บาท)</td>
            <td></td>
            <td></td>
        </tr>
    </thead>
    <tbody>';
        foreach ($data1 as $row){
             
            $output.='<tr>
            <td>'.$row->min.'</td>
            <td>'.$row->max.'</td>
            <td>'.number_format($row->price,2).'</td>
            <td><button type="button" value="{{'.$row->id_freight.'}}" class="secondary editbtn" data-bs-toggle="modal" data-bs-target="#exampleModal">แก้ไข</button></td>
            <td><button type="button" value="{{'.$row->id_freight.'}}" class="button primary deletebtn" data-bs-toggle="modal" data-bs-target="#exampleModal">ลบ</button></td>
        </tr>
        </tbody>';
        }
        echo $output;
    }

}
