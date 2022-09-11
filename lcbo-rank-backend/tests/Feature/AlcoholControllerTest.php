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
    public function test_it_can_filter_by_min_values($filterValue, $queryParameter, $alcoholProperty)
    {
        $response = $this->get("/api/alcohol?$queryParameter=$filterValue");
        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertGreaterThanOrEqual($filterValue, $res->$alcoholProperty);
    }

    public function filterMinConditionProvider()
    {
        return [
            'min price index' => [
                'filterValue' => 0.10,
                'queryParameter' => 'minPriceIndex',
                'alcoholProperty' => 'price_index'
            ],
            'min price' => [
                'filterValue' => 25,
                'queryParameter' => 'minPrice',
                'alcoholProperty' => 'price'
            ],
            'min volume' => [
                'filterValue' => 750,
                'queryParameter' => 'minVolume',
                'alcoholProperty' => 'volume'
            ],
            'min alcohol content' => [
                'filterValue' => 15,
                'queryParameter' => 'minAlcoholContent',
                'alcoholProperty' => 'alcohol_content'
            ],
        ];
    }

    /**
     * @return void
     * @dataProvider filterMaxConditionProvider
     */
    public function test_it_can_filter_by_max_values($filterValue, $queryParameter, $alcoholProperty)
    {
        $response = $this->get("/api/alcohol?$queryParameter=$filterValue");
        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertLessThanOrEqual($filterValue, $res->$alcoholProperty);
    }

    public function filterMaxConditionProvider()
    {
        return [
            'max price index' => [
                'filterValue' => 0.10,
                'queryParameter' => 'maxPriceIndex',
                'alcoholProperty' => 'price_index'
            ],
            'max price' => [
                'filterValue' => 25,
                'queryParameter' => 'maxPrice',
                'alcoholProperty' => 'price'
            ],
            'max volume' => [
                'filterValue' => 750,
                'queryParameter' => 'maxVolume',
                'alcoholProperty' => 'volume'
            ],
            'max alcohol content' => [
                'filterValue' => 20,
                'queryParameter' => 'maxAlcoholContent',
                'alcoholProperty' => 'alcohol_content'
            ],
        ];
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
        $response = $this->get("/api/alcohol?outOfStock=false");

        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertEquals('false', $res->out_of_stock); //todo change this when field is boolean and not string, yuck
    }

    public function test_it_returns_default_number_of_results_if_no_parameter_specified()
    {
        $response = $this->get('/api/alcohol');

        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        $this->assertCount(25, $responseJson);
    }
}
