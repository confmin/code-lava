<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menus';
     protected $fillable = [
         'name',
         'parent_id',
         'description',
         'content',
         'active'
        
     ] ;
}
