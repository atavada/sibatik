<?php

use Illuminate\Support\Facades\Route;

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


// User
Route::get('/', function () {
    return view('user.index');
})->name('user.index');

Route::get('/sign-in', function () {
    return view('auth.signin');
})->name('auth.signin');


// Gemini AI
Route::post('/generate-text', [App\Http\Controllers\GeminiController::class, 'generateText'])
    ->name('generateText');

Route::get('/test', [App\Http\Controllers\GeminiController::class, 'showForm'])
    ->name('showForm');


// Google Auth
Route::get('login/google/redirect', [App\Http\Controllers\SocialiteController::class, 'redirect'])
    ->middleware(['guest'])
    ->name('redirect');

Route::get('login/google/callback', [App\Http\Controllers\SocialiteController::class, 'callback'])
    ->middleware(['guest'])
    ->name('callback');

Route::post('logout', [App\Http\Controllers\SocialiteController::class, 'logout'])
    ->middleware(['auth'])
    ->name('logout');


Route::group(['middleware' => ['auth', 'admin']], function () {
    // Admin
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::resource('/dashboard/user', App\Http\Controllers\Admin\UserController::class, ['except' => ['show'] ,'as' => 'admin']);
});
