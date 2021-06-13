@extends('backendTemplate')
@section('judul_halaman', 'Pengajuan Surat')
@section('konten')

<div class="row">
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>id Pengajuan </th>
            <th>Jenis Surat Pengantar</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Status</th>
            <th>Keterangan</th>
            <th>Tanggal Pengajuan</th>
            <th>Tindakan</th>
           
        </tr>
        @foreach($suratPengantar as $p)
        <tr>
            <td>{{ $p->id}}</td>
            <td>{{ $p->id_jenis_pengantar}}</td>
            <td>{{ $p->NIK}}</td>
            <td>{{ $p->NIK}}</td>
            <td>{{ $p->status}}</td>
            <td>{{ $p->keterangan}}</td>
            <td>{{$p->create_at}}</td>
            <td>
                <form action="/updateStatus/selesai" method="post">
                    {{ csrf_field() }}
                	<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
                	<input type="submit" value="Surat Selesai">
                </form>
                | 
                <a href="/backendPengajuanSurat/detail/{{$p->id}}">Detail Pengajuan</a>
                <a href="/">Chat Pemohon</a>
            </td>
        </tr>
        @endforeach
</div>

@endsection