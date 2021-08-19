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
                <td><a data-toggle="modal" data-id='.$menu->id.' data-target="#update" class="btn btn-primary btn-sm" type="button">Cập nhập</a> </td>
                <td><a onclick="deletemenu('.$menu->id.')" type="button" class="btn btn-primary btn-sm">Xoá</a> </td>
                </tr>


                ';

                unset($menus[$key]);
                $html .= Self::menu($menus, $menu->id, $char . '--');

            }
        }
            return $html;
        }
public static function update($menus)
{
    $html = '
    <form action="" method="POST">
        <div class="form-group">
          <label for="">Tên danh mục</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Nhập tên danh mục">
        </div>
            <div class="form-group">
              <label for="">Mô Tả</label>
              <input type="text" name="description" id="" class="form-control" placeholder="Nhập Mô Tả">
            </div>
        <div class="form-group">
          <label >Mô Tả Chi Tiết</label>
          <textarea type="text" name="content" id="content" class="form-control" placeholder=""></textarea>
        </div>
        <div class="form-group">
          <label>Kích hoạt</label><br>
          <input type="radio" name="active" value="1" id="" class="form-control-input">
          <label for="" class="form-control-lable">Có</label>
          <br>
          <input type="radio" name="active" value="0" class="form-group-input" id="">
          <label for="" class="form-group-lable">Không</label>
        </div>

 </form>
    ';


    return $html ;
}

}
