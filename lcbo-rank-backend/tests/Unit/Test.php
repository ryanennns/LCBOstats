<?php


use App\Console\Commands\UpdateAlcoholData;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    /**
     * @return void
     * @dataProvider provideTruncatedValueStrings
     */
    public function test_it_can_properly_calculate_truncated_values($truncatedValue, $expectedResult)
    {
        self::assertEquals($expectedResult, UpdateAlcoholData::truncatedVolumeToInteger($truncatedValue));
    }

    public function provideTruncatedValueStrings(): array
    {
        return [
            '12 x 355' => ['12 x 355', 4260],
            '6 x 473' => ['6 x 473', 2838],
            '8 x 750' => ['8 x 750', 6000],
            '6 x 420' => ['6 x 420', 2520],
            '69 x 42 x 12' => ['69 x 42 x 12', 34776],
        ];
    }
}
