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

    public function test_it_only_returns_unique()
    {
        $this->imitateSahilsFailingConditions();

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

    public function imitateSahilsFailingConditions()
    {
        Alcohol::factory()->create([
            "permanent_id" => 21910,
            "title" => "Black Fly Get Cozy Holiday Mixer Pack",
            "brand" => "Black Fly",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 31.45,
            "volume" => 5676,
            "price_index" => 0.079155340783248,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/black-fly-get-cozy-holiday-mixer-pack-21910",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/9/021910.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/9/021910.jpg.thumb.1280.1280.png",
            "rating" => 5,
            "reviews" => 2,
            "out_of_stock" => false,
            "description" => "Black Fly has you covered for your next holiday gathering. Their Cozy Holiday Mixer Pack is made up of three cans each of Vodka Sour Grape, Sour Raspberry, Crushed Orange and the new Vodka Crushed Punch, as  well as a free Cozy."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 24932,
            "title" => "Black Fly Vodka Crushed Mixer Pack",
            "brand" => "Black Fly",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 25.95,
            "volume" => 4260,
            "price_index" => 0.087022132796781,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/black-fly-vodka-crushed-mixer-pack-24932",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/9/024932.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/9/024932.jpg.thumb.1280.1280.png",
            "rating" => 4,
            "reviews" => 5,
            "out_of_stock" => false,
            "description" => "Early pioneers of the 'not too sweet' mixed drinks category, Black Fly was the first company in 100 years to be granted a distillery license in Ontario, in 2005. Their new Vodka Crushed Mixer Pack includes new flavours like Vodka Crushed Watermelon, Vodka Crushed Mango, Vodka Crushed Blueberry, and Vodka Crushed Punch."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 19111,
            "title" => "Black Fly Vodka Crushed Peach",
            "brand" => "Black Fly",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 2.95,
            "volume" => 473,
            "price_index" => 0.089096949562066,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/black-fly-vodka-crushed-peach-19111",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019111.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/1/019111.jpg.thumb.1280.1280.png",
            "rating" => 4,
            "reviews" => 6,
            "out_of_stock" => true,
            "description" => "In 2005, husband and wife duo co-founded Black Fly Spirit Beverages and were awarded first new Distillery License in Ontario in over 100 years. Their 'not too sweet' mixes use real juice, like this ripe and punchy example, with peach aromas that leap from the glass. Pair with spanakopita or a simple peach and arugula salad."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 77933,
            "title" => "Rev (PET)",
            "brand" => "Rev",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 2.95,
            "volume" => 473,
            "price_index" => 0.089096949562066,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/rev-pet-77933",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/7/7/9/077933.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/7/7/9/077933.jpg.thumb.1280.1280.png",
            "rating" => 5,
            "reviews" => 4,
            "out_of_stock" => false,
            "description" => "Clear blue colour; aromas of candy-floss; sweet with citrus, blueberry and wine gum tones."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 29695,
            "title" => "Black Fly Spiced Rum Mulled Cider",
            "brand" => null,
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 24.95,
            "volume" => 4000,
            "price_index" => 0.089107142857143,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/black-fly-spiced-rum-mulled-cider-29695",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/9/6/029695.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/9/6/029695.jpg.thumb.1280.1280.png",
            "rating" => 5,
            "reviews" => 2,
            "out_of_stock" => true,
            "description" => "Ontario's own Black Fly offers this aromatic autumn favorite. Apple cider mixed with spiced rum has rejuvenating scents of cinnamon, nutmeg and farm-fresh apples. Gently heat to enhance the spices and serve with an orange wheel. Pair with warmed apple cobbler or thanksgiving turkey dinner."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 491514,
            "title" => "Jaw Drop Flashing Peaches",
            "brand" => "Jaw Drop",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 3,
            "volume" => 473,
            "price_index" => 0.090607067351253,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/jaw-drop-flashing-peaches-491514",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/5/491514.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/5/491514.jpg.thumb.1280.1280.png",
            "rating" => 5,
            "reviews" => 2,
            "out_of_stock" => false,
            "description" => "Jaw Drop Coolers deliver soft, sweet and juicy flavours, along with eye-catching graphic packaging! Aromas of ripe peach and apricot, with good balance, lively carbonation and a clean finish. Serve with charcuterie, grilled chicken or quinoa salad."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 447763,
            "title" => "Jaw Drop Tickling Pink Lemonade",
            "brand" => "Jaw Drop",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 3,
            "volume" => 473,
            "price_index" => 0.090607067351253,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/jaw-drop-tickling-pink-lemonade-447763",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/7/7/447763.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/7/7/447763.jpg.thumb.1280.1280.png",
            "rating" => 4,
            "reviews" => 7,
            "out_of_stock" => false,
            "description" => "Classic lemonade flavour and tart raspberry come together in this refreshing cooler. Pouring a soft pink, it offers aromas of lemon tarts, raspberry and zingy sour candies; the palate is medium-sweet, light, and lightly fizzy with replays of tart candies, lemon, and raspberry followed by a cleansing finish."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 407478,
            "title" => "Jaw Drop Squirting Oranges",
            "brand" => "Jaw Drop",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 3,
            "volume" => 473,
            "price_index" => 0.090607067351253,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/jaw-drop-squirting-oranges-407478",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/7/4/407478.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/7/4/407478.jpg.thumb.1280.1280.png",
            "rating" => 4.5,
            "reviews" => 3,
            "out_of_stock" => true,
            "description" => "Clear, medium orange colour; aromas of citrus and candied oranges; lightly carbonated with balanced flavours of citrus, orange juice and candied orange peel lead to a tangy finish."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 281907,
            "title" => "Jaw Drop Sucking Lemons",
            "brand" => "Jaw Drop",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 3,
            "volume" => 473,
            "price_index" => 0.090607067351253,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/jaw-drop-sucking-lemons-281907",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/8/1/9/281907.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/8/1/9/281907.jpg.thumb.1280.1280.png",
            "rating" => 5,
            "reviews" => 4,
            "out_of_stock" => false,
            "description" => "Pucker up, this zingy lemon/lime thirst quencher offers bold lemon sorbet flavour. Perfect for those who love tart and refreshing beverages."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 24328,
            "title" => "Jaw Drop Blue Blast",
            "brand" => "Jaw Drop",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 3,
            "volume" => 473,
            "price_index" => 0.090607067351253,
            "alcohol_content" => 7,
            "country" => null,
            "url" => "https://www.lcbo.com/en/jaw-drop-blue-blast-vodka-cooler-24328",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024328.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024328.jpg.thumb.1280.1280.png",
            "rating" => 4.5,
            "reviews" => 2,
            "out_of_stock" => false,
            "description" => "Made in Canada, a cool blue beverage that's sure to take you back to those hot summer days with a freezing-cold blue ice pop. Dominated by nostalgic blue raspberry flavour, and made to be just sweet enough that this vodka cocktail is easy-drinking, but not cloying."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 24366,
            "title" => "Weekender Blue Raspberry",
            "brand" => "Weekender",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 3.25,
            "volume" => 500,
            "price_index" => 0.092857142857143,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/weekender-blue-raspberry-24366",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024366.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024366.jpg.thumb.1280.1280.png",
            "rating" => 3.5,
            "reviews" => 44,
            "out_of_stock" => true,
            "description" => "A ready-to-serve, adult drink that's a perfect mix of blue raspberry and premium vodka. This is clear and lightly sweet with forward flavours of raspberry jello, citrus fruit and clean vodka notes on a refreshing finish. It's packed in a resealable, environmentally friendly, lightweight tetra-box. Easy to chill and enjoy."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 24426,
            "title" => "Black Fly Vodka Crushed Pineapple Punch",
            "brand" => "Black Fly",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 3.1,
            "volume" => 473,
            "price_index" => 0.093627302929628,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/black-fly-vodka-crushed-pineapple-punch-24426",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024426.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024426.jpg.thumb.1280.1280.png",
            "rating" => 4,
            "reviews" => 7,
            "out_of_stock" => false,
            "description" => "The Black Fly Beverage Company in Ontario, which opened in 2005, set out to make premium, ready-to-drink beverages. This cocktail boasts real tropical flavours with 7% vodka and 100% pineapple juice. It's deliciously light and not overly sweet. Enjoy an ice-cold bottle or serve over ice, garnished with a pineapple slice."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 407460,
            "title" => "Black Fly Vodka Sour Grape",
            "brand" => "Black Fly",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 3.1,
            "volume" => 473,
            "price_index" => 0.093627302929628,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/black-fly-vodka-sour-grape-407460",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/7/4/407460.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/0/7/4/407460.jpg.thumb.1280.1280.png",
            "rating" => 4.5,
            "reviews" => 3,
            "out_of_stock" => false,
            "description" => "Tackle your taste buds with juicy sour grape and smooth Canadian vodka; a mouthwatering mix of pure grape juice, tart elderberry juices and 7% alc./vol. vodka. It's the perfect balance of sour with a hint of sweet, and the smooth taste of Canadian vodka. Genuine Juice. Not too sweet."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 553578,
            "title" => "Black Fly Vodka Crushed Orange",
            "brand" => "Black Fly",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 3.1,
            "volume" => 473,
            "price_index" => 0.093627302929628,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/black-fly-vodka-crushed-orange-553578",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/3/5/553578.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/3/5/553578.jpg.thumb.1280.1280.png",
            "rating" => 5,
            "reviews" => 5,
            "out_of_stock" => false,
            "description" => "Locally produced with high-quality ingredients,  including real fruit juice, pure cane sugar and premium vodka. Enjoy the not-too-sweet, bold and intense orange flavour. Lightly carbonated, refreshingly bittersweet and tart on the finish."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 448613,
            "title" => "Black Fly Vodka Sour Raspberry",
            "brand" => "Black Fly",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 3.1,
            "volume" => 473,
            "price_index" => 0.093627302929628,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/black-fly-vodka-sour-raspberry-448613",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/8/6/448613.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/8/6/448613.jpg.thumb.1280.1280.png",
            "rating" => 5,
            "reviews" => 5,
            "out_of_stock" => false,
            "description" => "Deep pink with a subtle spritz this cooler is fragrant with candied raspberry aromas. The palate is medium-sweet and light with sweet and sour raspberry characteristics followed by a fruity finish."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 273219,
            "title" => "Vex Raspberry Lemonade",
            "brand" => "Vex",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 13,
            "volume" => 1980,
            "price_index" => 0.093795093795094,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/vex-raspberry-lemonade-273219",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/3/2/273219.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/3/2/273219.jpg.thumb.1280.1280.png",
            "rating" => 5,
            "reviews" => 3,
            "out_of_stock" => true,
            "description" => "Pale bubblegum pink colour; aromas of strawberry/raspberry, with citrus and grapy notes; very sweet, light to medium bodied, spritzy and balanced, dominating flavours of raspberry, with notes of citrus."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 491746,
            "title" => "Cabana Coast Original Mule",
            "brand" => "Cabana Coast",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 3.15,
            "volume" => 473,
            "price_index" => 0.095137420718816,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/cabana-coast-moscow-mule-491746",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/7/491746.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/7/491746.jpg.thumb.1280.1280.png",
            "rating" => 4.5,
            "reviews" => 13,
            "out_of_stock" => false,
            "description" => "This offering from Ace Beverage Group is a handcrafted premium cocktail in a convenient package. Expect forward aromas and flavours of ginger and zesty lime, with a thirst-quenching finish. Serve as an aperitif or while backyard barbecuing."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 491290,
            "title" => "Pop Shoppe Hard Cream Soda",
            "brand" => "Pop Shoppe Rtd",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 3.15,
            "volume" => 473,
            "price_index" => 0.095137420718816,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/pop-shoppe-hard-cream-soda-491290",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/2/491290.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/1/2/491290.jpg.thumb.1280.1280.png",
            "rating" => 3.5,
            "reviews" => 10,
            "out_of_stock" => false,
            "description" => "Packaged in a retro-style soda bottle by Canadian company The Pop Shoppe, this is an adult's version of the classic cream soda. Expect the sweet cream soda flavours of cherry, red berry fruit and vanilla. Smooth and creamy with light carbonation; enjoy well-chilled by the pool and serve with spring rolls or samosas."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 14491,
            "title" => "Beach Bum Lemon Coconut",
            "brand" => "Beach Bum Rtd",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 2.3,
            "volume" => 473,
            "price_index" => 0.097251585623679,
            "alcohol_content" => 5,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/beach-bum-lemon-coconut-14491",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014491.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/4/014491.jpg.thumb.1280.1280.png",
            "rating" => 5,
            "reviews" => 22,
            "out_of_stock" => true,
            "description" => "This thirst-quenching cooler blends premium vodka with natural lemon juice, REAL coconut water and a light sparkling carbonation. A fresh mix that will have you dreaming of tropical beaches."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 24399,
            "title" => "Hail Caesar Korean Bbq",
            "brand" => "Hail Caesar",
            "category" => "Coolers",
            "subcategory" => "Caesars",
            "price" => 3.25,
            "volume" => 473,
            "price_index" => 0.098157656297191,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/hail-caesar-korean-bbq-24399",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024399.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024399.jpg.thumb.1280.1280.png",
            "rating" => 3.5,
            "reviews" => 37,
            "out_of_stock" => false,
            "description" => "All Hail, the new caesar! This is infused with Shiitake mushroom and Korean BBQ spices adding an exotic twist to a Canadian classic. Packed with sweet, tangy, spicy and smoky flavours with ripe tomato and clam tones. Notes of umami and just the right amount of spice and heat round out the finish. Chill, shake it and enjoy."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 515429,
            "title" => "Palm Bay Iced Tea Pineapple Peach",
            "brand" => "Palm Bay",
            "category" => "Coolers",
            "subcategory" => "Teas",
            "price" => 10.55,
            "volume" => 2130,
            "price_index" => 0.09906103286385,
            "alcohol_content" => 5,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/palm-bay-iced-tea-pineapple-peach-515429",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/5/4/515429.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/1/5/4/515429.jpg.thumb.1280.1280.png",
            "rating" => null,
            "reviews" => 0,
            "out_of_stock" => true,
            "description" => ""
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 553560,
            "title" => "Black Fly Vodka Mixed Berry (PET)",
            "brand" => "Black Fly",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 11.35,
            "volume" => 1600,
            "price_index" => 0.10133928571429,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/black-fly-vodka-mixed-berry-pet-553560",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/3/5/553560.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/3/5/553560.jpg.thumb.1280.1280.png",
            "rating" => 2,
            "reviews" => 8,
            "out_of_stock" => false,
            "description" => "A sensational blend of mixed berries and premium Canadian vodka. Locally produced with real blueberry, blackberry, cranberry and raspberry juices and pure cane sugar. Lightly sparkling and not-too-sweet with a refreshingly tart finish. Enjoy the burst of tangy mixed berries on the nose and palate."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 24360,
            "title" => "Black Fly Tequila Margarita Strawberry",
            "brand" => "Black Fly",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 11.35,
            "volume" => 1600,
            "price_index" => 0.10133928571429,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/black-fly-tequila-margarita-strawberry-24360",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024360.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024360.jpg.thumb.1280.1280.png",
            "rating" => 4,
            "reviews" => 8,
            "out_of_stock" => false,
            "description" => "In 2005, a husband and wife duo co-founded Black Fly Spirit Beverages and was awarded the first new Distillery License in Ontario in over 100 years. This 'not too sweet' strawberry tequila margarita blends pure strawberry and lime juices. Perfect for Mexican fare or enjoy over ice as a starter."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 612713,
            "title" => "Black Fly Vodka Cranberry (PET)",
            "brand" => "Black Fly",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 11.35,
            "volume" => 1600,
            "price_index" => 0.10133928571429,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/black-fly-vodka-cranberry-pet-612713",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/2/7/612713.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/1/2/7/612713.jpg.thumb.1280.1280.png",
            "rating" => 4,
            "reviews" => 5,
            "out_of_stock" => false,
            "description" => "Bright pink colour; aromas and flavours of cranberry cocktail and hints of blueberry; well balanced and refreshing."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 24342,
            "title" => "Black Fly Rum Pina Colada",
            "brand" => "Black Fly",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 11.35,
            "volume" => 1600,
            "price_index" => 0.10133928571429,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/black-fly-rum-pina-colada-24342",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024342.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024342.jpg.thumb.1280.1280.png",
            "rating" => 3.5,
            "reviews" => 5,
            "out_of_stock" => false,
            "description" => "The goal of Ontario's Black Fly Beverage Company, which opened in 2005, was to locally craft, premium, bar-quality drinks that weren't excessively sweet. This offering is a smooth tropical blend of 7% rum, pure pineapple juice and natural coconut. Serve this ice cold or frozen to slush in the bottle. No blender is required."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 225771,
            "title" => "Black Fly Tequila Margarita (PET)",
            "brand" => "Black Fly",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 11.35,
            "volume" => 1600,
            "price_index" => 0.10133928571429,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/black-fly-tequila-margarita-pet-225771",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/2/5/7/225771.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/2/5/7/225771.jpg.thumb.1280.1280.png",
            "rating" => 4,
            "reviews" => 14,
            "out_of_stock" => false,
            "description" => "Three flavours of Tequila Margarita; classic lime, orange mango and strawberry."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 19303,
            "title" => "Crown Royal Whisky & Cola",
            "brand" => "Crown Royal",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 3.45,
            "volume" => 473,
            "price_index" => 0.10419812745394,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/crown-royal-whisky-cola-19303",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019303.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/9/3/019303.jpg.thumb.1280.1280.png",
            "rating" => 3,
            "reviews" => 31,
            "out_of_stock" => false,
            "description" => "Crown Royal was introduced to the world in 1939 to mark the first grand tour of Canada by King George VI and Queen Elizabeth. Their newest product does the mixing for you and offers notes of spicy, fruity rye that meld beautifully with rich cola notes in this ready-to-drink option. Try with duck pâté or chocolate brownies."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 555896,
            "title" => "Palm Bay Vodka Soda Tangerine Lime",
            "brand" => "Palm Bay",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 13.5,
            "volume" => 2130,
            "price_index" => 0.1056338028169,
            "alcohol_content" => 6,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/palm-bay-vodka-soda-tangerine-lime-555896",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/5/8/555896.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/5/5/5/8/555896.jpg.thumb.1280.1280.png",
            "rating" => 3,
            "reviews" => 1,
            "out_of_stock" => true,
            "description" => "This lively vodka soda is sure to be a hit. Bursting with sweet tangerine, lime and a kiss of ripe peach on a fizzy palate. Light carbonation makes it light and refreshing. It's perfect for patio season."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 24346,
            "title" => "Jack Daniels Tennessee Honey Lemonade",
            "brand" => "Jack Daniels",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 3,
            "volume" => 473,
            "price_index" => 0.10570824524313,
            "alcohol_content" => 6,
            "country" => "United States",
            "url" => "https://www.lcbo.com/en/jack-daniels-tennessee-honey-lemonade-24346",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024346.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024346.jpg.thumb.1280.1280.png",
            "rating" => 5,
            "reviews" => 11,
            "out_of_stock" => false,
            "description" => "Ready-to-enjoy, blend of original recipe honey liqueur, classic JD Whiskey and fresh lemonade. Distinctive JD Whiskey flavours highlight the sweet citrus and honey elements. The palate is smooth, with balanced sweetness, honey, juicy lemon and warming whiskey on a refreshing finish. Pair with BBQ or pulled pork sandwiches."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 667303,
            "title" => "Nova Scotia Spirits Vodka Soda Lemon Lime",
            "brand" => "Blue Lobster",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 3,
            "volume" => 473,
            "price_index" => 0.10570824524313,
            "alcohol_content" => 6,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/blue-lobster-vodka-soda-lemon-lime-667303",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/7/3/667303.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/6/6/7/3/667303.jpg.thumb.1280.1280.png",
            "rating" => 4.5,
            "reviews" => 19,
            "out_of_stock" => false,
            "description" => "Established in Nova Scotia by the Nova Scotia Spirit Co. This lemon-lime vodka soda will grip your taste buds with lovely lemon-lime flavours. Light-bodied and dry, with lively carbonation and a crisp, clean finish. Enjoy patio-side with light appetizers or serve at a Sunday brunch with friends."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 273110,
            "title" => "Canadian Club & Ginger Ale",
            "brand" => "Canadian Club Rtd",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 3.05,
            "volume" => 473,
            "price_index" => 0.10747004933051,
            "alcohol_content" => 6,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/canadian-club-ginger-ale-273110",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/3/1/273110.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/7/3/1/273110.jpg.thumb.1280.1280.png",
            "rating" => 4.5,
            "reviews" => 6,
            "out_of_stock" => true,
            "description" => "Golden amber colour; subtle aromas of ginger, sweet rye with notes of grain and spicy wood; sweet with foamy carbonation, well balanced, flavours of preserved ginger, subtle notes of rye and spice, with a ginger ale like finish."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 211185,
            "title" => "Rockstar Original",
            "brand" => "Rockstar",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 3.55,
            "volume" => 473,
            "price_index" => 0.10877225235163,
            "alcohol_content" => 6.9,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/rockstar-original-211185",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/1/1/211185.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/1/1/211185.jpg.thumb.1280.1280.png",
            "rating" => 5,
            "reviews" => 1,
            "out_of_stock" => false,
            "description" => "Bright fluorescent gold in colour with aromas of sweet candied strawberry and cream soda. Medium-sweet, light-bodied, it has flavours of cream soda and a clean finish."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 24425,
            "title" => "Georgian Bay Prickly Pear Tequila Smash",
            "brand" => "Georgian Bay",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 13.95,
            "volume" => 2130,
            "price_index" => 0.10915492957746,
            "alcohol_content" => 6,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/georgian-bay-tequila-smash-prickly-pear-24425",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024425.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024425.jpg.thumb.1280.1280.png",
            "rating" => 4,
            "reviews" => 7,
            "out_of_stock" => false,
            "description" => "Here's another smash hit ready-to-drink cocktail from Ontario-based Georgian Bay Spirit Co. This tropical cocktail is a delicious blend of the uniquely sweet prickly pear fruit, limes & 100% Blue Agave tequila. Enjoy with Mexican cuisine stuffed peppers or pizza."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 24432,
            "title" => "Georgian Bay Mango Tequila Smash",
            "brand" => "Georgian Bay",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 13.95,
            "volume" => 2130,
            "price_index" => 0.10915492957746,
            "alcohol_content" => 6,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/georgian-bay-tequila-smash-6pk-24432",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024432.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024432.jpg.thumb.1280.1280.png",
            "rating" => 4,
            "reviews" => 11,
            "out_of_stock" => false,
            "description" => "Award-winning Georgian Bay Spirit Co. introduces a new 'smashing' Tequila-based, craft cocktail in a can. Made with authentic Mexican Blue Agave Tequila, pure mango and lime and a hint of habanero. It's boldly flavoured, well-balanced and refreshing. Serve chilled straight from the can or over ice in a salt-rimmed glass."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 30103,
            "title" => "White Claw Surge Variety Pack",
            "brand" => null,
            "category" => "Coolers",
            "subcategory" => "Seltzers & Sodas",
            "price" => 32.95,
            "volume" => 4260,
            "price_index" => 0.11049631120054,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/white-claw-surge-variety-pack-30103",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/3/0/1/030103.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/3/0/1/030103.jpg.thumb.1280.1280.png",
            "rating" => 5,
            "reviews" => 9,
            "out_of_stock" => false,
            "description" => "Claw into this White Claw Surge Variety Pack. The pack includes 3 x 355 mL each of their Natural Lime, Blood Orange, Cranberry, and Blackberry."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 24327,
            "title" => "Brock Street Raspberry Lemon Vodka Soda",
            "brand" => "Brock Street Brewing",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 2.9,
            "volume" => 473,
            "price_index" => 0.11147414952912,
            "alcohol_content" => 5.5,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/brock-street-raspberry-lemon-vodka-soda-24327",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024327.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/3/024327.jpg.thumb.1280.1280.png",
            "rating" => 4.5,
            "reviews" => 5,
            "out_of_stock" => false,
            "description" => "A refreshing cocktail, handcrafted in small batches using simple ingredients, such as natural flavours, carbonated water and premium vodka. It's bursting with raspberry and lemon tones. The palate is gently sweet and bubbly with a crisp lemony finish. Serve in a tall glass garnished with frozen raspberries and lemon slices."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 493486,
            "title" => "Bacardi Breezer Tropical Orange Smoothie",
            "brand" => "Bacardi",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 12,
            "volume" => 2130,
            "price_index" => 0.11267605633803,
            "alcohol_content" => 5,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/bacardi-breezer-tropical-orange-smoothie-493486",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/3/4/493486.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/9/3/4/493486.jpg.thumb.1280.1280.png",
            "rating" => 4.5,
            "reviews" => 13,
            "out_of_stock" => false,
            "description" => "Reminiscent of orange creamsicles, the Tropical Orange Smoothie delivers flavours of sweet candied orange, creamy vanilla and a hint of coconut. Serve with grilled sausages or hot dogs, pretzels or potato chips."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 29690,
            "title" => "Georgian Bay Holiday Spirit Smash Pack",
            "brand" => null,
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 28.95,
            "volume" => 4260,
            "price_index" => 0.11326291079812,
            "alcohol_content" => 6,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/georgian-bay-holiday-spirit-smash-pack-29690",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/9/6/029690.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/9/6/029690.jpg.thumb.1280.1280.png",
            "rating" => 0,
            "reviews" => 0,
            "out_of_stock" => true,
            "description" => "Go local this Holiday season with Georgian Bay craft distilled cocktails-in-a-can. Receive four each of the following flavours => Mango Tequila Smash, Pear Gin Smash & Watermelon Vodka Smash. Pair with spicy Thai rolls or party snacks. This crowd pleaser has something for everyone while entertaining!"
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 166090,
            "title" => "Jack Daniel's & Cola",
            "brand" => "Jack Daniel's",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 3.25,
            "volume" => 473,
            "price_index" => 0.11451726568006,
            "alcohol_content" => 6,
            "country" => "United States",
            "url" => "https://www.lcbo.com/en/jack-daniel-s-cola-166090",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/6/6/0/166090.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/1/6/6/0/166090.jpg.thumb.1280.1280.png",
            "rating" => 4,
            "reviews" => 13,
            "out_of_stock" => false,
            "description" => "This popular cocktail is now available in a convenient, easy to serve, pre-mixed format. Crafted from authentic Jack Daniels Old No. 7 and real cola. The mellow Tennessee whiskey flavours are in perfect harmony with the sweet cola notes. A hint of spritz refreshes the palate. Best served chilled, straight or over ice."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 24400,
            "title" => "Palm Bay Island Mixer",
            "brand" => "Palm Bay",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 24.55,
            "volume" => 4260,
            "price_index" => 0.11525821596244,
            "alcohol_content" => 5,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/palm-bay-island-mixer-24400",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024400.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/4/4/024400.jpg.thumb.1280.1280.png",
            "rating" => 3,
            "reviews" => 1,
            "out_of_stock" => false,
            "description" => "Escape to the tropics with this Palm Bay Variety Pack. Each one bursts with tropical flavours. You'll receive three 355 mL cans of Key Lime Cherry, Strawberry Pineapple, Pineapple Mandarin Orange and their newest flavour, Banana Strawberry!"
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 14503,
            "title" => "Mott's Clamato Caesar Sweet & Spicy",
            "brand" => "Mott'S",
            "category" => "Coolers",
            "subcategory" => "Caesars",
            "price" => 2.95,
            "volume" => 458,
            "price_index" => 0.11710996427154,
            "alcohol_content" => 5.5,
            "country" => "United States",
            "url" => "https://www.lcbo.com/en/mott-s-clamato-caesar-sweet-spicy-14503",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/5/014503.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/1/4/5/014503.jpg.thumb.1280.1280.png",
            "rating" => 4,
            "reviews" => 7,
            "out_of_stock" => true,
            "description" => "Meet the latest member of the clamato family => sweet & spicy. The invigorating blend of tomato juice with the sweetness of mango and the spiciness of chile helps make your cocktails fun and creative."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 29692,
            "title" => "Cottage Springs Cranberry Vodka Lemonade Mini Keg",
            "brand" => null,
            "category" => "Coolers",
            "subcategory" => "Seltzers & Sodas",
            "price" => 29.95,
            "volume" => 5000,
            "price_index" => 0.1198,
            "alcohol_content" => 5,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/cottage-springs-cranberry-vodka-lemonade-mini-keg-29692",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/9/6/029692.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/9/6/029692.jpg.thumb.1280.1280.png",
            "rating" => 0,
            "reviews" => 0,
            "out_of_stock" => true,
            "description" => "Enjoy a taste of summer at your holiday party with this 5 L keg of cranberry vodka lemonade. Conveniently, it's fizzy and fun. Perfect for finger foods. "
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 21901,
            "title" => "Cottage Springs Blood Orange Vodka Soda Mini Keg",
            "brand" => "Cottage Springs",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 29.95,
            "volume" => 5000,
            "price_index" => 0.1198,
            "alcohol_content" => 5,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/cottage-springs-blood-orange-vodka-soda-mini-keg-21901",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/9/021901.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/1/9/021901.jpg.thumb.1280.1280.png",
            "rating" => 5,
            "reviews" => 2,
            "out_of_stock" => true,
            "description" => "Cottage Springs' Blood Orange Vodka Soda is in a 5L mini keg! This larger format is a convenient way to serve a cocktail over the festive season. Just add a garnish, and you are good to go!"
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 27075,
            "title" => "Cottage Springs Wild Cherry Vodka Soda Keg",
            "brand" => "Cottage Springs",
            "category" => "Coolers",
            "subcategory" => "Seltzers & Sodas",
            "price" => 29.95,
            "volume" => 5000,
            "price_index" => 0.1198,
            "alcohol_content" => 5,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/cottage-springs-wild-cherry-vodka-soda-keg-ecomm-27075",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/0/027075.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/7/0/027075.jpg.thumb.1280.1280.png",
            "rating" => 3.5,
            "reviews" => 5,
            "out_of_stock" => true,
            "description" => "In 2018 Cottage Springs Beverage Co. was established, and they've been crafting top-quality products ever since. Enjoy the fresh and smooth taste of wild cherry. It's light and refreshingly crisp with a balanced finish. Pair with barbecued chicken or dark chocolate soufflé."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 444497,
            "title" => "American Vintage Lemon Hard Iced Tea",
            "brand" => "American Vintage",
            "category" => "Coolers",
            "subcategory" => "Teas",
            "price" => 12.8,
            "volume" => 2130,
            "price_index" => 0.12018779342723,
            "alcohol_content" => 5,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/american-vintage-lemon-hard-iced-tea-444497",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/4/4/444497.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/4/4/4/4/444497.jpg.thumb.1280.1280.png",
            "rating" => 4,
            "reviews" => 11,
            "out_of_stock" => false,
            "description" => "Brewed from real tea leaves that impart authentic character; cloudy, amber in appearance with aromas of tea, white flowers, and citrus; the palate is light with a moderate sweetness balanced by light bitterness from the slow-brewed tea leaves. Expect refreshing flavours of citrus, tea, and dried floral."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 29737,
            "title" => "Absolut Cocktails Holiday Mixer Pack",
            "brand" => null,
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 23.95,
            "volume" => 2840,
            "price_index" => 0.12047283702213,
            "alcohol_content" => 7,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/absolut-cocktails-holiday-mixer-pack-29737",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/9/7/029737.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/0/2/9/7/029737.jpg.thumb.1280.1280.png",
            "rating" => 0,
            "reviews" => 0,
            "out_of_stock" => true,
            "description" => "From one of the world's most popular vodka producers comes this mix pack with four cans each of two ready-to-drink cocktails. Absolut Mango Mule has tropical mango flavours with a warm ginger finish, and the new Absolut Grapefruit Paloma is lightly sparkling, with grapefruit and a hint of spice. Serve with nachos."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 211219,
            "title" => "Palm Bay Pineapple Mandarin Orange",
            "brand" => "Palm Bay",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 13,
            "volume" => 2130,
            "price_index" => 0.12206572769953,
            "alcohol_content" => 5,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/palm-bay-pineapple-mandarin-orange-211219",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/1/2/211219.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/1/2/211219.jpg.thumb.1280.1280.png",
            "rating" => 5,
            "reviews" => 1,
            "out_of_stock" => true,
            "description" => "This tropical infusion is bursting with fresh flavours of ripe pineapple and mandarin oranges. Good carbonation makes it light, crisp and refreshing, everything you want in a thirst quenching drink on a hot summer day."
        ]);
        Alcohol::factory()->create([
            "permanent_id" => 211227,
            "title" => "Palm Bay Ruby Grapefruit",
            "brand" => "Palm Bay",
            "category" => "Coolers",
            "subcategory" => "Coolers & Cocktails",
            "price" => 13,
            "volume" => 2130,
            "price_index" => 0.12206572769953,
            "alcohol_content" => 5,
            "country" => "Canada",
            "url" => "https://www.lcbo.com/en/palm-bay-ruby-grapefruit-211227",
            "thumbnail_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/1/2/211227.jpg.thumb.319.319.png",
            "image_url" => "https://aem.lcbo.com/content/dam/lcbo/products/2/1/1/2/211227.jpg.thumb.1280.1280.png",
            "rating" => null,
            "reviews" => 0,
            "out_of_stock" => true,
            "description" => "Bubbly light pink colour; aromas of fresh pink grapefruit dusted with sugar, rose petals and orange zest; on the palate it is refreshingly sweet and tart with flavours of ruby red grapefruit and ginger ale."
        ]);
    }
}
