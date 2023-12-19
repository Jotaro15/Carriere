<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConcessionController;
use App\Http\Controllers\MineController;


Route::get('/', [HomeController::class, "home"]);

Route::get('/concession/{id}', [ConcessionController::class, "index"]);

Route::get('/mine/{id}', [MineController::class, 'index']);

Route::get('/allconcessions', [ConcessionController::class, 'showall']);

Route::get('/concession/create',[ConcessionController::class, 'showFormCreate']);

Route::post('/concession/create',[ConcessionController::class, 'create']);
