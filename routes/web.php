<?php

use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;


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
// 1-Do something in route
Route::get('/', function () {
    return view('Hello World');
});

// 2-Call view in route
Route::get('/welcome', function () {
    return view('welcome');
});

// 3- Call Controller Function

Route::get('/home', [HomeController::class, 'index']);
Route::get('/show', [HomeController::class, 'show']);
Route::get('/test', [HomeController::class, 'test']);

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//**************** ADMİN PANEL ROUTES******************
Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin');


//**************** ADMİN PANEL ROUTES******************
Route::get('/admin/category', [\App\Http\Controllers\CategoryController::class, 'index'])->name('admin_category');
Route::get('/admin/category/create', [\App\Http\Controllers\CategoryController::class, 'create'])->name('admin_category_create');
Route::post('/admin/category/store', [\App\Http\Controllers\CategoryController::class, 'store'])->name('admin_category_store');
