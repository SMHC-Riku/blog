<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return 'おはようございます';
});

Route::get('/archives', function () {
    return view('archives');
});
Route::get('/archives/{category}/', function ($category) {
    return view('category',['category'=>$category]);
});


Route::post('/join/',function(){
    return'入会申し込み完了';
});

Route::get('/join/',function(){
    return redirect()->to('/');
});
Route::get('/{id}',function($id){
    return $id.'のページ';
});

Route::get('/sum/{x}/{y}/','MathController@sum');

