<?php

use Illuminate\Database\Seeder;
use App\Departament;

class DepartamentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departament::create([
            'name'       => 'COCHABAMBA',
        ]);
    }
}
