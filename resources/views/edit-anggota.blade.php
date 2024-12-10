@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Anggota</h2>

    <form action="{{ route('anggota.update', $anggota->id_anggota) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $anggota->nama }}" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ $anggota->alamat }}" required>
        </div>

        <div class="form-group">
            <label for="no_telp">No Telp</label>
            <input type="text" name="no_telp" class="form-control" value="{{ $anggota->no_telp }}" required>
        </div>

        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" value="{{ $anggota->tgl_lahir }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Anggota</button>
    </form>
</div>
@endsection
