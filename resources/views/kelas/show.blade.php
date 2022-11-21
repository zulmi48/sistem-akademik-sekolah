@extends('layouts.app')
@section('title', 'Daftar Siswa')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="mb-3 text-center">
                <h1>Daftar Siswa Kelas {{ $kelas->nama }}</h1>
                <hr>
                <strong>Wali Kelas : </strong>
                @if ($kelas->guru->jenis_kelamin == 'L')
                    Bapak {{ $kelas->guru->nama }}
                @else
                Ibu {{ $kelas->guru->nama }}
                @endif
            </div>
            <div class="mb-3">
                <div class="text-start">
                    <a href="/kelas" class="btn btn-sm btn-secondary">Kembali</a>
                </div>
                <table class="table table-hover">
                    <tr>
                        <th>#</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                    </tr>
                    @foreach ($kelas->siswa as $siswa)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $siswa->nis }}</td>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->jenis_kelamin }}</td>
                        <td>{{ $siswa->alamat }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
