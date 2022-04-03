<?php

namespace App\Http\Controllers;

use App\Output;
use App\Office;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use UAParser\Parser;

class OutputController extends Controller
{

    public function index()
    {
        $outputs = Output::orderBy('id')->get();
        return view('outputs.index', compact('outputs'));
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

        $output = new Output();
        $ipUser = $output->getIp();
        $phoneUser = $resultado->device->family;
        $outputsNow = $output->outputNow($user->id, $date);

        $dateAgency = Carbon::create($user->office->exit);
        $outputAgency =Carbon::create($now->year, $now->month, $now->day, $dateAgency->hour, $dateAgency->minute, $dateAgency->second);
        $dif = ($now->diffInMinutes($outputAgency, false));

        if ($ipUser == $ipAgency) {
            if ($phoneRegist == $phoneUser) {
                if ($outputsNow == 0) {
                    $output->ip = $output->getIp();
                    $output->phone = $phoneUser;
                    $output->date = $now->format('Y-m-d');
                    $output->hour = $now->format('H:i:s');
                    $output->state = 0;
                    $output->user_id = $user->id;
                    $output->save();
                    return back()->with('confirmation','Salida Registrada');
                } else {
                    return back()->with('validation', 'Salida No Registrada');
                }
            } else {
                return back()->with('validation', 'Salida No Registrada');
            }

        } else {
            return back()->with('validation','Salida No Registrada');
        }
    }

    public function update(Request $request, Output $output)
    {
        //
    }

    public function destroy($id)
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
