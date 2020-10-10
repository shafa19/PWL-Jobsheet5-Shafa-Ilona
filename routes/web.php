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

// Route::get('/', function () {
//     return 'Selamat Datang';
// });

// Route::get('/about', function (){
// 	return 'NIM : 1931710107 <br> Nama : Shafa Ilona';
// });

// Route::get('/articles/{id}', function($id){
// 	return 'Halaman artikel dengan id '.$id;
// });

Route::get('/kuis', 'Home2Controller');
Route::get('/movies', 'MainMovieController');
Route::get('/film/{id}', 'MovieController');
Route::get('/news/{id}', 'NewsController');

Auth::routes();

Route::get('/', function() {
    return view('home');
});
Route::get('/home', 'Home2Controller');
