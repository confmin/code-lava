<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    
    {
        $title = "Đăng Nhập";
        return view("front.login",compact('title'));
    }
    public function store(Request $request)
    {       
        $request->validate([]);
        $remember = $request->has('remember') ? true : false ;
      if(Auth::attempt(['email' => $request->email, 'password' => $request->pass],$remember))
      {
       return redirect()->route('trangchu');
      }
      else
      {
          $request->session()->flash('error', 'Tài Khoản hoặc Mật Khẩu không chính xác !');
        return redirect()->back();
      }
    }
}