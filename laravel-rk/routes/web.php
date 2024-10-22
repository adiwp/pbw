<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuTamuController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BukuTamuController::class, 'index'])->name('home');
Route::get('/bukutamu', [BukuTamuController::class, 'create'])->name('bukutamu.create');
Route::post('/bukutamu', [BukuTamuController::class, 'store'])->name('bukutamu.store');
Route::get('/bukutamu/komentar', [BukuTamuController::class, 'show'])->name('bukutamu.show');