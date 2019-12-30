<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('countries')->truncate();
        $country = [
            ['name' => 'Afghanistan', 'code' => 'AF'],
            ['name' => 'Algeria', 'code' => 'DZ'],
            ['name' => 'Australia', 'code' => 'AU'],
            ['name' => 'Azerbaijan', 'code' => 'AZ'],
            ['name' => 'Bahrain', 'code' => 'BH'],
            ['name' => 'Bosnia', 'code' => 'BA'],
            ['name' => 'Bangladesh', 'code' => 'BD'],
            ['name' => 'Brazil', 'code' => 'BR'],
            ['name' => 'Cambodia', 'code' => 'CD'],
            ['name' => 'Canada', 'code' => 'CA'],
            ['name' => 'China', 'code' => 'CN'],
            ['name' => 'Denmark', 'code' => 'DK'],
            ['name' => 'Egypt', 'code' => 'EG'],
            ['name' => 'India', 'code' => 'IN'],
            ['name' => 'Japan', 'code' => 'JP'],
            ['name' => 'Korea', 'code' => 'KR'],
            ['name' => 'Pakistan', 'code' => 'PK'],
            ['name' => 'Saudi Arabia', 'code' => 'SA'],
            ['name' => 'Sweden', 'code' => 'SE'],
            ['name' => 'United States', 'code' => 'US'],
        ];
        DB::table('countries')->insert($country);
    }
}
