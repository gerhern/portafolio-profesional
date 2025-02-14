<?php

use App\Http\Controllers\{ProfileController, IndexController, ProyectoController, CertificacionController, ContactoController};
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('proyectos', [IndexController::class, 'proyectos'])->name('proyectos.guest');
Route::get('contacto', [IndexController::class, 'contacto'])->name('contacto.guest');
Route::post('contacto-store', [ContactoController::class,'store'])->name('contacto.store');

Route::prefix('carmine')->middleware('auth')->group(function () {
    Route::get('/dashboard', [IndexController::class, 'dashboard'])->name('dashboard');

    Route::get('proyectos', [ProyectoController::class, 'index'])->name('proyectos');
    Route::get('proyecto-create', [ProyectoController::class, 'create'])->name('create.proyecto');
    Route::post('proyecto-store', [ProyectoController::class,'store'])->name('store.proyecto');
    Route::get('proyecto-edit/{proyecto}', [ProyectoController::class, 'edit'])->name('edit.proyecto');
    Route::put('proyecto-update/{proyecto}', [ProyectoController::class, 'update'])->name('update.proyecto');
    Route::delete('proyecto-destroy/{proyecto}', [ProyectoController::class, 'destroy'])->name('destroy.proyecto');

    Route::get('certificaciones', [CertificacionController::class, 'index'])->name('certificaciones');
    Route::get('certificacion-create', [CertificacionController::class, 'create'])->name('create.certificacion');
    Route::post('certificacion-store', [CertificacionController::class,'store'])->name('store.certificacion');
    Route::get('certificacion-edit/{certificacion}', [CertificacionController::class, 'edit'])->name('edit.certificacion');
    Route::put('certificacion-update/{certificacion}', [CertificacionController::class, 'update'])->name('update.certificacion');
    Route::delete('certificacion-destroy/{certificacion}', [CertificacionController::class, 'destroy'])->name('destroy.certificacion');

    Route::get('contacto', [ContactoController::class, 'index'])->name('contacto');
    Route::get('contacto-show/{contacto}', [ContactoController::class,'show'])->name('show.contacto');
    Route::delete('contacto-destroy/{contacto}', [ContactoController::class, 'destroy'])->name('destroy.contacto');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
