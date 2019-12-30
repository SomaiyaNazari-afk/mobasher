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
            ['name' => 'Kabul', 'code' => 'KB'],
            ['name' => 'Kapisa', 'code' => 'KP'],
            ['name' => 'Parwan', 'code' => 'PR'],
            ['name' => 'Wardak', 'code' => 'WK'],
            ['name' => 'Logar', 'code' => 'LG'],
            ['name' => 'Nangarhar', 'code' => 'NG'],
            ['name' => 'Laghman', 'code' => 'LN'],
            ['name' => 'Panjshir', 'code' => 'PS'],
            ['name' => 'Baghlan', 'code' => 'BL'],
            ['name' => 'Bamyan', 'code' => 'BN'],
            ['name' => 'Ghazni', 'code' => 'GZ'],
            ['name' => 'Paktika', 'code' => 'PT'],
            ['name' => 'Paktya', 'code' => 'PK'],
            ['name' => 'Khost', 'code' => 'KT'],
            ['name' => 'Nooristan', 'code' => 'NS'],
            ['name' => 'Badakhshan', 'code' => 'BD'],
            ['name' => 'Takhar', 'code' => 'TK'],
            ['name' => 'Kunduz', 'code' => 'KZ'],
            ['name' => 'Samangan', 'code' => 'SG'],
            ['name' => 'Balkh', 'code' => 'BL'],
            ['name' => 'Sar-e-Pul', 'code' => 'SP'],
            ['name' => 'Ghor', 'code' => 'GR'],
            ['name' => 'Daykundi', 'code' => 'DK'],
            ['name' => 'Urozgan', 'code' => 'UG'],
            ['name' => 'Zabul', 'code' => 'ZL'],
            ['name' => 'Kandahar', 'code' => 'KD'],
            ['name' => 'Jawzjan', 'code' => 'JZ'],
            ['name' => 'Herat', 'code' => 'HT'],

        ];
        DB::table('provinces')->insert($province);
    }
}
