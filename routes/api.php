<?php

use Illuminate\Support\Facades\Route;

Route::get('/karyawans', [App\Http\Controllers\API\KaryawanAPIController::class, 'index']);
Route::post('/karyawan/create', [App\Http\Controllers\API\KaryawanAPIController::class, 'store']);
Route::post('/karyawan/update', [App\Http\Controllers\API\KaryawanAPIController::class, 'update']);
Route::post('/karyawan/delete', [App\Http\Controllers\API\KaryawanAPIController::class, 'delete']);

