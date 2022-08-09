<?php /** @noinspection ALL */

namespace Tests\Feature;

use App\Models\Alcohol;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class AlcoholControllerTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @dataProvider alcoholSortProvider
     */
    public function test_it_can_sort_alcohols_by_field($sortField)
    {
        Alcohol::factory([
            'id' => 0,
            'price' => 2,
            'category' => 'Beer & Cider',
            'subcategory' => 'Lager',
        ])->create();
        Alcohol::factory([
            'id' => 1,
            'price' => 1,
            'category' => 'Wine',
            'subcategory' => 'Red Wine',
        ])->create();
        Alcohol::factory([
            'id' => 2,
            'price' => 3,
            'category' => 'Spirits',
            'subcategory' => 'Gin',
        ])->create();

        $response = $this->get("/api/alcohol?sortBy=$sortField");

        $responseArray = json_decode($response->getContent(), true);

        $response->assertSuccessful();
        // TODO ensure that duplicate values are not used
        // or should we just assert less than or equal to ?
        $this->assertLessThanOrEqual($responseArray[1]["$sortField"], $responseArray[0]["$sortField"]);
        $this->assertLessThanOrEqual($responseArray[2]["$sortField"], $responseArray[1]["$sortField"]);
    }

    public function alcoholSortProvider(): array
    {
        return [
            'sort by title' => ['sortField' => 'title'],
            'sort by brand' => ['sortField' => 'brand'],
            'sort by category' => ['sortField' => 'category'],
            'sort by subcategory' => ['sortField' => 'subcategory'],
            'sort by price' => ['sortField' => 'price'],
            'sort by volume' => ['sortField' => 'volume'],
            'sort by alcohol_content' => ['sortField' => 'alcohol_content'],
            'sort by price_index' => ['sortField' => 'price_index'],
            'sort by country' => ['sortField' => 'country'],
        ];
    }

    public function test_it_can_choose_a_number_of_results()
    {
        $numberOfResults = 69;
        Alcohol::factory(100)->create();

        $response = $this->get("/api/alcohol?numberOfResults=$numberOfResults");

        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        $this->assertCount($numberOfResults, $responseJson);
    }

    public function test_it_wont_return_more_than_one_hundred_results()
    {
        Alcohol::factory(100)->create();

        $response = $this->get('/api/alcohol?numberOfResults=150');

        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        $this->assertLessThanOrEqual(100, count($responseJson));
    }

    public function test_it_can_filter_based_max_price_index()
    {
        $maxPriceIndex = 0.10;

        Alcohol::factory(100)->create();

        $response = $this->get("/api/alcohol?maxPriceIndex=$maxPriceIndex");
        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertLessThanOrEqual($maxPriceIndex, $res->price_index);
    }

    public function test_it_can_filter_based_min_price_index()
    {
        $minPriceIndex = 0.10;
        Alcohol::factory(100)->create();

        $response = $this->get("/api/alcohol?minPriceIndex=$minPriceIndex");
        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertGreaterThanOrEqual($minPriceIndex, $res->price_index);
    }

    public function test_it_can_filter_based_max_price()
    {
        $maxPrice = 25;
        Alcohol::factory(100)->create();

        $response = $this->get("/api/alcohol?maxPrice=$maxPrice");
        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertLessThanOrEqual($maxPrice, $res->price);
    }

    public function test_it_can_filter_based_on_min_price()
    {
        $minPrice = 25;
        Alcohol::factory(100)->create();

        $response = $this->get("/api/alcohol?minPrice=$minPrice");
        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertGreaterThanOrEqual($minPrice, $res->price);
    }

    public function test_it_can_filter_based_on_max_volume()
    {
        $maxVolume = 750;
        Alcohol::factory(100)->create();

        $response = $this->get("/api/alcohol?maxVolume=$maxVolume");
        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertLessThanOrEqual($maxVolume, $res->volume);
    }

    public function test_it_can_filter_based_on_min_volume()
    {
        $minVolume = 750;
        Alcohol::factory(100)->create();

        $response = $this->get("/api/alcohol?minVolume=$minVolume");
        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertGreaterThanOrEqual($minVolume, $res->volume);
    }

    public function test_it_can_filter_based_on_max_alcohol_content()
    {
        $minAlcoholContent = 20;
        Alcohol::factory(100)->create();

        $response = $this->get("/api/alcohol?maxAlcoholContent=$minAlcoholContent");
        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertLessThanOrEqual($minAlcoholContent, $res->alcohol_content);
    }

    public function test_it_can_filter_based_on_min_alcohol_content()
    {
        $minAlcoholContent = 15;
        Alcohol::factory(100)->create();

        $response = $this->get("/api/alcohol?minAlcoholContent=$minAlcoholContent");
        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertGreaterThanOrEqual($minAlcoholContent, $res->alcohol_content);
    }

    public function test_it_can_get_alcohols_by_max_price_index()
    {
        $maxPriceIndex = 0.09;
        // TODO make this reliably fail
        Alcohol::factory([
            'id' => 0,
            'price_index' => 0.079
        ])->create();
        Alcohol::factory([
            'id' => 1,
            'price_index' => 0.081
        ])->create();
        Alcohol::factory([
            'id' => 2,
            'price_index' => 0.082
        ])->create();

        $response = $this->get("/api/alcohol/efficient?maxPriceIndex=$maxPriceIndex&order=desc");

        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertLessThanOrEqual($maxPriceIndex, $res->price_index);
    }

    public function test_it_can_get_alcohols_by_min_price_index()
    {
        $minPriceIndex = 0.09;
        Alcohol::factory([
            'id' => 0,
            'price_index' => 0.079
        ])->create();
        Alcohol::factory([
            'id' => 1,
            'price_index' => 0.091
        ])->create();
        Alcohol::factory([
            'id' => 2,
            'price_index' => 0.092
        ])->create();

        $response = $this->get("/api/alcohol/efficient?minPriceIndex=$minPriceIndex&order=desc");

        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertGreaterThan($minPriceIndex, $res->price_index);
    }

    public function test_it_can_get_alcohols_by_min_and_max_price_index()
    {
        $minPriceIndex = 0.08;
        $maxPriceIndex = 0.10;
        Alcohol::factory([
            'price_index' => 0.078
        ])->create();
        Alcohol::factory([
            'price_index' => 0.079
        ])->create();
        Alcohol::factory([
            'price_index' => 0.084
        ])->create();
        Alcohol::factory([
            'price_index' => 0.86
        ])->create();
        Alcohol::factory([
            'price_index' => 0.101
        ])->create();
        Alcohol::factory([
            'price_index' => 0.102
        ])->create();

        $responseJson = json_decode(
            $this
                ->get("/api/alcohol/efficient?minPriceIndex=$minPriceIndex&maxPriceIndex=$maxPriceIndex")
                ->getContent()
        );

        $this->get("/api/alcohol/efficient?minPriceIndex=$minPriceIndex&maxPriceIndex=$maxPriceIndex")
            ->assertSuccessful();
        foreach ($responseJson as $res) {
            $this->assertGreaterThan(
                $minPriceIndex,
                $res->price_index
            );
            $this->assertLessThanOrEqual(
                $maxPriceIndex,
                $res->price_index
            );
        }
    }
}
