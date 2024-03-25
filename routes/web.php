<?php

use App\Http\Controllers\DespesaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('Home');
Route::get('/Despesas/', [DespesaController::class, 'index'])->name('Despesa.listar');
Route::get('/Despesa/create', [DespesaController::class, 'create'])->name('Despesa.create');
Route::post('/Despesa/store', [DespesaController::class, 'store'])->name('Despesa.store');
Route::get('/Despesas/show/{despesa}', [DespesaController::class, 'show'])->name('Despesa.show');
Route::get('/Despesas/edit/{despesa}', [DespesaController::class, 'edit'])->name('Despesa.edit');
Route::post('/Despesa/update/{id}', [DespesaController::class, 'update'])->name('Despesa.update');
Route::get('/Despesas/delete/{despesa}', [DespesaController::class, 'delete'])->name('Despesa.delete');
Route::get('/Despesas/destroy/{despesa}', [DespesaController::class, 'destroy'])->name('Despesa.destroy');
