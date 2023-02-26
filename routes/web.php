<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QueryController;
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

Route::view('/', 'home')->name('root');
Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');
Route::post('query-store', [QueryController::class, 'querystore'])->name('query_store');
Route::get('grade/{grade:id}', [HomeController::class, 'grade'])->name('grade');
Route::get('subject/{subject:id}', [HomeController::class, 'subject'])->name('subject');
Route::get('material/{material:id}', [HomeController::class, 'material'])->name('material');
Route::get('board/{board:id}', [HomeController::class, 'board'])->name('board');




Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    });
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
