<form method="POST" action="/admin/wisata" enctype="multipart/form-data">
@csrf
<input name="nama" placeholder="Nama Wisata">
<textarea name="deskripsi"></textarea>
<input name="lokasi" placeholder="Lokasi">
<input type="file" name="foto">
<button>Simpan</button>
</form>
