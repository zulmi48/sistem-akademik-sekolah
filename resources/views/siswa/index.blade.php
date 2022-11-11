@extends('layouts.app')
@section('title', 'Data Siswa')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="mb-3 text-center">
                <h1>Data Siswa</h1><hr>
            </div>
            @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
            @endif
            <div class="text-end mb-2">
                <a href="/siswa/create" class="btn btn-sm btn-success">Tambah</a>
            </div>
            <div class="mb-3">
                <table class="table table-hover">
                    <tr>
                        <th>#</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($dataSiswa as $siswa)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $siswa->nis }}</td>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->jenis_kelamin }}</td>
                        <td>{{ $siswa->alamat }}</td>
                        <td>
                            <a href="siswa/{{ $siswa->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <form action="/siswa/{{ $siswa->id }}" style="display: inline-block" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {{ $dataSiswa->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
