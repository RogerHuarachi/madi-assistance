<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$JNTIC = Role::create(['name' => 'ADM']);
		$JNTIC->givePermissionTo([
        	'permissions.index',
        	'permissions.store',
        	'permissions.update',
            'permissions.destroy',

        	'roles.index',
        	'roles.store',
        	'roles.update',
            'roles.destroy',

        	'users.index',
        	'users.store',
        	'users.update',
        	'users.destroy',

        	'inputs.index',
        	'inputs.store',
        	'inputs.update',
        	'inputs.destroy',

        	'outputs.index',
        	'outputs.store',
        	'outputs.update',
        	'outputs.destroy',

        	'cities.index',
        	'cities.store',
        	'cities.update',
        	'cities.destroy',

        	'agencies.index',
        	'agencies.store',
        	'agencies.update',
        	'agencies.destroy',

        	'absences.index',
        	'absences.store',
        	'absences.update',
        	'absences.destroy',

        	'assistences.index',
        ]);
		$Drafting = Role::create(['name' => 'Drafting']);
		$Drafting->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
		]);
		$Software = Role::create(['name' => 'Software']);
		$Software->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
		]);
		$Civil = Role::create(['name' => 'Civil']);
		$Civil->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
		]);
    }
}
