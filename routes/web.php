<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;

Route::resource('services', ServiceController::class);

Route::resource('appointments', AppointmentController::class);

use App\Http\Controllers\ClientController;

Route::resource(
    'clients',
    ClientController::class
);

use App\Http\Controllers\ProfessionalController;

Route::resource(
    'professionals',
    ProfessionalController::class
);


