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


// Google Auth
Route::get('/sign-in', [App\Http\Controllers\SocialiteController::class, 'index'])
    ->middleware(['guest'])
    ->name('auth.signin');

Route::get('login/google/redirect', [App\Http\Controllers\SocialiteController::class, 'redirect'])
    ->middleware(['guest'])
    ->name('redirect');

Route::get('login/google/callback', [App\Http\Controllers\SocialiteController::class, 'callback'])
    ->middleware(['guest'])
    ->name('callback');

Route::post('logout', [App\Http\Controllers\SocialiteController::class, 'logout'])
    ->middleware(['auth'])
    ->name('logout');


// User Page
Route::get('/', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.index');

Route::get('/about', [App\Http\Controllers\User\AboutController::class, 'index'])->name('user.about');

Route::get('/contact', [App\Http\Controllers\User\ContactController::class, 'index'])->name('user.contact');
Route::post('/contact', [App\Http\Controllers\User\ContactController::class, 'store'])->name('user.contact.store');

Route::get('/catalog', [App\Http\Controllers\User\CatalogController::class, 'index'])->name('user.catalog');
Route::get('/catalog/{id}', [App\Http\Controllers\User\CatalogController::class, 'showCategory'])->name('user.catalog.category');
Route::get('/catalog/product/{id}', [App\Http\Controllers\User\CatalogController::class, 'showProduct'])->name('user.catalog.product');

Route::get('/rating', [App\Http\Controllers\User\RatingController::class, 'index'])->name('user.rating');
Route::post('/rating', [App\Http\Controllers\User\RatingController::class, 'store'])->name('user.rating.store');


// Admin Dashboard
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::resource('/dashboard/about', App\Http\Controllers\Admin\AboutController::class, ['except' => ['show'], 'as' => 'admin']);
    Route::resource('/dashboard/product', App\Http\Controllers\Admin\ProductController::class, ['except' => ['show'], 'as' => 'admin']);
    Route::resource('/dashboard/category', App\Http\Controllers\Admin\CategoryController::class, ['except' => ['show'], 'as' => 'admin']);
    Route::resource('/dashboard/rating', App\Http\Controllers\Admin\RatingController::class, ['except' => ['show'], 'as' => 'admin']);
    Route::resource('/dashboard/contact', App\Http\Controllers\Admin\ContactController::class, ['except' => ['show'], 'as' => 'admin']);
    Route::resource('/dashboard/user', App\Http\Controllers\Admin\UserController::class, ['except' => ['show'], 'as' => 'admin']);
});


// Gemini AI
// Route::post('/generate-text', [App\Http\Controllers\GeminiController::class, 'generateText'])
//     ->name('generateText');

// Route::get('/test', [App\Http\Controllers\GeminiController::class, 'showForm'])
//     ->name('showForm');