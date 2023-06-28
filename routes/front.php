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
Route::name('front.')->group(function () {

    Route::view('dashboard', 'front.dashboard')->name('dashboard');

    Route::resource('about', \App\Http\Controllers\front\AboutController::class);

    Route::resource('contacts', \App\Http\Controllers\front\ContactController::class);

    Route::resource('courses', \App\Http\Controllers\front\CourseController::class);

    Route::resource('gallery', GalleryController::class);

    Route::resource('news', \App\Http\Controllers\front\NewsController::class);

    Route::resource('newsletters', \App\Http\Controllers\front\NewsletterController::class);

    Route::resource('online_exams', OnlineExamController::class);

    Route::resource('questions', \App\Http\Controllers\front\QuestionController::class);

    Route::resource('teachers', \App\Http\Controllers\front\TeacherController::class);

    Route::resource('users', \App\Http\Controllers\front\UserController::class);

    Route::delete('/deletephoto/{id}', [\App\Http\Controllers\front\UserController::class, 'deletephoto']);

    Route::resource('scores', \App\Http\Controllers\front\ScoreController::class);

    Route::resource('documents', \App\Http\Controllers\front\DocumentController::class);

    Route::resource('offline-courses', \App\Http\Controllers\front\OfflineCourseController::class);

    Route::get('results', [\App\Http\Controllers\front\ScoreController::class, 'index'])->name('results.index');

    Route::get('/enrolls', [\App\Http\Controllers\front\EnrollController::class, 'index'])->name('enrolls.index');
//Route::get('/enrolls/{id}/create',[\App\Http\Controllers\front\EnrollController::class,'create']);
    Route::post('/enrolls', [\App\Http\Controllers\front\EnrollController::class, 'store'])->name('enrolls.store');
//});


    Route::get('/download/{file}', [\App\Http\Controllers\Controller::class, 'getDownload'])->name('downloadFile');


    Route::post('courses/{course}/comments/store',[\App\Http\Controllers\front\CommentController::class, 'store'])->name('comments.store');
    Route::get('comment-ajax/{id}',[\App\Http\Controllers\front\CommentController::class,'ajaxDelete'])->name('comments.ajax');

    Route::post('courses/{course}/comments/replys/store',[\App\Http\Controllers\front\ReplyController::class,'store'])->name('replys.store');
    Route::get('reply-ajax/{id}',[\App\Http\Controllers\front\ReplyController::class,'ajaxDelete'])->name('replys.ajax');

});
