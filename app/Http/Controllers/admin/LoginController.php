<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.pages.login');
    }
    public function store(Request $request)
    {
        if (Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->pass,

        ]))
        {
            return redirect()->route('admin');
        }
        else
        {
            $request->session()->flash('error','Tài khoản hoặc mật khẩu không chính xác !');
            return redirect()->back();
        }
    }
}
