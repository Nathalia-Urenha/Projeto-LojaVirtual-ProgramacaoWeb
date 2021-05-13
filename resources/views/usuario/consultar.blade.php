@extends('layouts.adm.app')

@section('content')

    <div class="container">
        @include('usuario.__apptitulo')
        <div class="tile">
            <div class="tile-body">
        </div>
        <form action="{{url('/usuario/listar')}}" method="GET">
            @csrf
            @include('usuario.__form')
            <div class="center">
                <button type="submit" class="btn btn-primary btn-lg">Voltar</button>
            </div>
        </form>
    </div>


@endsection
