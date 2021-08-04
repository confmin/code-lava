<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller

{
  public function index()
  {
   return view('admin.layout.header');
  }
  public function test()
  {
    $name = 'cong minh ';
    return $name ;
  }
}
