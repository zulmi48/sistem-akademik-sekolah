<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiswaCreateRequest;
use App\Http\Requests\SiswaUpdateRequest;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SiswaController extends Controller
{
    public function index()
    {
        $dataSiswa = Siswa::orderBy('nama', 'asc')->paginate(10);
        return view('siswa.index', compact('dataSiswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(SiswaCreateRequest $request)
    {
        $create = Siswa::create($request->all());
        Session::flash('success', 'Data berhasil ditambahkan!');
        return redirect('/siswa');
    }


    public function show($id)
    {
        $siswa = Siswa::with(['mapel', 'kelas'])->findOrFail($id);
        return view('siswa.show', compact('siswa'));
    }


    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }


    public function update(SiswaUpdateRequest $request, $id)
    {
        Siswa::findOrFail($id)->update($request->all());
        Session::flash('success', 'Data berhasil diupdate!');
        return redirect('/siswa');
    }


    public function destroy($id)
    {
        $del = Siswa::destroy($id);
        Session::flash('success', 'Data telah terhapus!');
        return redirect('/siswa');
    }
}
