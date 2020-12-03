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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('setlocale/{locale}', function ($locale) {

    // Проверяем, что у пользователя выбран доступный язык
    if (in_array($locale, \Config::get('app.locales'))) { 
        //И устанавливаем его в сессии под именем locale
        Session::put('locale', $locale);
    }
    return redirect()->back();

});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['permission']], function () {

        Route::get('demo', 'PagesController@demo')->name('demo');
        Route::get('start', 'PagesController@start')->name('start');
        Route::get('profi', 'PagesController@profi')->name('profi');
        Route::get('helpme', 'PagesController@helpme')->name('helpme');
        Route::get('vip', 'PagesController@vip')->name('vip');

        Route::get('profile', 'ProfileController@index')->name('profile');
        Route::get('gallery', 'GalleryController@index')->name('gallery');
        Route::post('seed.demo', 'SeedDemoController@index')->name('seed.demo');

        //Route::post('calculate.demo', 'CalculateController@demo')->name('calculate.demo');
        //Route::post('calculate.start', 'CalculateController@start')->name('calculate.start');

    });
});
