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
Route::get('/', function () {
    return view('home');
});


Route::get('/beroepsbeeld', function() {
    return view('beroepsbeeld');
});

//Route::get('/dashboard', function() {
//    return view('dashboard');
//});

Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::post('/articles', 'ArticlesController@store')->name('articles.store');
Route::get('/articles/create', 'ArticlesController@create')->name('articles.create');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit')->name('articles.edit');
Route::put('/articles/{article}', 'ArticlesController@update')->name('articles.update');


Route::get('/dashboard', 'DashboardController@show');
//Route::get('/dashboard', function() {
//    return view('dashboard', [
//        'assignments' => App\Assignment::all()
//    ]);
//});


Route::get('/motivatie', function() {
    return view('motivatie');
});

Route::get('/profile', function() {
    return view('profile');
});
