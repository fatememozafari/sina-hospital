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
use App\Http\Controllers\admin\ScoreController;
use App\Http\Controllers\admin\TeacherController;
use App\Http\Controllers\admin\UserController;
use \App\Http\Controllers\auth\AuthController;
use \App\Http\Controllers\auth\VerifyEmailController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\AsignController;
use App\Http\Controllers\admin\OfflineCourseController;
use \App\Http\Controllers\admin\NewsletterController;


/*
|--------------------------------------------------------------------------
| front Routes
|--------------------------------------------------------------------------
|
*/
//Route::middleware('auth')->group(function () {

Route::view('dashboard', 'front.dashboard')->name('front.dashboard');
Route::resource('about', \App\Http\Controllers\front\AboutController::class)->names([
    'show' => 'front.about.show',
    'index' => 'front.about.list',
    'create' => 'front.about.create',
]);
Route::resource('contacts', \App\Http\Controllers\front\ContactController::class)->names([
    'create' => 'front.contact.create',
]);

Route::resource('courses', \App\Http\Controllers\front\CourseController::class)->names([
    'create' => 'front.course.create',//ثبتنام در دوره
    'edit' => 'front.course.edit',
    'show' => 'front.course.show',
    'index' => 'front.course.list',
]);
Route::resource('gallery', GalleryController::class)->names([
    'show' => 'front.gallery.show',
    'index' => 'front.gallery.list',
]);
Route::resource('news', \App\Http\Controllers\front\NewsController::class)->names([
    'show' => 'front.news.show',
    'index' => 'front.news.list',
]);
Route::resource('newsletters', \App\Http\Controllers\front\NewsletterController::class)->names([
    'create' => 'front.newsletter.create',
    'store' => 'front.newsletter.store',
]);
Route::resource('online_exams', OnlineExamController::class)->names([
    'create' => 'front.online_exam.create',
    'edit' => 'front.online_exam.edit',
    'show' => 'front.online_exam.show',
    'index' => 'front.online_exam.list',
]);
Route::resource('questions', \App\Http\Controllers\front\QuestionController::class)->names([
    'show' => 'front.question.show',
    'index' => 'front.question.list',
]);
Route::resource('teachers', \App\Http\Controllers\front\TeacherController::class)->names([
    'show' => 'front.teacher.show',
    'index' => 'front.teacher.list',
]);
Route::resource('users', \App\Http\Controllers\front\UserController::class);
Route::delete('/deletephoto/{id}', [\App\Http\Controllers\front\UserController::class, 'deletephoto']);

Route::resource('scores', ResultController::class)->names([
    'create' => 'front.result.create',
    'edit' => 'front.result.edit',
    'show' => 'front.result.show',
    'index' => 'front.result.list',
]);

Route::resource('documents', \App\Http\Controllers\front\DocumentController::class)->names([
    'create' => 'front.document.create',
    'edit' => 'front.document.edit',
    'show' => 'front.document.show',
    'index' => 'front.document.list',
]);
Route::resource('offline-courses', \App\Http\Controllers\front\OfflineCourseController::class)->names([
    'show' => 'front.offline.show',
    'index' => 'front.offline.list',
]);

Route::get('results', [\App\Http\Controllers\front\ScoreController::class, 'index'])->name('front.result.list');
Route::get('/enrolls', [\App\Http\Controllers\front\EnrollController::class, 'index']);
//Route::get('/enrolls/{id}/create',[\App\Http\Controllers\front\EnrollController::class,'create']);
Route::post('/enrolls', [\App\Http\Controllers\front\EnrollController::class, 'store'])->name('front.enroll.store');


//});


