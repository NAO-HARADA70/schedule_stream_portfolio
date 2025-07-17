<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;

Route::get('/', [DiaryController::class, 'top'])->name('diaries.top');

Auth::routes();

Route::resource('diaries', DiaryController::class);
Route::get('diaries/delete/{id}',[App\Http\Controllers\DiaryController::class, 'delete'])->name('diaries.delete');
