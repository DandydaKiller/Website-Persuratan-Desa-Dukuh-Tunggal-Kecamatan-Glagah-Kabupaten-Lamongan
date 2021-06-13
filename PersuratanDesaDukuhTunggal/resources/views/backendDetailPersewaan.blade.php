@extends('backendTemplate')
@section('judul_halaman','Detail Persewaan')
@section('konten')
 
    <div class = "row">
         <table class="table table-striped table-bordered table-hover">
         @foreach($persewaan as $p)
        
        <tr>
            <th>id</th>
            <td>{{$p->id}}</td>
            <tr></tr>
            
            <th>NIK</th>
            <td>{{$p->nik}}</td>
            <tr></tr>

            <th>Alamat</th>
            <td>{{$p->alamat}}</td>
            <tr></tr>

            <th>Panjang</th>
            <td>{{$p->panjang}}</td>
            <tr></tr>

            <th>Luas</th>
            <td>{{$p->luas}}</td>
            <tr></tr>

            <th>Harga</th>
            <td>{{$p->harga}}</td>
            <tr></tr>

            <th>Nomor Telepone</th>
            <td>no telp</td>
            <tr></tr>

            <th>Foto</th>
            <td>{{$p->foto}}</td>
            <tr></tr>
        </tr>
        @endforeach
        </table>
    
    </div>


@endsection