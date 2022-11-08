@extends('layouts.app')
@section('title', 'Data Siswa | Tambah')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <a href="/siswa" class="btn btn-secondary"><< Kembali</a>
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
                <form action="/siswa" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nis" class="form-label">NIS :</label>
                        <input type="number" name="nis" id="nis" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">NAMA :</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="">- Pilih Salah Satu -</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" cols="20" rows="5"></textarea>
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
