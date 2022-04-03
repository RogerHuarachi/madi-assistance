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
        $admin = Role::create(['name' => 'ADMINISTRADOR']);
        $admin->givePermissionTo([
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

        	'departaments.index',
        	'departaments.store',
        	'departaments.update',
        	'departaments.destroy',

        	'offices.index',
        	'offices.store',
        	'offices.update',
        	'offices.destroy',

        	'assistences.index',
		]);
		$drafting = Role::create(['name' => 'Drafting']);
		$drafting->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
        	'assistences.index',
		]);
		$software = Role::create(['name' => 'Drafting']);
		$software->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
        	'assistences.index',
		]);
		$estructura = Role::create(['name' => 'Estructura']);
		$estructura->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
        	'assistences.index',
		]);
    }
}
