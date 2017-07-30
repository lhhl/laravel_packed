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

Route::group(['namespace' => 'App\Modules\AppInfo\Controllers', 'middleware' => ['web', 'auth']], function () {
    routeListview(Route::class, 'appinfo', 'AppInfoController');
    Route::get('appinfo/statistic/{id}', 'AppInfoController@statistic')->name('appinfo_statistic');

    Route::match(['get', 'post'], 'appinfo/forward/{link}', 'AppInfoController@forward')->name('appinfo_forward');
});
