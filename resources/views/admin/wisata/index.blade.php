@extends('admin.layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Data Wisata</h1>

<a href="/admin/wisata/create"
class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">
+ Tambah Wisata
</a>

<table class="w-full bg-white rounded shadow text-sm">
<tr class="bg-gray-200">
<th class="p-3">Foto</th>
<th>Nama</th>
<th>Lokasi</th>
<th>Aksi</th>
</tr>

@foreach($wisata as $w)
<tr class="border-t">
<td class="p-3">
<img src="/storage/{{ $w->foto }}" class="h-16 rounded">
</td>
<td>{{ $w->nama }}</td>
<td>{{ $w->lokasi }}</td>
<td>
<a href="/admin/wisata/{{ $w->id }}/edit" class="text-blue-500">Edit</a>
<form method="POST" action="/admin/wisata/{{ $w->id }}" class="inline">
@csrf @method('DELETE')
<button class="text-red-500 ml-2">Hapus</button>
</form>
</td>
</tr>
@endforeach
</table>
@endsection
