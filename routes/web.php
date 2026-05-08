<?php

use App\Http\Controllers\HmitController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// --- HALAMAN UMUM ---
Route::get('/', [HmitController::class, 'index'])->name('pendaftaran');
Route::post('/member-store', [HmitController::class, 'storeMember'])->name('member.store');

// --- AUTH MAHASISWA (COOKIE) ---
Route::get('/login-mahasiswa', [AuthController::class, 'showStudentLogin'])->name('login.mahasiswa');
Route::post('/login-mahasiswa-proses', [AuthController::class, 'loginStudent'])->name('login.mahasiswa.post');
Route::get('/logout-mahasiswa', [AuthController::class, 'logoutStudent'])->name('logout.mahasiswa');

// --- AUTH ADMIN (SESSION) ---
Route::get('/login-admin', [AuthController::class, 'showAdminLogin'])->name('login.admin');
Route::post('/login-admin-proses', [AuthController::class, 'loginAdmin'])->name('login.admin.post');
Route::get('/logout-admin', [AuthController::class, 'logoutAdmin'])->name('logout.admin');

// --- HALAMAN ASPIRASI (DIPROTEKSI COOKIE) ---
Route::get('/aspirasi', [HmitController::class, 'aspirasi'])->name('aspirasi');
Route::post('/aspirasi-store', [HmitController::class, 'storeAspiration'])->name('aspirasi.store');

// --- HALAMAN ADMIN (DIPROTEKSI SESSION) ---
Route::get('/admin', [HmitController::class, 'admin'])->name('admin');
Route::delete('/member-delete/{id}', [HmitController::class, 'destroyMember'])->name('member.delete');
Route::delete('/aspirasi-delete/{id}', [HmitController::class, 'destroyAspiration'])->name('aspirasi.delete');

Route::get('/admin', [HmitController::class, 'admin'])->name('admin');
Route::delete('/member-delete/{id}', [HmitController::class, 'destroyMember'])->name('member.delete');
Route::delete('/aspirasi-delete/{id}', [HmitController::class, 'destroyAspiration'])->name('aspirasi.delete');