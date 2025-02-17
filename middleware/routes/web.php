<?php

use App\Http\Controllers\postController;
use App\Http\Middleware\checkRoleMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post',[postController::class,'index'])->name('post.index');
//group middleware
//Route::post('/post',[postController::class,'store'])->name('post.store')->middleware('checkRole');
Route::post('/post',[postController::class,'store'])->name('post.store');
// Route::group(['middleware'=>checkRoleMiddleware::class],function(){
//     Route::post('/post',[postController::class,'store'])->name('post.store');
// });

Route::get('user/dashboard',function(){
    dd('user DashBoard');
})->middleware('user:user');
Route::get('admin/dashboard',function(){
    dd('Admin DashBoard');
})->middleware('user:admin');