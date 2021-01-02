<?php


use App\Http\Controllers\TestTaskControllers\CarController;
use App\Http\Controllers\TestTaskControllers\SearchController;
use Illuminate\Support\Facades\Route;


Route::get('/', [CarController::class, 'showCarLots']);
Route::get('/search-vin', [SearchController::class, 'showSearchForm'])->name('search-form');
