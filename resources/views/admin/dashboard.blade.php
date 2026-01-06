@extends('admin.layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Dashboard</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-gray-500">Wisata</h2>
        <p class="text-3xl font-bold">{{ $wisata }}</p>
    </div>
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-gray-500">Artikel</h2>
        <p class="text-3xl font-bold">{{ $artikel }}</p>
    </div>
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-gray-500">Admin</h2>
        <p class="text-3xl font-bold">{{ $admin }}</p>
    </div>
</div>
@endsection
