<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Output;
use App\Models\Input;
use App\Models\User;
use App\Models\Agency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use UAParser\Parser;

class OutputController extends Controller
{
    public function index()
    {
        $users = User::get();
        $outputs = Output::orderBy('id')->get();
        return view('outputs.index', compact('outputs', 'users'));
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

        $now = Carbon::now();
        $date = $now->format('Y-m-d');

        $agenteDeUsuario = $_SERVER["HTTP_USER_AGENT"];
        $resultado = Parser::create()->parse($agenteDeUsuario);

        // $navegador = $resultado->ua->toString();
        // $sistema = $resultado->os->toString();

        $output = new Output();
        $ipUser = $output->getIp();
        $phoneUser = $resultado->device->family;
        $inputsNow = Input::where([
            ['user_id', '=', $user->id],
            ['date', '=', $date],
        ])->exists();

        $dateAgency = Carbon::create($user->agency->exit);
        $outputAgency =Carbon::create($now->year, $now->month, $now->day, $dateAgency->hour, $dateAgency->minute, $dateAgency->second);
        $dif = ($now->diffInMinutes($outputAgency, false));

        //     if ($ipUser == $ipAgency) {
            if ($phoneRegist == $phoneUser) {
                if ($inputsNow) {
                    $inputs = Input::where([
                        ['user_id', '=', $user->id],
                        ['date', '=', $date],
                    ])->firstOrFail();
                    $outputsNow = $inputs->output;
                    if (!$outputsNow) {
                        if ($dif > 0) {
                            $output->ip = $output->getIp();
                            $output->phone = $phoneUser;
                            $output->date = $now->format('Y-m-d');
                            $output->hour = $now->format('H:i:s');
                            $output->state = 0;
                            $output->input_id = $inputs->id;
                            $output->save();
                            return back()->with('confirmation','Salida Registrada');
                        } else {
                            $output->ip = $output->getIp();
                            $output->phone = $phoneUser;
                            $output->date = $now->format('Y-m-d');
                            $output->hour = $now->format('H:i:s');
                            $output->state = 1;
                            $output->input_id = $inputs->id;
                            $output->save();
                            return back()->with('confirmation','Salida Registrada');
                        }
                    } else {
                        return back()->with('validation','Salida ya Marcada HOY');
                    }
                } else {
                    return back()->with('validation','Entrada no Marcada Hoy');
                }
            } else {
                return back()->with('validation','Salida No Registrada');
            }
        // } else {
        //     return back()->with('validation','Salida No Registrada');
        //     // return "No Estas en la empresa";
        // }
    }

    public function show(Output $output)
    {
        //
    }

    public function edit(Output $output)
    {
        //
    }

    public function update(Request $request, Output $output)
    {
        $user = Auth::user();
        $now = Carbon::now()->subMinutes(2);
        $outputAgency = Carbon::create($user->agency->exit);
        $outputNew =Carbon::create($request->hour);
        $dif = ($outputNew->diffInMinutes($outputAgency, false));
        if ($dif > 0) {
            $request["phone"]=$user->phone;
            $request["state"]=0;
            $output->update($request->all());
        } else {
            $request["phone"]=$user->phone;
            $request["state"]=1;
            $output->update($request->all());
        }

        return back()->with('confirmation','Entrada Actualizado Correctamente');
    }

    public function destroy(Output $output)
    {
        $output = Output::where('id', '=', $id)->firstOrFail();
        $output->delete();
        return back();
    }

    public function marck()
    {
        return view('outputs.mark');
    }
}
