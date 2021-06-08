<?php

declare(strict_types=1);

namespace Tests\Unit\Actions;

use App\Actions\InspectTurbine;
use PHPUnit\Framework\TestCase;

class InspectTurbineTest extends TestCase
{
    /** @test */
    public function itReturns100Items(): void
    {
        $this->assertCount(100, (new InspectTurbine)->inspect());
    }

    /** @test */
    public function itCountsFrom1To100(): void
    {
        $result = (new InspectTurbine)->inspect();

        $this->assertSame(1, $result[0]);
        $this->assertSame(2, $result[1]);
        $this->assertSame(49, $result[48]);
        $this->assertSame(97, $result[96]);
    }

    /** @test */
    public function itPrintsCoatingDamageForMultiplesOfThree(): void
    {
        $result = (new InspectTurbine)->inspect();

        for ($count = 2; $count < count($result); $count += 3) {
            $this->assertStringContainsString('Coating Damage', $result[$count]);
        }
    }

    /** @test */
    public function itPrintsLightningStrikeForMultiplesOfFive(): void
    {
        $result = (new InspectTurbine)->inspect();

        for ($count = 4; $count < count($result); $count += 5) {
            $this->assertStringContainsString('Lightning Strike', $result[$count]);
        }
    }

    /** @test */
    public function itPrintsCoatingDamageLightningStrikeForMultiplesOfThreeAndFive(): void
    {
        $result = (new InspectTurbine)->inspect();

        for ($count = 14; $count < count($result); $count += 15) {
            $this->assertSame('Coating Damage and Lightning Strike', $result[$count]);
        }
    }
}
