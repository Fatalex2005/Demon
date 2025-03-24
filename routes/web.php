<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartnerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/partners', [PartnerController::class, 'index'])->name('partners.index');
