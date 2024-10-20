<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home']);
Route::post('/node/store', [MainController::class, 'store'])->name('add-new-node');
Route::get('/node/{id}', [MainController::class, 'show'])->name('node-detail');
