
@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>Detail Pengajuan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	    <link rel="stylesheet" href="css/font-awesome.min.css"/>
	    <link rel="stylesheet" href="css/owl.carousel.css"/>
	    <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/animate.css"/>
        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
       

    </head>
    <body>
    <div id="app">
    </div>
    <div class="container">
    <div class="row justify-content-md-center">
    <div class="col border" style="padding:50px">
    <hr>

    
   
    @foreach($sewa as $s)
        <a style="color:#33ccff"></a><br>
            <br>
            <img width="1000px" src="{{ url('/file_gambar/'.$s->foto) }}" alt="">
            <h3>{{$s->nama}}<br></h3>
            <hr>
            <br>
            <h2>Di buat pada</h2>

            <p>Alamat : {{$s->alamat}}</p>
            <p>Luas : {{$s->panjang}}m x {{$s->lebar}}m</p>
            <p>Harga : Rp {{$s->harga}}</p>
            <p>{{$s->keterangan}}</p>

            <br>
            <hr>
            <br>
           
            <div class="row justify-content-between">
            <div class="col">
            </div></div>
        
    @endforeach

        
        </div>
        </div>
        </div>

    </body>
</html>
@endsection