<?php

use App\Http\Controllers\PendudukController;
use App\Models\Penduduk;
use App\Models\Wilayah;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/penduduk', [PendudukController::class, 'index'])->name('penduduk.index');

Route::post('/penduduk', [PendudukController::class, 'store'])->name('penduduk.store');

Route::get('/penduduk/create', [PendudukController::class, 'create'])->name('penduduk.create');

Route::get('/penduduk/edit/{penduduk}', [PendudukController::class, 'edit'])->name('penduduk.edit');

Route::put('/penduduk/{penduduk}', [PendudukController::class, 'update'])->name('penduduk.update');

Route::get('/penduduk/{penduduk}', [PendudukController::class, 'show'])->name('penduduk.show');

Route::delete('/penduduk/{penduduk}', [PendudukController::class, 'destroy'])->name('penduduk.destroy');