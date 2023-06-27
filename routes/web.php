<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DataMapperController;

Route::get("/data-mapping/{type}", [DataMapperController::class, 'mapping']);


