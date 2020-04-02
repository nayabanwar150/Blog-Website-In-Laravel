<?php

use App\Http\Controllers\DatabaseController;
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

Route::get('/', function(){
    return view('index');
});

// Login 
Route::get('/login','DatabaseController@login');
Route::post('/loginCheck','DatabaseController@checkLogin');

// Admin Login
Route::get('/adminLogin', 'DatabaseController@adminLogin');
Route::post('/adminLoginCheck','DatabaseController@adminLoginCheck');

// Register
Route::get('/register', 'DatabaseController@register');
Route::post('/registerNewUser', 'DatabaseController@registerNewUser');

// User Home Page
Route::get('/userHomePage','DatabaseController@userHomePage');

// User Posts
Route::get('/userPost','DatabaseController@userPost');

// Admin Panel 
Route::get('/adminPanel', 'DatabaseController@adminPanel');

// Admin Post
Route::get('/adminPost', 'DatabaseController@adminPost');

// Users
Route::get('/users', 'DatabaseController@users');

// User Post Insert
Route::get('/userInsert', 'databaseController@userInsert');
Route::post('/userPostInsert', 'DatabaseController@userPostInsert');

// Admin Post Insert
Route::get('/adminInsert', 'databaseController@adminInsert');
Route::post('/adminPostInsert', 'DatabaseController@adminPostInsert');

// Delete Post
Route::get('/delete/{posid}','DatabaseController@delete');

// Delete User Post
Route::get('/deleteUserPost/{posid}','DatabaseController@deleteUserPost');

// Delete Users
Route::get('/deleteUsers/{uid}', 'DatabaseController@deleteUser');