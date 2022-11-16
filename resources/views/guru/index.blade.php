@extends('layouts.app')
@section('title', 'Data Guru')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="mb-3 text-center">
                <h1>Data Guru</h1><hr>
            </div>
            @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
            @endif
            <div class="text-end mb-2">
                <a href="/guru/create" class="btn btn-sm btn-success">Tambah</a>
            </div>
            <div class="mb-3">
                <table class="table table-hover">
                    <tr>
                        <th>#</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($dataGuru as $guru)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $guru->nik }}</td>
                        <td>{{ $guru->nama }}</td>
                        <td>{{ $guru->jenis_kelamin }}</td>
                        <td>{{ $guru->alamat }}</td>
                        <td>
                            <a href="guru/{{ $guru->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <form action="/guru/{{ $guru->id }}" style="display: inline-block" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {{-- {{ $dataGuru->links() }} --}}
            </div>
        </div>
    </div>
</div>
@endsection
