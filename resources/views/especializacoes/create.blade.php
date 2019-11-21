@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               <form action="{{ url('/especializacao')}}" method="POST" id="form">
                  {{ csrf_field() }}

                  <div class="form-group">
                        <label for="formGroupExampleInput">Nome da Especialização</label>
                        <input id="nome" name="nome" type="text" class="form-control" placeholder="Example input">
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
