<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kiderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;


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
Route::put('updateTeacher/{id}', [TeacherController::class, 'update'])->name('updateTeacher');
Route::get('showTeacher/{id}', [TeacherController::class, 'show'])->name('showTeacher');
Route::delete('deleteTeacher', [TeacherController::class, 'destroy'])->name('deleteTeacher');
Route::get('trashTeacher', [TeacherController::class, 'trash'])->name('trashTeacher');
Route::get('restoreTeacher/{id}', [TeacherController::class, 'restore'])->name('restoreTeacher');
Route::delete('forceDeleteTeacher', [TeacherController::class, 'forceDelete'])->name('forceDeleteTeacher');

Route::post('TeacherInserted', [TeacherController::class, 'store'])->name('TeacherInserted');




