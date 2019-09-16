@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               <form action="{{ url('/unidadeespecializacao')}}" method="POST" id="form">
                  {{ csrf_field() }}

      
                  <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Selecione a Unidade</label>
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
                    
                        @foreach ($especias as $especia)
                          <label class='form-control' style='max-width:30%; display:inline-block; height:80px; vertical-align: top;'> {{$especia->nome}}
                            <input type='checkbox' name="especializacao_id[]" value='{{$especia->id}}'>
                          </label>
                        @endforeach
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

