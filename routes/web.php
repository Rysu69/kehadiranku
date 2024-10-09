<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CmsController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/cms', [CmsController::class, 'index'])->name('cms.index');
    Route::get('/cms/edit', [CmsController::class, 'edit'])->name('cms.edit');
    Route::post('/cms/update', [CmsController::class, 'update'])->name('cms.update');
});


// Example route definition for a contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/', [CmsController::class, 'index'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
