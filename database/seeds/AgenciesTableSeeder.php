<?php

use Illuminate\Database\Seeder;
use App\Models\Agency;
class AgenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agency::create([
            'name'       => 'NACIONAL',
            'intro'       => '07:45',
            'exit'       => '15:00',
            'ip'       => '200.58.74.171',
            'city_id'       => '1',
        ]);
    }
}
