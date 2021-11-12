<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\RombelController;
use App\Http\Controllers\LoginController;

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


Route::resource('students', StudentController::class);

Route::get('/', function () {
    return view('hello.register.index');
});

Route::get('/register', [RegisterController::class, 'index']);

// route untuk memberikan function store dari RegisterController kepada /register yang mana methodnya POST
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('rayon', RayonController::class);

Route::resource('rombel', RombelController::class);

Route::get('/', function () {
    return view('hello.login.index');
});

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'store']);