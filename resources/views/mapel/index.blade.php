@extends('layouts.app')
@section('title', 'Mata Pelajaran')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="mb-3 text-center"><h1>Data Mata Pelajaran</h1><hr></div>
            <div class="mb-3">
                <div class="text-end">
                    <a href="/mapel/create" class="btn btn-sm btn-success">Tambah</a>
                </div>
                <table class="table table-hover">
                    <tr>
                        <th>#</th>
                        <th>Kode</th>
                        <th>Nama Mapel</th>
                        <th>Semester</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($dataMapel as $mapel)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $mapel->kode }}</td>
                        <td>{{ $mapel->nama }}</td>
                        <td>{{ $mapel->semester }}</td>
                        <td>
                            <a href="/mapel/{{ $mapel->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Del</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
