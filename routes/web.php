<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/profile',[ProfileController::class,'index']);
Route::put('/dashboard/profile/update',[ProfileController::class,'update']);

Route::get('/login',[LoginController::class,'login'])->middleware('isLogin');
Route::get('/logout',[LoginController::class,'logout']);
Route::post('/login',[LoginController::class,'loginUser']);
Route::get('/register',[RegisterController::class,'register'])->middleware('isLogin');
Route::post('/register',[RegisterController::class,'storeUser']);

Route::resource('/dashboard/book',BookController::class);