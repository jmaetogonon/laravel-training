<?php

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
    return view('homepage');
});
Route::get('/test-page', function () {
    return view('label');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('home');
Route::prefix('users')->group(function() {
    Route::get('/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::get('/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::post('', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::post('{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::post('destroy/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
});

//IS THE SAME WITH
//Route::get('users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
//Route::get('users/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');

