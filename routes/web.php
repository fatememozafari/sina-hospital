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
Route::get('/home', function () {
    return view('home');
})->name('home');


/*
|--------------------------------------------------------------------------
| auth Routes
|--------------------------------------------------------------------------
|
*/
//fortify package
Route::get('redirects', '\App\Http\Controllers\auth\AuthController@index');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::view('access-denied', 'access-denied')->name('access-denied');


/*
|--------------------------------------------------------------------------
| spaite authorization Routes
|--------------------------------------------------------------------------
|
*/


Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('asigns', [RoleController::class, 'asignPermissionForm']);
    Route::post('asigns', [RoleController::class, 'syncPermission']);

    Route::resource('roles', RoleController::class)->names([
        'create' => 'role.create',
        'index' => 'role.list',
    ]);
    Route::resource('asigns', AsignController::class)->names([
        'create' => 'asign.create',
        'index' => 'asign.list',
    ]);
    Route::resource('permissions', PermissionController::class)->names([
        'create' => 'permission.create',
        'index' => 'permission.list',
    ]);

});
