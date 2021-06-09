<?php

declare(strict_types=1);

use App\Http\Controllers\Api\TurbineController;
use Illuminate\Support\Facades\Route;

Route::get('turbines', [TurbineController::class, 'index']);
