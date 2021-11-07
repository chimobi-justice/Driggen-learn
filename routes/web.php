<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Instructor\InstructorController;
use App\Http\Controllers\Instructor\SettingController;
use App\Http\Controllers\Users\HomeController;
use App\Http\Controllers\Users\DiscoverController;
use App\Http\Controllers\Users\AccountController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\Instructor\SignupController;
use App\Http\Controllers\Auth\FacebookController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\CourseCreator;
use App\Http\Controllers\Users\UserAllCourse;
use App\Http\Controllers\Users\SettingsController;
use App\Http\Controllers\Users\UserSearchController;
use App\Http\Controllers\Instructor\InstructorSearchController;


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


/**
 * Public routes
 */

Route::get('/', [IndexController::class, 'index']);

Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');

Route::get('/courses', [CourseController::class, 'index'])->name('courses');

Route::view('/our-team', 'frontend.pages.Team');

Route::get('driggen-learn-pricing', [PricingController::class, 'index'])->name('pricing');

Route::get('contact-us', [ContactController::class, 'index'])->name('contact');
Route::post('contact-us', [ContactController::class, 'store']);


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/signup_account', [SignupController::class, 'index'])->name('instructor.register');
Route::post('/signup_account', [SignupController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

/**
 * Social Routes
 */

Route::get('/google', [GoogleController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('/facebook', [FacebookController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);

/**
 * End Social Routes
 */



/**
 * End of public routes
 */


 /**
 * Autheticated routes
 */

Route::group(['middleware' => 'auth'], function() {
  Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

  Route::group([
    'prefix' => 'dashboard',
    'as' => 'dashboard.'
  ], function() {
    Route::get('/instructor/home', [InstructorController::class, 'index'])
        ->name('instructors.index');

    Route::get('/instructor/account', [InstructorController::class, 'showProfile'])
        ->name('instructors.account');

    Route::put('/instructor/account', [InstructorController::class, 'updateProfile']);

    Route::get('/instructor/create', [InstructorController::class, 'create'])
        ->name('instructors.create');

    Route::post('/instructor/create', [InstructorController::class, 'store']);

    Route::get('/instructor/course/{id}', [InstructorController::class, 'show'])
        ->name('instructors.course');

    Route::delete('/instructor/course/{course}', [InstructorController::class, 'destroy'])
        ->name('instructors.destroy');

    Route::get('instructor/settings', [SettingController::class, 'index'])
        ->name('instructor.settings');
 
    Route::put('instructor/settings', [SettingController::class, 'store']);

    Route::get('instructor/q/', [InstructorSearchController::class, 'search'])
        ->name('instructor.search');  

  });

  Route::group([
    'prefix' => 'dashboard',
    'as' => 'dashboard.'
  ], function() {
    Route::get('/user/home', [HomeController::class, 'index'])
        ->name('users.index');

    Route::get('/user/discovers', [DiscoverController::class, 'index'])
        ->name('users.discovers');

    Route::get('/user/discovers/lecture/{course}', [DiscoverController::class, 'show'])
        ->name('users.show');

    Route::post('/user/discovers/lecture/{id}', [DiscoverController::class, 'store'])
    ->name('user.comment.store');

    Route::get('/p/user/{name}/{id}', [DiscoverController::class, 'instructor'])
       ->name('instructor');

    Route::get('user/enrolled-courses', [UserAllCourse::class, 'index'])
       ->name('page.user.course');

    Route::post('user/{course}/enrollcourse', [UserAllCourse::class, 'store'])
       ->name('page.user.enroll');

    Route::delete('user/{course}/destroy-course', [UserAllCourse::class, 'destroy'])
       ->name('page.user.enroll.destroy');
        
    Route::get('/user/account', [AccountController::class, 'index'])
        ->name('users.account');    
    Route::put('/user/account', [AccountController::class, 'store']);

    Route::get('user/settings', [SettingsController::class, 'index'])
        ->name('users.settings');

    Route::put('user/settings', [SettingsController::class, 'store']); 
    
    Route::get('user/q/', [UserSearchController::class, 'search'])
        ->name('user.search');  
        
  });

});

 /**
 * End of Autheticated routes
 */
