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

        $especialidades_array=[];
        $qnt_vagas=[];
        
        $ultima_especialidade=null; // valera para o loop subsequente
        
        foreach($a as $vaga){
            $esp = $vaga->especializacao->nome;

            //primeiro loop
            if(empty($especialidades_array)){
                $x=0;
                $ultima_especialidade=$esp;
                
                $especialidades_array[]=$esp;
                $qnt_vagas[0]=1;
            }
      
            else{  

                //se manter
                if($ultima_especialidade==$esp){ 
                    $qnt_vagas[$x]++;
                }
                
                // se mudar
                else{ 
                    $x++;
                    $qnt_vagas[$x]=1;
                    $especialidades_array[]=$esp;
                    $ultima_especialidade=$esp;
                }
            }
        }

        return response()->json(["especialidades"=>$especialidades_array,"qnt_vagas"=>$qnt_vagas]);
		
	}

    function getEsp(){
        $a = Especializacoes::all();
        return response()->json($a);
    }

    function getUni($e){
        $esp = Especializacoes::where('nome','=',$e)->get()->first();
        $espId=$esp->id;
        $a = UnidadeEspecializacao::with('unidade','especializacao')->where('especializacao_id','=',$espId)->get();
        $b=[];
        $x=0;
        foreach($a as $vaga){
            $b[$x]['nome']=$vaga->unidade->nome;
            $b[$x]['endereco']=$vaga->unidade->endereco;
            $x++;
        }

        return response()->json($b);
    }


    function getVagas($uni,$esp){

        $esp = Especializacoes::where('nome',$esp)->get();

        $a = UnidadeEspecializacao::with('unidade','especializacao')
            ->where('unidade_id','=',$uni)
                ->where('especializacao_id','=',$esp->id)
                    ->get();

        return response()->json($a);
    }
}
