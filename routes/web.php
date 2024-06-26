<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;


Route::get('/', function () {
    $data = ['nama' => 'maman', 'foto' =>'m4n.jpg'];
    return view('dashboard', compact ('data')); 
});

Route::resource('/prodi', ProdiController::class);
Route::resource('/mahasiswa', MahasiswaController::class);
