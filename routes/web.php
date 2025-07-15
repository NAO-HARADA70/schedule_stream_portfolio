<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('top', [DiaryController::class, 'top'])->name('diaries.top');
Route::resource('diaries', DiaryController::class);
Route::get('diaries/delete/{id}',[App\Http\Controllers\DiaryController::class, 'delete'])->name('diaries.delete');
