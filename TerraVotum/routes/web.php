<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElectionController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ElectionController::class, 'index']);
