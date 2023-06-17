<?php /** @noinspection ALL */

namespace Tests\Feature;

use App\Console\Commands\UpdateAlcoholData;
use App\Jobs\CheckProductUrlsValid;
use App\LCBOApiProduct;
use App\Models\Alcohol;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Http;
use Tests\Fixtures\FixtureLoader;
use Tests\TestCase;

class CheckProductUrlsValidTest extends TestCase
{
    public function test_it_updates_column_if_404_returned()
    {
        $alcohol = Alcohol::factory()->create([
            'url' => 'snickers.org',
            'valid_url' => true,
        ]);

        $this->assertDatabaseHas('alcohols', [
            'permanent_id' => $alcohol->getKey(),
            'valid_url' => true,
        ]);

        Http::fake([
            'snickers.org' => Http::sequence()
                ->push('oof', 404)
        ]);

        (new CheckProductUrlsValid())->handle();

        $this->assertDatabaseHas('alcohols', [
            'permanent_id' => $alcohol->getKey(),
            'valid_url' => false,
        ]);
    }

    public function test_it_creates_an_invalid_urls_entry()
    {
        $alcohol = Alcohol::factory()->create([
            'url' => 'snickers.org',
            'valid_url' => true,
        ]);

        Http::fake([
            'snickers.org' => Http::sequence()
                ->push('oof', 404)
        ]);

        (new CheckProductUrlsValid())->handle();

        $this->assertDatabaseHas('invalid_urls', [
            'alcohol_id' => $alcohol->getKey(),
        ]);
    }
}
