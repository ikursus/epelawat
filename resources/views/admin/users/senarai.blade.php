@extends('layouts.induk')

@section('content')

<div class="row mb-5">
    <div class="col-12">
        <h1 class="text-center">Senarai Users</h1>
    </div>
</div>

<div class="row">

    <div class="col-12">

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($senaraiUsers as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['nama'] }}</td>
                    <td><?php echo $user['email']; ?></td>
                </tr>
                @endforeach

            </tbody>

        </table>

    </div>

</div>
@endsection

@section('css_custom')
<style>
    .ayat-tengah {
        text-align: center;
    }
</style>
@endsection
