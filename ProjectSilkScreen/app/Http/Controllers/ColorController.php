<?php

namespace App\Http\Controllers;
use App\Models\color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index(){   
        $data = color::all();
        return view('Backend.managementColor', compact(['data']));
    }

    public function store(Request $request){
        $request->validate([
            'color_name' => 'required',
            'color_code' => 'required',
        ],[
            'color_name.required' => 'กรุณากรอกชื่อสี',
            'color_code.required' => 'กรุณาใส่รูปสี',
        ]);
        $imageName="";
        if (!empty($request->color_code)) {
            $generate = hexdec(uniqid());
            $imageName = time() . '.' . $request->color_code->extension(); 
            $request->color_code->move(public_path('assets/images/'), $imageName);
        }
        $model = color::create([
            'color_name' => $request->color_name,
            'color_code' => $imageName,
        ]);
        return redirect()->route('managementColor');
    }

    public function edit($id)
    {
        $color = color::where('id_color', $id)->get();
        return response()->json([
            'status'=>200,
            'color'=>$color,
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'color_name' => 'required',
            'color_code' => 'required',
        ],[
            'color_name.required' => 'กรุณากรอกชื่อสี',
            'color_code.required' => 'กรุณาใส่รูป',
        ]);
        $imageName="";
        if (!empty($request->color_code)) {
            $generate = hexdec(uniqid());
            $imageName = time() . '.' . $request->color_code->extension();
            $request->color_code->move(public_path('assets/images/'), $imageName);
        }
        color::where('id_color', $request->id_color)->update([
            'color_name' => $request->input('color_name'),
            'color_code' => $imageName,
        ]);
        return redirect()->route('managementColor');
    }


    public function destroy(Request $id)
    {
        color::where('id_color', $id->id_color)->delete();
        return redirect()->route('managementColor');
    }
}
