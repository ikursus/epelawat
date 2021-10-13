@extends('layouts.induk-guest')

@section('page-content')

<div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">Selamat Datang Ke {{ config('app.name') }}</h1>
</div>

@include('layouts.alerts')

<div class="row">

    <div class="col-md-3 offset-3 text-center">
        <div class="d-grid gap-2">
            <a href="{{ route('checkin') }}" class="btn btn-lg btn-primary">Check In</a>
        </div>
    </div>
    <div class="col-md-3 text-center">
        <div class="d-grid gap-2">
            <a href="{{ route('checkout') }}" class="btn btn-lg btn-warning">Check Out</a>
        </div>
    </div>

</div>

<hr>

<div class="row pt-5">

    <div class="col-12 text-center">
        <a href="{{ route('login') }}">Login e-Pelawat</a>
    </div>

</div>

<div class="row mt-5">
    <div class="col-12">
        <p class="text-center">{{ config('epelawat.copyright_notice') }}</p>
    </div>
</div>

@endsection
