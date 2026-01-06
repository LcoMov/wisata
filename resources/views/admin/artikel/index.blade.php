@extends('admin.layouts.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Artikel</h1>

<a href="/admin/artikel/create"
class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">
+ Tambah Artikel
</a>

<table class="w-full bg-white rounded shadow">
<tr class="bg-gray-200">
<th class="p-3">Thumbnail</th>
<th>Judul</th>
<th>Aksi</th>
</tr>

@foreach($artikel as $a)
<tr class="border-t">
<td class="p-3">
<img src="/storage/{{ $a->thumbnail }}" class="h-16">
</td>
<td>{{ $a->judul }}</td>
<td>
<a href="/admin/artikel/{{ $a->id }}/edit" class="text-blue-500">Edit</a>

<form method="POST" action="/admin/artikel/{{ $a->id }}" class="inline">
@csrf
@method('DELETE')
<button class="text-red-500 ml-2">Hapus</button>
</form>
</td>
</tr>
@endforeach
</table>
@endsection
