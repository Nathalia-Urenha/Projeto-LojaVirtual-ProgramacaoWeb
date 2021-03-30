@extends('layouts.adm.app')

@section('content')

    <div class="container">
        @include('cliente.__apptitulo')
        <div class="tile">
            <div class="tile-body">
        </div>
        <form action="{{url('/cliente/salvar')}}" method="POST">
            @csrf
            @include('cliente.__form')
            <div class="center">
                <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                <a href="{{url('/cliente/cancelar')}}" class="btn btn-secondary btn-lg ml-3">Cancelar</a>
            </div>
            <div class="col-lg-12" style="text-align: right;">
                <a class="btn btn-primary" href="{{ url('/endereco/incluir') }}" role="button">Cadastrar Endereço -></a>
            </div>
        </form>
    </div>


@endsection
