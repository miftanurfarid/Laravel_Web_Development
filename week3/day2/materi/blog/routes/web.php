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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/coba/{nama}', function ($nama) {
    return view('coba', ["Namaku" => $nama]);
});

Route::get('/hai/{namaku}', function ($namaku) {
    return "Hai $namaku";
});

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return "Ini post: $postId. dan ini komen: $commentId";
});

Route::get('/formulir', 'RegisterController@form');

Route::get('/sapa', 'RegisterController@sapa');

Route::post('/sapa', 'RegisterController@sapa_dong');