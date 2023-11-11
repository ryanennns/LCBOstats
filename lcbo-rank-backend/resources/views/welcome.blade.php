<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LCBOstats</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji, Monospaced;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }

        .font-mono {
            background-color: #2d3748; /* Or any darker shade you prefer */
            font-family: 'ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', 'Liberation Mono', 'Courier New', monospace;
            padding: 0.1rem 0.25rem;
            border-radius: 0.25rem;
        }

        .bg-gray-happy {
            background-color: rgba(26, 32, 44, var(--bg-opacity))
        }

        .json-block {
            background-color: #2d3748; /* Or any darker shade you prefer */
            color: #f7fafc; /* Light color for text to ensure readability */
            padding: 1rem;
            border-radius: 0.25rem;
            margin-top: 1rem;
            overflow: auto; /* For scrolling if content is too wide */
            white-space: pre; /* To maintain formatting */
        }
    </style>

    <style>
        body {
        }
    </style>
</head>
<body class="antialiased">
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 text-gray-200">
        <h1>LCBOstats.com</h1>
        <p>
            LCBOstats is a web app dedicated to:
        </p>

        <ul>
            <li>Scraping LCBO product data.</li>
            <li>Tracking changes in LCBO product prices.</li>
            <li>Calculating the most cost efficient alcoholic beverages by $/mL alcohol content.</li>
        </ul>

        <h2>Using the API</h2>

        <p>The root URL for accessing the LCBOstats alcohol database is <span class="font-mono">http://lcbostats.com/api/alcohol</span>.
        </p>

        <h3>Fetching by ID</h3>

        <p>You can fetch a specific LCBO product by ID by using:</p>
        <span class="font-mono">http://lcbostats.com/api/alcohol/{id}</span>
        <p>...where <span class="font-mono">{id}</span> is the primary key of the product in question. The primary key
            of each data object is <span class="font-mono">permanent_id</span>.</p>

        <h3>Querying LCBOStats</h3>

        <p>
            LCBOstats returns paginated responses with 25 records per page. The JSON object returned
            contains a series of links for the next, previous, first, and last pages for the content
            of the query you've ran.
        </p>

        <p>All query parameters should be appended to <span class="font-mono">http://lcbostats.com/api/alcohol</span>.
        </p>

        <ul>
            <li><span class="font-mono">sortAsc=</span> - sorts results ascending by the data field specified.</li>
            <li><span class="font-mono">sortDesc=</span> - sorts results descending by the data field specified.</li>
            <li><span class="font-mono">minPriceIndex=</span> - sets the minimum <span class="font-mono">priceIndex</span> returned by the api to the
                value you've specified.
            </li>
            <li><span class="font-mono">maxPriceIndex=</span> - sets the maximum <span class="font-mono">priceIndex</span> returned by the api to the
                value you've specified.
            </li>
            <li><span class="font-mono">minPrice=</span> - sets the minimum <span class="font-mono">price</span> returned by the api to the value
                you've specified.
            </li>
            <li><span class="font-mono">maxPrice=</span> - sets the maximum <span class="font-mono">price</span> returned by the api to the value
                you've specified.
            </li>
            <li><span class="font-mono">minVolume=</span> - sets the minimum <span class="font-mono">volume</span> returned by the api to the value
                you've specified.
            </li>
            <li><span class="font-mono">maxVolume=</span> - sets the maximum <span class="font-mono">volume</span> returned by the api to the value
                you've specified.
            </li>
            <li><span class="font-mono">minAlcoholContent=</span> - sets the minimum <span class="font-mono">alcoholContent</span> returned by the
                api to the value you've specified.
            </li>
            <li><span class="font-mono">maxAlcoholContent=</span> - sets the maximum <span class="font-mono">alcoholContent</span> returned by the
                api to the value you've specified.
            </li>
            <li><span class="font-mono">search=</span> - performs an exact search on titles with the value given.</li>
        </ul>

        <h3>Response Content</h3>

        <p>Each response to <span class="font-mono">/api/alcohol</span> is a JSON object with three fields:</p>

        <p><span class="font-mono">data</span> - an array of Alcohol data objects,</p>
        <p>
            <span class="font-mono">links</span> - an object with useful pagination links for the previous and next
            pages,
        </p>
        <p><span class="font-mono">meta</span> - metadata, including what page you're on, how many pages there are, page
            links, and more.</p>
        <p>The outer structure of the JSON response looks like this:</p>

        <div class="json-block font-mono" style="white-space: pre">{{$meta}}</div>

        <p>Within each of the JSON objects in the <span class="font-mono">data</span> array, the following fields are
            given:</p>
        <li><span class="font-mono">permanent_id</span> - the unique identifier of the product</li>
        <li><span class="font-mono">title</span> - the title of the product</li>
        <li><span class="font-mono">brand</span> - the brand of the product</li>
        <li><span class="font-mono">category</span> - an enum value that is strictly one of the following four options:
        </li>
        <li><span class="font-mono">subcategory</span> - snickers
        </li>
        <li><span class="font-mono">price</span> - the price of the product, in CAD</li>
        <li><span class="font-mono">volume</span> - the liquid volume of the product, in mL</li>
        <li><span class="font-mono">price_index</span> - the cost efficiency of the product, calculate as dollar per
            unit alcohol content
        </li>
        <li><span class="font-mono">alcohol_content</span> - the alcohol content of the product</li>
        <li><span class="font-mono">country</span> - the country of origin of the product</li>
        <li><span class="font-mono">url</span> - the URL to the LCBO.com webpage where the product can be purchased</li>
        <li><span class="font-mono">thumbnail_url</span> - the URL to a low resolution thumbnail image of the product
        </li>
        <li><span class="font-mono">image_url</span> - the URL to a high resolution image of the product</li>
        <li><span class="font-mono">rating</span> - a floating point average rating, out of 5, given by LCBO.com
            customers
        </li>
        <li><span class="font-mono">reviews</span> - the number of reviews given that resulted in the above rating</li>
        <li><span class="font-mono">out_of_stock</span> - a boolean representing whether the product is in stock</li>
        <li><span class="font-mono">description</span> - a long form description of the product, as found on LCBO.com
        </li>

        <div class="json-block font-mono" style="white-space: pre">{{$string}}</div>

        <h3>Querying Price Changes</h3>

        <p>LCBOstats.com has been tracking the price changes of LCBO products since late December of 2022. This means
            that, whenever a price is changed on a product, LCBOstats.com will:</p>

        <ul>
            <li>Update the database with the new price</li>
            <li>Create a new price change record which contains the:</li>
            <li>Previous price</li>
            <li>New price</li>
            <li>Time the price changed</li>
        </ul>

        <p><b>LCBOstats stores an initial price change when a new product is saved to the database.</b>
            This means that the earliest price change record for a given product is not actually a
            change in price, but rather the creation of the item itself.</p>

        Each price change request will return a JSON object structured as follows:

        <ul>
            <li>An outer array <span class="font-mono">data</span>, an array wrapper for the multiple price changes that are being returned</li>
            <li>Within <span class="font-mono">data</span>, a series of objects can be found. Each object contains:</li>
            <li><span class="font-mono">permanent_id</span> - the unique identifier of the product.</li>
            <li><span class="font-mono">title</span> - the title of the product</li>
            <li><span class="font-mono">price_changes</span> - a count of the number of price changes stored for the
                given product
            </li>
            <li><span class="font-mono">price_change_history</span> - an array containing a series of objects, each
                representing a historical change in price. Each object contains:
            </li>
            <ul>
                <li><span class="font-mono">price</span> - the price that the product was updated to, and</li>
                <li><span class="font-mono">created_at</span> - the timestamp that the price change was recorded at.
                </li>
                <li><span class="font-mono">current_price</span> - the current price of the product</li>
                <li><span class="font-mono">highest_price</span> - the highest price that has been recorded for the
                    product
                </li>
                <li><span class="font-mono">lowest_price</span> - the lowest price that has been recorded for the
                    product
                </li>
                <li><span class="font-mono">oldest_price</span> - the oldest price recorded, that is, the price that was
                    recorded when
                    product was initially tracked by LCBOstats.
                </li>
            </ul>
        </ul>

        <div class="json-block font-mono" style="white-space: pre">{{$priceChanges}}</div>
    </div>
</div>
</body>
</html>
