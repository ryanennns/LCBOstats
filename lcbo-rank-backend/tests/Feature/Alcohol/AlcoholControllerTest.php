<?php /** @noinspection ALL */

namespace Tests\Feature;

use App\Models\Alcohol;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\Helpers\MiscHelpers;
use Tests\TestCase;

class AlcoholControllerTest extends TestCase
{
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
            ->assertJsonFragment([
                'data' => [
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
                ]
            ]);
    }

    /**
     * @dataProvider alcoholSortProvider
     */
    public function test_it_can_sort_alcohols_by_field($sortField): void
    {
        Alcohol::factory(5)->create();
        $response = $this->get("/api/alcohol?sortBy=$sortField");

        $responseArray = json_decode($response->getContent(), true)['data'];

        $response->assertSuccessful();
        $this->assertLessThanOrEqual($responseArray[1]["$sortField"], $responseArray[0]["$sortField"]);
        $this->assertLessThanOrEqual($responseArray[2]["$sortField"], $responseArray[1]["$sortField"]);
    }

    /**
     * @dataProvider alcoholSortProvider
     */
    public function test_it_can_use_sort_asc($sortField)
    {
        Alcohol::factory(5)->create();
        $response = $this->get("/api/alcohol?sortAsc=$sortField");

        $responseArray = json_decode($response->getContent(), true)['data'];

        $response->assertSuccessful();
        $this->assertLessThanOrEqual($responseArray[1][$sortField], $responseArray[0][$sortField]);
        $this->assertLessThanOrEqual($responseArray[2][$sortField], $responseArray[1][$sortField]);
    }

    /**
     * @dataProvider alcoholSortProvider
     */
    public function test_it_can_use_sort_desc($sortField)
    {
        Alcohol::factory(5)->create();
        $response = $this->get("/api/alcohol?sortDesc=$sortField");

        $responseArray = json_decode($response->getContent(), true)['data'];

        $response->assertSuccessful();
        $this->assertGreaterThanOrEqual($responseArray[1][$sortField], $responseArray[0][$sortField]);
        $this->assertGreaterThanOrEqual($responseArray[2][$sortField], $responseArray[1][$sortField]);
    }

    public function alcoholSortProvider(): array
    {
        return [
            'sort by price' => ['sortField' => 'price'],
            'sort by volume' => ['sortField' => 'volume'],
            'sort by alcohol_content' => ['sortField' => 'alcohol_content'],
            'sort by price_index' => ['sortField' => 'price_index'],
            'sort by rating' => ['sortField' => 'rating'],
            'sort by out_of_stock' => ['sortField' => 'out_of_stock'],
        ];
    }

    /**
     * @dataProvider providesSortingParameters
     */
    public function test_index_endpoint_enforces_single_sort_parameter($parameters, $expectedResponse)
    {
        $this->get(route('api.alcohol', $parameters))
            ->assertStatus($expectedResponse);
    }

    /**
     * @dataProvider providesSortingParameters
     */
    public function test_search_endpoint_enforces_single_sort_parameter($parameters, $expectedResponse)
    {
        $this->get(route('api.alcohol.search', $parameters))
            ->assertStatus($expectedResponse);
    }

    public function providesSortingParameters()
    {
        $success = 200;
        $failure = 302; // force return 422

        return [
            'only sortBy' => [
                'parameters' => [
                    'sortBy' => 'price'
                ],
                'expectedResponse' => $success,
            ],
            'only sortAsc' => [
                'parameters' => [
                    'sortAsc' => 'price',
                ],
                'expectedResponse' => $success,
            ],
            'only sortDesc' => [
                'parameters' => [
                    'sortDesc' => 'price',
                ],
                'expectedResponse' => $success,
            ],
            'sortBy and sortAsc' => [
                'parameters' => [
                    'sortBy' => 'price',
                    'sortAsc' => 'price',
                ],
                'expectedResponse' => $failure,
            ],
            'sortBy and sortDesc' => [
                'parameters' => [
                    'sortBy' => 'price',
                    'sortDesc' => 'price',
                ],
                'expectedResponse' => $failure,
            ],
            'sortAsc and sortDesc' => [
                'parameters' => [
                    'sortAsc' => 'price',
                    'sortDesc' => 'price',
                ],
                'expectedResponse' => $failure,
            ],
            'all three' => [
                'parameters' => [
                    'sortBy' => 'price',
                    'sortAsc' => 'price',
                    'sortDesc' => 'price',
                ], 'expectedResponse' => $failure,
            ],
        ];
    }

    /**
     * @return void
     * @dataProvider filterMinConditionProvider
     */
    public function test_it_can_filter_by_min_values($filterValue, $queryParameter, $alcoholProperty)
    {
        Alcohol::factory(10)->create();
        $response = $this->get("/api/alcohol?$queryParameter=$filterValue");
        $responseJson = json_decode($response->getContent())->data;

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
        Alcohol::factory(10)->create();
        $response = $this->get("/api/alcohol?$queryParameter=$filterValue");
        $responseJson = json_decode($response->getContent())->data;

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
        Alcohol::factory(10)->create();
        $escapedCategory = str_replace('&', '%26', $category); // BOTCHED lol

        Alcohol::factory([
            'category' => $category,
        ])->create();

        $response = $this->get("/api/alcohol?category=$escapedCategory")
            ->assertSuccessful();

        $responseJson = json_decode($response->getContent())->data;

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
        Alcohol::factory(10)->create();
        $response = $this->get('/api/alcohol?outOfStock=false');

        $responseJson = json_decode($response->getContent())->data;

        $response->assertSuccessful();
        foreach ($responseJson as $res)
            $this->assertEquals(false, $res->out_of_stock);
    }

    /**
     * @return void
     * @dataProvider provideAttributes
     */
    public function test_it_can_select_attributes($key, $attribute)
    {
        Alcohol::factory(9)->create();
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
            'title' => ['title', "Ryan's testing booze"],
            'brand' => ['brand', "Ryan's"],
            'category' => ['category', 'Spirits'],
            'subcategory' => ['subcategory', 'asdf-ghjkl'],
            'country' => ['country', 'the pacific ocean'],
        ];
    }

    public function test_it_doesnt_return_null_price_index()
    {
        Alcohol::factory(9)->create();
        $alcohol = Alcohol::factory()->create([
            'title' => 'meme',
            'price_index' => null,
        ]);

        $response = $this->get('/api/alcohol');

        $data = collect(json_decode($response->content())->data);
        $data->each(function ($alcohol) {
            $this->assertNotNull($alcohol->price_index);
        });
    }

    public function test_it_only_returns_unique()
    {
        MiscHelpers::imitateSahilsFailingConditions();

        $r1 = $this->get(route('api.alcohol', [
            'category' => 'Coolers',
            'sortBy' => 'price_index',
            'page' => 1,
        ]));
        $r2 = $this->get(route('api.alcohol', [
            'category' => 'Coolers',
            'sortBy' => 'price_index',
            'page' => 2,
        ]));


        $r2 = collect(json_decode($r2->content())->data)->map(fn($data) => $data->permanent_id);
        $r1 = collect(json_decode($r1->content())->data)->map(fn($data) => $data->permanent_id);

        $r1->each(function ($id) use ($r2) {
            $this->assertNotContains($id, $r2);
        });
    }

    public function test_it_can_return_multiple_categories()
    {
        Alcohol::factory()->create([
            'category' => 'Wine'
        ]);
        Alcohol::factory()->create([
            'category' => 'Coolers'
        ]);

        $request = $this->get('api/alcohol?category[]=Wine&category[]=Coolers');

        $request->assertJsonFragment([
            'category' => 'Wine'
        ]);
        $request->assertJsonFragment([
            'category' => 'Coolers'
        ]);
    }

    public function test_using_sort_parameters_without_query_returns_correct_number_of_records()
    {
        Alcohol::factory(25)->create();

        $response = $this->get(route('api.alcohol.search', [
            'sortAsc' => 'price_index',
        ]));

        $returnedRecords = collect(json_decode($response->content())->data);

        $this->assertCount(25, $returnedRecords);
    }

    public function test_search_returns_expected_number_of_records_when_given_query()
    {
        self::markTestSkipped();
        for ($i = 0; $i < 50; $i++) {
            Alcohol::factory()->create([
                'title' => "snickers-$i"
            ]);
        }

        $response = $this->get(route('api.alcohol.search', [
            'sortAsc' => 'price_index',
            'query' => 'snickers',
        ]));

        $returnedRecords = collect(json_decode($response->content())->data);

        $this->assertCount(25, $returnedRecords);
    }

    public function test_search_returns_expected_number_of_records_when_given_query_and_sorting_ascending()
    {
        self::markTestSkipped();

        for ($i = 0; $i < 50; $i++) {
            Alcohol::factory()->create([
                'title' => "snickers-$i",
            ]);
        }

        $response = $this->get(route('api.alcohol.search', [
            'sortAsc' => 'price',
            'query' => 'snickers',
        ]));

        $returnedRecords = collect(json_decode($response->content())->data);

        $this->assertCount(25, $returnedRecords);
        $returnedRecords->each(function ($record, $index) use ($returnedRecords) {
            if ($index + 1 === $returnedRecords->count()) {
                return;
            }
            $this->assertLessThanOrEqual($returnedRecords->get($index + 1)->price, $record->price);
        });
    }

    public function test_search_returns_expected_number_of_records_when_given_query_and_sorting_descending()
    {
        self::markTestSkipped();

        for ($i = 0; $i < 50; $i++) {
            Alcohol::factory()->create([
                'title' => "snickers-$i",
                'price' => $i,
            ]);
        }

        $response = $this->get(route('api.alcohol.search', [
            'sortDesc' => 'price',
            'query' => 'snickers',
        ]));

        $returnedRecords = collect(json_decode($response->content())->data);

        $this->assertCount(25, $returnedRecords);

        $returnedRecords->each(function ($record, $index) use ($returnedRecords) {
            if ($index + 1 === $returnedRecords->count()) {
                return;
            }
            $this->assertGreaterThanOrEqual($returnedRecords->get($index + 1)->price, $record->price);
        });
    }
}
