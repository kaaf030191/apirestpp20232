<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TeacherController;
 
Route::get('teacher/getall', [TeacherController::class, 'actionGetAll']);
?>