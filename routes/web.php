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

// Route::get('/manage','ArticleController@index')->name('manage');
// Route::get('/article/add','ArticleController@add');
// Route::post('/article/create','ArticleController@create');
// Route::get('/article/edit/{id}','ArticleController@edit');
// Route::post('/article/update/{id}','ArticleController@update');
// Route::get('/article/delete/{id}','ArticleController@delete');

//Route::get('/kuis', 'Home2Controller');
Route::get('/movies', 'MainMovieController');
Route::get('/film/{id}', 'MovieController');
Route::get('/news/{id}', 'NewsController');

Auth::routes();

Route::get('/', function() {
    return view('home');
});
Route::get('/home', 'Home2Controller');

Route::get('/manage','MovieController@index')->name('manage');
Route::get('/movie/add','MovieController@add');
Route::post('/movie/create','MovieController@create');
Route::get('/movie/edit/{id}','MovieController@edit');
Route::post('/movie/update/{id}','MovieController@update');
Route::get('/movie/delete/{id}','MovieController@delete');

Route::get('/manage-user','ManageUserController@index')->name('manage-user');
Route::get('/user/add','ManageUserController@add');
Route::post('/user/create','ManageUserController@create');
Route::get('/user/edit/{id}','ManageUserController@edit');
Route::post('/user/update/{id}','ManageUserController@update');
Route::get('/user/delete/{id}','ManageUserController@delete');