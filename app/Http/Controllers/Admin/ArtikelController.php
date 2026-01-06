<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::latest()->get();
        return view('admin.artikel.index', compact('artikel'));
    }

    public function create()
    {
        return view('admin.artikel.create');
    }

    public function store(Request $request)
    {
        $thumbnail = $request->file('thumbnail')->store('artikel', 'public');

        Artikel::create([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'thumbnail' => $thumbnail,
        ]);

        return redirect('/admin/artikel')->with('success','Artikel berhasil ditambahkan');
    }

    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('admin.artikel.edit', compact('artikel'));
    }

    public function update(Request $request, $id)
    {
        $artikel = Artikel::findOrFail($id);

        if ($request->hasFile('thumbnail')) {
            $artikel->thumbnail = $request->file('thumbnail')->store('artikel','public');
        }

        $artikel->update([
            'judul' => $request->judul,
            'konten' => $request->konten
        ]);

        return redirect('/admin/artikel')->with('success','Artikel berhasil diupdate');
    }

    public function destroy($id)
    {
        Artikel::destroy($id);
        return back()->with('success','Artikel berhasil dihapus');
    }
}
