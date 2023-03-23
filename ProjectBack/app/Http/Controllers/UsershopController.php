<?php

namespace App\Http\Controllers;
use App\Models\usershop;
use App\Models\province;
use App\Models\amphures;
use App\Models\district;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UsershopController extends Controller
{
    public function register(Request $request)
    {
        $province = province::all();
         
        return view('Frontend.register', compact(['province']));
    }

    public function amphures(Request $request)
    {
        $id = $request->get('select');
        $result=array();
        $amphures = amphures::join('provinces','provinces.id','=','amphures.province_id')
        ->where('amphures.province_id',$id)->orderBy('amphures.name_th')->get(['amphures.name_th','amphures.id']);
         
        $output='<option value="" selected disabled>เลือกอำเภอ</option>';
        foreach ($amphures as $row){
            $output.='<option value="'.$row->id.'">'.$row->name_th.'</option>';
        }
        echo $output;
    }

    public function district(Request $request)
    {
        $id = $request->get('select');
        $result=array();
        $district = district::join('amphures','amphures.id','=','districts.amphure_id')
        ->where('districts.amphure_id',$id)->orderBy('districts.name_th')->get(['districts.name_th','districts.id']);
         
        $output='<option value="" selected disabled>เลือกตำบล</option>';
        foreach ($district as $row){
            $output.='<option value="'.$row->id.'">'.$row->name_th.'</option>';
        }
        echo $output;
    }

    public function postcode(Request $request)
    {
        $id = $request->get('select');
        $result=array();
        $district = district::where('id',$id)->get(['zip_code','id']);
         
        $output='<option value="" selected disabled>เลือกรหัสไปรษณีย์</option>';
        foreach ($district as $row){
            $output.='<option value="'.$row->id.'">'.$row->zip_code.'</option>';
        }
        echo $output;
    }

    public function login(Request $request){
        
         
        $model = usershop::where('user_email', $request->email)->first();

         



        if (Hash::check($request->password, $model->user_password)) {
            $data = $request->input();
            
            $request->session()->put('user_name', $model['user_name']);
            $request->session()->put('is_admin', $model['is_admin']);
            return view('Frontend.indexLoginIsTrue');
        } else {

            return redirect()->route('login');
        }
    }

    public function logout(Request $request)
    {
         
        $request->session()->forget('user_name');
        $request->session()->flush();

        // print_r(session('user'));
        return view('Frontend.index');
    }

    public function apply(Request $request)
    {
       
        $password = Hash::make($request->pass);
        $credentials = $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'lname' => 'required',
            'address' => 'required',
            'district' => 'required',
            'phone' => 'required',
            'pass' => 'min:6|required_with:passConflim|same:passConflim',
            'passConflim' => 'min:6',
        ]);
        

        usershop::create([
            'id_tumbon' => $request->district,
            'user_name' => $request->name,
            'user_fname' => $request->lname,
            'user_phone' => $request->phone,
            'user_email' => $request->email,
            'user_password' => $password,
            'user_address' => $request->address,
            'is_admin' => '0',
             
        ]);
        return redirect()->route('login');
    }
     
}
