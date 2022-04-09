<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Input;

class AssistanceController extends Controller
{
    public function index()
    {
        // return view('dashboards.assistance', compact('total'));
        return view('dashboards.assistance');
    }
    public function print()
    {


        $inputs = Input::all();

            // return $folders;

        return view('dashboards.print', compact('inputs'));
    }
}
