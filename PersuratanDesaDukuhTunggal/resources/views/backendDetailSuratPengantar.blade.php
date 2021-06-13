@extends('backendTemplate')
@section('judul_halaman', 'Pengajuan Surat')
@section('konten')


<h1>DETAIL PENGAJUAN SURAT</h1>
               <!-- <a href="/backendPengajuanSurat">Pengajuan Surat</a> -->
                
                @foreach($suratPengantar as $p)
                        <br>ID Pengajuan Surat      : {{ $p->id }}
                        <br>Jenis Surat Pengantar   : {{ $p->id_jenis_pengantar}}
                        <br>NIK Pemohon             : {{ $p->NIK }}
                        <br>Nama Pemohon            : {{ $p->NIK  }}
                        <br>Status Pengajuan        : {{ $p->status }}
                        <br>Keterangan              : {{ $p->keterangan}}
                        <br>Diajuakan Tanggal       : {{ $p->create_at}}

                        
                        
                                              
                        <form action="/updateStatus/selesai" method="post">
                                {{ csrf_field() }}
                            	<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
                            	<input type="submit" value="Surat Selesai">
                        </form>
                        <form action="/updateStatus/ditolak" method="post">
                                {{ csrf_field() }}
                            	<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
                            	<input type="submit" value="Surat Ditolak"> Alasan Penolakan Surat <input type="text" name="keterangan">
                        </form>
                        <br>
                        <a href="">chat pemohon</a>
                @endforeach
@endsection

