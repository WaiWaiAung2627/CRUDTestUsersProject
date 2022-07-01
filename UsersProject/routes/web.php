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
/*Route::get('index', function () {
    return view('index');
});*/
Route::get('userRegistration', function () {
    return view('userRegistration');
});
Route::get('login', function () {
    return view('login');
});
Route::get('createUser', function () {
    return view('createUser');
});

Route::post('/Registration','UserRegistrationController@userRegister');
Route::post('/login','LoginController@login');
Route::get('index', 'LoginController@retrieveAll')->name('users');
Route::post('/CreateUser','CreateUserController@createUser');

Route::get('/user/edit/{id}', 'ValidationController@edit')->name('users.edit');
Route::post('/updateuser/{id}', 'ValidationController@updateUser')->name('users.update');

Route::get('/delete/{id}', 'ValidationController@destroy')->name('users.delete');

Route::get('/logout','LoginController@doLogout')->name('logout');