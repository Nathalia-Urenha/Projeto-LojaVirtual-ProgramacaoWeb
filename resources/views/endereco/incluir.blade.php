@extends('layouts.adm.app')

@section('content')

    <div class="container">
        @include('endereco.__apptitulo')
        <div class="tile">
            <div class="tile-body">
        </div>
        <form action="{{url('/endereco/salvar')}}" method="POST">
            @csrf
            @include('endereco.__form')
            <div class="center">
                <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                <a href="{{url('/endereco/cancelar')}}" class="btn btn-secondary btn-lg ml-3">Cancelar</a>
            </div>
        </form>
    </div>


@endsection
