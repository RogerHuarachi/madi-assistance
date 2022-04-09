<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Agency;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id')->get();
        $agencies = Agency::orderBy('id')->get();
        $roles = Role::orderBy('name')->get();
        return view('users.index', compact('users', 'roles', 'agencies'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // $user = User::create($request->all());
        $user = User::create([
            'name' => $request->name,
            'vacation' => $request->vacation,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
            'agency_id' => $request->agency_id
        ]);
        $role = $request->role;
        $user->assignRole($role);

        return back()->with('confirmation','Usuario Registrado Correctamente');
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {

        $roles = $user->roles;
        foreach($roles as $role){
            $user->removeRole($role);
        }

        $role = $request->role;
        $user->assignRole($role);
        // $user->update($request->all());

        $user->name = $request->name;
        $user->vacation = $request->vacation;
        $user->email = $request->email;
        $user->phone = $request->phone;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->agency_id = $request->agency_id;
        $user->save();

        return back()->with('confirmation','Usuario Actualizado Correctamente');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('confirmation','Usuario Eliminado Correctamente');
    }
}
