<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\Artikel;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard',[
            'wisata' => Wisata::count(),
            'artikel' => Artikel::count(),
            'admin' => User::where('role','admin')->count()
        ]);
    }
}