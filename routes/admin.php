<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegitrationController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\Users;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\SubsubcategoryController;
use App\Http\Controllers\Admin\Vender_profileController;


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


Route::get('/login', [AuthController::class, 'signin'])->name('login');

Route::post("/authentication", [AuthController::class,'login']);

Route::get("/logout", [AuthController::class, 'logout']);

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard.index');
    });

    


    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/categories/create', [CategoryController::class, 'createCategory']);
    Route::get('/categories/edit/{id}',[ CategoryController::class, 'edit']);
    Route::post('/categories/update', [CategoryController::class, 'update']);
    Route::post('/categories/store', [CategoryController::class, 'store']);

    Route::get('/subcategories', [SubcategoryController::class, 'index']);
    Route::get('/subcategories/create', [SubcategoryController::class, 'subcreateCategory']);
    Route::get('/subcategories/edit/{id}',[ SubcategoryController::class, 'edit']);
    Route::post('/subcategories/update', [SubcategoryController::class, 'update']);
    Route::post('/subcategories/store', [SubcategoryController::class, 'store']);

    Route::get('/subsubcategories', [SubsubcategoryController::class, 'index']);
    Route::get('/subsubcategories/create', [SubsubcategoryController::class, 'subcreateCategory']);
    Route::get('/subsubcategories/edit/{id}',[SubsubcategoryController::class, 'edit']);
    Route::post('/subsubcategories/update', [SubsubcategoryController::class, 'update']);
    Route::post('/subsubcategories/store', [SubsubcategoryController::class, 'store']);
    
    Route::get('/vender_profile', [Vender_profileController::class, 'index']);
    Route::get('/vender_profile/create', [Vender_profileController::class, 'create']);
    Route::get('/vender_profile/edit/{id}',[Vender_profileController::class, 'edit']);
    Route::post('/subsubcategories/update', [Vender_profileController::class, 'update']);
    Route::post('/vender_profile/store', [Vender_profileController::class, 'store']);

  
    Route::get("/blog", [BlogController::class, 'index']);
    Route::get("/blog/edit/{id}", [BlogController::class, 'view']);
    Route::get("/blog/create", [BlogController::class, 'create']);
    Route::post("/blog/store", [BlogController::class, 'store']);
    Route::get('/blog/{status}/{id}', [BlogController::class, "changeStatus"]);
    Route::delete('/admin/delete/{id}', [BlogController::class, 'deleteblog'])->name('admin.blog.delete');
    
  
    





    Route::get("/blogs", [TestimonialController::class, 'blogsIndex']);
    Route::get("/blogs/edit/{id}", [TestimonialController::class, 'blogsView']);
    Route::get("/blogs/create", [TestimonialController::class, 'blogsCreate']);
    Route::post("/blogs/store", [TestimonialController::class, 'blogsStore']);



});


