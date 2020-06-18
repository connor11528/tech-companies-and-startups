Tech Companies in the San Francisco Bay Area
===

Companies data straight from the [Employbl](https://employbl.com/) production database.

Query used to generate this data:

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