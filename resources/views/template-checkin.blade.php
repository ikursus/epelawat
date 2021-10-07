@extends('layouts.induk')

@section('content')
<div class="row mb-5">
    <div class="col-12">
        <h1 class="text-center">Check In</h1>
    </div>
</div>

<div class="row">

<div class="col-md-3">

</div>

<div class="col-md-6">

    <form method="POST" action="{{ route('checkin.check') }}">
        @csrf
    <div class="card">
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-3">
                <label for="mykad" class="form-label">No. Kad Pengenalan</label>
                <input type="text" name="mykad" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="no_locker" class="form-label">No. Locker</label>
                <input type="text" name="no_locker" class="form-control">
            </div>

            <div class="mb-3">
                <label for="no_kad_akses" class="form-label">No. Kad Akses</label>
                <input type="text" name="no_kad_akses" class="form-control">
            </div>

            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan/Syarikat</label>
                <input type="text" name="jabatan" class="form-control">
            </div>

            <div class="mb-3">
                <label for="no_telefon" class="form-label">No. Telefon</label>
                <input type="text" name="no_telefon" class="form-control">
            </div>

            <div class="mb-3">
                <label for="aktiviti" class="form-label">Aktiviti</label>
                <textarea name="aktiviti" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="no_rak" class="form-label">No. Rak</label>
                <input type="text" name="no_rak" class="form-control">
            </div>

            <div class="mb-3">
                <label for="pegawai_pengiring" class="form-label">Pegawai Pengiring</label>
                <input type="text" name="pegawai_pengiring" class="form-control">
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
