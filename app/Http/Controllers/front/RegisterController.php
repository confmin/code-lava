<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class RegisterController extends Controller
{
    public function index()
    {
        
        return view('front.register');
    }
    public function store(Request $request)
    {
           $request->validate([
           
          'fullname'=>'required',
          'pass' =>'required|min:6',
          'email' => 'required|email:filter,dns'
        ],
            [
                'fullname.required' => "Tên không thể để trống",
                'pass' => 'Mật khẩu phải lớn hơn 6 ký tự'
                
            ]);
        $user = new User ;
        $user->name = $request->fullname ;
        $email=$user->where('email',$request->email)->count();
       if ($email>0) {
          $request->session()->flash('error', 'Địa chỉ email này đã tồn tại ');
          return redirect()->back();
       }
        $user->email = $request->email;
        $pass = bcrypt($request->pass);
        $user->password =$pass;
        $user->phone=$request->phone ;
        $user->gender= $request->gender;
        try {
            $user->birth =Carbon::parse($request->birth);
        } catch (\Exception $e) {
            $e->getMessage();
            $request->session()->flash('error', 'Ngày sinh không hợp lệ');
            return redirect()->back();
        }
       
        $user->save();
        $request->session()->flash('success', 'Đăng ký tài khoản thành công');
        return redirect()->back();
    }
}
