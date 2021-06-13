@extends('backendTemplate')
@section('judul_artikel','Detail User')
@section('konten')

<div class="row">

    <table class="table table-striped table-bordered table-hover">
         @foreach($user as $p)
        <tr>
            <th>id</th>
            <td>{{$p->id}}</td>
            <tr></tr>
            <th>NIK</th>
            <td>{{$p->nik}}</td>
            <tr></tr>
            <th>Nama</th>
            <td>{{$p->name}}</td>
            <tr></tr>
            <th>Tempat Lahir</th>
            <td>{{$p->tempat_lahir}}</td>
            <tr></tr>
            <th>Tanggal Lahir</th>
            <td>{{$p->tanggal_lahir}}</td>
            <tr></tr>
            <th>Alamat</th>
            <td>{{$p->alamat}}</td>
            <tr></tr>
            <th>Kecamatan</th>
            <td>{{$p->kecamatan}}</td>
            <tr></tr>
            <th>Agama</th>
            <td>{{$p->agama}}</td>
            <tr></tr>
            <th>Pekerjaan</th>
            <td>{{$p->pekerjaan}}</td>
            <tr></tr>
            <th>Status</th>
            <td>{{$p->status_perkawinan}}</td>
            <tr></tr>
            <th>Email</th>
            <td>{{$p->email}}</td>
            <tr></tr>
            <th>No HP</th>
            <td>{{$p->nik}}</td>
            <tr></tr>
            <th>Dibuat Tanggal</th>
            <td>{{$p->created_at}}</td>
            <tr></tr>
            <th>Diperbarui Tanggal</th>
            <td>{{$p->updated_at}}</td>
            <tr></tr>
        </tr>
        @endforeach
</div>
@endsection