<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $nac = Input::timeRetAge(1);
        $cc = Input::timeRetAge(2);
        $ep = Input::timeRetAge(3);
        $pu = Input::timeRetAge(4);
        $cv = Input::timeRetAge(5);
        $rs = Input::timeRetAge(6);
        return view('home', compact('nac', 'cc', 'ep', 'pu', 'cv', 'rs'));
        // return view('home');
    }
}
