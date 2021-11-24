@extends('layout.template')
@section('title', 'Penjual')
@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($penjual as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nama_penjual}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>   
@endsection

