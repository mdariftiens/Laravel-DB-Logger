<?php

use Illuminate\Support\Facades\Route;
use Mdariftiens\DBlog\Http\Controllers\LogController;

Route::get('show-log', [LogController::class,'index']);
