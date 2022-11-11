<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// for login user authentication
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('user/home', [HomeController::class, 'index'])->name('user.home');


// for page view
Route::get('admin/create', [HomeController::class, 'create'])->name('admin.create');
Route::get('admin/dashboard', [HomeController::class, 'dashboard'])->name('admin.dashboard');
Route::get('admin/profile', [HomeController::class, 'profile'])->name('admin.profile');

// for test crud
Route::post('/store',[StoreController::class,'store'])->name('store');
Route::get('/admin/dashboard',[StoreController::class,'show']);
Route::get('/admin/delete/{id}',[StoreController::class,'destroy'])->name('admin.delete');
Route::get('/admin/edit/{id}',[StoreController::class,'edit']);
Route::put('update/{id}',[StoreController::class,'update'])->name('update');
Route::get('admin/archive',[StoreController::class,'archive'])->name('admin.archive');
Route::get('/admin/restore/{id}',[StoreController::class,'restore'])->name('admin.restore');
Route::get('/admin/forcedelete/{id}',[StoreController::class,'forceDelete'])->name('admin.forcedelete');





// profile update
Route::get('admin/profile',[UserController::class,'index'])->name('profile');
Route::post('admin/update-password',[UserController::class,'update'])->name('update-password');
Route::put('admin/update-details/{id}',[UserController::class,'updateDetails'])->name('update-details');
Route::get('admin/edit-profile/{id}',[UserController::class,'edit'])->name('edit-profile');




