<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/',[HomeController::class,'index']);

Route::get('/about',[HomeController::class,'about']);
Route::get('/contact',[HomeController::class,'contact']);

Route::get('/search',[HomeController::class,'search']);

Route::get('/orderdetail',[HomeController::class,'orderdetail']);
Route::get('/privacy',[HomeController::class,'privacy']);
Route::get('/termscondition',[HomeController::class,'termscondition']);
Route::get('/blog',[HomeController::class,'blog']);
// Route::get('/blog',[HomeController::class,'blog']);
Route::get('/blogdetail',[HomeController::class,'blogdetail']);
