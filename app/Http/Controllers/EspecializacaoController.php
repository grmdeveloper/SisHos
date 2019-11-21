<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especializacoes;

class EspecializacaoController extends Controller
{
    public function index(){
        $especializacoes = Especializacoes::all();

        return view('especializacoes.index',compact('especializacoes'));
    }

    public function create(){
        return view('especializacoes.create');
    }

    public function store(Request $request){
        
        $this->validate($request, [
            'nome'      => 'required',
        ]);
        
        $especializacao = new Especializacoes ($request->all());

        $especializacao->save();
        
        return redirect(url('/especializacao'));
    }
}
