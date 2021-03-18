@extends('layouts.app')

@section('content')

<div class="container">

    <form action="" method="POST">
        @csrf
        @include('cliente.__form')
        <div class="center">
            <button type="submit" class="btn btn-primary btn-lg">Salvar</button>

        </div>

    </form>

</div>

@endsection