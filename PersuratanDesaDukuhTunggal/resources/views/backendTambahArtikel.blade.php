@extends('backendTemplate')
@section('judul_halaman','Tulis Artikel')
@section('konten')

<form action="/backendArtikel/post" method="post">
    {{ csrf_field() }}
    <h4>Judul :</h4>
    <textarea name="judul"  cols="150" rows="3" placeholder='judul artikel' ></textarea>
    <br>
    <h4>kategori :</h4>
    <select name ='kategori'>
        <option value="Pemerintah Desa">Pemerintah Desa</option>
        <option value="Masyarakat">Masyarakat</option>
    </select>
    <br>
    <h4>Isi :</h4>
    <textarea name="isi"  cols="150" rows="30" placeholder='isi artikel'></textarea>
    <br>
    <button type="submit" name="status" value="Diterbitkan"> Terbitkan </button>
    <button type="submit" name="status" value="Draft">Simpan</button>
</form>

@endsection