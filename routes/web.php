<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
/*
|--------------------------------------------------------------------------
| auth Routes
|--------------------------------------------------------------------------
|
*/
//Route::middleware('auth')->group(function () {
    Route::view('login', 'auth.login')->name('login');
    Route::view('register', 'auth.register')->name('register');
    Route::view('forgetPassword', 'auth.forgetPassword')->name('forgetpassword');
    Route::view('resetPassword', 'auth.resetPassword')->name('resetpassword');
//});
/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
*/
Route::prefix('admin')->group(function (){
    Route::view('dashboard','admin.dashboard')->name('dashboard');
    Route::resource('about',\App\Http\Controllers\admin\AboutController::class)->names([
        'create'=>'about.create',
        'edit'=>'about.edit',
        'show'=>'about.show',
        'index'=>'about.list',
    ]);
    Route::resource('contact',\App\Http\Controllers\admin\ContactController::class)->names([
        'create'=>'contact.create',
        'edit'=>'contact.edit',
        'show'=>'contact.show',
        'index'=>'contact.list',
    ]);
    Route::resource('courses',\App\Http\Controllers\admin\CourseController::class)->names([
        'create'=>'course.create',
        'edit'=>'course.edit',
        'show'=>'course.show',
        'index'=>'course.list',
    ]);
    Route::resource('documents',\App\Http\Controllers\admin\DocumentController::class)->names([
        'create'=>'document.create',
        'edit'=>'document.edit',
        'show'=>'document.show',
        'index'=>'document.list',
    ]);
    Route::resource('gallery',\App\Http\Controllers\admin\GalleryController::class)->names([
        'create'=>'gallery.create',
        'edit'=>'gallery.edit',
        'show'=>'gallery.show',
        'index'=>'gallery.list',
    ]);
    Route::resource('news',\App\Http\Controllers\admin\NewsController::class)->names([
        'create'=>'news.create',
        'edit'=>'news.edit',
        'show'=>'news.show',
        'index'=>'news.list',
    ]);
    Route::resource('online_exams',\App\Http\Controllers\admin\OnlineExamController::class)->names([
        'create'=>'online_exam.create',
        'edit'=>'online_exam.edit',
        'show'=>'online_exam.show',
        'index'=>'online_exam.list',
    ]);
    Route::resource('questions',\App\Http\Controllers\admin\QuestionController::class)->names([
        'create'=>'question.create',
        'edit'=>'question.edit',
        'show'=>'question.show',
        'index'=>'question.list',
    ]);
    Route::resource('results',\App\Http\Controllers\admin\ResultController::class)->names([
        'create'=>'result.create',
        'edit'=>'result.edit',
        'show'=>'result.show',
        'index'=>'result.list',
    ]);
    Route::resource('teachers',\App\Http\Controllers\admin\TeacherController::class)->names([
        'create'=>'teacher.create',
        'edit'=>'teacher.edit',
        'show'=>'teacher.show',
        'index'=>'teacher.list',
    ]);
    Route::resource('users',\App\Http\Controllers\admin\UserController::class)->names([
        'create'=>'user.create',
        'edit'=>'user.edit',
        'show'=>'user.show',
        'index'=>'user.list',
    ]);
});
/*
|--------------------------------------------------------------------------
| front Routes
|--------------------------------------------------------------------------
|
*/
Route::view('about','front.about')->name('about');
Route::view('contact','front.contact')->name('contact');
Route::view('question','front.question')->name('question');
Route::view('news','front.news')->name('news');
