<?php

use App\Http\Controllers\Api\V1\NumController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('devdatep',NumController::class)
->only('index');
