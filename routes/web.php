<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WorksPostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PageController::class,'getPost'])->name('getPost');


Route::get('/login',[PageController::class, 'loginPage'])->name("login");

Route::post('/signin',[LoginController::class, 'signinPage'])->name("signin");

Route::get('/admin',[PageController::class, 'adminPage'])->middleware('auth')->name('admin');

Route::get('/logout',function(){

    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::resource('/admin',PostController::class)->middleware('auth');

Route::resource('/work',WorksPostController::class)->middleware('auth');

