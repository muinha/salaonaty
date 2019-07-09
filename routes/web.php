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

Route::get('/', 'SiteController@index');
Route::get('blog', 'SiteController@blog');
Route::get('table', 'SiteController@table');
Route::get('contact', 'SiteController@contact');
Route::get('photo', 'SiteController@photo');
Route::get('{name}', 'SiteController@service');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rotas Admins

Route::prefix('admin')->group(function () {
    Route::get('table', 'admin\TableController@index');
    Route::get('table/create', 'admin\TableController@create');
    Route::post('table/create', 'admin\TableController@store');
    Route::get('table/{id}/edit', 'admin\TableController@edit');
    Route::post('table/{id}/edit', 'admin\TableController@update');
    Route::get('table/{id}/delete', 'admin\TableController@destroy');
});
