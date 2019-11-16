<?php

use Illuminate\Database\Seeder;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->truncate();
        $province = [
            ['province_name' => 'Kabul', 'province_code' => 'KB'],
            ['province_name' => 'Kapisa', 'province_code' => 'KP'],
            ['province_name' => 'Parwan', 'province_code' => 'PR'],
            ['province_name' => 'Wardak', 'province_code' => 'WK'],
            ['province_name' => 'Logar', 'province_code' => 'LG'],
            ['province_name' => 'Nangarhar', 'province_code' => 'NG'],
            ['province_name' => 'Laghman', 'province_code' => 'LN'],
            ['province_name' => 'Panjshir', 'province_code' => 'PS'],
            ['province_name' => 'Baghlan', 'province_code' => 'BL'],
            ['province_name' => 'Bamyan', 'province_code' => 'BN'],
            ['province_name' => 'Ghazni', 'province_code' => 'GZ'],
            ['province_name' => 'Paktika', 'province_code' => 'PT'],
            ['province_name' => 'Paktya', 'province_code' => 'PK'],
            ['province_name' => 'Khost', 'province_code' => 'KT'],
            ['province_name' => 'Nooristan', 'province_code' => 'NS'],
            ['province_name' => 'Badakhshan', 'province_code' => 'BD'],
            ['province_name' => 'Takhar', 'province_code' => 'TK'],
            ['province_name' => 'Kunduz', 'province_code' => 'KZ'],
            ['province_name' => 'Samangan', 'province_code' => 'SG'],
            ['province_name' => 'Balkh', 'province_code' => 'BL'],
            ['province_name' => 'Sar-e-Pul', 'province_code' => 'SP'],
            ['province_name' => 'Ghor', 'province_code' => 'GR'],
            ['province_name' => 'Daykundi', 'province_code' => 'DK'],
            ['province_name' => 'Urozgan', 'province_code' => 'UG'],
            ['province_name' => 'Zabul', 'province_code' => 'ZL'],
            ['province_name' => 'Kandahar', 'province_code' => 'KD'],
            ['province_name' => 'Jawzjan', 'province_code' => 'JZ'],
            ['province_name' => 'Herat', 'province_code' => 'HT'],

        ];
        DB::table('provinces')->insert($province);
    }
}
