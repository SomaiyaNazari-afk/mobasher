<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
class UserSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'first_name' => 'Somaiyah',
            'last_name' => 'Nazari',
            'gender' => 'female',
            'phone' => '+933839402',
            'dob' => Carbon::create('1992', '05', '06'),
            'country_id' => '1',
            'province_id' => '1',
            'address' => 'Kabul Afghanistan',
            'user_type' => 'admin',
        ]);
    }
}
