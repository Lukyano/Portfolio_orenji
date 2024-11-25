<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/kontakt', function () {
    return view('kontakt');
});

Route::get('/onas', function () {
    return view('onas');
});

Route::get('/recenzeHer', function () {
    return view('recenzeHer');
});

Route::get('/recenzeFilmuASerialu', function () {
    return view('recenzeFilmuASerialu');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
