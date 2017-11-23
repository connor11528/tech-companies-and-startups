<?php

use Illuminate\Database\Seeder;
use League\Csv\Reader;
use League\Csv\Statement;
use App\Company;

// This is an example file for loading companies into a SQL database via Laravel
// For more on database seeding read: 

// Laravel docs - https://laravel.com/docs/5.5/seeding
// PHP League csv package - https://csv.thephpleague.com/9.0/

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = Reader::createFromPath(database_path('seed_data/Tech_Companies_SF.csv'), 'r');
        $stmt = (new Statement());

        $records = $stmt->process($csv);

        foreach ($records as $record) {

            // break up address
            $address = $record[1];
            $address = explode(",", $address);

            // add company details
            $company = new Company;
            $company->name = $record[0];
            $company->latitude = $record[2];
            $company->longitude = $record[3];
            $company->year_founded = $record[4];
            $company->website = $record[5];

            // if address has three line (i.e not "San Francsico")
            if(count($address) == 3){
                // add individual components
                $company->street = $address[0];
                $company->city = $address[1];
                $company->zip = explode(" ", $address[2])[2];
            }

            Log::info($company);
            $company->save();
        }
    }
}
