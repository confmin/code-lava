<?php

namespace App\Http\Services\Menu ;

use App\Models\admin\Menu;
use MongoDB\Driver\Session;
use PHPUnit\Exception;

class MenuServices
{

    public function create($request)
    {
        try {
            $menu = new Menu;
            $menu->name = $request->title;
            $menu->parent_id = $request->parent;
            $menu->description = $request->description;
            $menu->content = $request->content;
            $menu->active = $request->active;
            $menu->save();
            $request->session()->flash('suscess','Thêm thành công');
            return redirect()->back();
        }
        catch (Exception $e) {
            $request->session()->flash('error', $e->getMessage());
        }
    }

    public function getlist()
    {
        $result = Menu::orderby('id')->paginate(10);
        return $result ;
    }
    public function getParent()
    {
        return Menu::where('parent_id',0)->get();
    }
    public function delete($request)
    {
        return Menu::find($request->id)->delete();
    }

}

?>
