@extends('backendTemplate')
@section('judul_halaman','Edit Artikel')
@section('konten')

    @foreach($editArtikel as $p)
        <form action="/backendArtikel/artikelEdit" method="post">
            {{ csrf_field()}}
            <input type="hidden" name="id" value="{{ $p->id}}">
            <h4>Judul :</h4>
            <br>
            <textarea name="judul"  cols="150" rows="3"  >{{$p->judul}}</textarea>
            <h4>Kategori : {{$p->kategori}}</h4>
            <select name ='kategori'>
                <option value='{{$p->kategori}}'>------</option>
                <option value='Pemerintah Desa'>Pemerintah Desa</option>
                <option value='Masyarakt'>Masyarakat</option>
            </select>
            <h4>Isi :</h4>
            
            <textarea name="isi"  cols="150" rows="50" >{{$p->isi}}</textarea>
            <br>
            <button type="submit" name="status" value="Diterbitkan">Terbitkan</button>
            <button type="submit" name="status" value="Draft">Simpan</button>
        </form>
    @endforeach
@endsection