<?php

use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\admin\MenuController;
use App\Http\Controllers\front\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\LoginController;
use App\Http\Controllers\front\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login',[LoginController::class,'index']);
Route::post('/login/store',[LoginController::class,'store']);
Route::get('register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);
Route::get('',[HomeController::class,'index'])->name('trangchu');
    //admin
Route::prefix('admin')->group(function()
{
    Route::get('/', function () {
        $name = 'cong minh';
        return view('admin.pages.index',compact('name'));
    });
    Route::get('/login',[AdminLoginController::class,'index'])->name('login');
    Route::post('login',[AdminLoginController::class,'store']);
    #MENU
    Route::prefix('menu')->group(function ()
    {
        Route::get('add' , [MenuController::class,'create'])->name('add-menu');
        Route::post('add', [MenuController::class,'store']);
        Route::get('list',[MenuController::class,'index'])->name('list-menu');
        Route::delete('delete',[MenuController::class, 'delete']);
        Route::get('edit/{id}',[MenuController::class,'edit']);
        Route::post('update',[MenuController::class.'update']);

    });
});

