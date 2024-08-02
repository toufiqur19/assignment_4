<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contacts',[ContactController::class, 'index'])->name('home');
Route::get('/contacts/create',[ContactController::class, 'create'])->name('create');
Route::post('/contacts',[ContactController::class, 'store'])->name('store');
Route::get('/contacts/{id}/show',[ContactController::class, 'show'])->name('show');
Route::get('/contacts/{id}/edit',[ContactController::class, 'edit'])->name('edit');
Route::put('/contacts/{id}',[ContactController::class, 'update'])->name('update');
Route::get('/contacts/{id}',[ContactController::class, 'destroy'])->name('delete');