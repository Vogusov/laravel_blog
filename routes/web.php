<?php

use App\Http\Controllers\Admin\AdminController as AdminController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\NewsCategoriesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\NewsController;
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

// categories
Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');

// news of category
Route::get('/category/{id}', [NewsCategoriesController::class, 'index'])
    ->where('id', '\d+')
    ->name('category');


// admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('news', AdminNewsController::class);
});


// All news
Route::get('/news', [NewsController::class, 'index'])
    ->name('news');


// One news
Route::get('/news/show/{id}', [NewsController::class, 'showOneNews'])
    ->where('id', '\d+')
    ->name('show');
