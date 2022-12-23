<?php /** @noinspection ALL */

namespace Tests\Feature;

use App\Models\Alcohol;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;
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
        Alcohol::factory(100)->create();
        $response = $this->get("/api/alcohol?sortBy=$sortField");

        $responseArray = json_decode($response->getContent(), true)['data'];

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

    /**
     * @return void
     * @dataProvider filterMinConditionProvider
     */
    public function test_it_can_filter_by_min_values($filterValue, $queryParameter, $alcoholProperty)
    {
        Alcohol::factory(25)->create();
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
        Alcohol::factory(25)->create();
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
        Alcohol::factory(25)->create();
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
        Alcohol::factory(25)->create();
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
}
