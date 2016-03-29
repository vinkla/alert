@if (session()->has('alert.message'))
    <div class="alert alert-{{ session()->get('alert.style') }} alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        {!! session()->get('alert.message') !!}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        {{ $errors->first() }}
    </div>
@endif
