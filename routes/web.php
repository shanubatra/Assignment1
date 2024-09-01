<?php

use App\Http\Controllers\DetailsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DetailsController::class, 'index'])->name("home");
Route::get('/count', [DetailsController::class, 'count'])->name("count");
Route::post('/import', [DetailsController::class, 'import'])->name("import-data");
