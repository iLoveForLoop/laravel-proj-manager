<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TeamMemberController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('projects', ProjectsController::class);
Route::resource('teammembers', TeamMemberController::class);