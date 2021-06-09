<?php

declare(strict_types=1);

namespace App\Contracts;

interface Inspector
{
    /**
     * Perform and inspection and return an array containing the results
     *
     * @return array
     */
    public function inspect(): array;
}
