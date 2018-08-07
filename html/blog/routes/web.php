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

Route::get('/', function () {
    return view('index');
    
});

// Route::get('/admin', function () {
//     $orders = [['name'=>'a', 'email'=>'ae'],['name'=>'b', 'email'=>'be']];
//     // take orders form db
//     return view('admin', ['orders' => $orders]);
// });

// Route::get('/admin/{id}', function ($id) {
//     return 'asdfasdfasdfaf id is: '.$id;
// });

Route::post('/saveorder', 'AdminController@save');

Route::get('/admin', 'AdminController@show');