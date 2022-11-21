@extends('layouts.app')
@section('title', 'Data Guru')
@section('content')
<div class="container my-5 mx-auto">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <h1 class="text-center">Detail Guru</h1><hr>
            </div>
            <div class="mb-3">
                <div class="card">
                    <div class="card-header text-center text-uppercase fw-bold">{{ $guru->nama }}</div>
                    <div class="card-body">
                        <table class="table table-stripped">
                            <tr>
                                <th>Nomor Induk Guru</th>
                                <td>:</td>
                                <td>{{ $guru->nik }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>:</td>
                                <td>
                                    @if ($guru->jenis_kelamin == "L")
                                        Laki Laki
                                    @else
                                        Perempuan
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>:</td>
                                <td>{{ $guru->alamat }}</td>
                            </tr>
                            <tr>
                                <th>Wali Kelas</th>
                                <td>:</td>
                                <td>{{ $guru->kelas->nama }}</td>
                            </tr>
                            <tr>
                                <th>Murid</th>
                                <td>:</td>
                                <td>
                                    <ol>
                                        @foreach ($guru->kelas->siswa as $item)
                                        <li>{{ $item->nama }}</li>
                                        @endforeach
                                    </ol>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <a href="/guru" class="btn btn-sm btn-outline-secondary"> << Kembali </a>
            </div>
        </div>
    </div>
</div>
@endsection
