@extends('layouts.induk-guest')

@section('page-content')

<div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">Login {{ config('app.name') }}</h1>
</div>

<form method="POST" action="{{ route('login.check') }}">
@csrf

@include('layouts.alerts')

<div class="mb-3">
    <label for="email" class="form-label">Email Address</label>
    <input type="email" name="email" class="form-control">
</div>

<div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control">
</div>

<div class="mb-3 form-check">
    <input type="checkbox" name="remember_me" class="form-check-input">
    <label class="form-check-label" for="remember_me">Remember Me</label>
</div>

<button type="submit" class="btn btn-primary">Login</button>


</form>
@endsection
