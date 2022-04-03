<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
                    'name'       => 'ADMINISTRADOR',
                    'email'      => 'adm@gmail.com',
                    'password'      => bcrypt('6754212567542125'),
                    'phone'       => 'Other',
                    'office_id'      => 1,
        ]);
        $admin->assignRole('ADMINISTRADOR');
    }
}
