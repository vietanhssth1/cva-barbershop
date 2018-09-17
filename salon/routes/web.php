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

//Homepage
Route::get('/','PageController@getIndex')->name('home');

//Route Login User
Route::prefix('user')->group(function () {
    Route::post('login', 'UserAccountController@postLogIn')->name('login');
    Route::get('logout', 'UserAccountController@getLogOut')->name('logout');
});

//Route Admin
Route::prefix('admin')->group(function () {
    Route::get('login', 'AdminAccountController@getLogIn')->name('get-admin-login');
    Route::post('login', 'AdminAccountController@postLogIn')->name('post-admin-login');
    Route::get('logout', 'AdminAccountController@getAdminLogOut')->name('admin-logout');
    Route::get('index', 'AdminPageController@getIndex')->name('index');
    
    Route::middleware(['check.admin'])->group(function () {
        
    });
}); 