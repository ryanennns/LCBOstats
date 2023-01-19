<?php /** @noinspection ALL */

namespace Tests\Feature;

use App\Models\Alcohol;
use App\Models\PriceChange;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class PriceChangeControllerTest extends TestCase
{
    public function test_it_returns_price_changes_in_expected_shape()
    {
        $alc = Alcohol::factory()->create([
            'permanent_id' => 1,
            'price' => 10.0,
        ]);

        $alc->update(['price' => 12.0]);
        $alc->update(['price' => 15.0]);
        $alc->update(['price' => 17.0]);
        $alc->update(['price' => 8.00]);

        $this->get(route('api.history.show', [1]))
            ->assertSuccessful()
            ->assertJsonFragment([
                'permanent_id' => $alc->permanent_id,
                'title' => $alc->title,
                'price_changes' => $alc->priceChanges->count(),
                'price_change_history' => $alc->priceChanges->map(fn($priceChange) => [
                    'price' => $priceChange->price,
                    'created_at' => $priceChange->created_at->toISO8601String(),
                ])->toArray(),
                'current_price' => $alc->price,
                'highest_price' => $alc->highest_price,
                'lowest_price' => $alc->lowest_price,
                'oldest_price' => $alc->oldest_known_price,
            ]);
    }

    public function test_it_can_get_alcohols_with_price_changes()
    {
        // todo make not fugly
        $alc = Alcohol::factory()->create([
            'permanent_id' => 1,
            'price' => 10.0,
        ]);

        $alc->update(['price' => 12.0]);
        $alc->update(['price' => 15.0]);
        $alc->update(['price' => 17.0]);
        $alc->update(['price' => 8.00]);

        $alc = Alcohol::factory()->create([
            'permanent_id' => 2,
            'price' => 10.0,
        ]);

        $alc->update(['price' => 12.0]);
        $alc->update(['price' => 15.0]);
        $alc->update(['price' => 17.0]);
        $alc->update(['price' => 8.00]);

        $response = $this->get(route('api.history.index'))
            ->assertSuccessful();
        $response = json_decode($response->content());

        $this->assertCount(2, $response->data);
    }

    public function test_it_sorts_by_created_at()
    {
        $alcohol = Alcohol::factory()->create([
            'price' => 10,
        ]);

        Carbon::setTestNow(Carbon::now()->addHour());
        $alcohol->update([
            'price' => 12,
        ]);

        Carbon::setTestNow(Carbon::now()->addHour());
        $alcohol->update([
            'price' => 14,
        ]);

        $response = $this->get("api/history/$alcohol->permanent_id");
        $priceChangeHistory = json_decode($response->content())->price_change_history;
        collect($priceChangeHistory)->each(function ($array, $index) use ($priceChangeHistory) {
            if (($index) >= (sizeof($priceChangeHistory) - 1))
                return;
            $this->assertLessThanOrEqual($array->created_at, $priceChangeHistory[$index + 1]->created_at);
        });
    }
}
