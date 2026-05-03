<?php

use App\Http\Controllers\HmitController;
use Illuminate\Support\Facades\Route;

// Tampilan Awal langsung Pendaftaran
Route::get('/', [HmitController::class, 'index'])->name('pendaftaran');
Route::post('/member-store', [HmitController::class, 'storeMember'])->name('member.store');

// Aspirasi
Route::get('/aspirasi', [HmitController::class, 'aspirasi'])->name('aspirasi');
Route::post('/aspirasi-store', [HmitController::class, 'storeAspiration'])->name('aspirasi.store');

// Admin
Route::get('/admin', [HmitController::class, 'admin'])->name('admin');
Route::delete('/member-delete/{id}', [HmitController::class, 'destroyMember'])->name('member.delete');
Route::delete('/aspirasi-delete/{id}', [HmitController::class, 'destroyAspiration'])->name('aspirasi.delete');