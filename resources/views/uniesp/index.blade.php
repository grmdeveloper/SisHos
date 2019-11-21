@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{ url("/unidadeespecializacao/create")}}" type="button" class="btn btn-dark" style="float: right;top: -33px;right: -13px;">Dark</a>
            <div class="card">
               <table id="relatorios" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                  <thead>
                     <tr>
                        <th>Unidade</th>
                        <th>Especialização</th>
                        <th>Descrição</th>
                        <th>Status</th>
                     </tr>
                  </thead>
                  <tbody>
                    @foreach ($unidadesp as $vaga)
                        <tr>
                           <td>{{$vaga->unidade->nome}}</td>
                           <td>{{$vaga->especializacao->nome}}</td>
                           <td>{{$vaga->descricao}}</td>
                           <td>{{$vaga->status}}</td>
                        </tr>
                    @endforeach
                  </tbody>
               </table>
            </div>
        </div>
    </div>
</div>
@endsection
