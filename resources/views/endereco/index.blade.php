@extends('layouts.adm.app')
@section('content')
<div class="container">
    <div class="app-title">
        <h1>
            <i class="fa fa-edit">Lista de Enderecos</i>
        </h1>
        <ul class="app-bredcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-search fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('/endereco/home')}}">Menu Principal</a></li>
        </ul>
    </div>

    <div class="container">
        <div class="tile">
            <div class="tile-body">
                <form class="form form-inline" action="{{ url('search_endereco') }}" method="POST">
                    @csrf
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label col-sm-1">Nome:</label> <input type="text"
                                class="form-control col-sm-9" id="nome" name="nome"
                                placeholder="Digite um nome para pesquisar" value="{{ $filters['nome'] ?? '' }}" />
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary">
                                    Pesquisar <i class="fa fa-search-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="tile">
            <div class="tile-body">
                <div id="no-more-tables">
                    <table class="table table-striped table-bordered table-hover cf">
                        <thead class="cf">
                            <tr>
                                <th style="font-weight: bold; text-align: center;">Cliente</th>
                                <th style="font-weight: bold; text-align: center;">CEP </th>
                                <th style="font-weight: bold; text-align: center;">Logradouro</th>
                                <th style="font-weight: bold; text-align: center;">Numero</th>
                                <th style="font-weight: bold; text-align: center;">Complemento</th>
                                <th style="font-weight: bold; text-align: center;">Bairro</th>
                                <th style="font-weight: bold; text-align: center;">Cidade</th>
                                <th style="font-weight: bold; text-align: center;">Estado</th>
                                <th style="font-weight: bold; text-align: center;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($registros as $registro)
                               <tr>
                                   <td data-title="Cliente" style="text-align: center" ><!--colocar o nome do cliente aqui--></td>
                                   <td data-title="CEP" style="text-align: center">{{$registro->cep}}</td>
                                   <td data-title="Logradouro" style="text-align: center">{{$registro->logradouro}}</td>
                                   <td data-title="Numero" style="text-align: center">{{$registro->numero}}</td>
                                   <td data-title="Complemento" style="text-align: center">{{$registro->complemento}}</td>
                                   <td data-title="Bairro" style="text-align: center">{{$registro->bairro}}</td>
                                   <td data-title="Cidade" style="text-align: center">{{$registro->cidade}}</td>
                                   <td data-title="Estado" style="text-align: center">{{$registro->estado}}</td>
                                   <td data-title="Ações" style="text-align: center">
                                       <a class="btn btn-info btn-sm" href="{{url('endereco/alterar', $registro->id)}}"><i class="fa fa-pencil"></i></a>
                                       <a class="btn btn-danger btn-sm" href="{{url('endereco/excluir', $registro->id)}}"><i class="fa fa-trash"></i></a>
                                       <a class="btn btn-warning btn-sm" href="{{url('endereco/consultar', $registro->id)}}"><i class="fa fa-address-book"></i></a>
                                   </td>
                               </tr>
                            @endforeach
                        </tbody> 
                    </table>
                    @if(@isset($filters))
                        {{$registros->appends($filters)->links()}}
                    @else
                        {{$registros->links()}}  
                    @endisset
                    
                    <a class="btn btn-success btn-sm" href="{{url('endereco/incluir')}}">Incluir<i class="fa fa-plus-circle"></i></a>
                </div>
            </div>
        </div>
    </div>
    
@endsection