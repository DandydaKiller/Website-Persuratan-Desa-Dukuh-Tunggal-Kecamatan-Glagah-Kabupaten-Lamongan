
<!DOCTYPE html>
<!--
Item Name: Elisyam - Web App & Admin Dashboard Template
Version: 1.5
Author: SAEROX

** A license must be purchased in order to legally use this template for your project **
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title>Pengajuan Surat - Dukuh Tunggal</title>
        <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/logo-lamongan.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/logo-lamongan.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo-lamongan.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="assets/vendors/css/base/elisyam-1.5.min.css">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body id="page-top">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="assets/img/logo-lamongan.png" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <div class="page">
            <!-- Begin Header -->
            <header class="header">
                <nav class="navbar fixed-top">         
                    <!-- Begin Search Box-->
                    <!--<div class="search-box">
                        <button class="dismiss"><i class="ion-close-round"></i></button>
                        <form id="searchForm" action="#" role="search">
                            <input type="search" placeholder="Search something ..." class="form-control">
                        </form>
                    </div>-->
                    <!-- End Search Box-->
                    <!-- Begin Topbar -->
                    <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
                        <!-- Begin Logo -->
                        <div class="navbar-header">
                            <a href="/" class="navbar-brand">
                                <div class="brand-image brand-big">
                                    <img src="assets/img/logo-dukuhtunggal.png" alt="logo" class="logo-big">
                                </div>
                                <div class="brand-image brand-small">
                                    <img src="assets/img/logo-lamongan.png" alt="logo" class="logo-small">
                                </div>
                            </a>
                            <!-- Toggle Button -->
                            <a id="toggle-btn" href="#" class="menu-btn active">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                            <!-- End Toggle -->
                        </div>
                        <!-- End Logo -->
                        <!-- Begin Navbar Menu -->
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                            <!-- Search -->
                            <!--<li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="la la-search"></i></a></li>
                             End Search -->
                            <!-- Begin Notifications -->
                            <!--<li class="nav-item dropdown"><a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="la la-bell animated infinite swing"></i><span class="badge-pulse"></span></a>
                                <ul aria-labelledby="notifications" class="dropdown-menu notification">
                                    <li>
                                        <div class="notifications-header">
                                            <div class="title">Notifications (4)</div>
                                            <div class="notifications-overlay"></div>
                                            <img src="assets/img/notifications/01.jpg" alt="..." class="img-fluid">
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="message-icon">
                                                <i class="la la-user"></i>
                                            </div>
                                            <div class="message-body">
                                                <div class="message-body-heading">
                                                    New user registered
                                                </div>
                                                <span class="date">2 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="message-icon">
                                                <i class="la la-calendar-check-o"></i>
                                            </div>
                                            <div class="message-body">
                                                <div class="message-body-heading">
                                                    New event added
                                                </div>
                                                <span class="date">7 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="message-icon">
                                                <i class="la la-history"></i>
                                            </div>
                                            <div class="message-body">
                                                <div class="message-body-heading">
                                                    Server rebooted
                                                </div>
                                                <span class="date">7 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="message-icon">
                                                <i class="la la-twitter"></i>
                                            </div>
                                            <div class="message-body">
                                                <div class="message-body-heading">
                                                    You have 3 new followers
                                                </div>
                                                <span class="date">10 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">View All Notifications</a>
                                    </li>
                                </ul>
                            </li>-->
                            <!-- End Notifications -->
                            <!-- User -->
                                @if(Auth::user()->Foto != null) 
                                <li class="nav-item dropdown"><a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img src="{{ url('/profile_pict/'.Auth::User()->Foto) }}" alt="..." class="avatar rounded-circle"></a>

                                @else
                                <li class="nav-item dropdown"><a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img src="profile_pict/no_profile.png" alt="..." class="avatar rounded-circle"></a>
                                @endif
                                <ul aria-labelledby="user" class="user-size dropdown-menu">
                                    <li class="welcome">
                                        @if(Auth::user()->Foto != null) 
                                                <div class="chart-note ml-0">
                                                    <img width="200px" src="{{ url('/profile_pict/'.Auth::User()->Foto) }}" alt="..." class="rounded-circle">
                                                </div>

                                         @else
                                                <div class="chart-note ml-0">
                                                    <img width="200px" src="profile_pict/no_profile.png" alt="..." class="rounded-circle" >
                                                </div>
                                        @endif
                                    </li>
                                    <li>
                                        <a  class="dropdown-item">
                                        <div class="text-center"> 
                                            {{Auth::user()->name}}
                                        </div>
                                        </a>
                                    </li>
                                    <li class="separator"></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item no-padding-top"> 
                                             <i class="ion-log-out"></i><span>Log Out</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </li>
                                </ul>
                            </li>
                            <!-- End User -->
                            <!-- Begin Quick Actions -->
                            <!--<li class="nav-item"><a href="#off-canvas" class="open-sidebar"><i class="la la-ellipsis-h"></i></a></li>-->
                            <!-- End Quick Actions -->
                        </ul>
                        <!-- End Navbar Menu -->
                    </div>
                    <!-- End Topbar -->
                </nav>
            </header>
            <!-- End Header -->
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <div class="default-sidebar">
                    <!-- Begin Side Navbar -->
                    <nav class="side-navbar box-scroll sidebar-scroll">
                        <!-- Begin Main Navigation -->
                        <ul class="list-unstyled">
                            <li ><a href="/home"><i class="la la-home"></i><span>Dashboard</span></a></li>
                            <li><a href="/edit-profile" aria-expanded="false" ><i class="la la-user"></i><span>Edit Profil</span></a></li>
                            <li class="active"><a href="/surat-view"><i class="la la-file-text"></i><span>Ajukan Surat Pengantar</span></a></li>
                            <li><a href="/list-surat-view"><i class="la la-list-alt"></i><span>Status Pengajuan</span></a></li>
                            <li><a href="/cari-penduduk"><i class= "ion-search"></i><span>Cari Penduduk</span></a></li>


                        </ul>
                        
                        <!-- End Main Navigation -->
                    </nav>
                    <!-- End Side Navbar -->
                </div>
                <!-- End Left Sidebar -->
                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
                                
	                                <div>
			                            
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row">
                                    <!-- Begin Default -->
                                    <span class="contact1-form-title">

                    </span>
                    </div>
                    <!--<button onclick="myFunction()">Click Me</button>-->

                    <!--<div id="myDIV">
                        This is my DIV element.
                    </div>-->
                    <script>
                        function yesnoCheck(that) {
                            if (that.value == "5") {
                                document.getElementById("kk").style.display = "block";
                                document.getElementById("bukuNikah").style.display = "block";
                                document.getElementById("anggotaKK").style.display = "none";
                                document.getElementById("ktp").style.display = "none";
                                document.getElementById("pemindahanKK").style.display = "none";

                                document.getElementById("1/3").style.display = "none";
                                document.getElementById("2/3").style.display = "block";
                                document.getElementById("step1-active").style.display = "none";
                                document.getElementById("step2-active").style.display = "block";

                                document.getElementById("lengkapi-jenis").style.display = "block";
                                document.getElementById("pilih-jenis").style.display = "none";

                                document.getElementById("submit").style.display = "block";

                            }
                            else if(that.value == "3"){
                                document.getElementById("kk").style.display = "block";
                                document.getElementById("bukuNikah").style.display = "none";
                                document.getElementById("anggotaKK").style.display = "block";
                                document.getElementById("ktp").style.display = "none";
                                document.getElementById("pemindahanKK").style.display = "none";

                                document.getElementById("1/3").style.display = "none";
                                document.getElementById("2/3").style.display = "block";
                                document.getElementById("step1-active").style.display = "none";
                                document.getElementById("step2-active").style.display = "block";

                                document.getElementById("lengkapi-jenis").style.display = "block";
                                document.getElementById("pilih-jenis").style.display = "none";

                                document.getElementById("submit").style.display = "block";
                            }
                                else if (that.value == "6"){
                                document.getElementById("ktp").style.display = "block";
                                document.getElementById("bukuNikah").style.display = "none";
                                document.getElementById("kk").style.display = "block";
                                document.getElementById("anggotaKK").style.display = "none";
                                document.getElementById("pemindahanKK").style.display = "none";

                                document.getElementById("1/3").style.display = "none";
                                document.getElementById("2/3").style.display = "block";
                                document.getElementById("step1-active").style.display = "none";
                                document.getElementById("step2-active").style.display = "block";
                                
                                document.getElementById("lengkapi-jenis").style.display = "block";
                                document.getElementById("pilih-jenis").style.display = "none";

                                document.getElementById("submit").style.display = "block";

                            }else if (that.value == "7"){
                                document.getElementById("pemindahanKK").style.display = "block";
                                document.getElementById("ktp").style.display = "none";
                                document.getElementById("bukuNikah").style.display = "none";
                                document.getElementById("kk").style.display = "block";
                                document.getElementById("anggotaKK").style.display = "none";

                                document.getElementById("1/3").style.display = "none";
                                document.getElementById("2/3").style.display = "block";
                                document.getElementById("step1-active").style.display = "none";
                                document.getElementById("step2-active").style.display = "block";

                                document.getElementById("lengkapi-jenis").style.display = "block";
                                document.getElementById("pilih-jenis").style.display = "none";

                                document.getElementById("submit").style.display = "block";

                            }else if(that.value == "0"){
                                document.getElementById("bukuNikah").style.display = "none";
                                document.getElementById("kk").style.display = "none";
                                document.getElementById("anggotaKK").style.display = "none";
                                document.getElementById("ktp").style.display = "none";
                                document.getElementById("pemindahanKK").style.display = "none";

                                document.getElementById("1/3").style.display = "block";
                                document.getElementById("2/3").style.display = "none";
                                document.getElementById("step1-active").style.display = "block";
                                document.getElementById("step2-active").style.display = "none";

                                document.getElementById("lengkapi-jenis").style.display = "none";
                                document.getElementById("pilih-jenis").style.display = "block";

                                document.getElementById("submit").style.display = "none";
                            }
                             else  {
                                document.getElementById("bukuNikah").style.display = "none";
                                document.getElementById("kk").style.display = "block";
                                document.getElementById("anggotaKK").style.display = "none";
                                document.getElementById("ktp").style.display = "none";
                                document.getElementById("pemindahanKK").style.display = "none";

                                document.getElementById("1/3").style.display = "none";
                                document.getElementById("2/3").style.display = "block";
                                document.getElementById("step1-active").style.display = "none";
                                document.getElementById("step2-active").style.display = "block";

                                document.getElementById("lengkapi-jenis").style.display = "block";
                                document.getElementById("pilih-jenis").style.display = "none";

                                document.getElementById("submit").style.display = "block";

                            }
                        }
                        </script>
                   
                   <div class="step-container">
                      <div class="step-wizard">
                                                            <div class="progress" id = '1/3' style="display: ">
                                                                <div class="progressbar"  style="width: 33.3333%;"></div>
                                                            </div>
                                                            <div class="progress" id = '2/3' style="display: none;">
                                                                <div class="progressbar"  style="width: 66.6666%;"></div>
                                                            </div>

                                                            <ul id = 'step2-active' style="display: none;">
                                                                <li>
                                                                    <a href="#tab1" data-toggle="tab" class="active show">
                                                                        <span class="step">1</span>
                                                                        <span class="title">Pilih Jenis Surat Pengantar</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#tab2" data-toggle="tab" class="active show">
                                                                        <span class="step">2</span>
                                                                        <span class="title">Lengkapi Berkas/Data</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#tab3" data-toggle="tab">
                                                                        <span class="step">3</span>
                                                                        <span class="title">Submit</span>
                                                                    </a>
                                                                </li>
                                                            </ul>

                                                            <ul id = 'step1-active' style="display: ">
                                                                <li>
                                                                    <a href="#tab1" data-toggle="tab" class="active show">
                                                                        <span class="step">1</span>
                                                                        <span class="title">Pilih Jenis Surat Pengantar</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#tab2" data-toggle="tab" >
                                                                        <span class="step">2</span>
                                                                        <span class="title">Lengkapi Berkas/Data</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#tab3" data-toggle="tab">
                                                                        <span class="step">3</span>
                                                                        <span class="title">Submit</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                        <h2 class="page-header-title" id = 'pilih-jenis' style="display: ">Pilih Jenis Surat Pengantar</h2>
                        <h2 class="page-header-title" id = 'lengkapi-jenis' style="display: none;">Lengkapi Data/Berkas dengan Benar!</h2>
                        <br/>
                        <br/>
                        <form method="POST" action="/store-surat" enctype="multipart/form-data">
                        {{ csrf_field() }}
            

                        <select id="jenis" type="text" onchange="yesnoCheck(this);" class="form-control" name ="jenis">
                        <option value="0" >-- Pilih Surat Pengantar --</option>

                        <option value="1" name ="jenis">Pengantar Pembuatan Surat Nikah</option>

                        <option value="2" name ="jenis"> Pengantar Pembuatan Surat SKCK</option>

                        <option value="3" name ="jenis"> Pengantar Penambahan Anggota KK</option>

                        <option value="4" name ="jenis">Pengantar Pembuatan Surat Pindah </option>

                        <option value="5" name ="jenis"> Pengantar Pembuatan Akta Kelahiran </option>

                        <option value="6" name ="jenis"> Pengantar Pembuatan KTP</option>

                        <option value="7" name ="jenis"> Pengantar Pemindahan KK dari Daerah Asal</option>

                        
                      </select> 
                     
                        @error('jenis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }} (Pilih Salah satu jenis Surat Pengantar)</strong>
                                    </span>
                        @enderror
                        <div id="kk" style="display: none;" >
                        <br/>

                        <br/>
                            <tr>
                                <label for="file"></label>
						        <b>Upload File/Foto Kartu Keluarga atau KTP</b><br/>
						        <input type="file"  name="file1" class = "btn btn-primary" class="form-control @error('file') is-invalid @enderror">
                            </tr>
                          <!--  @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }} (Upload berkas yang di perlukan)</strong>
                                    </span>
                            @enderror-->
                        </div>
                        <div id="bukuNikah" style="display: none;">
                        <br/>
                            <tr>
						        <b>Upload File/Foto Buku Nikah</b><br/>
						        <input type="file" name="file2" class = "btn btn-primary" class="form-control @error('file2') is-invalid @enderror">
                            </tr>
                           <!-- @error('file2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }} (Upload berkas yang di perlukan)</strong>
                                    </span>
                            @enderror-->
                        </div>

                        
                        <div id="pemindahanKK" style="display: none;">
                            <br/>

                            <tr>
                                <b>Masukkan Daerah Asal</b><br/>
                                <input id="tambahAnggota"  type="text" class="form-control @error('tambahanggotaKK') is-invalid @enderror" name="tambahanggotaKK" value="{{ old('kelurahan') }}" >
                                <b>Keterangan Tambahan</b><br/>
                                <input id="tambahAnggota"  rows="4" cols="50" type="text" class="form-control @error('tambahanggotaKK') is-invalid @enderror" name="tambahanggotaKK" value="{{ old('kelurahan') }}" >
                            </tr>
                        </div>
                        
                        <div id="anggotaKK" style="display: none;">
                            <br/>
                            <tr>
						        <b>(KK Saat Ini)</b><br/>
                            </tr>
                            <tr>
                                <b>Data Anggota Keluarga Yang akan Di tambahkan Pada KK</b><br/><br/>
                                <b>Nama</b><br/>
                                <input id="nama_kk"  type="text" class="form-control @error('nama_kk') is-invalid @enderror" name="nama_kk" value="{{ old('nama_kk') }}" >
                                <b>NIK</b><br/>
                                <input id="nik_kk"  type="number" class="form-control @error('nik_kk') is-invalid @enderror" name="nik_kk" value="{{ old('nik_kk') }}" >
                                <b>Tempat Lahir</b><br/>
                                <input id="tempat_kk"  type="text" class="form-control @error('tempat_kk') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir') }}" >
                                <b>Tanggal Lahir</b><br/>
                                <div class="single-tab-select-box">
                                <div class="travel-check-icon">
                                    <input type="date"  format= 'yyyy-mm-dd' id="datepicker" name="tanggal" class="form-control"  placeholder="*tekan panah kecil di sebelah kanan untuk memilih tanggal"><br>
                                </div>
                                </div>
                                <b>Alamat</b><br/>
                                <input id="alamat_kk" rows="4" cols="50" type="text" class="form-control @error('alamat_kk') is-invalid @enderror" name="alamat_kk" value="{{ old('almat_kk') }}" >
                                <b>Jenis Kelamin</b><br/>
                                <select id="jenis_kk" type="text" class="form-control" name ="jenis_kk" class="form-control @error('jenis_kk') is-invalid @enderror">

                                    <option value="Laki - Laki" name ="jenis_kk">Laki - Laki</option>

                                    <option value="Perempuan" name ="jenis_kk">Perempuan</option>

                                </select> 
                                <b>Pendidikan</b><br/>
                                <input id="pendidikan_kk" rows="4" cols="50" type="text" class="form-control @error('pendidikan_kk') is-invalid @enderror" name="pendidikan_kk" value="{{ old('pendidikan_kk') }}" >
                                </select> 
                                <b>Nama Orang Tua/Wali</b><br/>
                                <input id="namaortu_kk" rows="4" cols="50" type="text" class="form-control @error('pendidikan_kk') is-invalid @enderror" name="namaortu_kk" value="{{ old('namaortu_kk') }}" >
                                <b>Keterangan Tambahan</b><br/>
                                <input id="keterangan_kk" rows="4" cols="50" type="text" class="form-control @error('keterangan_kk') is-invalid @enderror" name="keterangan_kk" value="{{ old('keterangan_kk') }}" >

                            </tr>
                        </div>
                        
                        <div id="ktp" style="display: none;">
                            <tr>
                                <b>Data Untuk Pembuatan KTP</b><br/><br/>
                                <b>Nama</b><br/>
                                <input id="nama_kk"  type="text" class="form-control @error('nama_kk') is-invalid @enderror" name="nama_kk" value="{{ old('nama_kk') }}" >
                                <b>NIK</b><br/>
                                <input id="nik_kk"  type="number" class="form-control @error('nik_kk') is-invalid @enderror" name="nik_kk" value="{{ old('nik_kk') }}" >
                                <b>Tempat Lahir</b><br/>
                                <input id="tempat_kk"  type="text" class="form-control @error('tempat_kk') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir') }}" >
                                <b>Tanggal Lahir</b><br/>
                                <div class="single-tab-select-box">
                                <div class="travel-check-icon">
                                    <input type="date"  format= 'yyyy-mm-dd' id="datepicker" name="tanggal" class="form-control"  placeholder="*tekan panah kecil di sebelah kanan untuk memilih tanggal"><br>
                                </div>
                                </div>
                                <b>Alamat</b><br/>
                                <input id="alamat_kk" rows="4" cols="50" type="text" class="form-control @error('alamat_kk') is-invalid @enderror" name="alamat_kk" value="{{ old('almat_kk') }}" >
                                <b>Jenis Kelamin</b><br/>
                                <select id="jenis_kk" type="text" class="form-control" name ="jenis_kk" class="form-control @error('jenis_kk') is-invalid @enderror">

                                    <option value="Laki - Laki" name ="jenis_kk">Laki - Laki</option>

                                    <option value="Perempuan" name ="jenis_kk">Perempuan</option>

                                </select> 
                                <b>Pendidikan</b><br/>
                                <input id="pendidikan_kk" rows="4" cols="50" type="text" class="form-control @error('pendidikan_kk') is-invalid @enderror" name="pendidikan_kk" value="{{ old('pendidikan_kk') }}" >
                                </select> 
                                <b>Nama Orang Tua/Wali</b><br/>
                                <input id="namaortu_kk" rows="4" cols="50" type="text" class="form-control @error('pendidikan_kk') is-invalid @enderror" name="namaortu_kk" value="{{ old('namaortu_kk') }}" >
                                <b>Keterangan Tambahan</b><br/>
                                <input id="keterangan_kk" rows="4" cols="50" type="text" class="form-control @error('keterangan_kk') is-invalid @enderror" name="keterangan_kk" value="{{ old('keterangan_kk') }}" >

                            </tr>
                        </div>

                        <br/>
                        <br/>
                        <br/>
                        
                        <button type="submit" class="btn btn-primary" id='submit' style="display: none;" value="submit">Submit</button>
                        </div>
                        </div>
                        </div>
                        @csrf
                        </form>
                                    <!-- End Default -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Container -->
                    <!-- Begin Page Footer-->
                    
                    <!-- End Page Footer -->
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                    <!-- Offcanvas Sidebar -->
                    <div class="off-sidebar from-right">
                        <div class="off-sidebar-container">
                            <header class="off-sidebar-header">
                                
                                <a href="#off-canvas" class="off-sidebar-close"></a>
                            </header>
                            <div class="off-sidebar-content offcanvas-scroll auto-scroll">
                                <div class="tab-content">
                                    <!-- Begin Messenger -->
                                    
                                    </div>
                                    <!-- End Messenger -->
                                    <!-- Begin Today -->
                                    <div role="tabpanel" class="tab-pane fade" id="today" aria-labelledby="today-tab">
                                        <!-- Begin Today Stats -->
                                        <div class="sidebar-heading pt-0">Today</div>
                                        <div class="today-stats mt-3 mb-3">
                                            <div class="row">
                                                <div class="col-4 text-center">
                                                    <i class="la la-users"></i>
                                                    <div class="counter">264</div>
                                                    <div class="heading">Clients</div>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <i class="la la-cart-arrow-down"></i>
                                                    <div class="counter">360</div>
                                                    <div class="heading">Sales</div>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <i class="la la-money"></i>
                                                    <div class="counter">$ 4,565</div>
                                                    <div class="heading">Earnings</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Today Stats -->
                                        <!-- Begin Friends -->
                                        
                                        <!-- End Friends -->
                                        <!-- Begin Settings -->
                                        <div class="sidebar-heading">Settings</div>
                                        <div class="quick-settings mt-3 mb-3">
                                            <ul class="list-group w-100">
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-body align-self-center">
                                                            <p class="text-dark">Notifications Email</p>
                                                        </div>
                                                        <div class="media-right align-self-center">
                                                            <label>
                                                                <input class="toggle-checkbox" type="checkbox" checked>
                                                                <span>
                                                                    <span></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-body align-self-center">
                                                            <p class="text-dark">Notifications Sound</p>
                                                        </div>
                                                        <div class="media-right align-self-center">
                                                            <label>
                                                                <input class="toggle-checkbox" type="checkbox">
                                                                <span>
                                                                    <span></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-body align-self-center">
                                                            <p class="text-dark">Chat Message Sound</p>
                                                        </div>
                                                        <div class="media-right align-self-center">
                                                            <label>
                                                                <input class="toggle-checkbox" type="checkbox" checked>
                                                                <span>
                                                                    <span></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End Settings -->
                                        <script>
		                                $(function () {
		                                    $('#datepicker').datepicker({
		                                    autoclose: true
                                            format: 'yyyy-mm-dd'
	                                        });
	                                    });
                                        </script>
                                    </div>
                                    <!-- End Today -->
                                </div>
                            </div>
                            <!-- End Offcanvas Container -->
                        </div>
                        <!-- End Offsidebar Container -->
                    </div>
                    <!-- End Offcanvas Sidebar -->
                </div>
            </div>
            <!-- End Page Content -->
        </div>
        <!-- Begin Vendor Js -->
        <script src="assets/vendors/js/base/jquery.min.js"></script>
        <script src="assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="assets/vendors/js/nicescroll/nicescroll.min.js"></script>
        <script src="assets/vendors/js/app/app.min.js"></script>
        <!-- End Page Vendor Js -->
    </body>
</html>









