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
use App\Http\Controllers\admin\Ticket\TicketController;
use App\Http\Controllers\admin\Ticket\TicketCategoryController;
use App\Http\Controllers\admin\Ticket\TicketPriorityController;
use App\Http\Controllers\admin\Ticket\TicketAdminController;




/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
*/

Route::name('admin.')->group(function () {


    Route::view('dashboard', 'admin.dashboard')->name('dashboard');

// about route
    Route::get('about', [AboutController::class, 'index'])->name('about.index');
    Route::get('about-us/create', [AboutController::class, 'create'])->name('about.create');
    Route::post('about-us/store', [AboutController::class, 'store'])->name('about.store');
    Route::get('about-us/{about}/show', [AboutController::class, 'show'])->name('about.show');
    Route::get('about-us/{about}/edit', [AboutController::class, 'edit'])->name('about.edit');
    Route::post('about-us/{about}/update', [AboutController::class, 'update'])->name('about.update');
    Route::post('about-us/{about}/delete', [AboutController::class, 'destroy'])->name('about.delete');

// contacts route
    Route::get('contact-us', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('contact-us/create', [ContactController::class, 'create'])->name('contacts.create');
    Route::post('contact-us/store', [ContactController::class, 'store'])->name('contacts.store');
    Route::get('contact-us/{contact}/show', [ContactController::class, 'show'])->name('contacts.show');
    Route::get('contact-us/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::post('contact-us/{contact}/update', [ContactController::class, 'update'])->name('contacts.update');
    Route::post('contact-us/{contact}/delete', [ContactController::class, 'destroy'])->name('contacts.delete');

// courses route
    Route::get('courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('courses/create', [CourseController::class, 'create'])->name('courses.create');
    Route::post('courses/store', [CourseController::class, 'store'])->name('courses.store');
    Route::get('courses/{course}/show', [CourseController::class, 'show'])->name('courses.show');
    Route::get('courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');
    Route::post('courses/{course}/update', [CourseController::class, 'update'])->name('courses.update');
    Route::post('courses/{course}/delete', [CourseController::class, 'destroy'])->name('courses.delete');

// documents route
    Route::get('documents', [DocumentController::class, 'index'])->name('documents.index');
    Route::get('documents/create', [DocumentController::class, 'create'])->name('documents.create');
    Route::post('documents/store', [DocumentController::class, 'store'])->name('documents.store');
    Route::get('documents/{document}/show', [DocumentController::class, 'show'])->name('documents.show');
    Route::get('documents/{document}/edit', [DocumentController::class, 'edit'])->name('documents.edit');
    Route::post('documents/{document}/update', [DocumentController::class, 'update'])->name('documents.update');
    Route::post('documents/{document}/delete', [DocumentController::class, 'destroy'])->name('documents.delete');


// offline-courses route
    Route::get('offline-courses', [OfflineCourseController::class, 'index'])->name('offline-courses.index');
    Route::get('offline-courses/create', [OfflineCourseController::class, 'create'])->name('offline-courses.create');
    Route::post('offline-courses/store', [OfflineCourseController::class, 'store'])->name('offline-courses.store');
    Route::get('offline-courses/{offlineCourse}/show', [OfflineCourseController::class, 'show'])->name('offline-courses.show');
    Route::get('offline-courses/{offlineCourse}/edit', [OfflineCourseController::class, 'edit'])->name('offline-courses.edit');
    Route::post('offline-courses/{offlineCourse}/update', [OfflineCourseController::class, 'update'])->name('offline-courses.update');
    Route::post('offline-courses/{offlineCourse}/delete', [OfflineCourseController::class, 'destroy'])->name('offline-courses.delete');


// gallery route
    Route::get('gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('gallery/{gallery}/show', [GalleryController::class, 'show'])->name('gallery.show');
    Route::get('gallery/{gallery}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::post('gallery/{gallery}/update', [GalleryController::class, 'update'])->name('gallery.update');
    Route::post('gallery/{gallery}/delete', [GalleryController::class, 'destroy'])->name('gallery.delete');


// news route
    Route::get('news', [NewsController::class, 'index'])->name('news.index');
    Route::get('news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('news/store', [NewsController::class, 'store'])->name('news.store');
    Route::get('news/{news}/show', [NewsController::class, 'show'])->name('news.show');
    Route::get('news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::post('news/{news}/update', [NewsController::class, 'update'])->name('news.update');
    Route::post('news/{news}/delete', [NewsController::class, 'destroy'])->name('news.delete');


    Route::delete('/deleteImage/{id}', [NewsController::class, 'deleteImage']);


// newsletters route
    Route::get('newsletters', [NewsletterController::class, 'index'])->name('newsletters.index');
    Route::get('newsletters/create', [NewsletterController::class, 'create'])->name('newsletters.create');
    Route::post('newsletters/store', [NewsletterController::class, 'store'])->name('newsletters.store');
    Route::get('newsletters/{newsletter}/show', [NewsletterController::class, 'show'])->name('newsletters.show');
    Route::get('newsletters/{newsletter}/edit', [NewsletterController::class, 'edit'])->name('newsletters.edit');
    Route::post('newsletters/{newsletter}/update', [NewsletterController::class, 'update'])->name('newsletters.update');
    Route::post('newsletters/{newsletter}/delete', [NewsletterController::class, 'destroy'])->name('newsletters.delete');


// online_exams route
    Route::get('online_exams', [OnlineExamController::class, 'index'])->name('online_exams.index');
    Route::get('online_exams/create', [OnlineExamController::class, 'create'])->name('online_exams.create');
    Route::post('online_exams/store', [OnlineExamController::class, 'store'])->name('online_exams.store');
    Route::get('online_exams/{onlineExam}/show', [OnlineExamController::class, 'show'])->name('online_exams.show');
    Route::get('online_exams/{onlineExam}/edit', [OnlineExamController::class, 'edit'])->name('online_exams.edit');
    Route::post('online_exams/{onlineExam}/update', [OnlineExamController::class, 'update'])->name('online_exams.update');
    Route::post('online_exams/{onlineExam}/delete', [OnlineExamController::class, 'destroy'])->name('online_exams.delete');


// questions route
    Route::get('questions', [QuestionController::class, 'index'])->name('questions.index');
    Route::get('questions/create', [QuestionController::class, 'create'])->name('questions.create');
    Route::post('questions/store', [QuestionController::class, 'store'])->name('questions.store');
    Route::get('questions/{question}/show', [QuestionController::class, 'show'])->name('questions.show');
    Route::get('questions/{question}/edit', [QuestionController::class, 'edit'])->name('questions.edit');
    Route::post('questions/{question}/update', [QuestionController::class, 'update'])->name('questions.update');
    Route::post('questions/{question}/delete', [QuestionController::class, 'destroy'])->name('questions.delete');

// teachers route
    Route::get('teachers', [TeacherController::class, 'index'])->name('teachers.index');
    Route::get('teachers/create', [TeacherController::class, 'create'])->name('teachers.create');
    Route::post('teachers/store', [TeacherController::class, 'store'])->name('teachers.store');
    Route::get('teachers/{teacher}/show', [TeacherController::class, 'show'])->name('teachers.show');
    Route::get('teachers/{teacher}/edit', [TeacherController::class, 'edit'])->name('teachers.edit');
    Route::post('teachers/{teacher}/update', [TeacherController::class, 'update'])->name('teachers.update');
    Route::post('teachers/{teacher}/delete', [TeacherController::class, 'destroy'])->name('teachers.delete');

// users route
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('users/{user}/show', [UserController::class, 'show'])->name('users.show');
    Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::post('users/{user}/update', [UserController::class, 'update'])->name('users.update');
    Route::post('users/{user}/delete', [UserController::class, 'destroy'])->name('users.delete');
    Route::get('ajax-user',[UserController::class,'ajaxUser'])->name('users.ajax');

    Route::delete('/deletephoto/{id}', [UserController::class, 'deletephoto']);

    // scores route
    Route::get('/scores', [\App\Http\Controllers\admin\ScoreController::class, 'index'])->name('scores.index');
    Route::get('/scores/{id}/create', [\App\Http\Controllers\admin\ScoreController::class, 'create'])->name('scores.create');
    Route::post('/scores', [\App\Http\Controllers\admin\ScoreController::class, 'store'])->name('scores.store');
    Route::get('/scores/{id}/edit', [\App\Http\Controllers\admin\ScoreController::class, 'edit'])->name('scores.edit');
    Route::put('/scores/{id}', [\App\Http\Controllers\admin\ScoreController::class, 'update'])->name('scores.update');
    Route::get('/scores/{id}', [\App\Http\Controllers\admin\ScoreController::class, 'show'])->name('scores.show');


    Route::get('/enroll-course-list', [\App\Http\Controllers\admin\EnrollController::class, 'courseList'])->name('enroll-course-list');
    Route::get('/enrolls', [\App\Http\Controllers\admin\EnrollController::class, 'index'])->name('enrolls.index');
    Route::get('course/{id}/enrolls', [\App\Http\Controllers\admin\EnrollController::class, 'create'])->name('enrolls.create');
    Route::post('/enrolls', [\App\Http\Controllers\admin\EnrollController::class, 'store'])->name('enrolls.store');

    Route::get('/results', [\App\Http\Controllers\admin\ResultController::class, 'index'])->name('results.index');
    Route::get('/results/{id}', [\App\Http\Controllers\admin\ResultController::class, 'show'])->name('results.show');

// tickets route
    Route::get('new-tickets', [TicketController::class, 'newTicket'])->name('tickets.newTicket');
    Route::get('open-tickets', [TicketController::class, 'openTicket'])->name('tickets.openTicket');
    Route::get('close-tickets', [TicketController::class, 'closeTicket'])->name('tickets.closeTicket');

    Route::get('tickets', [TicketController::class, 'index'])->name('tickets.index');
    Route::post('tickets/answer/{ticket}', [TicketController::class, 'answer'])->name('tickets.answer');
    Route::get('tickets/show/{ticket}', [TicketController::class, 'show'])->name('tickets.show');
    Route::get('tickets/change-status/{ticket}', [TicketController::class, 'changeStatus'])->name('tickets.changeStatus');

    // tickets category route
    Route::get('category', [TicketCategoryController::class, 'index'])->name('tickets.categories.index');
    Route::get('category/create', [TicketCategoryController::class, 'create'])->name('tickets.categories.create');
    Route::post('category/store', [TicketCategoryController::class, 'store'])->name('tickets.categories.store');
    Route::get('category/{ticketCategory}/edit', [TicketCategoryController::class, 'edit'])->name('tickets.categories.edit');
    Route::post('category/{ticketCategory}/update', [TicketCategoryController::class, 'update'])->name('tickets.categories.update');
    Route::post('category/{ticketCategory}/delete', [TicketCategoryController::class, 'destroy'])->name('tickets.categories.delete');


    // tickets priority route
    Route::get('priority', [TicketPriorityController::class, 'index'])->name('tickets.priorities.index');
    Route::get('priority/create', [TicketPriorityController::class, 'create'])->name('tickets.priorities.create');
    Route::post('priority/store', [TicketPriorityController::class, 'store'])->name('tickets.priorities.store');
    Route::get('priority/{ticketPriority}/edit', [TicketPriorityController::class, 'edit'])->name('tickets.priorities.edit');
    Route::post('priority/{ticketPriority}/update', [TicketPriorityController::class, 'update'])->name('tickets.priorities.update');
    Route::post('priority/{ticketPriority}/delete', [TicketPriorityController::class, 'destroy'])->name('tickets.priorities.delete');


    // tickets admin route
    Route::get('ticket-admin', [TicketAdminController::class, 'index'])->name('tickets.admins.index');
    Route::get('set-admin/{admin}', [TicketAdminController::class, 'set'])->name('tickets.admins.set');


    // sms route
    Route::get('sms', [\App\Http\Controllers\admin\Notify\SMSController::class, 'index'])->name('sms.index');
    Route::get('sms/create', [\App\Http\Controllers\admin\Notify\SMSController::class, 'create'])->name('sms.create');
    Route::post('sms/store', [\App\Http\Controllers\admin\Notify\SMSController::class, 'store'])->name('sms.store');
    Route::get('sms/{sms}/show', [\App\Http\Controllers\admin\Notify\SMSController::class, 'show'])->name('sms.show');
    Route::get('sms/{sms}/edit', [\App\Http\Controllers\admin\Notify\SMSController::class, 'edit'])->name('sms.edit');
    Route::post('sms/{sms}/update', [\App\Http\Controllers\admin\Notify\SMSController::class, 'update'])->name('sms.update');
    Route::post('sms/{sms}/delete', [\App\Http\Controllers\admin\Notify\SMSController::class, 'destroy'])->name('sms.delete');
    Route::get('ajax-sms',[\App\Http\Controllers\admin\Notify\SMSController::class,'ajaxUser'])->name('sms.ajax');
    Route::get('sms/change-status/{sms}', [\App\Http\Controllers\admin\Notify\SMSController::class, 'changeStatus'])->name('sms.changeStatus');


    // email route
    Route::get('email', [\App\Http\Controllers\admin\Notify\EmailController::class, 'index'])->name('email.index');
    Route::get('email/create', [\App\Http\Controllers\admin\Notify\EmailController::class, 'create'])->name('email.create');
    Route::post('email/store', [\App\Http\Controllers\admin\Notify\EmailController::class, 'store'])->name('email.store');
    Route::get('email/{email}/show', [\App\Http\Controllers\admin\Notify\EmailController::class, 'show'])->name('email.show');
    Route::get('email/{email}/edit', [\App\Http\Controllers\admin\Notify\EmailController::class, 'edit'])->name('email.edit');
    Route::post('email/{email}/update', [\App\Http\Controllers\admin\Notify\EmailController::class, 'update'])->name('email.update');
    Route::post('email/{email}/delete', [\App\Http\Controllers\admin\Notify\EmailController::class, 'destroy'])->name('email.delete');
    Route::get('ajax-email',[\App\Http\Controllers\admin\Notify\EmailController::class,'ajaxUser'])->name('email.ajax');
    Route::get('email/change-status/{email}', [\App\Http\Controllers\admin\Notify\EmailController::class, 'changeStatus'])->name('email.changeStatus');

    //email file route
    Route::get('email/{email}', [\App\Http\Controllers\admin\Notify\EmailFileController::class, 'index'])->name('email-file.index');
    Route::post('email/{emailFile}/delete', [\App\Http\Controllers\admin\Notify\EmailFileController::class, 'destroy'])->name('email-file.delete');

});
