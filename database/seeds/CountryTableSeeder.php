<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('countries')->truncate();
        $country = [
            ['country_name' => 'Afghanistan', 'country_code' => 'AF'],
            ['country_name' => 'Algeria', 'country_code' => 'DZ'],
            ['country_name' => 'Australia', 'country_code' => 'AU'],
            ['country_name' => 'Azerbaijan', 'country_code' => 'AZ'],
            ['country_name' => 'Bahrain', 'country_code' => 'BH'],
            ['country_name' => 'Bosnia', 'country_code' => 'BA'],
            ['country_name' => 'Bangladesh', 'country_code' => 'BD'],
            ['country_name' => 'Brazil', 'country_code' => 'BR'],
            ['country_name' => 'Cambodia', 'country_code' => 'CD'],
            ['country_name' => 'Canada', 'country_code' => 'CA'],
            ['country_name' => 'China', 'country_code' => 'CN'],
            ['country_name' => 'Denmark', 'country_code' => 'DK'],
            ['country_name' => 'Egypt', 'country_code' => 'EG'],
            ['country_name' => 'India', 'country_code' => 'IN'],
            ['country_name' => 'Japan', 'country_code' => 'JP'],
            ['country_name' => 'Korea', 'country_code' => 'KR'],
            ['country_name' => 'Pakistan', 'country_code' => 'PK'],
            ['country_name' => 'Saudi Arabia', 'country_code' => 'SA'],
            ['country_name' => 'Sweden', 'country_code' => 'SE'],
            ['country_name' => 'United States', 'country_code' => 'US'],
        ];
        DB::table('countries')->insert($country);
    }
}
