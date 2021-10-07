@extends('layouts.induk')

@section('content')
<div class="row mb-5">
    <div class="col-12">
        <h1 class="text-center">Login</h1>
    </div>
</div>

<div class="row">

<div class="col-md-3">

</div>

<div class="col-md-6">

    <form method="POST" action="{{ route('login.check') }}">

    <div class="card">
        <div class="card-body">

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

            <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </div>

    </form>

</div>

<div class="col-md-3">

</div>
</div>
@endsection
