<?php

use App\Article;
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
    return view('welcome', ['articles'=>Article::latest()->get()]);
});

Route::get('/generic', function () {
    return view('generic');
});

Route::get('/elements', function () {
    return view('elements');
});

Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::get('/articles/create', 'ArticlesController@create');
Route::post('/articles/store', 'ArticlesController@store');
Route::put('/articles/{article}', 'ArticlesController@update');
Route::get('/article/{article}', 'ArticlesController@show')->name('articles.show');

Route::get('/welcome', function () {
    return view('welcome', ['sdfsdfsd' => request('name')]);
});

Route::get('/posts/{post}', 'PostController@show');

