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
        Route::post('/update-user/{user_id}', 'update')->name('users.update');
        Route::get('/delete-user/{user_id}', 'destroy')->name('users.destroy');
        Route::get('/show-user/{user_id}', 'show')->name('users.show');
    });

    Route::controller(App\Http\Controllers\ProjectController::class)->group(function () {
        Route::get('/projects', 'index')->name('projects.index');
        Route::get('/create-project', 'create')->name('projects.create');
        Route::post('/store-project', 'store')->name('projects.store');
        Route::get('/edit-project/{project_id}', 'edit')->name('projects.edit');
        Route::post('/edit-project/{project_id}', 'update')->name('projects.update');
        Route::get('/delete-project/{project_id}', 'destroy')->name('projects.destroy');
        Route::get('/show-project/{project_id}', 'show')->name('projects.show');
        // Project assignment routes
        Route::post('assign-project', 'assignProject')->name('projects.assign');
        Route::get('users/list', 'getUsersForAssignment')->name('users.list');
    });

    Route::controller(App\Http\Controllers\RolesController::class)->group(function () {
        Route::get('/roles', 'index')->name('roles.index');
        Route::get('/create-role', 'create')->name('roles.create');
        Route::post('/store-role', 'store')->name('roles.store');
        Route::get('/edit-role/{role_id}', 'edit')->name('roles.edit');
        Route::post('/edit-role/{role_id}', 'update')->name('roles.update');
        Route::get('/delete-role/{role_id}', 'destroy')->name('roles.destroy');
        Route::get('/show-role/{role_id}', 'show')->name('roles.show');
    });


    Route::get('/test-notification', function() {
        $user = \App\Models\User::first();
        $project = \App\Models\Project::first();

        event(new \App\Events\ProjectAssigned(
            $project,
            $user,
            \App\Models\User::find(1), // Another user as assigner
            'This is a test assignment'
        ));

        return 'Notification sent!';
    });
});
