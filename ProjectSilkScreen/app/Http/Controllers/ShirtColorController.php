<?php

namespace App\Http\Controllers;
use App\Models\shirtcolor;
use Illuminate\Http\Request;

class ShirtColorController extends Controller
{
    public function index(){
        $data = shirtcolor::all();
        return view('Backend.managementColorTshirt', compact(['data']));
    }

    public function store(Request $request){
        $request->validate([
            'shirtcolor_name' => 'required',
            'shirtcolor_picture' => 'required',
        ],[
            'shirtcolor_name.required' => 'กรุณากรอกสีเสื้อ',
            'shirtcolor_picture.required' => 'กรุณาใส่รูปสีเสื้อ',
        ]);
        $imageName="";
        if (!empty($request->shirtcolor_picture)) {
            $generate = hexdec(uniqid());
            $imageName = time() . '.' . $request->shirtcolor_picture->extension();
            $request->shirtcolor_picture->move(public_path('assets/images/'), $imageName);
        }
        $model = shirtcolor::create([
            'shirtcolor_name' => $request->shirtcolor_name,
            'shirtcolor_picture' => $imageName,
            
        ]);
        return redirect()->route('managementColorTshirt');
    }

    public function edit($id)
    {
        
        $shirtcolor = shirtcolor::where('id_shirtcolor', $id)->get();
        return response()->json([
            'status'=>200,
            'shirtcolor'=>$shirtcolor,
        ]);
    }

    public function update(Request $request)
    {
        if (isset($request->id_shirtcolor) && !empty($request->id_shirtcolor)) {
            $model = shirtcolor::where('id_shirtcolor', $request->id_shirtcolor)->first();
            if(!empty($model->shirtcolor_picture)&&file_exists(public_path('assets/images/' . $model->shirtcolor_picture))){
                unlink(public_path('assets/images/' . $model->shirtcolor_picture));
            }
            $imageName = time() . '.' . $request->shirtcolor_picture->extension();
            $request->shirtcolor_picture->move(public_path('assets/images/'), $imageName);
        }
        shirtcolor::where('id_shirtcolor', $request->id_shirtcolor)->update([
            'shirtcolor_name' => $request->input('shirtcolor_name'),
            'shirtcolor_picture' => $imageName,
        ]);
        return redirect()->route('managementColorTshirt');
    }

    public function destroy(Request $id)
    {
        shirtcolor::where('id_shirtcolor', $id->id_shirtcolor)->delete();
        return redirect()->route('managementColorTshirt');
    }
}
