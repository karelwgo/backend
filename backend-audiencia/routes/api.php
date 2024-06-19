<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ActividadDispositivoController;
use App\Http\Controllers\ActividadTelevisorController;
use App\Http\Controllers\ActividadUsuarioController;
use App\Http\Controllers\AdministradoresController;
use App\Http\Controllers\CanalTVController;
use App\Http\Controllers\DispositivoController;
use App\Http\Controllers\HogarController;


Route::apiResource('actividad-dispositivo', ActividadDispositivoController::class);
Route::apiResource('actividad-televisor', ActividadTelevisorController::class);
Route::apiResource('actividad-usuario', ActividadUsuarioController::class);
Route::apiResource('administradores', AdministradoresController::class);
Route::apiResource('Canal-TV', CanalTVController::class);
Route::apiResource('dispositivo',DispositivoController::class);
Route::apiResource('hogares',HogarController::class);
