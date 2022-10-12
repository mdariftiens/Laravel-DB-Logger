<?php

use Illuminate\Support\Facades\Route;
use Mdariftiens\DBlog\Http\Controllers\LogController;

Route::get('show-log', [LogController::class,'index'])->name('showLog');
Route::get('show-log/{id}', [LogController::class,'show'])->name('showLogDetail');
Route::delete('log-delete/{id}', [LogController::class,'destroy'])->name('log-delete');
