<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/mahasiswa/{nrp}', [PageController::class, 'showStudent'])->name('students.show');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/project-idea', [PageController::class, 'project'])->name('project');
Route::get('/agent/{tema?}', [PageController::class, 'project'])->name('agent');
Route::get('/hitung/{angka1}/{angka2}/{operasi}', [PageController::class, 'calculate'])->name('calculator');
