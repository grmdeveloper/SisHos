<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especializacoes;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function app()
    {
        $especializacoes = Especializacoes::all();

        return view('ondetematendimento',compact('especializacoes'));
    }

    public function dashboard (){
        return view('welcome');
    }

}
