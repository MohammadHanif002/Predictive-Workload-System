<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PredictController;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/prediksi', [PredictController::class, 'form'])->name('prediksi.form');
Route::post('/prediksi', [PredictController::class, 'predict'])->name('prediksi.hasil');