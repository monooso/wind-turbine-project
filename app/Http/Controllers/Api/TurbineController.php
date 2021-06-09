<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Contracts\Inspector;
use App\Http\Controllers\Controller;

final class TurbineController extends Controller
{
    private Inspector $inspector;

    public function __construct(Inspector $inspector)
    {
        $this->inspector = $inspector;
    }

    public function index()
    {
        return response()->json(['data' => $this->inspector->inspect()]);
    }
}
