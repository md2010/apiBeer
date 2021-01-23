<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeerController;

Route::resource('/beers', BeerController::class)->only('index');
Route::resource('/', BeerController::class);
