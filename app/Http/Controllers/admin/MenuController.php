<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuServices ;
use App\Models\admin\Menu;


class MenuController extends Controller
{
    protected $menuservices ;
    public function __construct(MenuServices $menuservices)
    {
        $this->menuservices = $menuservices ;
    }
    public function create()
    {
    return view('admin.pages.add-menu',[
        'menus'=>$this->menuservices->getParent()
    ]);
    }
    public function store(Request $request)

    {
          $result =  $this->menuservices->create($request);
          return redirect()->back();
    }
    public  function  index()
    {
        $menus = $this->menuservices->getlist();
        return view('admin.pages.list-menu',compact('menus'));
    }

}
