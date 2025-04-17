<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Hello', function() {
    return "view('Hello new word');";
});
//đặt tên định tuyến
Route::get('users/profile',function(){
    return route('profile');
}) -> name('profile');
Route::get('/admin/products/add',function(){
    return route('products.add');
}) -> name('products.add');
//Định tuyến có tham số tùy chọn
// domain.com/users/4 => hiển thị tt người dùng có id=4
Route::get('user/{id?}',function($id=0){
    return $id;
});
//Định tuyến với tham số có ràng buộc biếu thức chính quy
Route::get('product/{id}',function($id){
    return $id;
}) ->where('id','[0-9]+'); 
Route::get('product/{slug}/{id}',function($slug,$id){
    return $id.'---'.$slug;
}) ->where(['id'=>'[0-9]+','slug' => '[A-Za-z0-9-_]+']); 