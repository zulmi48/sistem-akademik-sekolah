<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/siswa', SiswaController::class);

Route::resource('/mapel', MapelController::class);

Route::resource('/guru', GuruController::class);

Route::resource('/kelas', KelasController::class);
