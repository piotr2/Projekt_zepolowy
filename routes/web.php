<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminController;

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


Route::get('/', [HomeController::class, 'index']);


Route::get('/login', [CustomAuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/registration', [CustomAuthController::class, 'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/logout', [CustomAuthController::class, 'logout']);

Route::get('/about-us', [HomeController::class, 'aboutUs']);
Route::get('/instructors', [HomeController::class, 'instructors']);
Route::get('/contact', [HomeController::class, 'contact']);


Route::get('/add_instructor_view', [AdminController::class, 'addview']);

Route::post('/upload_instructor', [AdminController::class, 'upload']);


Route::get('/showappointment', [AdminController::class, 'showappointment']);

Route::get('/zatwiedzony/{id}', [AdminController::class, 'zatwiedzony']);

Route::get('/cancel/{id}', [AdminController::class, 'cancel']);


Route::get('/showinstructor', [AdminController::class, 'showinstructor']);


Route::get('/deleteinstructor/{id}', [AdminController::class, 'deleteinstructor']);
;
Route::get('/udpateinstructor/{id}', [AdminController::class, 'udpateinstructor']);

Route::post('/edditinstructor/{id}', [AdminController::class, 'edditinstructor']);




Route::post('/appointment', [HomeController::class, 'appointment']);
