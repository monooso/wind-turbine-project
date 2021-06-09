<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Actions\InspectTurbine;

class TurbineController extends Controller
{
    public function __invoke()
    {
        return view('turbine', ['results' => (new InspectTurbine())->inspect()]);
    }
}
