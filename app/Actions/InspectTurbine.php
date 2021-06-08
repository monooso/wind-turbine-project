<?php

declare(strict_types=1);

namespace App\Actions;

class InspectTurbine
{
    /**
     * Inspect the wind turbine, and return an array containing the results
     *
     * Count from 1 to 100.
     * - For multiples of 3, add 'Coating Damage' to the array.
     * - For multiples of 5, add 'Lightning Strike' to the array.
     * - For multiples of 3 and 5, add 'Coating Damage and Lightning Strike'
     *   to the array.
     * - In all other cases, add the number to the array.
     *
     * @return array
     */
    public function inspect(): array
    {
        $result = [];

        for ($count = 1; $count <= 100; $count++) {
            $message = [];

            if ($count % 3 === 0) {
                $message[] = 'Coating Damage';
            }

            if ($count % 5 === 0) {
                $message[] = 'Lightning Strike';
            }

            $result[] = $message ? implode(' and ', $message) : $count;
        }

        return $result;
    }
}
