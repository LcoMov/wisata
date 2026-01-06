@extends('admin.layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Edit Wisata</h1>

<div class="bg-white rounded-xl shadow p-6 max-w-3xl">

<form method="POST" action="/admin/wisata/{{ $wisata->id }}" enctype="multipart/form-data" class="space-y-5">
@csrf

<div>
    <label class="block text-sm font-medium mb-1">Nama Wisata</label>
    <input type="text" name="nama" value="{{ $wisata->nama }}"
        class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-primary" required>
</div>

<div>
    <label class="block text-sm font-medium mb-1">Deskripsi</label>
    <textarea name="deskripsi" rows="4"
        class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-primary"
        required>{{ $wisata->deskripsi }}</textarea>
</div>

<div>
    <label class="block text-sm font-medium mb-1">Lokasi</label>
    <input type="text" name="lokasi" value="{{ $wisata->lokasi }}"
        class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-primary" required>
</div>

<div>
    <label class="block text-sm font-medium mb-1">Foto Wisata (Opsional)</label>
    <input type="file" name="foto"
        class="w-full border rounded-lg px-4 py-2 bg-gray-50">
</div>

@if($wisata->foto)
<img src="/storage/{{ $wisata->foto }}" class="h-32 rounded-lg mt-2">
@endif

<div class="flex justify-end gap-3 pt-4">
    <a href="/admin/wisata"
       class="px-4 py-2 rounded-lg border hover:bg-gray-100">Batal</a>

    <button type="submit"
        class="bg-primary text-white px-6 py-2 rounded-lg smooth">
        Update
    </button>
</div>

</form>
</div>
@endsection
