<?php

use App\Http\Controllers\PassingDataController;
use Illuminate\Support\Facades\Route;


// we can learn session here
Route::get('/', [PassingDataController::class, 'index']);
Route::get('/store-session', [PassingDataController::class, 'storesession']);
Route::get('/delete-session', [PassingDataController::class, 'deletesession']);


// this is for normal route
Route::get('/getdata', [PassingDataController::class, 'getdata']);
Route::get('/showdata/{id}', [PassingDataController::class, 'show'])->name('show');
