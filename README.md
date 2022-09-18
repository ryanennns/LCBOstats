# LCBO API

Currently available at www.lcbostats.com/api/alcohol.

An early work in progress. Documentation and more to come soon.

### What is this thing?

An API used to serve information regarding alcoholic beverages stocked at the LCBO.

### Where did you get this data?

I found it on the side of the road.

### Why did you make this?

To enable open source, cost-efficient alcoholic beverage acquisition for the province of
Ontario, of course! :)


## Big Ticket TODOs

### Artisan Command Tomfoolery

- When scraping for `Products|Spirits`, the API responds with a `totalCount` value of 2924.
Everywhere else (Postman, Python script) 2923 is returned. I've currently got this solved
with a particularly ugly solution; subtracting one from the `totalCount` value.
  - You can
  implement a better solution than this by **terminating the while loop if an empty `results`
  array is returned.**

- The artisan command seems to create an _inconsistent number_ of duplicate database entries.
I have absolutely no idea why this is the case. I know this because, now that I'm storing
the `permanentid` field in the `alcohols` table and using it as the primary key, my tests
are failing miserably. When copying the returned data from both Postman and my Python scripts,
**_there are not any duplicate values._**
  - Best case may be to recreate the entire artisan command from scratch.