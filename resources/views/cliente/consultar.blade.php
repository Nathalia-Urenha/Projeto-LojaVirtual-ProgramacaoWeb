@extends('layouts.adm.app')

@section('content')

    <div class="container">
        @include('cliente.__apptitulo')
        <div class="tile">
            <div class="tile-body">
        </div>
        <form action="{{url('/cliente/listar')}}" method="GET">
            @csrf
            @include('cliente.__form')
            <div class="center">
                <button type="submit" class="btn btn-primary btn-lg">Voltar</button>
            </div>
        </form>
    </div>


@endsection
