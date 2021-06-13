@extends('backendTemplate')
@section('judul_halaman','Daftar Persewaan')
@section('konten')
    <div >
        <a href="/backendPersewaan/tambah" class="au-btn au-btn-icon au-btn--blue"><h3> 
        <font color = "white"> <i class="zmdi zmdi-plus"></i>  Tambah Persewaan </font>  </h3></a>
    </div>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>id</th>
            <th>Alamat</th>
            <th>Panjang</th>
            <th>Lebar</th>
            <th>Luas</th>
            <th>harga</th>
            <th>NIK</th>
            <th>NO HP</th>
            <th>Lihat Foto</th>
            <th>Hapus</th>
        </tr>
        @foreach($persewaan as $p)
        <tr>
            <td>{{ $p->id}}</td>
            <td>{{ $p->alamat}}</td>
            <td>{{ $p->panjang}}</td>
            <td>{{ $p->lebar}}</td>
            <td>{{ $p->luas}}</td>
            <td>{{ $p->harga}}</td>
            <td>{{ $p->nik}}</td>
            <td>nomor hp</td>
            <td>
                 <a href="/backendPersewaan/detail/{{$p->id}}"><h5><i class="fa fa-eye"></i> Lihat</h5></a>
            </td>
            <td>
                <a href="/backendPersewaan/hapus/{{$p->id}}"><h5><i class="fa fa-eraser"></i> Hapus</h5></a>
            </td>
              
        </tr>
        @endforeach
</div>

@endsection