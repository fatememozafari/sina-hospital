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
//fortify package

/*
|--------------------------------------------------------------------------
| spaite authorization Routes
|--------------------------------------------------------------------------
|
*/


//Route::prefix('admin')->middleware('auth')->group(function (){

Route::get('asign', [RoleController::class, 'asignPermissionForm']);
Route::post('asign', [RoleController::class, 'syncPermission']);
Route::resource('roles', RoleController::class)->names([
    'create'=>'role.create',
    'index'=>'role.list',
]);
Route::resource('asign', AsignController::class)->names([
    'create'=>'asign.create',
    'index'=>'asign.list',
]);
Route::resource('permissions', PermissionController::class)->names([
    'create'=>'permission.create',
    'index'=>'permission.list',
]);

//});

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
    Route::resource('contacts',ContactController::class)->names([
        'create'=>'contacts.create',
        'edit'=>'contacts.edit',
        'show'=>'contacts.show',
        'index'=>'contacts.list',
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
    Route::resource('scores',ScoreController::class)->names([
        'create'=>'score.create',
        'edit'=>'score.edit',
        'show'=>'score.show',
        'index'=>'score.list',
    ]);
    Route::resource('teachers',TeacherController::class)->names([
        'create'=>'teachers.create',
        'edit'=>'teachers.edit',
        'show'=>'teachers.show',
        'index'=>'teachers.list',
    ]);
    Route::resource('users',UserController::class)->names([
        'create'=>'user.create',
        'edit'=>'user.edit',
        'show'=>'user.show',
        'index'=>'user.list',
    ]);
    Route::view('event','admin.courses.event')->name('event');
    Route::view('event2','admin.teachers.event')->name('teachers.event');
    Route::view('event3','admin.users.event')->name('user.event');

});


/*
|--------------------------------------------------------------------------
| front Routes
|--------------------------------------------------------------------------
|
*/
//Route::middleware('auth')->group(function () {

    Route::view('dashboard','front.dashboard')->name('front.dashboard');

    Route::resource('about',\App\Http\Controllers\front\AboutController::class)->names([

        'show'=>'front.about.show',
        'index'=>'front.about.list',
    ]);
    Route::resource('contact',\App\Http\Controllers\front\ContactController::class)->names([
        'create'=>'front.contact.create',

    ]);
    Route::resource('courses',\App\Http\Controllers\front\CourseController::class)->names([
        'create'=>'front.course.create',//ثبتنام در دوره
        'edit'=>'front.course.edit',
        'show'=>'front.course.show',
        'index'=>'front.course.list',
    ]);
    Route::resource('documents',\App\Http\Controllers\front\DocumentController::class)->names([
        'show'=>'front.document.show',
        'index'=>'front.document.list',
    ]);
    Route::resource('gallery',GalleryController::class)->names([

        'show'=>'front.gallery.show',
        'index'=>'front.gallery.list',
    ]);
    Route::resource('news',\App\Http\Controllers\front\NewsController::class)->names([
        'show'=>'front.news.show',
        'index'=>'front.news.list',
    ]);
Route::resource('newsletter',\App\Http\Controllers\front\NewsletterController::class)->names([
    'create'=>'front.newsletter.create',

]);
    Route::resource('online_exams',OnlineExamController::class)->names([
        'create'=>'front.online_exam.create',
        'edit'=>'front.online_exam.edit',
        'show'=>'front.online_exam.show',
        'index'=>'front.online_exam.list',
    ]);
    Route::resource('questions',\App\Http\Controllers\front\QuestionController::class)->names([

        'show'=>'front.question.show',
        'index'=>'front.question.list',
    ]);
    Route::resource('scores',ResultController::class)->names([
        'create'=>'front.result.create',
        'edit'=>'front.result.edit',
        'show'=>'front.result.show',
        'index'=>'front.result.list',
    ]);
    Route::resource('teachers',\App\Http\Controllers\front\TeacherController::class)->names([

        'show'=>'front.teacher.show',
        'index'=>'front.teacher.list',
    ]);
    Route::resource('users',\App\Http\Controllers\front\UserController::class)->names([
        'create'=>'front.user.create',
        'edit'=>'front.user.edit',
        'show'=>'front.user.show',
        'index'=>'front.user.list',
    ]);
    Route::view('event','front.courses.event')->name('event');
    Route::view('event2','front.teachers.event')->name('teachers.event');
    Route::view('event3','front.users.event')->name('user.event');





//});




