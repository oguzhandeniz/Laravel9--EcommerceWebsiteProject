<?php

use App\Http\Controllers\AdminPanel\AdminCategoryController;
use App\Http\Controllers\AdminPanel\AdminProductController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
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

//**************** HOME PAGE ROUTES******************
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::post('/storecomment', [HomeController::class, 'storecomment'])->name('storecomment');
Route::view('/loginuser', 'home.login')->name('loginuser');
Route::view('/registeruser', 'home.register')->name('registeruser');
Route::get('/logoutuser', [HomeController::class, 'logout'])->name('logoutuser');
Route::view('/loginadmin', 'admin.login')->name('loginadmin');
Route::post('/loginadmincheck', [HomeController::class, 'loginadmincheck'])->name('loginadmincheck');


Route::get('/product/{id}', [HomeController::class, 'product'])->name('product');
Route::get('/categoryproducts/{id}/{slug}', [HomeController::class, 'categoryproducts'])->name('categoryproducts');

//*******************************************************************************

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//**************** ADMİN PANEL ROUTES******************
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');

    //**************** GENERAL ROUTES******************
    Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
    Route::post('/setting', [AdminHomeController::class, 'settingUpdate'])->name('setting.update');


    //**************** ADMİN CATEGORY ROUTES******************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });


    //**************** ADMİN PRODUCT ROUTES******************
    Route::prefix('/product')->name('product.')->controller(AdminProductController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });


    //**************** ADMİN PRODUCT IMAGE GALLERY ROUTES******************
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{pid}', 'index')->name('index');
        Route::get('/create/{pid}', 'create')->name('create');
        Route::post('/store/{pid}', 'store')->name('store');
        Route::get('/destroy/{pid}/{id}', 'destroy')->name('destroy');
    });

    //**************** ADMİN MESSAGE ROUTES******************
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });

    //***************************** Admin FAQ  ROUTES**************//
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });

    //**************** ADMİN COMMENT ROUTES******************
    Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });

    //*****************************ADMIN USER ROUTES**************//
    Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::post('/addrole/{id}', 'addrole')->name('addrole');
        Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');
    });
});

