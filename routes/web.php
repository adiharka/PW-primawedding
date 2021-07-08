<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeddingController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [WeddingController::class, 'index'])->name('/');

Route::get('/about', [WeddingController::class, 'about'])->name('about');

Route::get('/service', [WeddingController::class, 'service'])->name('service');

Route::get('/login', [WeddingController::class, 'login'])->name('login');

Route::get('/home', [WeddingController::class, 'home'])->name('home');

Route::get('/aboutal', [WeddingController::class, 'aboutal'])->name('aboutal');

Route::get('/serviceal', [WeddingController::class, 'serviceal'])->name('serviceal');

Route::get('/order', [WeddingController::class, 'order'])->name('order');

Route::get('/profile', [WeddingController::class, 'profile'])->name('profile');

Route::get('/planning', [WeddingController::class, 'planning'])->name('planning');

Route::get('/post', [WeddingController::class, 'post'])->name('post');

Route::get('/tablepage', [WeddingController::class, 'tablepage'])->name('tablepage');

Route::resource('table', PostsController::class)->names('table');

Route::get('/login', [WeddingController::class, 'showFormLogin'])->name('login');
Route::post('login', [WeddingController::class, 'login']);
Route::get('/signup', [WeddingController::class, 'showFormRegister'])->name('signup');
Route::post('signup', [WeddingController::class, 'signup']);
 
Route::group(['middleware' => 'auth', 'accessrole:admin,user'], function () {
    
    Route::get('home', [WeddingController::class, 'home'])->name('home');
    Route::get('logout', [WeddingController::class, 'logout'])->name('logout');
 
});
