@extends('layouts.adm.app')

@section('content')

    <div class="container">

        <form action="" method="POST">
            @csrf
            @include('cliente.__form')
            <div class="center">
                <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
            </div>
        </form>
        <div class="col-lg-12" style="text-align: right;">
            <a class="btn btn-primary" href="{{ url('/endereco/incluir') }}" role="button">Cadastrar Endereço -></a>
        </div>
    </div>


@endsection
