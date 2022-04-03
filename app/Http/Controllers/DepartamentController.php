<?php

namespace App\Http\Controllers;

use App\Departament;
use Illuminate\Http\Request;
use App\Http\Requests\Departament\StoreDepartamentRequest;
use App\Http\Requests\Departament\UpdateDepartamentRequest;

class DepartamentController extends Controller
{
    public function index()
    {
        $departaments = Departament::orderBy('id')->get();
        return view('departaments.index', compact('departaments'));
    }

    public function store(StoreDepartamentRequest $request)
    {
        Departament::create($request->all());

        return back()->with('confirmation','Departamento Registrado Correctamente');
    }

    public function update(UpdateDepartamentRequest $request, $id)
    {
        $departament = Departament::where('id','=', $id)->firstOrFail();
        $departament->update($request->all());

        return back()->with('confirmation','Departamento Actualizado Correctamente');
    }

    public function destroy($id)
    {
        $departament = Departament::where('id','=', $id)->firstOrFail();
        $departament->delete();
        return back()->with('confirmation','Departamento Eliminado Correctamente');
    }
}
