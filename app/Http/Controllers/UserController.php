<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Office;
use Spatie\Permission\Models\Role;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use UAParser\Parser;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id')->get();
        $offices = Office::orderBy('id')->get();
        $roles = Role::orderBy('name')->get();
        return view('users.index', compact('users', 'roles', 'offices'));
    }

    public function store(StoreUserRequest $request)
    {
        // $user = User::create($request->all());
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
            'office_id' => $request->office_id
        ]);
        $role = $request->role;
        $user->assignRole($role);

        return back()->with('confirmation','Usuario Registrado Correctamente');
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id','=', $id)->firstOrFail();

        $roles = $user->roles;
        foreach($roles as $role){
            $user->removeRole($role);
        }

        $role = $request->role;
        $user->assignRole($role);
        // $user->update($request->all());

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->office_id = $request->office_id;
        $user->save();

        return back()->with('confirmation','Usuario Actualizado Correctamente');
    }

    public function destroy($id)
    {
        $user = User::where('id','=', $id)->firstOrFail();
        $user->delete();
        return back()->with('confirmation','Usuario Eliminado Correctamente');
    }


    public function register()
    {
        $users = User::orderBy('id')->get();
        $offices = Office::orderBy('id')->get();
        $roles = Role::orderBy('name')->get();
        return view('users.register.register', compact('users', 'roles', 'offices'));
    }

    public function registerStore(StoreUserRequest $request)
    {
        $agenteDeUsuario = $_SERVER["HTTP_USER_AGENT"];
        $resultado = Parser::create()->parse($agenteDeUsuario);

        $dispositivo = $resultado->device->family;
        // $navegador = $resultado->ua->toString();
        // $sistema = $resultado->os->toString();

        // $request["phone"]=$dispositivo;
        // $request["navegador"]=$navegador;
        // $request["sistema"]=$sistema;
        $user = User::create([
            'name' => $request->name,
            'phone' => $dispositivo,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'office_id' => $request->office_id,
        ]);
        $role = $request->role;
        $user->assignRole($role);

        return view('auth.login');
    }
}
