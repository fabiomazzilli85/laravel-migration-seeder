<?php

use App\Http\Controllers\TrainController;

Route::get('/', [TrainController::class, 'index']);
Route::get('/departing-trains', [TrainController::class, 'departingTrains']);
