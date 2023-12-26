<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Post;
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


// Route::get('/', [HomeController::class, 'index'])->middleware('auth');

Route::get('/', [HomeController::class, 'index'])->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/signup', [UserController::class, 'create']);
Route::post('/user', [UserController::class, 'store']);

Route::get('/setup', [ProfileController::class, 'add']);
Route::post('/profile', [ProfileController::class, 'store']);

Route::get('/create', [PostController::class, 'index']);
Route::post('/post', [PostController::class, 'store']);

Route::get('/mountain', function () {
    return view('mountain');
});

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/signup', function () {
//     return view('register');
// });

Route::get('/comment', function () {
    return view('comment');
});

Route::get('/add', function () {
    return view('addmountain');
});

Route::get('/editmountain', function () {
    return view('editmountain');
});

Route::get('/account/{id}', [UserController::class, 'show']);

// Route::get('/create', function () {
//     return view('create');
// });

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
