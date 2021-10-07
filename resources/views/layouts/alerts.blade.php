@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@if (session('mesej-sukses'))
<meta http-equiv="refresh" content="5" >
<div class="alert alert-success">
    {{ session('mesej-sukses') }}
</div>
@endif
