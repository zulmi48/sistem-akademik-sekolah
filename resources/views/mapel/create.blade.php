@extends('layouts.app')
@section('title', 'Data Mapel | Tambah')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <a href="/mapel" class="btn btn-secondary"><< Kembali</a>
            <div class="mb-3 text-center">
                <h1>Tambah Data Baru</h1>
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
                <form action="/mapel" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="kode" class="form-label">Kode :</label>
                        <input type="text" name="kode" id="kode" class="form-control" value="{{ old('kode') }}">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama :</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}">
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select class="form-control" name="kelas" id="kelas">
                            <option value="">- Pilih Salah Satu -</option>
                            <option value="VII">VII</option>
                            <option value="VIII">VIII</option>
                            <option value="IX">IX</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="semester" class="form-label">Semester</label>
                        <select class="form-control" name="semester" id="semester">
                            <option value="">- Pilih Salah Satu -</option>
                            <option value="Ganjil">Ganjil</option>
                            <option value="Genap">Genap</option>
                        </select>
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
