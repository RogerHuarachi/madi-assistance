<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\Role\StoreRoleRequest;
use App\Http\Requests\Role\UpdateRoleRequest;

class RoleController extends Controller
{
    public function index()
    {
        $permissions = Permission::get();
        $roles = Role::orderBy('name')->get();
        return view('roles.index', compact('roles', 'permissions'));
    }

    public function store(StoreRoleRequest $request)
    {
        $role = Role::create(['name' => $request->name]);
        $permissions = $request->permissions;
        $role->givePermissionTo($permissions);

        return back()->with('confirmation','Rol Registrado Correctamente');
    }

    public function update(UpdateRoleRequest $request, $id)
    {
        $role = Role::where('id','=', $id)->firstOrFail();
        $permissions = $role->permissions;
        $role->revokePermissionTo($permissions);
        
        $role->name = $request->name;
        $role->save();
        $permissions = $request->permissions;
        $role->givePermissionTo($permissions);

        return back()->with('confirmation','Rol Actualizado Correctamente');
    }

    public function destroy($id)
    {
        $role = Role::where('id', '=', $id)->firstOrFail();
        $role->delete();
        return back()->with('confirmation','Rol Eliminado Correctamente');
    }
}
