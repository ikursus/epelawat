@extends('layouts.induk')

@section('content')

<div class="row mb-5">
    <div class="col-12">
        <h1 class="text-center">Sila Daftar Keluar</h1>
    </div>
</div>

<div class="row">

<div class="col-md-3">

</div>

<div class="col-md-6">

    <form method="POST" action="">

        <div class="form-group">
            <label>MyKAD:</label>
            <input type="text" name="mykad" class="form-group">
        </div>

        <button type="submit" class="btn btn-primary">Check Out</button>
    </form>

</div>

<div class="col-md-3">

</div>

</div>

@endsection

