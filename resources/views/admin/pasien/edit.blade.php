@extends('layouts.admin')

@section('content')
<h1>Edit Data Pasien</h1>

<form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="{{ $pasien->nama }}" required>
    </div>
    <div class="mb-3">
        <label>No KTP</label>
        <input type="text" name="no_ktp" class="form-control" value="{{ $pasien->no_ktp }}" required>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="{{ $pasien->email }}" required>
    </div>
    <div class="mb-3">
        <label>Password (Opsional)</label>
        <input type="password" name="password" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
