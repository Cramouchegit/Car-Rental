<?php

use App\Livewire\Admin\Car\CarCreate;
use App\Livewire\Admin\Car\CarEdit;
use App\Livewire\Admin\Car\CarIndex;
use App\Livewire\Admin\Dashboard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('/', Dashboard::class)->name('admin.dashboard');
    Route::get('/daftar-mobil', CarIndex::class)->name('admin.daftar-mobil.index');
    Route::get('/daftar-mobil/buat', CarCreate::class)->name('admin.daftar-mobil.create');
    Route::get('/daftar-mobil/{id}/edit', CarEdit::class)->name('admin.daftar-mobil.edit');
});

Route::get('/google/redirect', [App\Http\Controllers\GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [App\Http\Controllers\GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');
