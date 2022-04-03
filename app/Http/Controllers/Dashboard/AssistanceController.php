<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use App\Input;

class AssistanceController extends Controller
{
    public function index()
    {
        $users = User::get();
        $total = $users->count()-1;

        $date = Carbon::now();

        $inputs = Input::where('date', $date->toDateString())->get();

        $temprano = $inputs->where('state', '0')->count();
        $tarde = $inputs->where('state', '1')->count();

        $ausencia = $total-$inputs->count();



        $todays = DB::table('users')
            ->join('offices', 'users.office_id', '=', 'offices.id')
            ->join('inputs', 'users.id', '=', 'inputs.user_id')
            ->join('outputs', 'users.id', '=', 'outputs.user_id')
            ->where('inputs.date','=', $date->toDateString())
            ->select('offices.name as officeName',
                        'users.name as userName',
                        'inputs.date as inputDate',
                        'inputs.hour as inputHour',
                        'inputs.state as inputState',
                        'outputs.date as outputDate',
                        'outputs.hour as outputHour',
                        'outputs.state as outputState')
            ->get();

            // return $folders;

        return view('dashboards.assistance', compact('total', 'temprano', 'tarde', 'ausencia', 'todays'));
    }
    public function print()
    {

        $todays = DB::table('users')
            ->join('offices', 'users.office_id', '=', 'offices.id')
            ->join('inputs', 'users.id', '=', 'inputs.user_id')
            ->join('outputs', 'users.id', '=', 'outputs.user_id')
            ->select('offices.name as officeName',
                        'offices.intro as officeIntro',
                        'offices.exit as officeExit',
                        'offices.ip as officeIp',

                        'users.name as userName',
                        'users.email as userEmail',
                        'users.phone as userPhone',

                        'inputs.date as inputDate',
                        'inputs.hour as inputHour',
                        'inputs.state as inputState',
                        'inputs.ip as inputIp',
                        'inputs.phone as inputPhone',

                        'outputs.date as outputDate',
                        'outputs.hour as outputHour',
                        'outputs.state as outputState',
                        'outputs.ip as outputIp',
                        'outputs.phone as outputPhone',)
            ->get();

            // return $folders;

        return view('dashboards.print', compact('todays'));
    }
}
