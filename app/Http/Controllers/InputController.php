<?php

namespace App\Http\Controllers;

use App\Input;
use App\Office;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use UAParser\Parser;

class InputController extends Controller
{
    public function index()
    {
        $inputs = Input::orderBy('id')->get();
        return view('inputs.index', compact('inputs'));
        // $input = new Input();
        // return $input->getBrowser($_SERVER ["HTTP_USER_AGENT"]);
    }

    public function store()
    {
        $user = Auth::user();
        $ipAgency = $user->office->ip;
        $phoneRegist = $user->phone;

        $now = Carbon::now();
        $date = $now->format('Y-m-d');

        $agenteDeUsuario = $_SERVER["HTTP_USER_AGENT"];
        $resultado = Parser::create()->parse($agenteDeUsuario);

        // $navegador = $resultado->ua->toString();
        // $sistema = $resultado->os->toString();

        $input = new Input();
        $ipUser = $input->getIp();
        $phoneUser = $resultado->device->family;
        $inputsNow = $input->inputNow($user->id, $date);

        $dateAgency = Carbon::create($user->office->intro);
        $inputAgency =Carbon::create($now->year, $now->month, $now->day, $dateAgency->hour, $dateAgency->minute, $dateAgency->second);
        $dif = ($now->diffInMinutes($inputAgency, false));

        if ($ipUser == $ipAgency) {
            if ($phoneRegist == $phoneUser) {
                if ($inputsNow == 0) {
                    $input->ip = $input->getIp();
                    $input->phone = $phoneUser;
                    $input->date = $now->format('Y-m-d');
                    $input->hour = $now->format('H:i:s');
                    $input->state = 0;
                    $input->user_id = $user->id;
                    $input->save();
                    return back()->with('confirmation','Entrada Registrada');
                } else {
                    return back()->with('validation','Entrada ya Marcada HOY');
                }
            } else {
                return back()->with('validation','Entrada No Registrada');
            }

        } else {
            return back()->with('validation','Entrada No Registrada');
        }
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $input = Input::where('id', '=', $id)->firstOrFail();
        $input->delete();
        return back()->with('confirmation','Entrada Eliminado Correctamente');
    }


    public function marck()
    {
        return view('inputs.mark');
    }

}
