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
         
        $model = transport::create([

            'transport_name' => $request->transport_name,
            
        ]);
        return redirect()->route('managementTransport');
    }
}
