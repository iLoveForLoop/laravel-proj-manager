<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AssignmentController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('projects', ProjectsController::class);
Route::resource('teammembers', TeamMemberController::class);
Route::resource('tasks', TaskController::class);
Route::resource('assigments', AssignmentController::class);