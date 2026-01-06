<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $wisataPopuler = [
            ['nama' => 'Pantai Parangtritis', 'gambar' => 'parangtritis.jpg'],
            ['nama' => 'Malioboro', 'gambar' => 'malioboro.jpg'],
            ['nama' => 'Candi Prambanan', 'gambar' => 'prambanan.jpg'],
        ];

        $wisataHits = [
            ['nama' => 'HeHa Sky View', 'gambar' => 'heha.jpg'],
            ['nama' => 'Obelix Hills', 'gambar' => 'obelix.jpg'],
            ['nama' => 'Tebing Breksi', 'gambar' => 'breksi.jpg'],
        ];

        return view('home', compact('wisataPopuler', 'wisataHits'));
    }

    public function detail($id)
    {
        $wisata = Wisata::findOrFail($id);
        return view('wisata.detail', compact('wisata'));
    }
}
