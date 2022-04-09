<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jtic = User::create([
            'name'       => 'Administrador',
            'vacation'       => '12',
            'email'      => 'madi.radminoger@gmail.com',
            'password'      => bcrypt('6754212567542125'),
            'phone'       => 'M2151K6G',
            'agency_id'      => 1,
        ]);
        $jtic->assignRole('ADM');
    }
}
