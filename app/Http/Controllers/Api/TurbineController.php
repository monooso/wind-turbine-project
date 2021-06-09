<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Actions\InspectTurbine;
use App\Http\Controllers\Controller;

final class TurbineController extends Controller
{
    public function index()
    {
        return response()->json(['data' => (new InspectTurbine())->inspect()]);
    }
}
