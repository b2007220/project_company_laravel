<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;


Route::redirect('/', '/notes')->name("dashboard");

Route::middleware(['auth', 'verified'])->group(function () {
    // Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');
    // Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');
    // Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');
    // Route::get('/note/{id}', [NoteController::class, 'show'])->name('notes.show');
    // Route::get('/note/{id}/edit', [NoteController::class, 'edit'])->name('notes.edit');
    // Route::put('/note/{id}', [NoteController::class, 'update'])->name('notes.update');
    // Route::delete('/note/{id}', [NoteController::class, 'delete'])->name('notes.delete');

    Route::resource('notes', NoteController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
