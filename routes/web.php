<?php

use App\Http\Controllers\{ProfileController, IndexController, ProyectoController};
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'home'])->name('home');

Route::prefix('carmine')->middleware('auth')->group(function () {
    Route::get('/dashboard', [IndexController::class, 'dashboard'])->name('dashboard');

    Route::get('proyectos', [ProyectoController::class, 'index'])->name('proyectos');
    Route::get('proyecto-create', [ProyectoController::class, 'create'])->name('create.proyecto');
    Route::post('proyecto-store', [ProyectoController::class,'store'])->name('store.proyecto');
    Route::get('proyecto-edit/{proyecto}', [ProyectoController::class, 'edit'])->name('edit.proyecto');
    Route::put('proyecto-update/{proyecto}', [ProyectoController::class, 'update'])->name('update.proyecto');
    Route::delete('proyecto-destroy/{proyecto}', [ProyectoController::class, 'destroy'])->name('destroy.proyecto');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
