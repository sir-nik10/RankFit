<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseLogController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/exercise-log', [ExerciseLogController::class, 'create'])->name('exercise-log.create');
Route::post('/exercise-log', [ExerciseLogController::class, 'store'])->name('exercise-log.store');