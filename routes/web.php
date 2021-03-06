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

Route::get('/', 'Content\IndexController@index');

Route::auth();
Route::get('admin', 'Admin\IndexController@index');
Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Route::get('settings', 'Admin\SettingsController@index');




    Route::get('test', function(){
        return view('welcome');
    });
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/pages', 'Admin\PagesController@index')->name('pages');
    Route::get('/pages/new', 'Admin\PagesController@newPage')->name('pages-new');
    Route::get('/pages/edit/{id}', 'Admin\PagesController@editPage');
    Route::delete('/page/delete/{page}', 'Admin\PagesController@deletePage');
    Route::post('/pages/update/{id}', 'Admin\PagesController@updatePage');


    Route::post('/pages/add', 'Admin\PagesController@addPage')->name('add-page');

});