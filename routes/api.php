<?php

use App\Http\Controllers\GetCategoriesController;
use App\Http\Controllers\GetItemsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/categories', GetCategoriesController::class);
    Route::get('/{category_id}/items', GetItemsController::class);
});
