<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuServices ;

class MenuController extends Controller
{
    protected $menuservices ;
    public function __construct(MenuServices $menuservices)
    {
        $this->menuservices = $menuservices ;
    }
    public function create()
    {
    return view('admin.pages.add-menu');
    }
    public function store(Request $request)

    {
          $result =  $this->menuservices->create($request);
    }
    public  function  index()
    {
        return view('admin.pages.list-menu');
    }

}
