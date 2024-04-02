<?php
use App\Http\Controllers\LoginController;
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

Route::get('/',[LoginController::class, 'index']);
Route::get('/register',[LoginController::class, 'create']);
Route::post('/users',[LoginController::class, 'store']);
Route::post('/logout',[LoginController::class, 'logout']);
Route::get('/login',[LoginController::class, 'login']);
Route::post('/users/authenticate',[LoginController::class, 'authenticate']);

// dashboard

Route::get('/admin',[LoginController::class,'admin']);

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('services', function () {
    return view('services');
})->name('services');

Route::get('testimonial', function () {
    return view('testimonial');
})->name('testimonial');