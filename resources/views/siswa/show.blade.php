@extends('layouts.app')
@section('title', 'Data Siswa')
@section('content')
<div class="container my-5 mx-auto">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <h1 class="text-center">Detail Siswa</h1><hr>
            </div>
            <div class="mb-3">
                <div class="card">
                    <div class="card-header text-center text-uppercase fw-bold">{{ $siswa->nama }}</div>
                    <div class="card-body">
                        <table class="table table-stripped">
                            <tr>
                                <th>Nomor Induk Siswa</th>
                                <td>:</td>
                                <td>{{ $siswa->nis }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>:</td>
                                <td>
                                    @if ($siswa->jenis_kelamin == "L")
                                        Laki Laki
                                    @else
                                        Perempuan
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>:</td>
                                <td>{{ $siswa->alamat }}</td>
                            </tr>
                            <tr>
                                <th>Mata Pelajaran</th>
                                <td>:</td>
                                <td>
                                    <ul>
                                    @foreach ($siswa->mapel as $item)
                                        <li> {{ $item->nama }}</li>
                                    @endforeach
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th>Kelas</th>
                                <td>:</td>
                                <td>{{ $siswa->kelas->nama }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <a href="/siswa" class="btn btn-sm btn-outline-secondary"> << Kembali </a>
            </div>
        </div>
    </div>
</div>
@endsection
