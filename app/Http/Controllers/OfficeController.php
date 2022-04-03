<?php

namespace App\Http\Controllers;

use App\Departament;
use App\Office;
use Illuminate\Http\Request;
use App\Http\Requests\Office\StoreOfficeRequest;
use App\Http\Requests\Office\UpdateOfficeRequest;

class OfficeController extends Controller
{

    public function index()
    {
        $departaments = Departament::get();
        $offices = Office::orderBy('id')->get();
        return view('offices.index', compact('offices', 'departaments'));
    }

    public function store(StoreOfficeRequest $request)
    {
        Office::create($request->all());

        return back()->with('confirmation','Oficina Registrado Correctamente');
    }

    public function update(UpdateOfficeRequest $request, $id)
    {
        $office = Office::where('id','=', $id)->firstOrFail();
        $office->update($request->all());

        return back()->with('confirmation','Oficina Actualizado Correctamente');
    }

    public function destroy($id)
    {
        $office = Office::where('id','=', $id)->firstOrFail();
        $office->delete();
        return back()->with('confirmation','Oficina Eliminado Correctamente');
    }
}
