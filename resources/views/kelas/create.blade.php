@extends('layouts.app')
@section('title', 'Data Kelas | Tambah')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <a href="/kelas" class="btn btn-secondary"><< Kembali</a>
            <div class="mb-3 text-center">
                <h1>Tambah Data Baru</h1>
                <hr>
            </div>
            <div class="col-4 m-auto">
                <form action="/kelas" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Kelas :</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Contoh: VII E, IX G, ...">
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
