<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnergyController;



Route::get('/dbz/{id}', [EnergyController::class, 'dbz']);