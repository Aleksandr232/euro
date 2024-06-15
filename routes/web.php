<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sheets\GoogleSheetsController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MatchScheduleController;
use App\Http\Controllers\Admin\GroupStageController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('page.index');


Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'loginForm'])->name('auth.loginForm');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    /* Route::get('/register', [AuthController::class, 'register'])->name('auth.register'); */
    Route::post('/register_create', [AuthController::class, 'register_create'])->name('auth.register_create');
    Route::get('/login/google', [AuthController::class, 'redirectToGoogle'])->name('login.google');
    Route::get('/google/callback', [AuthController::class, 'handleGoogleCallback']);

});



Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/',  [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('/schedule', MatchScheduleController::class);
    Route::resource('/group', GroupStageController::class);
    Route::post('/schedule/{id}',  [MatchScheduleController::class, 'update'])->name('update');
    Route::post('/group/{id}',  [GroupStageController::class, 'update_group'])->name('update_group');
});



Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/google-sheets', [GoogleSheetsController::class, 'importData']);



Route::get('/unauthorized', function () {
    return view('errors.unauthorized');
})->name('errors.unauthorized');
