<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;;
use App\Http\Controllers\ControllerDescargaPdf;


Route::middleware('auth')->group(function(){
    Route::get('/',  [DashboardController::class, 'index'])->name('Dashboard');
    Route::get('/NotaRecepcion', [DashboardController::class, 'NotaRecepcion'])->name('NotaRecepcion');
    Route::get('/Liquidaciones', [DashboardController::class, 'Liquidaciones'])->name('Liquidaciones');
    Route::get('/descargarPdf/{rut}/{anio}/{mes}/{filename}', [ControllerDescargaPdf::class, 'descargarPdf'])->name('descargar.pdf');
    Route::get('/HistorialNotaRecepcion/{mesOffset?}', [DashboardController::class, 'HistorialNotaRecepcion'])->name('HistorialNotaRecepcion');

});


Auth::routes();