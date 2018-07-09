<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/user', function ()
//{
//    return " day la user";
//});

Route::match(['put', 'post'], '/', function () {
    echo ' test match';
});
Route::any('foo', function () {
    echo ' test foo';
});
Route::get('user/{id}', function ($id){
  echo " test id".$id;
});

Route::get('post/{post}', function ($postId){
    echo ' post'.$postId;
})->where('post', '[A-Za-z]+');

Route::get('author/{name?}', function ($name = 'Jhon'){
    return $name;
});
Route::view('name','route',['name'=>'laravel']);