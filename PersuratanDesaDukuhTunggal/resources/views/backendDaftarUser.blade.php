@extends('backendTemplate')
@section('judul_halaman','Data User Penduduk')
@section('konten')

<div class="row">

    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>id</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Nomor HP</th>
            <th>Lihat Detail</th>
            <th>Hapus</th>
        </tr>
        @foreach($user as $p)
        <tr>
            <td>{{ $p->id}}</td>
            <td>{{ $p->nik}}</td>
            <td>{{ $p->name}}</td>
            <td>{{ $p->email}}</td>
            <td>{{ $p->email}}</td>
            <td>
                 <a href="/backendUser/detail/{{$p->id}}"><h5><i class="fa fa-eye"></i> Lihat</h5></a>
            </td>
            <td>
                <a href="/backendUser/hapus/{{$p->id}}"><h5><i class="fa fa-eraser"></i> Hapus</h5></a>
            </td>
              
        </tr>
        @endforeach
</div>

@endsection