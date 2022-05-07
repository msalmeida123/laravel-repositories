@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
  <div class='card'>
  </div>
      <div class="card-header">
          #filtros

      </div>
         <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                     <th>Nome</th>
                     <th>Preço</th>
                     <th width="50">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach      ($plans as $plan)
                        <tr>
                                   <td>
                                             {{$plan->name}}
                                    </td>
                                     <td>
                                             {{$plan->price}}
                                     </td>
                                             <td>
                                             <td style="width=10px3">
                                             <a href=""class="btn btn-warning">VER</a></td>

                                             </td>
                        </tr>

                    @endforeach
                </tbody>


            </table>

        </div>

@stop
