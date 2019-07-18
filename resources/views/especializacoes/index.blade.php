@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{ url("/especializacao/create")}}" type="button" class="btn btn-dark" style="float: right;top: -33px;right: -13px;">Dark</a>
            <div class="card">
               <table id="relatorios" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                  <thead>
                     <tr>
                        <th>Especialização</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($especializacoes as $especializacao)
                         <tr>
                           <td>{{$especializacao->nome}}</td>
                         </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
        </div>
    </div>
</div>
@endsection
