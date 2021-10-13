@extends('layouts.induk-guest')

@section('page-content')

<div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">Check Out {{ config('app.name') }}</h1>
</div>

<form method="POST" action="{{ route('checkout.check') }}">
@csrf

@include('layouts.alerts')

<div class="mb-3">
    <label for="mykad" class="form-label">No. Kad Pengenalan</label>
    <input type="text" name="mykad" class="form-control">
</div>

<a href="{{ route('utama') }}" class="btn btn-info">Kembali</a>
<button type="submit" class="btn btn-primary">Check Out</button>

</form>


@endsection
