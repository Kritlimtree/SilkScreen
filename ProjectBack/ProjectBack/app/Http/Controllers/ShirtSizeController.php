<?php

namespace App\Http\Controllers;
use App\Models\shirtsize;
use Illuminate\Http\Request;

class ShirtSizeController extends Controller
{
    public function index(){
        
        $data = shirtsize::all();
        return view('Backend.managementSize', compact(['data']));
    }

    public function store(Request $request){
        $model = shirtsize::create([
            'shirtsize_size' => $request->shirtsize_size,
            'shirtsize_chest' => $request->shirtsize_chest,
            'shirtsize_long' => $request->shirtsize_long,
            'shirtsize_price' => $request->shirtsize_price,
        ]);
        return redirect()->route('managementSize');
    }

    public function edit($id)
    {
        
        $shirtsize = shirtsize::where('id_shirtsize', $id)->get();
        return response()->json([
            'status'=>200,
            'shirtsize'=>$shirtsize,
        ]);
    }

    public function update(Request $request)
    {
        shirtsize::where('id_shirtsize', $request->id_shirtsize)->update([
            'shirtsize_size' => $request->input('shirtsize_size'),
            'shirtsize_chest' => $request->input('shirtsize_chest'),
            'shirtsize_long' => $request->input('shirtsize_long'),
            'shirtsize_price' => $request->input('shirtsize_price'),
        ]);
        return redirect()->route('managementSize');
    }


    public function destroy(Request $id)
    {
       
        shirtsize::where('id_shirtsize', $id->id_shirtsize)->delete();
        return redirect()->route('managementSize');
    }
}
