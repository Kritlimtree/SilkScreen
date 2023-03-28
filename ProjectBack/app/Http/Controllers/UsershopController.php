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

    public function forgotpassword(Request $request)
    {
        
         
        return view('Frontend.emailforgot');
    }


    public function amphures(Request $request)
    {
        $id = $request->get('select');
        $result=array();
        $amphures = amphures::join('provinces','provinces.id','=','amphures.province_id')
        ->where('amphures.province_id',$id)->orderBy('amphures.amphure_name_th')->get(['amphures.amphure_name_th','amphures.id']);
         
        $output='<option value="" selected disabled>เลือกอำเภอ</option>';
        foreach ($amphures as $row){
            $output.='<option value="'.$row->id.'">'.$row->amphure_name_th.'</option>';
        }
        echo $output;
    }

    public function district(Request $request)
    {
        $id = $request->get('select');
        $result=array();
        $district = district::join('amphures','amphures.id','=','districts.amphure_id')
        ->where('districts.amphure_id',$id)->orderBy('districts.district_name_th')->get(['districts.district_name_th','districts.id']);
         
        $output='<option value="" selected disabled>เลือกตำบล</option>';
        foreach ($district as $row){
            $output.='<option value="'.$row->id.'">'.$row->district_name_th.'</option>';
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
         
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required' => 'กรุณากรอก E-mail',
            'email.email' => 'กรุณากรอก E-mail',
            'c.required' => 'กรุณากรอก password',
        ]);
        $model = usershop::where('user_email', $request->email)->first();

         


        if($model != NULL){
            if (Hash::check($request->password, $model->user_password)) {
            
            
                $request->session()->put('user_name', $model['user_name']);
                $request->session()->put('is_admin', $model['is_admin']);
                $request->session()->put('id_user', $model['id_user']);
                return view('Frontend.indexLoginIsTrue');
            } else {
                return redirect()->route('login')->withErrors(["pass"=>"อีเมลล์หรือรหัสผ่านไม่ถูกต้อง"]);
            }   
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
            'email' => 'required|unique:usershops,user_email|email',
            'name' => 'required',
            'fname' => 'required',
            'address' => 'required',
            'province' => 'required',
            'amphures' => 'required',
            'postcode' => 'required',
            'district' => 'required',
            'phone' => 'required|numeric|min:10',
            'pass' => [
                'required',
                'string',
                'min:10',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
                'required_with:passConflim', 
                'same:passConflim', 
            ],
            'passConflim' => 'min:10',
        ],[
            'email.required' => 'กรุณากรอก E-mail',
            'email.unique' => 'E-mail นี้มีการใช้ไปแล้ว',
            'email.email' => 'กรุณากรอก E-mail',
            'name.required' => 'กรุณากรอก ชื่อ',
            'fname.required' => 'กรุณากรอก นามสกุล',
            'address.required' => 'กรุณากรอก ที่อยู่',
            'province.required' => 'กรุณาเลือก ตำบล',
            'amphures.required' => 'กรุณาเลือก อำเภอ',
            'postcode.required' => 'กรุณาเลือก รหัสไปรษณีย์',
            'district.required' => 'กรุณาเลือก จังหวัด',
            'phone.required' => 'กรุณากรอกเบอร์โทร',
            'phone.numeric' => 'เบอร์โทรไม่ถูกต้อง',
            'phone.min' => 'เบอร์โทรไม่ถูกต้อง',
            'pass.required' => 'กรุณากรอกรหัสผ่าน',
            'pass.min' => 'รหัสผ่านต้องมีอย่างน้อย 10 ตัวอักษร',
            'pass.regex' => 'ต้องมีตัวพิมพ์เล็ก ตัวพิมพ์ใหญ่ ตัวเลข ตัวอักษรพิเศษ',
            'pass.regex:/[A-Z]/' => 'รหัสผ่านต้องมีตัวพิมพ์ใหญ่',
            'pass.regex:/[0-9]/' => 'รหัสผ่านต้องมีตตัวเลข',
            'pass.regex:/[@$!%*#?&]/' => 'รหัสผ่านต้องมีตัวอักษรพิเศษ',
            'required_with:passConflim' => 'กรุณายืนยันรหัสผ่าน',
            'same' => 'รหัสผ่านไม่ตรงกัน',
            'passConflim.min:10' => 'รหัสผ่านต้องมีอย่างน้อย 10 ตัวอักษร',
        ]);
        

        usershop::create([
            'id_tumbon' => $request->district,
            'user_name' => $request->name,
            'user_fname' => $request->fname,
            'user_phone' => $request->phone,
            'user_email' => $request->email,
            'user_password' => $password,
            'user_address' => $request->address,
            'is_admin' => '0',
             
        ]);
        return redirect()->route('login');
    }

    public function edit_user(Request $request)
    {
        $province = province::all();
        $user = usershop::join('districts','districts.id','=','usershops.id_tumbon')
        ->join('amphures','amphures.id','=','districts.amphure_id')
        ->join('provinces','provinces.id','=','amphures.province_id')
        ->where('usershops.id_user', session('id_user'))
        ->get();
        
        return view('Frontend.edit_user', compact(['province','user']));
    }

    public function edit_user_store(Request $request)
    {
         
        $password = Hash::make($request->pass);
        $credentials = $request->validate([
            'email' => 'required|unique:usershops,user_email|email',
            'name' => 'required',
            'fname' => 'required',
            'address' => 'required',
            'province' => 'required',
            'amphures' => 'required',
            'postcode' => 'required',
            'district' => 'required',
            'phone' => 'required|numeric|min:10',
            'pass' => [
                'required',
                'string',
                'min:10',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
                'required_with:passConflim', 
                'same:passConflim', 
            ],
            'passConflim' => 'min:10',
        ],[
            'email.required' => 'กรุณากรอก E-mail',
            'email.unique' => 'E-mail นี้มีการใช้ไปแล้ว',
            'email.email' => 'กรุณากรอก E-mail',
            'name.required' => 'กรุณากรอก ชื่อ',
            'fname.required' => 'กรุณากรอก นามสกุล',
            'address.required' => 'กรุณากรอก ที่อยู่',
            'province.required' => 'กรุณาเลือก ตำบล',
            'amphures.required' => 'กรุณาเลือก อำเภอ',
            'postcode.required' => 'กรุณาเลือก รหัสไปรษณีย์',
            'district.required' => 'กรุณาเลือก จังหวัด',
            'phone.required' => 'กรุณากรอกเบอร์โทร',
            'phone.numeric' => 'เบอร์โทรไม่ถูกต้อง',
            'phone.min' => 'เบอร์โทรไม่ถูกต้อง',
            'pass.required' => 'กรุณากรอกรหัสผ่าน',
            'pass.min' => 'รหัสผ่านต้องมีอย่างน้อย 10 ตัวอักษร',
            'pass.regex' => 'ต้องมีตัวพิมพ์เล็ก ตัวพิมพ์ใหญ่ ตัวเลข ตัวอักษรพิเศษ',
            'pass.regex:/[A-Z]/' => 'รหัสผ่านต้องมีตัวพิมพ์ใหญ่',
            'pass.regex:/[0-9]/' => 'รหัสผ่านต้องมีตตัวเลข',
            'pass.regex:/[@$!%*#?&]/' => 'รหัสผ่านต้องมีตัวอักษรพิเศษ',
            'required_with:passConflim' => 'กรุณายืนยันรหัสผ่าน',
            'same' => 'รหัสผ่านไม่ตรงกัน',
            'passConflim.min:10' => 'รหัสผ่านต้องมีอย่างน้อย 10 ตัวอักษร',
        ]);
        

        usershop::where('usershops.id_user', session('id_user'))->update([
            'id_tumbon' => $request->district,
            'user_name' => $request->name,
            'user_fname' => $request->fname,
            'user_phone' => $request->phone,
            'user_email' => $request->email,
            'user_password' => $password,
            'user_address' => $request->address,
            'is_admin' => '0',
             
        ]);
        return redirect()->route('indexLoginIsTrue');
    }
}
