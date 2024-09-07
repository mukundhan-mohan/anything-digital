<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
})->name('home');;

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/job-list', function () {
    return view('job-list');
})->name('job-list');

Route::get('/job-detail', function () {
    return view('job-detail');
})->name('job-detail');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signUp', function () {
    return view('signUp');
})->name('signUp');

Route::get('/404', function () {
    return view('404');
})->name('404');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'products' => ProductController::class,
]);


