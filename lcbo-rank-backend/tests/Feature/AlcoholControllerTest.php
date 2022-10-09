<?php /** @noinspection ALL */

namespace Tests\Feature;

use App\Models\Alcohol;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;
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
     * @return void
     */
    public function test_it_returns_alcohols_in_expected_shape()
    {
        /** @var Alcohol $alcohol */
        $alcohol = Alcohol::factory()->create([
            'permanent_id' => 1243567890,
            'title' => "Ryan's World Famous",
            'brand' => "Big Ry's",
            'category' => 'Spirits',
            'subcategory' => 'Gin',
            'price' => 3.50,
            'volume' => 69,
            'alcohol_content' => 12,
            'price_index' => 1,
            'country' => 'Canuckland',
            'url' => 'https://www.meme.com',
            'thumbnail_url' => 'https://www.meme.com/thumbanil',
            'image_url' => 'https://www.meme.com/image',
            'rating' => 5.0,
            'reviews' => 100,
            'out_of_stock' => false,
            'description' => 'it tastes so good :P',
        ]);

        $response = $this->get("api/alcohol/$alcohol->permanent_id")
            ->assertOk()
            ->assertJson([
                'permanent_id' => $alcohol->permanent_id,
                'title' => $alcohol->title,
                'brand' => $alcohol->brand,
                'category' => $alcohol->category,
                'subcategory' => $alcohol->subcategory,
                'price' => $alcohol->price,
                'volume' => $alcohol->volume,
                'alcohol_content' => $alcohol->alcohol_content,
                'price_index' => $alcohol->price_index,
                'country' => $alcohol->country,
                'url' => $alcohol->url,
                'thumbnail_url' => $alcohol->thumbnail_url,
                'image_url' => $alcohol->image_url,
                'rating' => $alcohol->rating,
                'reviews' => $alcohol->reviews,
                'out_of_stock' => $alcohol->out_of_stock,
                'description' => $alcohol->description,
            ]);
    }

    /**
     * @dataProvider alcoholSortProvider
     */
    public function test_it_can_sort_alcohols_by_field($sortField): void
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
            'sort by out_of_stock' => ['sortField' => 'out_of_stock'],
        ];
    }

    public function test_it_can_choose_a_number_of_results(): void
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

    public function filterMinConditionProvider(): array
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
    public function test_it_can_filter_by_max_values($filterValue, $queryParameter, $alcoholProperty): void
    {
        $response = $this->get("/api/alcohol?$queryParameter=$filterValue");
        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertLessThanOrEqual($filterValue, $res->$alcoholProperty);
    }

    public function filterMaxConditionProvider(): array
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

        foreach ($responseJson as $alcohol) {
            $this->assertEquals($alcohol->category, $category);
        }
    }

    public function provideCategoryFilters(): array
    {
        return [
            'filter for \'Beer & Cider\'' => ['Beer & Cider'],
            'filter for \'Wine\'' => ['Wine'],
            'filter for \'Spirits\'' => ['Spirits'],
            'filter for \'Coolers\'' => ['Coolers'],
        ];
    }

    public function test_it_can_filter_by_stock_status(): void
    {
        $response = $this->get('/api/alcohol?outOfStock=false');

        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertEquals(false, $res->out_of_stock);
    }

    public function test_it_returns_default_number_of_results_if_no_parameter_specified(): void
    {
        $response = $this->get('/api/alcohol');

        $responseJson = json_decode($response->getContent());

        $response->assertSuccessful();
        $this->assertCount(25, $responseJson);
    }

    public function test_it_returns_records_updated_after_specified_date()
    {
        $updated_at = Carbon::now()->subDays(3);
        $expectedAlcohols = Alcohol::factory(3)->create([
            'updated_at' => $updated_at,
        ]);

        $updatedSince = Carbon::now()->subWeek();
        $response = $this->get("/api/alcohol/updated?updatedSince=$updatedSince");

        $response->assertOk()
            ->assertJsonCount(3, 'recordsUpdated');

        $expectedAlcohols->each(function ($alcohol) use ($response, $expectedAlcohols) {
            $response->assertJsonFragment([
                'permanent_id' => $alcohol->permanent_id,
            ]);
        });
    }

    public function test_it_doesnt_return_records_updated_before_specified_date()
    {
        $updatedSince = Carbon::now()->subWeek();
        $response = $this->get("/api/alcohol/updated?updatedSince=$updatedSince");

        $response->assertOk()
            ->assertJsonCount(0, 'recordsUpdated');
    }

    public function test_it_can_get_efficient_alcohols()
    {
        self::markTestSkipped('TODO');
    }

    /**
     * @return void
     * @dataProvider provideAttributes
     */
    public function test_it_can_select_attributes($key, $attribute)
    {
        Alcohol::factory(1)->create([$key => $attribute]);

        $response = $this->get("/api/alcohol?$key=$attribute")
            ->assertOk()
            ->assertJsonFragment([
                $key => $attribute
            ]);
    }

    public function provideAttributes()
    {
        return [
            'permanent_id' => ['permanent_id', 25672],
            'title' => ['title' ,"Ryan's testing booze"],
            'brand' => ['brand' ,"Ryan's"],
            'category' => ['category' ,'Spirits'],
            'subcategory' => ['subcategory' ,'asdf-ghjkl'],
            'country' => ['country' ,'the pacific ocean'],
        ];
    }
}
