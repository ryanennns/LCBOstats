# LCBOstats

~~Currently available at http://lcbostats.com/api/alcohol.~~

As of 2025-06-03 I've decided to sunset this project. I have historical price data for LCBO products starting
from December 2022 --> May 2025. If that data set interests you, or you want to take over hosting responsibilities
for this application and wish to have a copy of the data, feel free to reach out to me at ryanennns (((at))) gmail dot com.

LCBOstats is a web app dedicated to:

- Scraping LCBO product data
- Tracking changes in LCBO product prices
- Calculating the most cost efficient alcoholic beverages by $/mL alcohol content

## Using the API

The root URL for accessing the LCBOstats alcohol database is `http://lcbostats.com/api/alcohol`.

### Fetching by ID

You can fetch a specific LCBO product by ID by using:

`http://lcbostats.com/api/alcohol/{id}`, where `{id}` is the primary key of
the product in question. The primary key of each data object is `permanent_id`.

### Querying LCBOstats

LCBOstats returns paginated responses with 25 records per page. The JSON object returned
contains a series of links for the next, previous, first, and last pages for the content
of the query you've ran.

All query parameters should be appended to `http://lcbostats.com/api/alcohol`.

- `sortAsc=` - sorts results ascending by the data field specified.
- `sortDesc=` - sorts results descending by the data field specified.
- `minPriceIndex=` - sets the minimum `priceIndex` returned by the api to the value
  you've specified.
- `maxPriceIndex=` - sets the maximum `priceIndex` returned by the api to the value
  you've specified.
- `minPrice=` - sets the minimum `price` returned by the api to the value
  you've specified.
- `maxPrice=` - sets the maximum `price` returned by the api to the value
  you've specified.
- `minVolume=`  - sets the minimum `volume` returned by the api to the value
  you've specified.
- `maxVolume=`  - sets the maximum `volume` returned by the api to the value
  you've specified.
- `minAlcoholContent=` - sets the minimum `alcoholContent` returned by the api
  to the value you've specified.
- `maxAlcoholContent=` - sets the maximum `alcoholContent` returned by the api
  to the value you've specified.
- `search=` - performs an exact search on titles with the value given.

#### Response Content

Each response to `/api/alcohol` adheres to the following structure:

- An outer array `data`, a wrapper for the multiple products being returned.
- WIthin data, a series of JSON objects, each containing the following fields:
    - `permanent_id` - the unique identifier of the product
    - `title` - the title of the product
    - `brand` - the brand of the product
    - `category` - an enum value that is strictly one of the following four options:
        - `Beer & Cider`
        - `Spirits`
        - `Coolers`
        - `Wine`
    - `subcategory` - a "second layer" category that is a child of the category; for
      example, *Vodka* would be a subcategory of *Spirits*; *IPA* of *Beer & Cider*; etc.
    - `price` - the price of the product, in CAD
    - `volume` - the liquid volume of the product, in mL
    - `price_index` - the cost efficiency of the product, calculate as dollar per unit alcohol content
    - `alcohol_content` - the alcohol content of the product
    - `country` - the country of origin of the product
    - `url` - the URL to the LCBO.com webpage where the product can be purchased
    - `thumbnail_url` - the URL to a low resolution thumbnail image of the product
    - `image_url` - the URL to a high resolution image of the product
    - `rating` - a floating point average rating, out of 5, given by LCBO.com customers
    - `reviews` - the number of reviews given that resulted in the above rating
    - `out_of_stock` - a boolean representing whether the product is in stock
    - `description` - a long form description of the product, as found on LCBO.com

##### Example Response

```json
{
  "data": [
    {
      "permanent_id": 12064,
      "title": "Maxime Trijol Orange Liqueur",
      "brand": "Maxime Trijol",
      "category": "Spirits",
      "subcategory": "Liqueur",
      "price": 19.25,
      "volume": 750,
      "price_index": 0.064166666666667,
      "alcohol_content": 40,
      "country": "France",
      "url": "https://www.lcbo.com/en/maxime-trijol-orange-liqueur-12064",
      "thumbnail_url": "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/0/012064.jpg.thumb.319.319.png",
      "image_url": "https://aem.lcbo.com/content/dam/lcbo/products/0/1/2/0/012064.jpg.thumb.1280.1280.png",
      "rating": null,
      "reviews": 0,
      "out_of_stock": false,
      "description": "Fine orange and cognac based liqueur, from a family-run firm that was founded in 1859. Quite perfumed with upfront aromas and flavours of orange, followed by notes of light spice, vanilla and bergamot tea. The palate is sweet and rounded with intense flavours of orange and spice. Serve chilled, on ice or use in a cocktail."
    }
  ]
}
```

### Querying Price History

LCBOstats.com has been tracking the price changes of LCBO products since late December
of 2022. This means that, whenever a price is changed on a product, LCBOstats.com will:

- Update the database with the new price
- Create a new price change record which contains the:
    - Previous price
    - New price
    - Time the price changed

**LCBOstats stores an initial price change when a new product is saved to the database.**
This means that the earliest price change record for a given product is not actually a
change in price, but rather the creation of the item itself.

#### Response Content

Each price change request will return a JSON object structured as follows:

- An outer array `data`, an array wrapper for the multiple price changes that are being
  returned
- Within `data`, a series of objects can be found. Each object contains:
    - `permanent_id` - the unique identifier of the product.
    - `title` - the title of the product
    - `price_changes` - a count of the number of price changes stored for the given product
    - `price_change_history` - an array containing a series of objects, each representing
      a historical change in price. Each object in the `price_change_history` array contains:
        - `price` - the price that the product was updated to, and
        - `created_at` - the timestamp that the price change was recorded at.
    - `current_price` - the current price of the product
    - `highest_price` - the highest price that has been recorded for the product
    - `lowest_price` - the lowest price that has been recorded for the product
    - `oldest_price` - the oldest price recorded, that is, the price that was recorded when
      product was initially tracked by LCBOstats.

##### Example Response

```JSON
{
  "data": [
    {
      "permanent_id": 331280,
      "title": "Zywiec Beer",
      "price_changes": 3,
      "price_change_history": [
        {
          "price": 3.35,
          "created_at": "2023-03-01T13:03:20+00:00"
        },
        {
          "price": 3.3,
          "created_at": "2023-01-31T13:03:17+00:00"
        },
        {
          "price": 2.8,
          "created_at": "2022-12-27T15:26:50+00:00"
        }
      ],
      "current_price": 3.35,
      "highest_price": 3.35,
      "lowest_price": 2.8,
      "oldest_price": 2.8
    }
  ]
}
```
