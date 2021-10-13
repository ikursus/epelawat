@extends('layouts.induk')

@section('page-content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Senarai Users</h1>
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
                <h6 class="m-0 font-weight-bold text-primary">Senarai Users</h6>
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

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>NAMA</th>
                    <th>MYKAD</th>
                    <th>EMAIL</th>
                    <th>TELEFON</th>
                    <th>ROLE</th>
                    <th>TINDAKAN</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($senaraiUsers as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->mykad }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->profile->telefon }}</td>
                    <td>{{ $user->roles }}</td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-primary">
                            Edit
                        </a>
                    </td>
                </tr>
                @endforeach

            </tbody>

        </table>

    </div>

</div>
</div>


</div>
@endsection
