@extends('layouts.adm.app')

@section('content')

    <div class="container">
        @include('usuario.__apptitulo')
        <div class="tile">
            <div class="tile-body">
        </div>
        <form action="{{url('/endereco/salvar')}}" method="POST">
            @csrf
            @include('usuario.__form')
            <div class="center">
                <button type="submit" class="btn btn-primary btn-lg" >Salvar</button>
                <a href="{{url('/usuario/cancelar')}}" class="btn btn-secondary btn-lg ml-3">Cancelar</a>
            </div>
        </form>
    </div>


@endsection
