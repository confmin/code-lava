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
        }
        catch (Exception $e)
        {
            $request->session()->flash('error',$e->getMessage());
            return redirect()->back();
        }


    }

}

?>
