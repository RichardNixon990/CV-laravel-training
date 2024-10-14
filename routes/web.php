<?php

use App\Http\Controllers\CvController;
use Illuminate\Support\Facades\Route;

Route::get('/about', [CvController::class, 'about']);
Route::get('/experinece', [CvController::class, 'experinece']);
Route::get('/education', [CvController::class, 'education']);
Route::get('/skills', [CvController::class, 'skills']);
Route::get('/interests', [CvController::class, 'interests']);
Route::get('/awards', [CvController::class, 'awards']);
