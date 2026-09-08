<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\TaskController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('V1')->group(function () {
    Route::apiResource('/tasks', TaskController::class);
});
// Route::apiResource('/V1/tasks', TaskController::class);
