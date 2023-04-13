<?php

use App\Http\Controllers\Admin\ProfiliController;
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

Auth::routes();



Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/home', 'HomeController@index')->name('home.index');

    Route::resource('/', '\App\Http\Controllers\Admin\profiliController');
});


Route::get('{any?}', function () {

    return view('guest.welcome');

})->where("any", ".*");
