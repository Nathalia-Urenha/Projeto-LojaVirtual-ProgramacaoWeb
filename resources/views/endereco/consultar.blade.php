@extends('layouts.adm.app')

@section('content')

    <div class="container">
        @include('endereco.__apptitulo')
        <div class="tile">
            <div class="tile-body">
        </div>
        <form action="{{url('/endereco/listar')}}" method="GET">
            @csrf
            @include('endereco.__form')
            <div class="center">
                <button type="submit" class="btn btn-primary btn-lg">Voltar</button>
            </div>
        </form>

   
    </div>
    
@endsection
