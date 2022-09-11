<?php

namespace Tests\Feature;

use App\Models\Alcohol;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UpdateAlcoholDataTest extends TestCase
{
    use DatabaseTransactions;

    public function test_it_defaults_to_one_alcohol_with_no_count_specified(): void
    {
        $this->artisan('alcohol:update --category=Products|Wine');
        $this->assertDatabaseCount(Alcohol::class, 1);
    }

    /**
     * @return void
     * @dataProvider numberOfItemsToReturnProvider
     */
    public function test_it_can_specify_number_of_items_to_return($count): void
    {
        $this->artisan("alcohol:update --category=Products|Wine --count={$count}");
        $this->assertDatabaseCount(Alcohol::class, $count);
    }

    public function numberOfItemsToReturnProvider(): array
    {
        return [
            'return 1 item' => ['count' => 1],
            'return 100 items' => ['count' => 100],
            'return 250 items' => ['count' => 250],
            'return 1000 items' => ['count' => 1000],
            'return 2000 items' => ['count' => 2000],
        ];
    }
}
