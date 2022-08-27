<?php

use Laravel\Jetstream\Rules\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\HomeController as AdminPanelHomeController;

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
// 1- Do something message route

Route::get('/hello', function () {
    return 'Hello World';
});

// 2- Call view in route

Route::get('/welcome', function () {
    return view('welcome');
});

//3- Call controller function
Route::get('/', [HomeController::class, 'index'])->name('home');

//4- Route-> Controller->view
Route::get('/test', [HomeController::class, 'test'])->name('test');

//5- Route with parameter
Route::get('/param/{id}/{number}', [HomeController::class, 'param'])->name('param');

//6- Route with post
Route::get('/save', [HomeController::class, 'save'])->name('save');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('admin')->name('admin')->group(function () {
    // ********************************Admin Panel Controller**********************************
    Route::get('/', [AdminPanelHomeController::class, 'index'])->name('admin');
    // ******************************* Admin Controller Routes ********************************
    Route::prefix('category')->name('category')->group(function () {
        Route::get('/', [AdminCategoryController::class, 'index'])->name('admin_category');
        Route::get('/create', [AdminCategoryController::class, 'create'])->name('admin_category_create');
        Route::post('/store', [AdminCategoryController::class, 'store'])->name('admin_category_store');
        Route::get('/edit/{id}', [AdminCategoryController::class, 'edit'])->name('admin_category_edit');
        Route::post('/update/{id}', [AdminCategoryController::class, 'update'])->name('admin_category_update');
        Route::get('/destroy/{id}', [AdminCategoryController::class, 'destroy'])->name('admin_category_destroy');
        Route::get('/show/{id}', [AdminCategoryController::class, 'show'])->name('admin_category_show');
    });
});
