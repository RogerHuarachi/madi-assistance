<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Absence;
use App\Models\User;
use Illuminate\Http\Request;

class AbsenceController extends Controller
{
    public function index()
    {
        $absences = Absence::all();
        $users = User::all();
        return view('absences.index', compact('absences', 'users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if ($request->type == 'Vacaciones') {
            $user = User::where('id','=', $request->user_id)->firstOrFail();
            $user->vacation = $user->vacation-1;
            $user->save();

            Absence::create($request->all());
            return back()->with('confirmation','Registrado Correctamente');
        } else {
            Absence::create($request->all());
            return back()->with('confirmation','Registrado Correctamente');
        }

        Absence::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Absence $absence)
    {
        //
    }

    public function edit(Absence $absence)
    {
        //
    }

    public function update(Request $request, Absence $absence)
    {
        $absence->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Absence $absence)
    {
        $absence->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
