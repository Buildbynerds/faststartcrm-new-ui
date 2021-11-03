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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
Auth::routes(['verify' => true]);
Route::group(['middleware' => ['auth']], function() {
    
     // media route
     Route::resource('media', 'MediaController');
     Route::resource('settings', 'SettingController');

    //  helper routes
    Route::get('activity-logs', 'HelperController@activityLog');
    Route::get('notifications', 'HelperController@notification');

    // role permissions
    Route::resource('roles','RoleController');
    Route::resource('permissions','PermissionController');
    Route::resource('users','UserController');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
