<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $mahasiswa = Mahasiswa::all();
    return view('mahasiswa.index', compact('mahasiswa'));
}

public function create()
{
    return view('mahasiswa.create');
}

public function store(Request $request)
{
    Mahasiswa::create($request->all());

    return redirect('/mahasiswa');
}

public function edit($id)
{
    $mahasiswa = Mahasiswa::findOrFail($id);

    return view('mahasiswa.edit', compact('mahasiswa'));
}

public function update(Request $request, $id)
{
    $mahasiswa = Mahasiswa::findOrFail($id);

    $mahasiswa->update($request->all());

    return redirect('/mahasiswa');
}

public function destroy($id)
{
    Mahasiswa::destroy($id);

    return redirect('/mahasiswa');
}
}
