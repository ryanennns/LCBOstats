<?php

namespace Tests\Feature;

use Tests\TestCase;

class LCBOApiProductTest extends TestCase
{
    public function test_it_returns_alcohol_in_expected_shape()
    {
        self::markTestSkipped('TODO');
        // load fixture
        // send to LCBOApiProduct instance
        // assert shape
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
