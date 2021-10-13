@extends('layouts.induk')

@section('css-custom')
<link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">

@endsection

@push('js-custom')
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script>
    $(function() {
        $('#datatables-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('admin.checkin.datatables') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'nama', name: 'nama' },
                { data: 'mykad', name: 'mykad' },
                { data: 'jabatan', name: 'jabatan' },
                { data: 'pegawai_pengiring', name: 'pegawai_pengiring' },
                { data: 'waktu_masuk', name: 'waktu_masuk' },
                { data: 'tindakan', name: 'tindakan', orderable: false, searchable: false }
            ]
        });
    });
</script>
@endpush

@section('page-content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Senarai Check In Pelawat</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Area Chart -->
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Latest 10 Check In</h6>
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

                    <table class="table table-sm table-bordered" id="datatables-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>MyKad</th>
                                <th>Jabatan</th>
                                <th>Pengiring</th>
                                <th>Tarikh & Masa</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            @foreach ($checkIn as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jabatan }}</td>
                                <td>{{ $item->mykad }}</td>
                                <td>{{ $item->pegawai_pengiring }}</td>
                                <td>{{ $item->waktu_masuk }}</td>
                                <td>
                                    <a href="{{ route('checkin.edit', $item->id) }}" class="btn btn-sm btn-info">
                                        Edit
                                    </a>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $item->id }}">
                                        Delete
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modal-delete-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">

                                        <form method="POST" action="{{ route('checkin.destroy', $item->id) }}">
                                            @method('DELETE')
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Pengesahan Delete</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Adakah anda ingin delete rekod ini?</p>
                                                    <ul>
                                                        <li>{{ $item->nama }}</li>
                                                    </ul>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody> --}}
                    </table>

                </div>

            </div>
        </div>


    </div>

@endsection
