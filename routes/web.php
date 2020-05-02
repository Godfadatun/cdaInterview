<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactMail;

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
//     return view('index');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('admin', function () {
//     return view('welcome');
// });

// Route::get('/email', function () {
//     return new ContactMail();
// });

// Route::get('/', function () {
//     return view('main');
// });

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::resource('contact', 'ContactController');
Route::resource('/', 'MainController');
Route::resource('admin1', 'AdminController');
