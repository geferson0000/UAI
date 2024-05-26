<?php

use App\Http\Controllers\designationController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PersonalUaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::controller(IndexController::class)->group(function (): void {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/actuaciones', 'action')->name('action');
        Route::get('/actuaciones/{id}', 'show')->name('action.show');
    });

    Route::controller(PersonalUaiController::class)->group(function (): void {
        Route::get('/personal-uai/dashboard', 'dashboard')->name('personal-uai.dashboard');
        Route::get('/personal-uai/show/{personal}', 'show')->name('personal-uai.show');
        Route::get('/personal-uai/edit/{personal}', 'edit')->name('personal-uai.edit');
        Route::post('/personal-uai/store', 'store')->name('personal-uai.store');
        Route::put('/personal-uai/edit/{personal}', 'update')->name('personal-uai.update');
        Route::delete('/personal-uai/delete/{personal}', 'destroy')->name('personal-uai.delete');
    });

    Route::controller(designationController::class)->group(function (): void {
        Route::get('/designation', 'index')->name('designation');
        Route::post('/designation', 'download')->name('designation.download'); // todo it shold be codigo-acta/designation/download
    });
});
