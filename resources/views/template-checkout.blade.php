@extends('layouts.induk')

@section('content')
<div class="row mb-5">
    <div class="col-12">
        <h1 class="text-center">Check Out</h1>
    </div>
</div>

<div class="row">

<div class="col-md-3">

</div>

<div class="col-md-6">

    <form method="POST" action="{{ route('checkout.check') }}">
        @csrf
    <div class="card">
        <div class="card-body">

            @include('layouts.alerts')

            <div class="mb-3">
                <label for="mykad" class="form-label">No. Kad Pengenalan</label>
                <input type="text" name="mykad" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </div>

    </form>

</div>

<div class="col-md-3">

</div>
</div>
@endsection
