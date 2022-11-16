<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GuruController extends Controller
{
    public function index()
    {
        $dataGuru = Guru::orderBy('id', 'desc')->get();
        return view('guru.index', compact('dataGuru'));
    }

    public function create()
    {
        return view('guru.create');
    }

    public function store(Request $request)
    {
        Guru::create($request->all());
        Session::flash('success', "Data berhasil ditambahkan!");
        return redirect('/guru');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('guru.edit', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        Guru::findOrFail($id)->update($request->all());
        Session::flash('success', "Data berhasil di-update!");
        return redirect('/guru');
    }

    public function destroy($id)
    {
        Guru::destroy($id);
        Session::flash('success', "Data berhasil dihapus!");
        return redirect('/guru');
    }
}
