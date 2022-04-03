<?php

use Illuminate\Database\Seeder;
use App\Office;

class OfficesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Office::create([
            'name'       => 'NACIONAL',
            'intro'       => '07:45',
            'exit'       => '15:00',
            'ip'       => '200.58.74.171',
            'departament_id'       => '1',
        ]);
    }
}
