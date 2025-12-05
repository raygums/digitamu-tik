<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Guest Routes (Sisi Tamu)
Route::name('guest.')->group(function () {
    Route::get('/', [GuestController::class, 'index'])->name('index');
    Route::get('/janji-temu', [GuestController::class, 'createJanji'])->name('janji-temu.create');
    Route::post('/janji-temu', [GuestController::class, 'storeJanji'])->name('janji-temu.store');
    Route::get('/peminjaman', [GuestController::class, 'createPinjam'])->name('peminjaman.create');
    Route::post('/peminjaman', [GuestController::class, 'storePinjam'])->name('peminjaman.store');
});

// Auth Routes
Route::prefix('auth')->name('auth.')->group(function () {
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
    Route::get('/user', [AuthController::class, 'user'])->name('user')->middleware('auth');
});

// Staff Routes (API untuk Staff Panel)
Route::prefix('staff')->name('staff.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [StaffController::class, 'dashboard'])->name('dashboard');
    
    // Verifikasi Permohonan
    Route::get('/permohonan', [StaffController::class, 'getPermohonan'])->name('permohonan.index');
    Route::post('/permohonan/approve', [StaffController::class, 'approvePermohonan'])->name('permohonan.approve');
    Route::post('/permohonan/reject', [StaffController::class, 'rejectPermohonan'])->name('permohonan.reject');
    
    // Kunjungan Actions
    Route::post('/kunjungan/{id}/checkin', [StaffController::class, 'checkinKunjungan'])->name('kunjungan.checkin');
    Route::post('/kunjungan/{id}/checkout', [StaffController::class, 'checkoutKunjungan'])->name('kunjungan.checkout');
    Route::get('/kunjungan/{id}', [StaffController::class, 'getDetailKunjungan'])->name('kunjungan.detail');
    
    // Riwayat Tamu
    Route::get('/riwayat', [StaffController::class, 'getRiwayat'])->name('riwayat.index');
    
    // Riwayat Peminjaman
    Route::get('/riwayat-peminjaman', [StaffController::class, 'getRiwayatPeminjaman'])->name('riwayat-peminjaman.index');
    Route::post('/peminjaman/{id}/pinjam', [StaffController::class, 'pinjamBarang'])->name('peminjaman.pinjam');
    Route::post('/peminjaman/{id}/selesai', [StaffController::class, 'selesaiPeminjaman'])->name('peminjaman.selesai');
    
    // Export
    Route::get('/export/excel', [StaffController::class, 'exportExcel'])->name('export.excel');
});

// Admin Routes (Protected)
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    // User Management
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::patch('/users/{user}/toggle-status', [UserController::class, 'toggleStatus'])->name('users.toggle-status');
});
