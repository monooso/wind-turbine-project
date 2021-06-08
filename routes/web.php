<?php

declare(strict_types=1);

use App\Http\Controllers\TurbineController;
use Illuminate\Support\Facades\Route;

Route::get('/', TurbineController::class);
