@extends('layouts.adm.app')

@section('content')

<div class="container">

    <form action="" method="POST">

        @include('cliente.__form')
        <div class="center">
            <button type="submit" class="btn btn-primary btn-lg">Alterar</button>
        </div>

    </form>

</div>

@endsection