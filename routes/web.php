<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumniProfileController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventParticipantController;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\WebsiteController;



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [WebsiteController::class,'index'])->name('home');

Route::get('/alumni/search', [WebsiteController::class, 'searchAlumni'])->name('alumni.search');


Route::get('/contact', [WebsiteController::class,'contact'])->name('contact');
Route::get('/alumni', [WebsiteController::class,'alumni'])->name('alumni');
Route::get('/events', [WebsiteController::class,'event'])->name('event');
Route::get('/careers', [WebsiteController::class,'career'])->name('career');
Route::get('/posts', [WebsiteController::class,'post'])->name('post');
Route::get('/alumni/details/{id}', [WebsiteController::class, 'details'])->name('website.alumni.details');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashbard');


Route::get('/admin/dashboard/alumni/index', [AlumniProfileController::class, 'index'])->name('admin.alumni.index');
Route::post('/admin/dashboard/alumni/store', [AlumniProfileController::class, 'store'])->name('admin.alumni.store');
Route::get('/admin/dashboard/alumni/create', [AlumniProfileController::class, 'create'])->name('admin.alumni.create');
Route::get('/admin/dashboard/alumni/edit/{id}', [AlumniProfileController::class, 'edit'])->name('admin.alumni.edit');
Route::post('/admin/dashboard/alumni/update/{id}', [AlumniProfileController::class, 'update'])->name('admin.alumni.update');
Route::get('/admin/dashboard/alumni/delete/{id}', [AlumniProfileController::class, 'delete'])->name('admin.alumni.delete');






Route::get('/admin/dashboard/department/index', [DepartmentController::class, 'index'])->name('admin.department.index');
Route::post('/admin/dashboard/department/store', [DepartmentController::class, 'store'])->name('admin.department.store');
Route::get('/admin/dashboard/department/create', [DepartmentController::class, 'create'])->name('admin.department.create');
Route::get('/admin/dashboard/department/edit/{id}', [DepartmentController::class, 'edit'])->name('admin.department.edit');
Route::post('/admin/dashboard/department/update/{id}', [DepartmentController::class, 'update'])->name('admin.department.update');
Route::get('/admin/dashboard/department/delete/{id}', [DepartmentController::class, 'delete'])->name('admin.department.delete');


Route::get('/admin/dashboard/event-participant/index/{event_id?}', [EventParticipantController::class, 'index'])->name('admin.event.participant.index');
Route::delete('/admin/dashboard/event-participant/delete/{id}', [EventParticipantController::class, 'delete'])->name('admin.event.participant.delete');


Route::get('/admin/dashboard/job-post/index', [JobPostController::class, 'index'])->name('admin.job.post.index');
Route::post('/admin/dashboard/job-post/store', [JobPostController::class, 'store'])->name('admin.job.post.store');
Route::get('/admin/dashboard/job-post/create', [JobPostController::class, 'create'])->name('admin.job.post.create');
Route::get('/admin/dashboard/job-post/edit/{id}', [JobPostController::class, 'edit'])->name('admin.job.post.edit');
Route::post('/admin/dashboard/job-post/update/{id}', [JobPostController::class, 'update'])->name('admin.job.post.update');
Route::get('/admin/dashboard/job-post/delete/{id}', [JobPostController::class, 'delete'])->name('admin.job.post.delete');

Route::get('/admin/dashboard/post/index', [PostController::class, 'index'])->name('admin.post.index');
Route::post('/admin/dashboard/post/store', [PostController::class, 'store'])->name('admin.post.store');
Route::get('/admin/dashboard/post/create', [PostController::class, 'create'])->name('admin.post.create');
Route::get('/admin/dashboard/post/edit/{id}', [PostController::class, 'edit'])->name('admin.post.edit');
Route::post('/admin/dashboard/post/update/{id}', [PostController::class, 'update'])->name('admin.post.update');
Route::get('/admin/dashboard/post/delete/{id}', [PostController::class, 'delete'])->name('admin.post.delete');

Route::get('/admin/dashboard/notice/index', [NoticeController::class, 'index'])->name('admin.notice.index');
Route::post('/admin/dashboard/notice/store', [NoticeController::class, 'store'])->name('admin.notice.store');
Route::get('/admin/dashboard/notice/create', [NoticeController::class, 'create'])->name('admin.notice.create');
Route::get('/admin/dashboard/notice/edit/{id}', [NoticeController::class, 'edit'])->name('admin.notice.edit');
Route::post('/admin/dashboard/notice/update/{id}', [NoticeController::class, 'update'])->name('admin.notice.update');
Route::get('/admin/dashboard/notice/delete/{id}', [NoticeController::class, 'delete'])->name('admin.notice.delete');

Route::get('/admin/dashboard/event/index', [EventController::class, 'index'])->name('admin.event.index');
Route::post('/admin/dashboard/event/store', [EventController::class, 'store'])->name('admin.event.store');
Route::get('/admin/dashboard/event/create', [EventController::class, 'create'])->name('admin.event.create');
Route::get('/admin/dashboard/event/edit/{id}', [EventController::class, 'edit'])->name('admin.event.edit');
Route::post('/admin/dashboard/event/update/{id}', [EventController::class, 'update'])->name('admin.event.update');
Route::get('/admin/dashboard/event/delete/{id}', [EventController::class, 'delete'])->name('admin.event.delete');
