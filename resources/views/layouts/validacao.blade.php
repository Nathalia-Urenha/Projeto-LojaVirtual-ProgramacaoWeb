@if ($errors -> any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        @foreach ($errors->all() as $error)
            <i class="fa fa-check-circle"></i>
            <span>{{$error}}</span><br>
        @endforeach
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif