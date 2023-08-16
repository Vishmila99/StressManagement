<?php

use App\Http\Controllers\AboutUsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;

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
/* General Routes */
// Route::view('/','components.home')->name('index');
// Route::view('/about','components.about_us')->name('about');
Route::get('/about', [AboutUsController::class, 'index'])->name('about');
// Route::view('/services','components.services')->name('services');
Route::view('/contact','components.contact_us')->name('contact');
Route::view('/blog' ,'components.blog')->name('blog');
Route::view('/services', 'components.services')->name('services');
Route::view('/individual', 'components.individual')->name('individual');
Route::view('/individual_form', 'components.individual_form')->name('individual_form');
Route::view('/games', 'components.games')->name('games');
Route::view('/games/puzzle', 'components.games.puzzle')->name('puzzle');
Route::view('/games/sweetworld', 'components.games.sweetworld')->name('sweetworld');
Route::view('/games/papertoss', 'components.games.papertoss')->name('papertoss');


Route::post('/contact',[ContactController::class, 'store'])->name('contactus');





Auth::routes(['register' => TRUE]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

/* User Routes */
Route::prefix('user')->name('user.')->group(function () {

    Route::middleware(['guest:web'])->group(function () {
        Route::view('login','auth.loginuser')->name('login');
        Route::post('login',[LoginController::class, 'login'])->name('login.check');

    });

    Route::middleware(['auth:web'])->group(function () {
        Route::get('/dashboard',[UserController::class, 'index'])->name('dashboard');
        Route::post('logout',[LoginController::class, 'logout'])->name('logout');

    });
});

/* Doctor Routes */
Route::prefix('doctor')->name('doctor.')->group(function () {

    Route::middleware(['guest:doctor'])->group(function () {
        Route::view('login','auth.logindoctor')->name('login');
        Route::post('login',[LoginController::class, 'login'])->name('login.check');

    });

    Route::middleware(['auth:doctor'])->group(function () {
        Route::get('/dashboard',[DoctorController::class, 'index'])->name('dashboard');
        Route::post('logout',[LoginController::class, 'logout'])->name('logout');

    });
});

/* Admin Routes */
Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware(['guest:admin'])->group(function () {
        Route::view('login','auth.loginadmin')->name('login');
        Route::post('login',[LoginController::class, 'login'])->name('login.check');

    });

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/dashboard',[AdminController::class, 'index'])->name('dashboard');
        Route::post('logout',[LoginController::class, 'logout'])->name('logout');

    });
});

// Auth::routes();

// Route::get('/home', function() {
//     return view('home');
// })->name('home')->middleware('auth');
