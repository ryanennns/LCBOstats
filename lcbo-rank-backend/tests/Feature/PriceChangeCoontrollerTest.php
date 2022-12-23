<?php /** @noinspection ALL */

namespace Tests\Feature;

use App\Models\Alcohol;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class PriceChangeCoontrollerTest extends TestCase
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
            ->assertJsonFragment([ // todo fragment or no ? /shrug
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
}
