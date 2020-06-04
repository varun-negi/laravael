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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin',"Admin@login");
Route::post('/admin/postLogin',"Admin@postLogin");
Route::get('/admin/dashboard',"Admin@dashboard");
Route::get('/admin/logout','Admin@logOut');
Route::get('/', 'UserController@index');
Route::post('user-store', 'UserController@userPostRegistration');
Route::get('user-login', 'UserController@userLoginIndex');
Route::post('login', 'UserController@userPostLogin');
Route::get('dashboard', 'UserController@dashboard');
Route::get('logout', 'UserController@logout');

