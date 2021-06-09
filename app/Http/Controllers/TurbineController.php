<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class TurbineController extends Controller
{
    public function __invoke()
    {
        return view('turbine');
    }
}
