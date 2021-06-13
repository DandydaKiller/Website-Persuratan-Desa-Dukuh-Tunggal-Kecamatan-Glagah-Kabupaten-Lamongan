@extends('backendTemplate')
@section('judul_halaman', 'Artikel')                
@section('konten')
    <div>
        <a href="/backendArtikelBaru" class="au-btn au-btn-icon au-btn--blue"><h3> 
        <font color = "white"> <i class="zmdi zmdi-plus"></i>  Tulis Artikel </font>  </h3></a>
    </div>
    <br>   
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>id Artikel </th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Kategori</th>
            <th>Status</th>
            <th cols="5">Lihat</th>
            <th cols="5">Edit</th>
            <th cols="5">Hapus</th>
        </tr>
        @foreach($artikel as $p)
        <tr>
            <td>{{ $p->id}}</td>
            <td>{{ $p->judul}}</td>
            <td>{{ $p->isi}}</td>
            <td>{{ $p->kategori}}</td>
            <td>{{ $p->status}}</td>
            <td>
                 <a href="/backendArtikel/lihat/{{$p->id}}"><h5><i class="fa fa-eye"></i> Lihat</h5></a>
            </td>
            <td>
                <a href="/backendArtikel/edit/{{$p->id}}"><h5><i class="fa fa-edit"></i> Edit</h5></a>
            </td>
            <td>
                 <a href="/backendArtikel/hapus/{{$p->id}}"><h5><i class="fa fa-eraser"></i> Hapus</h5></a>
            </td>
        </tr>
        @endforeach
@endsection
                            
            



