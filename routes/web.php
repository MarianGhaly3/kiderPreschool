<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kiderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;



// website front Controller

Route::get('/', [kiderController::class, 'index'])->name('index');
Route::get('/about', [kiderController::class, 'about'])->name('about');
Route::get('/appointment', [kiderController::class, 'appointment'])->name('appointment');
Route::get('/classes', [kiderController::class, 'classes'])->name('classes');
Route::get('/contact', [kiderController::class, 'contact'])->name('contact');
Route::get('/call', [kiderController::class, 'call'])->name('call');
Route::get('/facility', [kiderController::class, 'facility'])->name('facility');
Route::get('/team', [kiderController::class, 'team'])->name('team');
Route::get('/testimonial', [kiderController::class, 'testimonial'])->name('testimonial');
Route::get('/teacherForm', [kiderController::class, 'teacherForm'])->name('teacherForm');
Route::get('/error', [kiderController::class,'error'])->name('error');
Route::get('/page', [kiderController::class,'page'])->name('page');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

// Teachers Controller
Route::get('/admin/teachers', [TeacherController::class, 'index'])->name('teachers');
Route::get('/admin/addTeacher', [TeacherController::class, 'create'])->name('addTeacher');
Route::get('/admin/editTeacher/{id}', [TeacherController::class, 'edit'])->name('editTeacher');
Route::put('/updateTeacher/{id}', [TeacherController::class, 'update'])->name('updateTeacher');
Route::get('/admin/showTeacher/{id}', [TeacherController::class, 'show'])->name('showTeacher');
Route::delete('/admin/deleteTeacher', [TeacherController::class, 'destroy'])->name('deleteTeacher');
Route::get('/admin/trashTeacher', [TeacherController::class, 'trash'])->name('trashTeacher');
Route::get('/admin/restoreTeacher/{id}', [TeacherController::class, 'restore'])->name('restoreTeacher');
Route::delete('/admin/forceDeleteTeacher', [TeacherController::class, 'forceDelete'])->name('forceDeleteTeacher');

Route::post('TeacherInserted', [TeacherController::class, 'store'])->name('TeacherInserted');


// Course Controller
Route::get('/admin/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/admin/addCourse', [CourseController::class, 'create'])->name('addCourse');
Route::get('/admin/editCourse/{id}', [CourseController::class, 'edit'])->name('editCourse');
Route::put('/admin/updateCourse/{id}', [CourseController::class, 'update'])->name('updateCourse');
Route::get('/admin/showCourse/{id}', [CourseController::class, 'show'])->name('showCourse');
Route::delete('/admin/deleteCourse', [CourseController::class, 'destroy'])->name('deleteCourse');
Route::get('/admin/trashCourse', [CourseController::class, 'trash'])->name('trashCourse');
Route::get('/admin/restoreCourse/{id}', [CourseController::class, 'restore'])->name('restoreCourse');
Route::delete('/admin/forceDeleteCourse', [CourseController::class, 'forceDelete'])->name('forceDeleteCourse');

Route::post('CourseInserted', [CourseController::class, 'store'])->name('CourseInserted');




