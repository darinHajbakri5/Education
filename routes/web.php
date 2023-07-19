<?php

use Silber\Bouncer\Bouncer;
use App\Http\Middleware\ScopeBouncer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Middleware\LocalizationMiddleware;
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

// Import the ScopeBouncer middleware

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{

         Route::get('/' , function(){
           return view('home');})->name('home1');
        Route::prefix('admin')->middleware(['auth', 'TeacherMiddleware'])->group(function () {
            Route::get('/course/create', [CourseController::class, 'create'])->name('create');
            Route::post('/course', [CourseController::class, 'store'])->name('course.store');
            Route::get('/course/{course}/edit', [CourseController::class, 'edit'])->name('course.edit');
            Route::put('/course/{course}', [CourseController::class, 'update'])->name('course.update');
            Route::delete('/course/{course}', [CourseController::class, 'destroy'])->name('destroy');
            Route::get('/course/manage', [CourseController::class, 'manage'])->name('manage');
            Route::get('/student', [CourseController::class, 'student'])->name('student');


    });

    Route::get('/addcart', [CourseController::class, 'viewCart'])->name('viewCart')->middleware('auth');
    Route::post('/addcart/{course}', [CourseController::class, 'addcart'])->name('addCart')->middleware('auth');
    Route::get('/addcart/{cart}', [CourseController::class, 'CourseCartShow'])->name('course.cart.show')->middleware('auth');
    Route::delete('/addcart/{cart}', [CourseController::class, 'destroycart'])->name('destroy.cart');
    Route::get('/home', [CourseController::class, 'index'])->name('home')->middleware('auth');
    Route::get('/course/{course}', [CourseController::class, 'show'])->name('course.show')->middleware('auth');

    Route::post('/users', [UserController::class, 'store'])->name('store');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');
    Route::post('/users/authenticate', [UserController::class, 'authenticate'])->name('authenticate');
    Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
    Route::get('/register', [UserController::class, 'create'])->name('register')->middleware('guest');

});
