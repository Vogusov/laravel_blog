<?php

use App\Http\Controllers\Account\IndexController;
use App\Http\Controllers\Admin\AdminController as AdminController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\ParserController;
use App\Http\Controllers\CategoryNewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/test', function () {
    // dd(response());
    return 'Test Request/Response';
});

// main page
Route::get('/', function () {
    return view('welcome');
})
    ->name('main');

// categories
Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories');

// news of category
Route::get('/category/{id}', [CategoryNewsController::class, 'index'])
    ->where('id', '\d+')
    ->name('category');

// All news
Route::get('/news', [NewsController::class, 'index'])
    ->name('news');

// One news
Route::get('/news/show/{id}', [NewsController::class, 'showOneNews'])
    ->where('id', '\d+')
    ->name('show');

// Contact
Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact');

// admin
// Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespase' => 'Admin'], function () {
//     Route::resource('categories', AdminCategoryController::class);
//     Route::resource('news', AdminNewsController::class);
// });


// backoffice
Route::group(['middleware' => 'auth'], function () {
    Route::get('/account', IndexController::class)
        ->name('account');

    Route::post('/logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })
        ->name('logout');

    // admin
    Route::get('/admin', [AdminController::class, 'index'])
        ->middleware('admin')
        ->name('admin');
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
        Route::resource('categories', AdminCategoryController::class);
        Route::resource('news', AdminNewsController::class);
        Route::get('/parse', ParserController::class)
            ->name('parse');
    });
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
