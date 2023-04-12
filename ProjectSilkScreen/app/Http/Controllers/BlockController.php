<?php

namespace App\Http\Controllers;
use App\Models\block;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    public function index(){
        $data = block::all();
        return view('Backend.managementBlock', compact(['data']));
    }

    public function store(Request $request){
        $request->validate([
            'block_name' => 'required',
            'block_wide' => 'required',
            'block_long' => 'required',
            'block_price' => 'required',
        ],[
            'block_name.required' => 'กรุณากรอกชื่อบล็อค',
            'block_wide.required' => 'กรุณากรอกความกว้างบล็อค',
            'block_long.required' => 'กรุณากรอกความยาวบล็อค',
            'block_price.required' => 'กรุณากรอกราคาบล็อค',
        ]);
        $model = block::create([
            'block_name' => $request->block_name,
            'block_wide' => $request->block_wide,
            'block_long' => $request->block_long,
            'block_price' => $request->block_price,
        ]);
        return redirect()->route('managementBlock');
    }

    public function edit($id)
    {     
        $block = block::where('id_block', $id)->get();
        return response()->json([
            'status'=>200,
            'block'=>$block,
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'block_name' => 'required',
            'block_wide' => 'required',
            'block_long' => 'required',
            'block_price' => 'required',
        ],[
            'block_name.required' => 'กรุณากรอกชื่อบล็อค',
            'block_wide.required' => 'กรุณากรอกความกว้างบล็อค',
            'block_long.required' => 'กรุณากรอกความยาวบล็อค',
            'block_price.required' => 'กรุณากรอกราคาบล็อค',
        ]);
        block::where('id_block', $request->id_block)->update([
            'block_name' => $request->input('block_name'),
            'block_wide' => $request->input('block_wide'),
            'block_long' => $request->input('block_long'),
            'block_price' => $request->input('block_price'),
        ]);
        return redirect()->route('managementBlock');
    }


    public function destroy(Request $id)
    { 
        block::where('id_block', $id->id_block)->delete();
        return redirect()->route('managementBlock');
    }
}
