<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Kārlis Jēkabsons',
            'email' => 'jekabsons6@gmail.com',
            'password' => bcrypt('karlis'),
        ]);
        DB::table('countries')->insert([
            'country_name' => 'Latvia',
            'country_code' => 'LV',
        ]);
        DB::table('countries')->insert([
            'country_name' => 'Finland',
            'country_code' => 'FI',
        ]);
        DB::table('countries')->insert([
            'country_name' => 'Brazil',
            'country_code' => 'BR',
        ]);
    }
}
