<?php

use App\Http\Controllers\HomeController;
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
// 1- Do something message route

Route::get('/hello', function () {
    return 'Hello World';
});

// 2- Call view in route

Route::get('/welcome', function () {
    return view('welcome');
});

//3- Call controller function
Route::get('/',[HomeController::class,'index'])->name('home');

//4- Route-> Controller->view
Route::get('/test',[HomeController::class,'test'])->name('test');

//5- Route with parameter
Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name('param');

//6- Route with post
Route::get('/save',[HomeController::class,'save'])->name('save');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
