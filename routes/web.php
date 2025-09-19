<?php

use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/series');
});

Route::resource('/series', SeriesController::class)->only([
    'index',
    'create',
    'store',
    'destroy',
    'edit',
    'update'
]);

Route::get('/serie/{series}/season', [SeasonsController::class, 'index'])->name('seasons.index');
