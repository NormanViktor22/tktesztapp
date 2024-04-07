<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelefonkonyvController;

Route::get('/', [TelefonkonyvController::class, 'index'])->name('telefonkonyv.index');
Route::post('/mentes', [TelefonkonyvController::class, 'mentes'])->name('telefonkonyv.mentes');
