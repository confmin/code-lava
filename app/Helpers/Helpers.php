<?php

namespace App\Helpers;


class Helpers
{
    public  static function menu($menus , $char = '')
    {

        $html = '';
        foreach ($menus as $key => $menu) {
            if ($menu->parent_id == 0) {
                $html .= '
                <tr>
                <td>' . $menu->id . '</td>
                <td>' . $char . $menu->name . '</td>
                <td>' . $menu->active . '</td>
                <td><a href="" class="btn btn-primary btn-sm" type="button">Cập nhập</a> </td>
                <td><a onclick="deletemenu('.$menu->id.')" href="#" type="button " class="btn btn-primary btn-sm">Xoá</a> </td>
                </tr>


                ';

                unset($menus[$key]);
                $html .= Self::menu($menus, $menu->id, $char . '--');

            }
        }
            return $html;
        }


}
