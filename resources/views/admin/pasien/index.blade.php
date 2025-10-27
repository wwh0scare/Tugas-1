@extends('layouts.admin')

@section('content')
<h1>Daftar Pasien</h1>
<a href="{{ route('pasien.create') }}" class="btn btn-primary mb-3">Tambah Pasien</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No KTP</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pasiens as $pasien)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $pasien->nama }}</td>
            <td>{{ $pasien->no_ktp }}</td>
            <td>{{ $pasien->email }}</td>
            <td>
                <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('pasien.destroy', $pasien->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
