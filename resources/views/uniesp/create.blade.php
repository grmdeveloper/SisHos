@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               <form action="{{ url('/unidadeespecializacao')}}" method="POST" id="form">
                  {{ csrf_field() }}


                  <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroup-sizing-sm">Descrição</span>
                        </div>
                        <input name="descricao" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                      </div>

                  <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Unidades</label>
                      </div>
                      <div>
                      <select name="unidade_id" class="custom-select" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        @foreach ($unidades as $unidade)
                           <option value="{{$unidade->id}}">{{$unidade->nome}} </option>  
                        @endforeach
                      </select>
                    </div>

                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Especializações</label>
                      </div>
                      <div>
                      <select name="especializacao_id" class="custom-select" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        @foreach ($especias as $especia)
                           <option value="{{$especia->id}}">{{$especia->nome}} </option>  
                        @endforeach
                      </select>
                    </div>
                    <div>
                       <label>Quantidade de vagas</label>
                       <input name="qtd_vagas" type="number" min="1">
                    </div>

                  <div class="row">
                        <center>
                           <button type="submit" id="enviar-relatorio" class="botoes-acao btn btn-round btn-success enviar-relatorio">
                              <span class="icone-botoes-acao mdi mdi-send"></span>
                              <span class="texto-botoes-acao"> ENVIAR </span>
                              <div class="ripple-container"></div>
                           </button>
                        
                           <button id="btn_cancelar" class="botoes-acao btn btn-round btn-primary">
                              <span class="icone-botoes-acao mdi mdi-backburger"></span>   
                              <span class="texto-botoes-acao"> CANCELAR </span>
                              <div class="ripple-container"></div>
                           </button>
                        </center>
                     </div>
               </form>
            </div>
        </div>
    </div>
</div>
@endsection

