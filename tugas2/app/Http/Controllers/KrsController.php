<?php

namespace App\Http\Controllers;

use App\Models\KRS;
use Illuminate\Http\Request;

class KRSController extends Controller
{
    public function index()
    {
        $krs = KRS::all();

        return view('KRS.index', compact('krs'));
    }

    public function create()
    {
        return view('KRS.create');
    }

    public function store(Request $request)
    {
        KRS::create($request->all());

        return redirect('/krs');
    }

    public function edit($id)
    {
        $krs = KRS::findOrFail($id);

        return view('KRS.edit', compact('krs'));
    }

    public function update(Request $request, $id)
    {
        $krs = KRS::findOrFail($id);

        $krs->update($request->all());

        return redirect('/krs');
    }

    public function destroy($id)
    {
        KRS::destroy($id);

        return redirect('/krs');
    }
}