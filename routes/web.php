<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\DocumentController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\NewsController;
use App\Http\Controllers\admin\OnlineExamController;
use App\Http\Controllers\admin\QuestionController;
use App\Http\Controllers\admin\ResultController;
use App\Http\Controllers\admin\TeacherController;
use App\Http\Controllers\admin\UserController;
use \App\Http\Controllers\auth\AuthController;
use \App\Http\Controllers\auth\VerifyEmailController;

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

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
*/
Route::prefix('admin')->group(function (){
    Route::view('dashboard','admin.dashboard')->name('dashboard');

    Route::resource('about',AboutController::class)->names([
        'create'=>'about.create',
        'edit'=>'about.edit',
        'show'=>'about.show',
        'index'=>'about.list',
    ]);
    Route::resource('contact',ContactController::class)->names([
        'create'=>'contact.create',
        'edit'=>'contact.edit',
        'show'=>'contact.show',
        'index'=>'contact.list',
    ]);
    Route::resource('courses',CourseController::class)->names([
        'create'=>'course.create',
        'edit'=>'course.edit',
        'show'=>'course.show',
        'index'=>'course.list',
    ]);
    Route::resource('documents',DocumentController::class)->names([
        'create'=>'document.create',
        'edit'=>'document.edit',
        'show'=>'document.show',
        'index'=>'document.list',
    ]);
    Route::resource('gallery',GalleryController::class)->names([
        'create'=>'gallery.create',
        'edit'=>'gallery.edit',
        'show'=>'gallery.show',
        'index'=>'gallery.list',
    ]);
    Route::resource('news',NewsController::class)->names([
        'create'=>'news.create',
        'edit'=>'news.edit',
        'show'=>'news.show',
        'index'=>'news.list',
    ]);
    Route::resource('online_exams',OnlineExamController::class)->names([
        'create'=>'online_exam.create',
        'edit'=>'online_exam.edit',
        'show'=>'online_exam.show',
        'index'=>'online_exam.list',
    ]);
    Route::resource('questions',QuestionController::class)->names([
        'create'=>'question.create',
        'edit'=>'question.edit',
        'show'=>'question.show',
        'index'=>'question.list',
    ]);
    Route::resource('results',ResultController::class)->names([
        'create'=>'result.create',
        'edit'=>'result.edit',
        'show'=>'result.show',
        'index'=>'result.list',
    ]);
    Route::resource('teachers',TeacherController::class)->names([
        'create'=>'teacher.create',
        'edit'=>'teacher.edit',
        'show'=>'teacher.show',
        'index'=>'teacher.list',
    ]);
    Route::resource('users',UserController::class)->names([
        'create'=>'user.create',
        'edit'=>'user.edit',
        'show'=>'user.show',
        'index'=>'user.list',
    ]);
    Route::view('event','admin.courses.event')->name('event');
    Route::view('event2','admin.teachers.event')->name('teacher.event');
    Route::view('event3','admin.users.event')->name('user.event');

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
