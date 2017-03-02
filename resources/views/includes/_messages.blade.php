@if(Session::has('success'))

    <div class="alert alert-success" role="alert">
        <p><strong>{{ trans('lang.success') }}</strong> {{ Session::get('success') }}</p>
        <button class="close_btn"><i class="fa fa-times" aria-hidden="true"></i></button>
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
        <button class="close_btn"><i class="fa fa-times" aria-hidden="true"></i></button>
    </div>

@endif