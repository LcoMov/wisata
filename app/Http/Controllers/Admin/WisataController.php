<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wisata;

class WisataController extends Controller
{
    public function index()
    {
        $wisata = Wisata::latest()->get();
        return view('admin.wisata.index', compact('wisata'));
    }

    public function create()
    {
        return view('admin.wisata.create');
    }

    public function store(Request $request)
    {
        $foto = $request->file('foto')->store('wisata', 'public');

        Wisata::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'foto' => $foto,
        ]);

        return redirect('/admin/wisata')->with('success','Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $wisata = Wisata::findOrFail($id);
        return view('admin.wisata.edit', compact('wisata'));
    }

    public function update(Request $request, $id)
    {
        $wisata = Wisata::findOrFail($id);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('wisata', 'public');
            $wisata->foto = $foto;
        }

        $wisata->update($request->only('nama','deskripsi','lokasi'));

        return redirect('/admin/wisata')->with('success','Data berhasil diupdate');
    }

    public function destroy($id)
    {
        Wisata::destroy($id);
        return back()->with('success','Data berhasil dihapus');
    }
}

