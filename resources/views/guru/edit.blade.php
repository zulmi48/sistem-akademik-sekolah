@extends('layouts.app')
@section('title', 'Data Guru | Edit')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <a href="/guru" class="btn btn-secondary"><< Kembali</a>
            <div class="mb-3 text-center">
                <h1>Edit Data</h1>
                <hr>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
              </div>
            @endif
            <div class="col-4 m-auto">
                <form action="/guru/{{ $guru->id }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK :</label>
                        <input type="number" name="nik" id="nik" class="form-control" value="{{ old('nis', $guru->nis) }}">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama :</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $guru->nama) }}">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                            @if ($guru->jenis_kelamin == "L")
                            <option value="L" selected>Laki-laki</option>
                            <option value="P">Perempuan</option>
                            @else
                            <option value="P" selected>Perempuan</option>
                            <option value="L">Laki-laki</option>
                            @endif
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" cols="20" rows="5">{{ old('alamat', $guru->alamat)  }}</textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
