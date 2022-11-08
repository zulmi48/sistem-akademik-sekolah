<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SiswaController extends Controller
{
    public function index()
    {
        $dataSiswa = Siswa::orderBy('id', 'desc')->get();
        return view('siswa.index', compact('dataSiswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $create = Siswa::create($request->all());
        if ($create) {
            Session::flash('message', 'Data berhasil ditambahkan');
        }
        return redirect('/siswa');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }


    public function update(Request $request, $id)
    {
        $update = Siswa::findOrFail($id)->update($request->all());
        if ($update) {
            Session::flash('message', 'Data berhasil diupdate');
        }
        return redirect('/siswa');
    }


    public function destroy($id)
    {
        $del = Siswa::destroy($id);
        return redirect('/siswa');
    }
}
