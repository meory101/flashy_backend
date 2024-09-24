<?php

namespace App\Http\Controllers; // use App\Http\Controllers\ModelDetailsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('getModels', [ModelDetailsController::class, 'getModels']);
Route::post('addModel', [ModelDetailsController::class, 'addModel']);
Route::post('updateModel', [ModelDetailsController::class, 'updateModel']);
