<?php

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

Route::get('/', 'App\Http\Controllers\Site\HomeController@index');

Route::prefix('painel')->group(function(){
    Route::get('/', 'App\Http\Controllers\Admin\HomeController@index')->name('admin');;

    Route::get('login', 'App\Http\Controllers\Admin\Auth\LoginController@index')->name('login');
    Route::post('login', 'App\Http\Controllers\Admin\Auth\LoginController@authenticate');

    Route::get('register', 'App\Http\Controllers\Admin\Auth\RegisterController@index')->name('register');
    Route::post('register', 'App\Http\Controllers\Admin\Auth\RegisterController@register');

    Route::post('logout', 'App\Http\Controllers\Admin\Admin\Auth\LoginController@logout')->name('logout');

    Route::resource('users', 'App\Http\Controllers\Admin\UserController');
    Route::resource('pages', 'App\Http\Controllers\Admin\PageController');

    Route::get('profile', 'Admin\ProfileController@index')->name('profile');
    Route::put('profilesave', 'Admin\ProfileController@save')->name('profile.save');

    Route::get('settings', 'App\Http\Controllers\Admin\SettingController@index')->name('settings');
    Route::put('settingssave', 'Admin\SettingController@save')->name('settings.save');
});
