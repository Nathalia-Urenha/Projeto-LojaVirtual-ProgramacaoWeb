@extends('layouts.adm.app')

@section('content')

    <div class="container">
        @include('cliente.__apptitulo')
        <div class="tile">
            <div class="tile-body">
        </div>
        <form action="{{url('/cliente/excluir', $registro->id)}}" method="POST">
            @csrf
            @include('cliente.__form')
            <div class="center">
                <button type="submit" class="btn btn-primary btn-lg">Excluir</button>
                <a href="{{url('/cliente/cancelar')}}" class="btn btn-secondary btn-lg ml-3">Cancelar</a>
            </div>
        </form>
    </div>


@endsection