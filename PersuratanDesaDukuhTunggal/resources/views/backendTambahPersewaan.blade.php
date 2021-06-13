@extends('backendTemplate')
@section('judul_halaman','Tambah Persewaan')
@section('konten')

<form action="/backendPersewaan/tambah/post">
    {{csrf_field()}}
    <h4>NIK Pemilik</h4> 
    <textarea name="nik" cols="30" rows="1" placeholder = "NIK Pemilik"> </textarea>
    <h4> Alamat Tempat yang disewakan </h4>
    <textarea name="alamat" id="" cols="40" rows="3" placeholder = "alamat tempat"></textarea>
    <h4>Panjang</h4>
    <textarea name="panjang"  cols="5" rows="1"></textarea>
    <H4>Lebar</H4>
    <textarea name="lebar"  cols="5" rows="1"></textarea>
    <H4>Harga</H4>
    <textarea name="harga"  cols="40" rows="1"></textarea>
    <h4>Foto </h4> 
    <input type="file" name="foto"  accept="image/*"/> 
    <br>
    <button type="submit">Tambah</button>
</form>


@endsection