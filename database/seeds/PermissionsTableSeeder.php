<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permission list
        Permission::create(['name' => 'permissions.index']);
        Permission::create(['name' => 'permissions.store']);
        Permission::create(['name' => 'permissions.update']);
        Permission::create(['name' => 'permissions.destroy']);
        //Role list
        Permission::create(['name' => 'roles.index']);
        Permission::create(['name' => 'roles.store']);
        Permission::create(['name' => 'roles.update']);
        Permission::create(['name' => 'roles.destroy']);
        //city list
        Permission::create(['name' => 'cities.index']);
        Permission::create(['name' => 'cities.store']);
        Permission::create(['name' => 'cities.update']);
        Permission::create(['name' => 'cities.destroy']);
        //agency list
        Permission::create(['name' => 'agencies.index']);
        Permission::create(['name' => 'agencies.store']);
        Permission::create(['name' => 'agencies.update']);
        Permission::create(['name' => 'agencies.destroy']);
        //User list
        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.store']);
        Permission::create(['name' => 'users.update']);
        Permission::create(['name' => 'users.destroy']);
        //input list
        Permission::create(['name' => 'inputs.index']);
        Permission::create(['name' => 'inputs.store']);
        Permission::create(['name' => 'inputs.update']);
        Permission::create(['name' => 'inputs.destroy']);
        //output list
        Permission::create(['name' => 'outputs.index']);
        Permission::create(['name' => 'outputs.store']);
        Permission::create(['name' => 'outputs.update']);
        Permission::create(['name' => 'outputs.destroy']);
        //absence list
        Permission::create(['name' => 'absences.index']);
        Permission::create(['name' => 'absences.store']);
        Permission::create(['name' => 'absences.update']);
        Permission::create(['name' => 'absences.destroy']);

        //assistence list
        Permission::create(['name' => 'assistences.index']);
    }
}
