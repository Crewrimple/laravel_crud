<?php
use App\Http\Controllers\Userprofile;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Userprofile::class, 'index'])->name('index');
Route::get('/user/{id}', [Userprofile::class, 'view'])->name('user.profile.view');
Route::get('/create', [Userprofile::class, 'create'])->name('user.profile.create');
Route::post('/store', [Userprofile::class, 'store'])->name('store');
Route::get('/edit/{id}', [Userprofile::class, 'edit'])->name('edit');
Route::post('/update', [Userprofile::class, 'update'])->name('update');
Route::post('/destroy/{id}', [Userprofile::class, 'destroy'])->name('destroy');
Route::get('/locale/{locale}', [LocaleController::class, 'setLocale'])->name('setLocale');
