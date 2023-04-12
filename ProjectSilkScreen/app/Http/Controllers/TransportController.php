<?php

namespace App\Http\Controllers;
use App\Models\transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function index(){
        
        $data = transport::all();
        return view('Backend.managementTransport', compact(['data']));
    }
    
    public function store(Request $request){
        $request->validate([
            'transport_name' => 'required',
        ],[
            'transport_name.required' => 'กรุณากรอกบริษัทขนส่ง',
        ]);
        $model = transport::create([
            'transport_name' => $request->transport_name,
        ]);
        return redirect()->route('managementTransport');
    }
}
