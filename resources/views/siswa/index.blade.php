@extends('layouts.app')
@section('title', 'Data Siswa')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="mb-3 text-center">
                <h1>Data Siswa</h1>
            </div>
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
                    <tr>
                        <td>Lorem</td>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>
                            <a href="siswa/1/edit" class="btn btn-sm btn-warning">Edit</a>
                            <form action="" method="post">
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
