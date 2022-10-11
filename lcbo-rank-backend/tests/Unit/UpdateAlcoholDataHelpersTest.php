<?php


use App\Console\Commands\UpdateAlcoholData;
use PHPUnit\Framework\TestCase;

class UpdateAlcoholDataHelpersTest extends TestCase
{
    /**
     * @param $truncatedValue
     * @param $expectedResult
     * @return void
     * @dataProvider provideTruncatedValueStrings
     */
    public function test_it_can_properly_calculate_truncated_values($truncatedValue, $expectedResult): void
    {
        self::assertEquals($expectedResult, UpdateAlcoholData::truncatedVolumeToInteger($truncatedValue));
    }

    public function provideTruncatedValueStrings(): array
    {
        return [
            '0' => ['0', 0],
            '473 x 1' => ['473', 473],
            '500 x 1' => ['500', 500],
            '12 x 355' => ['12 x 355', 4260],
            '6 x 473' => ['6 x 473', 2838],
            '8 x 750' => ['8 x 750', 6000],
            '6 x 420' => ['6 x 420', 2520],
            '69 x 42 x 12' => ['69 x 42 x 12', 34776],
        ];
    }
}
