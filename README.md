List of Tech Companies and Startups
===

Companies data straight from the [Employbl](https://employbl.com/) production database.

## Resources

- [Silicon Valley Companies (with map)](http://employbl.test/blog/silicon-valley-companies-map)

- [Companies that use Laravel](http://employbl.test/blog/companies-that-use-laravel-php-framework)

- [Top VC firms in the Bay Area](https://employbl.com/blog/top-venture-capital-firms-bay-area)

- [Y Combinator companies in SF](https://employbl.com/blog/yc-companies-in-san-francisco)

## About the Data

The data comes from a MySQL database and a spreadsheet I've been collecting for many years. All info is available across the free and open internet. For the most part company locations default to the office location of the company's Bay Area location, because that's what I was most interested in :)

Query used to generate the **companies.csv** file:

``` 
select c.id as 'Employbl Company ID',
c.name as 'Company Name',
c.website as 'Website',
c.street as 'Address 1',
c.city as 'City',
c.state as 'State',
c.zip as 'Zip',
c.latitude as 'Latitude',
c.longitude as 'Longitude',
c.description as 'Company Description',
c.image_url as 'Thumbnail URL'
from companies c
where c.deleted_at is null;
```

To query for companies with a given tag:

``` 
select c.id as 'Employbl Company ID',
c.name as 'Company Name',
c.website as 'Website',
c.street as 'Address 1',
c.city as 'City',
c.state as 'State',
c.zip as 'Zip',
c.latitude as 'Latitude',
c.longitude as 'Longitude',
c.description as 'Company Description',
c.image_url as 'Thumbnail URL'
from companies c
join taggables t on t.taggable_id = c.id and t.taggable_type = 'App\\Company' and t.tag_id = 40714
where c.deleted_at is null
group by c.id;
```

Side note: we're using the [laravel/tags](https://github.com/spatie/laravel-tags) PHP package by @spatie (postcard coming to y'all soon!). These queries are mostly here to help me pull the latest data to update the data. If people start contributing we can set up a two-way sync ;)

## Related blog posts

- [Top Venture Capital firms in the Bay Area](https://employbl.com/blog/top-venture-capital-firms-bay-area)

- [Companies that use React.js in the Bay Area](https://employbl.com/blog/companies-that-use-reactjs-in-bay-area)

- [Y Combinator companies with offices in San Francisco](https://employbl.com/blog/yc-companies-in-san-francisco)

- [Silicon Valley Map of Tech Companies and Startups](https://employbl.com/blog/silicon-valley-companies-map)

- [Tech Companies and Startups in Oakland](https://employbl.com/blog/tech-companies-startups-Oakland)

## Contributing 

This is an open source project. The company location in most cases is the location of the company's Bay Area office. We have a more complex table structure on the Employbl website (which is not open source) to account for multiple company locations. If you're interested in using this data or would like to see the project succeed there are a couple ways you can help out:

### #1 open a pull request

One quick way to help is to [open a pull request](https://github.com/connor11528/companies-in-the-bay-area/pulls) and add to the company dataset. All of the data here remains open source. Edits can be made easily by downloading the CSV files from this repo and uploading them to Excel, Number or Airtable -- whatever your spreadsheet viewer of choice is. We're looking to add tech and startup companies in the United States. Our definition of a tech or startup company is pretty broad. Basically if the company employs people to sit in front of computers all day they count. New additions will be judged on a case by case basis. Please enter the data cleanly, no one likes messy data :)

### #2 add your own company

If you work at a tech company or a startup make sure your company is on the list! We use this data to build out [company profiles](https://employbl.com/companies/Employbl) on Employbl dot com. Job seekers can also use this data to seek out new opportunities in the tech industry.

### #3 tell your friends

We're open to making more data accessible to candidates and job seekers. Maybe that means collecting richer information about companies like all their office locations or all their job listings. Maybe it means collecting articles about the company to provide more insight. It could be that the depth doesn't matter and it's more important to collect the most startups and tech companies possible. We're still figuring it out tbh. Our mission is to make this information accessible and build a system that helps candidates get jobs at tech companies in an equitable way. 

### #4 Reach out directly

If you like the project or just want to say "hi" you can [tweet me](https://twitter.com/Connor11528) or email me directly - connor@employbl.com.
