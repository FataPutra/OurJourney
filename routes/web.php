<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Doctrine\DBAL\Driver\Middleware;

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
//     return view('home');
// });


Route::get('/', [HomeController::class, 'index'])->middleware('auth');

// Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticating']);

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');


Route::get('/mountain', function () {
    return view('mountain');
});

// Route::get('/login', function () {
//     return view('login');
// });

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

Route::get('/account', [ProfileController::class, 'index']);

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

Route::get('/profile', function () {
    return view('profile');
});


Route::get('/account/{username}', [ProfileController::class, 'show']);

// Route::get('/home', function () {
//     return view('home', ['name' => 'USER']);
// });
