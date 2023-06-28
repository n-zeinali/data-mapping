<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DataMapperController;

Route::get("/data-mapping/{type}", [DataMapperController::class, 'mapping']);
Route::get("/data-mapping-show/{type}", [DataMapperController::class, 'test']);


