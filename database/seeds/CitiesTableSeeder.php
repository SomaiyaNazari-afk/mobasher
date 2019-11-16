<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cities')->truncate();
        $city = [
            ['city_name' => 'Kabul', 'city_code' => 'KB'],
            ['city_name' => 'Kapisa', 'city_code' => 'KP'],
            ['city_name' => 'Parwan', 'city_code' => 'PR'],
            ['city_name' => 'Wardak', 'city_code' => 'WK'],
            ['city_name' => 'Logar', 'city_code' => 'LG'],
            ['city_name' => 'Nangarhar', 'city_code' => 'NG'],
            ['city_name' => 'Laghman', 'city_code' => 'LN'],
            ['city_name' => 'Panjshir', 'city_code' => 'PS'],
            ['city_name' => 'Baghlan', 'city_code' => 'BL'],
            ['city_name' => 'Bamyan', 'city_code' => 'BN'],
            ['city_name' => 'Ghazni', 'city_code' => 'GZ'],
            ['city_name' => 'Paktika', 'city_code' => 'PT'],
            ['city_name' => 'Paktya', 'city_code' => 'PK'],
            ['city_name' => 'Khost', 'city_code' => 'KT'],
            ['city_name' => 'Nooristan', 'city_code' => 'NS'],
            ['city_name' => 'Badakhshan', 'city_code' => 'BD'],
            ['city_name' => 'Takhar', 'city_code' => 'TK'],
            ['city_name' => 'Kunduz', 'city_code' => 'KZ'],
            ['city_name' => 'Samangan', 'city_code' => 'SG'],
            ['city_name' => 'Balkh', 'city_code' => 'BL'],
            ['city_name' => 'Sar-e-Pul', 'city_code' => 'SP'],
            ['city_name' => 'Ghor', 'city_code' => 'GR'],
            ['city_name' => 'Daykundi', 'city_code' => 'DK'],
            ['city_name' => 'Urozgan', 'city_code' => 'UG'],
            ['city_name' => 'Zabul', 'city_code' => 'ZL'],
            ['city_name' => 'Kandahar', 'city_code' => 'KD'],
            ['city_name' => 'Jawzjan', 'city_code' => 'JZ'],
            ['city_name' => 'Herat', 'city_code' => 'HT'],

        ];
        DB::table('cities')->insert($city);
    }
}
