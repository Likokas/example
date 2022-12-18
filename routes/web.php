<?php

use Illuminate\Support\Facades\Auth;
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
    return view('auth/login');
});

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function (){
    Route::get('/halamanadmin', [\App\Http\Controllers\AdminAddBooks::class,'index']) ->name('halamanadmin');
    Route::resource('/addbook', \App\Http\Controllers\AdminFormBooks::class);
    Route::get('/editbook/{id}', [\App\Http\Controllers\AdminFormBooks::class, 'edit']);
    Route::Patch('/editbook/{id}', [\App\Http\Controllers\AdminFormBooks::class, 'update']);
    Route::Delete('/halamanadmin/{id}', [\App\Http\Controllers\AdminFormBooks::class, 'destroy']);

    Route::resource('/credit', \App\Http\Controllers\CreditController::class);
    Route::Patch('/credit/indexcredit/{id}', [\App\Http\Controllers\CreditController::class, 'update']);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();
//Route::get('/perpus', function () {
//    return view('index');
//});


//Route::get('/adminpages', [App\Http\Controllers\HomeController::class, 'index'])->name('adminpages');
