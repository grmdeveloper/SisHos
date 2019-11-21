<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidades;

class UnidadeController extends Controller
{
    public function index(){
        $unidades = Unidades::all();

        return view('unidade.index',compact('unidades'));
    }

    public function create(){
        return view('unidade.create');
    }

    public function store(Request $request){
        
        $this->validate($request, [
            'nome'      => 'required',
            'endereco'  => 'required',
        ]);
        
        $unidade = new Unidades($request->all());

        $unidade->save();
        
        return redirect(url('/unidade'));
    }


}
