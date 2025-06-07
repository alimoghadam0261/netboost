<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\TutorialController;
use App\Http\Controllers\Api\TrendGoogleController;

Route::middleware('api')->group(function () {
    Route::get('/tutorials', [TutorialController::class, 'index']);
    Route::get('/trendgoogle', [TrendGoogleController::class, 'index']);
});


