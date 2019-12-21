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
    return view('welcome');
});

//Auth::routes();

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::middleware(['auth'])->group(function () {
    
    Route::namespace('Web')->group(function () {        
        Route::get('/', 'DashboardController@index')->name('dashbboard.index');
        Route::get('/admin', 'DashboardController@index')->name('admin');
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('/home', 'DashboardController@index')->name('home');

        //class manage
        Route::prefix('class')->group(function () {
            Route::get('/list', 'AcademicClassController@index')->name('class.index');
            Route::get('/create', 'AcademicClassController@create')->name('class.create');
            Route::post('/create', 'AcademicClassController@store')->name('class.store');
            Route::get('/{id}/edit', 'AcademicClassController@edit')->name('class.edit');
            Route::post('/{id}/edit', 'AcademicClassController@update')->name('class.update');
            Route::delete('/{id}', 'AcademicClassController@destroy')->name('class.destroy');
        });
        
    });
});
