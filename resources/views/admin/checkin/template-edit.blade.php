@extends('layouts.induk')

@section('page-content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Rekod Pelawat - {{ $visitor->nama }}</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Area Chart -->
        <div class="col-md-12">

            <form method="POST" action="{{ route('checkin.update', $visitor->id) }}">
                @csrf
                @method('PATCH')
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Rekod</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">

                    <div class="mb-3">
                        <label for="mykad" class="form-label">No. Kad Pengenalan</label>
                        <input type="text" name="mykad" class="form-control" value="{{ $visitor->mykad }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $visitor->nama }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="no_locker" class="form-label">No. Locker</label>
                        <input type="text" name="no_locker" value="{{ $visitor->no_locker }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="no_kad_akses" class="form-label">No. Kad Akses</label>
                        <input type="text" name="no_kad_akses" value="{{ $visitor->no_kad_akses }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan/Syarikat</label>
                        <input type="text" name="jabatan" class="form-control" value="{{ $visitor->jabatan }}">
                    </div>

                    <div class="mb-3">
                        <label for="no_telefon" class="form-label">No. Telefon</label>
                        <input type="text" name="no_telefon" class="form-control" value="{{ $visitor->no_telefon }}">
                    </div>

                    <div class="mb-3">
                        <label for="aktiviti" class="form-label">Aktiviti</label>
                        <textarea name="aktiviti" class="form-control">{{ $visitor->aktiviti }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="no_rak" class="form-label">No. Rak</label>
                        <input type="text" name="no_rak" class="form-control" value="{{ $visitor->no_rak }}">
                    </div>

                    <div class="mb-3">
                        <label for="pegawai_pengiring" class="form-label">Pegawai Pengiring</label>
                        <input type="text" name="pegawai_pengiring" class="form-control" value="{{ $visitor->pegawai_pengiring }}">
                    </div>

                    <div class="mb-3">
                        <label for="waktu_masuk" class="form-label">Waktu Masuk</label>
                        <input type="text" name="waktu_masuk" class="form-control" value="{{ $visitor->waktu_masuk }}">
                    </div>

                    <div class="mb-3">
                        <label for="waktu_keluar" class="form-label">Waktu Keluar</label>
                        <input type="text" name="waktu_keluar" class="form-control" value="{{ $visitor->waktu_keluar }}">
                    </div>

                </div>
                <div class="card-footer">
                    <a href="{{ route('checkin.index') }}" class="btn btn-info">Kembali</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </div>

            </form>
        </div>


    </div>

@endsection
