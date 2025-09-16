<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //paginas
    Route::get('/comprar', function () {
    return view('principal.comprar');
    })->name('comprar');

    Route::get('/vender', function () {
        return view('principal.vender');
    })->name('vender');

    Route::get('/consultar', function () {
        return view('principal.consultar');
    })->name('consultar');

});

require __DIR__.'/auth.php';
