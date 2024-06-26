<?php

use App\Http\Controllers\designationController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AuditActivityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Documentos;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware([
])->group(function () {

    Route::get(uri: '/dashboard', action: [MainController::class, '__invoke'])->name('dashboard');

    Route::controller(AuditActivityController::class)->group(function () {
        Route::get(uri: '/actuacion-fiscal', action: 'index')->name('auditActivity.index');
        Route::get(uri: '/actuacion-fiscal/{id}', action: 'show')->name('auditActivity.show');
        Route::post('/personal/almacenar', 'store')->name('employee.store');
    });

    Route::controller(Documentos::class)->group(function () {
        Route::get('/Leyes', 'leyes')->name('leyes');
        Route::get('/Reglamentos', 'reglamentos')->name('reglamentos');
        Route::get('/Documentos', 'reglamentos')->name('documentoNormativo');
     
    });

    
    Route::get('/Actuaciones', function () {
        return view('actuaciones');
    })->name('actuaciones');

    Route::get('/Detalles', function () {
        return view('detalles');
    })->name('detalles');

    Route::get('/poa', function () {
        return view('poa.index');
    })->name('poa');
    

    // Route::controller(IndexController::class)->group(function (): void {
    //     Route::get('/dashboard', 'index')->name('dashboard');
    //     Route::get('/Plan de auditoria', 'action')->name('plan de auditoria');
    //     Route::get('/Plan de auditoria/{id}', 'show')->name('action.show');
    // });

    Route::controller(EmployeeController::class)->group(function (): void {
        Route::get('/personal', 'index')->name('employee.index');
        Route::get('/personal/mostrar/{personal}', 'show')->name('employee.show');
        Route::get('/personal/editar/{personal}', 'edit')->name('employee.edit');
        Route::post('/personal/almacenar', 'store')->name('employee.store');
        Route::put('/personal/editar/{personal}', 'update')->name('employee.update');
        Route::delete('/personal/eliminar/{personal}', 'destroy')->name('employee.delete');
    });

    Route::controller(designationController::class)->group(function (): void {
        Route::get('/Designation', 'index')->name('designation');
        Route::post('/designation', 'download')->name('designation.download'); 
    });
});

