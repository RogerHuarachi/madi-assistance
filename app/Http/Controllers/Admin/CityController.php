<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::orderBy('id')->get();
        return view('cities.index', compact('cities'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        City::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(City $city)
    {
        //
    }

    public function edit(City $city)
    {
        //
    }

    public function update(Request $request, City $city)
    {
        $city->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(City $city)
    {
        $city->delete();
        return back()->with('confirmation','Eliminado Correctamente');
    }
}
