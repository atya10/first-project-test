<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;




Route::get('/form1',[FormController::class,'form1'])->name('form1');
Route::post('/form1',[FormController::class,'form1_date'] )->name('form1_date');

Route::get('form3', [FormController::class, 'form3'])->name('form3');
Route::post('form3', [FormController::class, 'form3_data'])->name('form3_data');

Route::get('form4', [FormController::class, 'form4'])->name('form4');
Route::post('form4', [FormController::class, 'form4_data'])->name('form4_data');

// Route::get('form4', [FormController::class, 'form4'])->name('form4');
// Route::post('form4', [FormController::class, 'form4_data'])->name('form4_data');

//
