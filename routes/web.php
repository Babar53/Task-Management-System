<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::controller(App\Http\Controllers\UserController::class)->group(function () {
        Route::get('/users', 'index')->name('users.index');
        Route::get('/create-user', 'create')->name('users.create');
        Route::post('/store-user', 'store')->name('users.store');
        Route::get('/edit-user/{user_id}', 'edit')->name('users.edit');
        Route::post('/edit-user/{user_id}', 'update')->name('users.update');
        Route::get('/delete-user/{user_id}', 'destroy')->name('users.destroy');
        Route::get('/show-user/{user_id}', 'show')->name('users.show');
    });
});
