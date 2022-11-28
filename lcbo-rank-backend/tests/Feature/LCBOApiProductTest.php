<?php /** @noinspection ALL */

namespace Tests\Feature;

use App\Console\Commands\UpdateAlcoholData;
use App\LCBOApiProduct;
use App\Models\Alcohol;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Http;
use Tests\Fixtures\FixtureLoader;
use Tests\TestCase;

class LCBOApiProductTest extends TestCase
{
    public function test_it_returns_alcohol_in_expected_shape()
    {
        $response = FixtureLoader::loadFixture('beer-response-chunk');
        $collectedResults = collect($response->results);
        $collectedResults = $collectedResults->map(fn($alcohol) => (new LCBOApiProduct($alcohol->raw)));
        $collectedResults->each(function ($alcohol, $index) use ($response) {
            $rawResponseData = $response->results[$index]->raw;
            $this->assertIsArray($alcohol->toArray());
            $this->assertEquals([
                'permanent_id' => $alcohol->getPermanentId(),
                'title' => $alcohol->getTitle(),
                'brand' => $alcohol->getBrand(),
                'category' => $alcohol->getCategory(),
                'subcategory' => $alcohol->getSubcategory(),
                'price' => $alcohol->getPrice(),
                'volume' => $alcohol->getVolume(),
                'alcohol_content' => $alcohol->getAlcoholContent(),
                'price_index' => $alcohol->getPriceIndex(),
                'country' => $alcohol->getCountry(),
                'url' => $alcohol->getUrl(),
                'thumbnail_url' => $alcohol->getThumbnailUrl(),
                'image_url' => $alcohol->getImageUrl(),
                'out_of_stock' => $alcohol->getOutOfStock(),
                'description' => $alcohol->getDescription(),
                'rating' => $alcohol->getRating(),
                'reviews' => $alcohol->getReviews(),
            ], $alcohol->toArray());
        });
    }
}
