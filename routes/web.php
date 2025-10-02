<?php

use App\Http\Controllers\CargoController;
use Illuminate\Support\Facades\Route;

Route::resource('cargos', CargoController::class);
