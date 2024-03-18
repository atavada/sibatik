<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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


// Auth
Route::get('/sign-in', function () {
    return view('auth.signin');
})->name('auth.signin');


// User
Route::get('/', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.index');
Route::get('/about', [App\Http\Controllers\User\AboutController::class, 'index'])->name('user.about');
Route::get('/contact', [App\Http\Controllers\User\ContactController::class, 'index'])->name('user.contact');

Route::get('/catalog', function () {
    return view('user.catalog');
})->name('user.catalog');

Route::get('/detail', function () {
    return view('user.detail');
})->name('user.detail');


Route::get('/category/{slug}', [CategoryController::class, 'showProductsBySlug'])->name('category.products');



Route::get('/catalog',  [App\Http\Controllers\ProductController::class, 'index'])->name('user.catalog');


Route::get('/user/filter', 'ProductController@filterByCategory');


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
    Route::resource('/dashboard/about', App\Http\Controllers\Admin\AboutController::class, ['except' => ['show'], 'as' => 'admin']);
    Route::resource('/dashboard/product', App\Http\Controllers\Admin\ProductController::class, ['except' => ['show'], 'as' => 'admin']);
    Route::resource('/dashboard/category', App\Http\Controllers\Admin\CategoryController::class, ['except' => ['show'], 'as' => 'admin']);
    Route::resource('/dashboard/rating', App\Http\Controllers\Admin\RatingController::class, ['except' => ['show'], 'as' => 'admin']);
    Route::resource('/dashboard/contact', App\Http\Controllers\Admin\ContactController::class, ['except' => ['show'], 'as' => 'admin']);
    Route::resource('/dashboard/user', App\Http\Controllers\Admin\UserController::class, ['except' => ['show'], 'as' => 'admin']);
});
