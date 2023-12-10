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
    return view('home');
});

Route::get('/mountain', function () {
    return view('mountain');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('register');
});

Route::get('/setup', function () {
    return view('setup');
});

Route::get('/comment', function () {
    return view('comment');
});

Route::get('/add', function () {
    return view('addmountain');
});

Route::get('/editmountain', function () {
    return view('editmountain');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/editpost', function () {
    return view('editpost');
});


Route::get('/editprofile', function () {
    return view('editprofile');
});

Route::get('/mountaininfo', function () {
    return view('infomount');
});


// Route::get('/home', function () {
//     return view('home', ['name' => 'USER']);
// });
