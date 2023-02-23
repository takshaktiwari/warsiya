<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GradeController;
use App\Http\Controllers\Admin\BoardController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\UserController;
use Takshak\Adash\Http\Middleware\RefererMiddleware;
use Takshak\Adash\Http\Middleware\GatesMiddleware;
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

Route::middleware(['auth', GatesMiddleware::class, RefererMiddleware::class])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('profile/edit', [AdminController::class, 'profileEdit'])->name('profile.edit');
    Route::post('profile/update', [AdminController::class, 'profileUpdate'])->name('profile.update');
    Route::get('password', [AdminController::class, 'password'])->name('password');
    Route::post('password', [AdminController::class, 'passwordUpdate'])->name('password.update');

    Route::resource('users', UserController::class);
    Route::prefix('users')->name('users.')->controller(UserController::class)->group(function () {
        Route::get('status-toggle/{user}', 'statusToggle')->name('status-toggle');
        Route::get('profile-img/remove/{user}', 'profileImgRemove')->name('users.profile_img.remove');
    });

    Route::resource('roles', RoleController::class)->except(['show']);
    Route::get('login-to/{user:id}', [UserController::class, 'loginToUser'])->name('login-to');

    Route::resource('permissions', PermissionController::class)->except(['show']);
    Route::prefix('permissions')->name('permissions.')->group(function () {
        Route::get('roles', [PermissionController::class, 'rolePermissions'])->name('roles.index');
        Route::post('{role}', [PermissionController::class, 'rolePermissionsUpdate'])->name('roles.update');
    });

    Route::resource('subjects', SubjectController::class);
    Route::resource('grades', GradeController::class);
    Route::resource('boards', BoardController::class);
    Route::resource('materials', MaterialController::class);

    Route::prefix('ajax')->name('ajax.')->group(function () {
        Route::post('grades', [MaterialController::class, 'getGrades'])->name('grades');
        Route::post('subjects', [MaterialController::class, 'getSubjects'])->name('subjects');
    });
});
