@if(Session::has('success'))

    <div class="alert alert-success" role="alert">
        <strong>{{ trans('lang.success') }}</strong> {{ Session::get('success') }}
    </div>

@endif

@if(count($errors) > 0)

    <div class="alert alert-danger" role="alert">
        <strong>{{ trans('lang.errors') }}</strong>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif