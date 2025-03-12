<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoryGameController;

Route::get("/cards", [MemoryGameController::class, "getCards"]);
