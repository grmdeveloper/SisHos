<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidades;
use App\Especializacoes;
use App\UnidadeEspecializacao;


class UnidadeEspecializacaoController extends Controller
{
    public function index(){

        //  $unidadesp = UnidadeEspecializacao::with('unidade')->get();
        // $teste = UnidadeEspecializacao
        $unidadesp = UnidadeEspecializacao::all();
        


        //dd($unidadesp[]->unidade);
        return view('uniesp.index',compact('unidadesp'));
    }

    public function create(){
        // $unidades = pegaValorEnum('unidades', 'nome');
        $unidades = Unidades::all();
        $especias = Especializacoes::all();
        //dd($unidades);
        return view('uniesp.create',compact('unidades','especias'));
    }

    public function store(Request $request){

        for($x=0;$x<$request->input('qtd_vagas');$x++){
            $unidadesp = new UnidadeEspecializacao($request->all());

            $unidadesp->save();
        }
        

        return redirect(url('/unidadeespecializacao'));
    }

    public function getUnidades(){
		$unidades = Unidades::all();
		return response()->json($unidades);
	}

	 public function getDados($u){

        $a = UnidadeEspecializacao::with('unidade','especializacao')->where('unidade_id','=',$u)->get();    

        return response()->json($a);
		
	}
}
