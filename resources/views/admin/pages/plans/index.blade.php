@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Planos <a href="{{ route('plans.create') }}"class= "btn btn-dark">ADD</a></h1>
@stop

 @section('content')
    <div class="card">

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
                                             R$ {{ number_format($plan->price, 2, ',', '.') }}
                                     </td>

                                             <td style="width=10px3">
                                             <a href="{{ route('plans.show', $plan->url)}}"class="btn btn-warning">VER</a></td>

                                             </td>
                        </tr>

                    @endforeach
                 </tbody>


            </table>
        </div>

      </div>
    </div>

@stop
