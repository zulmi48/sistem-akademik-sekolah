@extends('layouts.app')
@section('title', 'Data Siswa | Edit')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <a href="/siswa" class="btn btn-secondary"><< Kembali</a>
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
                <form action="/siswa/{{ $siswa->id }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="nis" class="form-label">NIS :</label>
                        <input type="number" name="nis" id="nis" class="form-control" value="{{ old('nis', $siswa->nis) }}">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">NAMA :</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $siswa->nama) }}">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                            @if ($siswa->jenis_kelamin == "L")
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                            @else
                            <option value="P">Perempuan</option>
                            <option value="L">Laki-laki</option>
                            @endif
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" cols="20" rows="5">{{ old('alamat', $siswa->alamat)  }}</textarea>
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
