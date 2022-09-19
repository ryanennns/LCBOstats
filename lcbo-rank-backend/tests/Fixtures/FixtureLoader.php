<?php

namespace Tests\Fixtures;

use stdClass;

class FixtureLoader
{
    /**
     * @param $file
     * @return stdClass
     */
    public static function loadFixture($file): stdClass
    {
        return json_decode(file_get_contents(__DIR__."\\$file.json"));
    }

    public static function loadRawFixture($file): string
    {
        return file_get_contents(__DIR__."\\$file.json");
    }
}
