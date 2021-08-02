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
    return 'xin caho';
  }
  public function test()
  {
    $name = 'cong minh ';
    return $name ;
  }
}
