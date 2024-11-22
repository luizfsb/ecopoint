<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;

Route::get('/', [NavController::class, 'index'])->name('index');
Route::get('estacoes', [NavController::class, 'estacoes'])->name('estacoes');
Route::get('planos', [NavController::class, 'planos'])->name('planos');
Route::get('ouro', [NavController::class, 'ouro'])->name('ouro');
Route::get('prata', [NavController::class, 'prata'])->name('prata');
Route::get('bronze', [NavController::class, 'bronze'])->name('bronze');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
