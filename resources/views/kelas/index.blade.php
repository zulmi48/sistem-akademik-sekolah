@extends('layouts.app')
@section('title', 'Daftar Kelas')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="mb-3 text-center"><h1>Daftar Kelas</h1><hr></div>
            @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
            @endif
            <div class="mb-3">
                <div class="text-end">
                    <a href="/kelas/create" class="btn btn-sm btn-success">Tambah</a>
                </div>
                <table class="table table-hover text-center">
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($dataKelas as $kelas)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a href="/kelas/{{ $kelas->id }}" class="btn btn-sm btn-outline-secondary">{{ $kelas->nama }}</a></td>
                        <td>
                            <a href="/kelas/{{ $kelas->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <form action="/kelas/{{ $kelas->id }}" style="display: inline-block" method="post">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Del</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
