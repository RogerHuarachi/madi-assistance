<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Input;
use App\Models\User;
use App\Models\Agency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use UAParser\Parser;

class InputController extends Controller
{
    public function index()
    {
        $users = User::get();
        $inputs = Input::orderBy('id')->get();
        return view('inputs.index', compact('inputs', 'users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $ipAgency = $user->agency->ip;
        $phoneRegist = $user->phone;

        // $now = Carbon::now()->subMinutes(2);
        $now = Carbon::now();
        $date = $now->format('Y-m-d');


        $agenteDeUsuario = $_SERVER["HTTP_USER_AGENT"];
        $resultado = Parser::create()->parse($agenteDeUsuario);

        $input = new Input();
        $ipUser = $input->getIp();
        $phoneUser = $resultado->device->family;
        $inputsNow = $input->inputNow($user->id, $date)->count();

        $dateAgency = Carbon::create($user->agency->intro);
        $inputAgency =Carbon::create($now->year, $now->month, $now->day, $dateAgency->hour, $dateAgency->minute, $dateAgency->second);
        $dif = ($inputAgency->diffInMinutes($now, false));

        // if ($ipUser == $ipAgency) {
            if ($phoneRegist == $phoneUser) {
                if ($inputsNow == 0) {
                    if ($dif > 0) {
                        $input->ip = $input->getIp();
                        $input->phone = $phoneUser;
                        $input->date = $now->format('Y-m-d');
                        $input->hour = $now->format('H:i:s');
                        $input->state = 1;
                        $input->delayed = $dif;
                        $input->user_id = $user->id;
                        $input->save();
                        return back()->with('confirmation','Entrada Registrada');
                    } else {
                        $input->ip = $input->getIp();
                        $input->phone = $phoneUser;
                        $input->date = $now->format('Y-m-d');
                        $input->hour = $now->format('H:i:s');
                        $input->state = 0;
                        $input->user_id = $user->id;
                        $input->save();
                        return back()->with('confirmation','Entrada Registrada');
                    }
                } else {
                    return back()->with('validation','Entrada ya Marcada HOY');
                }
            } else {
                return back()->with('validation','Entrada No Registrada');
            }
        // } else {
        //     return back()->with('validation','Entrada No Registrada');
        // }
    }

    public function show(Input $input)
    {
        //
    }

    public function edit(Input $input)
    {
        //
    }

    public function update(Request $request, Input $input)
    {
        $user = Auth::user();
        $now = Carbon::now()->subMinutes(2);
        $inputAgency = Carbon::create($user->agency->intro);
        $inputNew =Carbon::create($request->hour);
        $dif = ($inputAgency->diffInMinutes($inputNew, false));
        if ($dif > 0) {
            $request["state"]=1;
            $request["delayed"]=$dif;
            $input->update($request->all());
        } else {
            $request["state"]=0;
            $request["delayed"]=null;
            $input->update($request->all());
        }

        return back()->with('confirmation','Entrada Actualizado Correctamente');
    }

    public function destroy(Input $input)
    {
        $input->delete();
        return back()->with('confirmation','Entrada Eliminado Correctamente');
    }

    public function destroyall()
    {
        $inputs = Input::all();
        foreach ($inputs as $input) {
            $input->delete();
        }
        // return $inputs;
        return back()->with('confirmation','Entradas Eliminadas Correctamente');
    }

    public function marck()
    {
        return view('inputs.mark');
    }
}
