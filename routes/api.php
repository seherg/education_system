<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AnnouncementController;
use App\Http\Controllers\Api\ContentController;
use App\Http\Controllers\Api\ContentDocumentController;
use App\Http\Controllers\Api\ContentTextController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\StaffController;
use App\Http\Controllers\Api\TeacherController;
use App\Http\Controllers\Api\StudentController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/announcements',AnnouncementController::class);

Route::resource('/contents', ContentController::class);

Route::resource('/content-documents', ContentDocumentController::class);

Route::resource('/content-texts', ContentTextController::class);

Route::resource('/courses', CourseController::class);

Route::resource('/staff', StaffController::class);

Route::resource('/teacher', TeacherController::class);

Route::resource('/student', StudentController::class);
