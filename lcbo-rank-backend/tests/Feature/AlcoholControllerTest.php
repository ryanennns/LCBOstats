<?php /** @noinspection ALL */

namespace Tests\Feature;

use App\Models\Alcohol;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use PHPUnit\Framework\SkippedTest;
use Tests\TestCase;

class AlcoholControllerTest extends TestCase
{
    use DatabaseTransactions;

    public function setUp(): void
    {
        parent::setUp();
        Alcohol::factory(100)->create();
    }

    /**
     * @dataProvider alcoholSortProvider
     */
    public function test_it_can_sort_alcohols_by_field($sortField)
    {
        $response = $this->get("/api/alcohol?sortBy=$sortField");

        $responseArray = json_decode($response->getContent(), true);

        $response->assertSuccessful();
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
            'sort by rating' => ['sortField' => 'rating'],
        ];
    }

    public function test_it_can_choose_a_number_of_results()
    {
        Alcohol::factory(400)->create();
        $numberOfResults = 420;

        $response = $this->get("/api/alcohol?numberOfResults=$numberOfResults");

        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        $this->assertCount($numberOfResults, $responseJson);
    }

    /**
     * @return void
     * @dataProvider filterMinConditionProvider
     */
    public function test_it_can_filter_min($filterValue, $queryParameter, $alcoholProperty)
    {
        $response = $this->get("/api/alcohol?$queryParameter=$filterValue");
        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            dump($res);
            $this->assertGreaterThanOrEqual($filterValue, $res->$alcoholProperty);
    }

    /**
     * @return void
     * @dataProvider filterMaxConditionProvider
     */
    public function test_it_can_filter_max($filterValue, $queryParameter, $alcoholProperty)
    {
        $response = $this->get("/api/alcohol?$queryParameter=$filterValue");
        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertLessThanOrEqual($filterValue, $res->$alcoholProperty);
    }

    public function filterMinConditionProvider()
    {
        return [
            'min price index' => [
                'filterValue' => 0.10,
                'queryParameter' => 'minPriceIndex',
                'alcoholProperty' => 'price_index'
            ]
        ];
    }
    public function filterMaxConditionProvider()
    {
        return [
            'max price index' => [
                'filterValue' => 0.10,
                'queryParameter' => 'maxPriceIndex',
                'alcoholProperty' => 'price_index'
            ],
        ];
    }

    public function test_it_can_filter_based_max_price_index()
    {
        $maxPriceIndex = 0.10;

        $response = $this->get("/api/alcohol?maxPriceIndex=$maxPriceIndex");
        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertLessThanOrEqual($maxPriceIndex, $res->price_index);
    }

    public function test_it_can_filter_based_min_price_index()
    {
        $minPriceIndex = 0.10;

        $response = $this->get("/api/alcohol?minPriceIndex=$minPriceIndex");
        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertGreaterThanOrEqual($minPriceIndex, $res->price_index);
    }

    public function test_it_can_filter_based_max_price()
    {
        $maxPrice = 25;

        $response = $this->get("/api/alcohol?maxPrice=$maxPrice");
        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertLessThanOrEqual($maxPrice, $res->price);
    }

    public function test_it_can_filter_based_on_min_price()
    {
        $minPrice = 25;

        $response = $this->get("/api/alcohol?minPrice=$minPrice");
        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertGreaterThanOrEqual($minPrice, $res->price);
    }

    public function test_it_can_filter_based_on_max_volume()
    {
        $maxVolume = 750;

        $response = $this->get("/api/alcohol?maxVolume=$maxVolume");
        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertLessThanOrEqual($maxVolume, $res->volume);
    }

    public function test_it_can_filter_based_on_min_volume()
    {
        $minVolume = 750;

        $response = $this->get("/api/alcohol?minVolume=$minVolume");
        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertGreaterThanOrEqual($minVolume, $res->volume);
    }

    public function test_it_can_filter_based_on_max_alcohol_content()
    {
        $minAlcoholContent = 20;

        $response = $this->get("/api/alcohol?maxAlcoholContent=$minAlcoholContent");
        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertLessThanOrEqual($minAlcoholContent, $res->alcohol_content);
    }

    public function test_it_can_filter_based_on_min_alcohol_content()
    {
        $minAlcoholContent = 15;

        $response = $this->get("/api/alcohol?minAlcoholContent=$minAlcoholContent");
        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertGreaterThanOrEqual($minAlcoholContent, $res->alcohol_content);
    }

    public function test_it_can_get_alcohols_by_max_price_index()
    {
        $maxPriceIndex = 0.09;

        $response = $this->get("/api/alcohol/efficient?maxPriceIndex=$maxPriceIndex&order=desc");

        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertLessThanOrEqual($maxPriceIndex, $res->price_index);
    }

    public function test_it_can_get_alcohols_by_min_price_index()
    {
        $minPriceIndex = 0.09;

        $response = $this->get("/api/alcohol/efficient?minPriceIndex=$minPriceIndex&order=desc");

        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertGreaterThan($minPriceIndex, $res->price_index);
    }

    // todo is this needed?
    public function test_it_can_get_alcohols_by_min_and_max_price_index()
    {
        $minPriceIndex = 0.08;
        $maxPriceIndex = 0.10;

        $responseJson = json_decode(
            $this
                ->get("/api/alcohol/efficient?minPriceIndex=$minPriceIndex&maxPriceIndex=$maxPriceIndex")
                ->getContent()
        );

        $this->get("/api/alcohol/efficient?minPriceIndex=$minPriceIndex&maxPriceIndex=$maxPriceIndex")
            ->assertSuccessful();
        foreach ($responseJson as $alcohol) {
            $this->assertGreaterThan(
                $minPriceIndex,
                $alcohol->price_index
            );
            $this->assertLessThanOrEqual(
                $maxPriceIndex,
                $alcohol->price_index
            );
        }
    }

    /**
     * @dataProvider provideCategoryFilters
     */
    public function test_it_can_filter_by_category($category)
    {
        $escapedCategory = str_replace('&', '%26', $category); // BOTCHED lol

        Alcohol::factory([
            'category' => $category,
        ])->create();

        $response = $this->get("/api/alcohol?category=$escapedCategory")
            ->assertSuccessful();

        $responseJson = json_decode($response->getContent());

        $this->assertNotEmpty($responseJson);

        foreach($responseJson as $alcohol) {
            $this->assertEquals($alcohol->category, $category);
        }
    }

    public function provideCategoryFilters()
    {
        return [
            'filter for \'Beer & Cider\'' => ['Beer & Cider'],
            'filter for \'Wine\'' => ['Wine'],
            'filter for \'Spirits\'' => ['Spirits'],
            'filter for \'Coolers\'' => ['Coolers'],
        ];
    }

    public function test_it_can_filter_by_stock_status()
    {
        $response = $this->get("/api/alcohol?inStock=false");

        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertEquals('false', $res->out_of_stock); //todo change this when field is boolean and not string, yuck
    }
}
