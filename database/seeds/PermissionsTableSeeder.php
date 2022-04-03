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
        //departament list
        Permission::create(['name' => 'departaments.index']);
        Permission::create(['name' => 'departaments.store']);
        Permission::create(['name' => 'departaments.update']);
        Permission::create(['name' => 'departaments.destroy']);
        //offices list
        Permission::create(['name' => 'offices.index']);
        Permission::create(['name' => 'offices.store']);
        Permission::create(['name' => 'offices.update']);
        Permission::create(['name' => 'offices.destroy']);

        //assistence list
        Permission::create(['name' => 'assistences.index']);
    }
}
