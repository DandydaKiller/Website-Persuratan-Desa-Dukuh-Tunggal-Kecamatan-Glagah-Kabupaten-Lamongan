@extends('layouts.appa')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                {{Auth::user()->name}}
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br/>
                    <a href="/surat-view" class = "btn btn-primary" class="btn  btn-lg btn-block btn-shadow-blue"> Ajukan Surat Pengantar </a>
                    <a href="/list-surat-view" class = "btn btn-primary" class="btn  btn-lg btn-block btn-shadow-blue">List Pengajuan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
