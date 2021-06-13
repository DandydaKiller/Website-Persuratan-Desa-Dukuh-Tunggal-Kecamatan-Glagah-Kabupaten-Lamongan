<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Desa Dukuh Tunggal</title>

    <!-- Favicon -->
    <link rel="icon" href="logo/Lambang_Kabupaten_Lamongan.png">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="loader">
        <img  width="100px" src="logo/Lambang_Kabupaten_Lamongan.png" alt="Image placeholder" class="img-fluid">
            <span class="inner1"></span>
            <span class="inner2"></span>
            <span class="inner3"></span>
        </div>
    </div>

   
    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="/"><tr><img  width="80px" src="logo/Lambang_Kabupaten_Lamongan.png" alt="Image placeholder" class="img-fluid"></tr> <tr> <!--Dukuh Tunggal--></tr></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fancyNav" aria-controls="fancyNav" aria-expanded="false" aria-label="Toggle navigation"><span class="ti-menu"></span></button>
                        <div class="collapse navbar-collapse" id="fancyNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" class="btn  btn-lg btn-block btn-shadow-blue" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Informasi</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="">Informasi Pembayaran</a>
                                        <a class="dropdown-item" href="">Informasi Pengajuan Surat</a>
                                        <a class="dropdown-item" href="/persewaan">Informasi Persewaan</a>
                                        <a class="dropdown-item" href="/cari-penduduk">Informasi Data Penduduk</a>


                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" class="btn  btn-lg btn-block btn-shadow-blue" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pengajuan Surat Pengantar</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/surat-view">Pengajuan Surat Pengantar</a>
                                        <a class="dropdown-item" href="/list-surat-view">Status Pengajuan Surat Pengantar</a>
                                    </div>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="#artikel">Potensi Desa</a>
                                </li>
                            <!-- Search & Shop Btn Area -->
                           <!-- <div class="fancy-search-and-shop-area">
                                <a id="search-btn" href="#"><i class="icon_search" aria-hidden="true"></i></a>-->
                                <!--<a id="shop-btn" href="#"><i class="icon_bag_alt" aria-hidden="true"></i></a>-->
                                @if (Route::has('login'))
                						
                                @auth
                                <li class="nav-item">
                                    @if(Auth::User()->Foto != null)
                                     <img width="50px" src="{{ url('/profile_pict/'.Auth::User()->Foto) }}" alt="">
                                    @else
                                    <img width="50px" src="profile_pict/no_profile.png" alt="">
                                    @endif
                                </li>
                                <li class="nav-item dropdown">
                                 
                                   
                                    <ul>
                                    <a class="nav-link dropdown-toggle"  class="btn fancy-btn" class="btn  btn-lg btn-block btn-shadow-blue" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::User()->name}}</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ url('/home') }}">Dashboard</a>
                                        <a clas="dropdown-sitem" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                             @csrf
                                        </form>
                                    </div>
                                    </ul>
                                </li>
                                    <!--<a   class="btn fancy-btn" href="{{ url('/home') }}">Home</a>-->
                             </ul>

                                @else
                                   <ul> <a  class="btn fancy-btn" href="{{ route('login') }}">Login</a></ul>
                                        @if (Route::has('register'))
                                       <ul> <a  class="btn fancy-btn" href="{{ route('register') }}">Register</a></ul>
										@endif
								@endauth
								@endif
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Hero Area Start ***** -->
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="fancy-hero-content text-center">
                        <!-- Video Overview -->
                        <div class="video-overview">
                        </div>
                        <h2>PROFIL DESA</h2>
                    </div>
                </div>
            </div>
        </div>
    <!-- ***** Hero Area End ***** -->

    
    <!-- ***** Blog Area Start ***** -->
    <section class="fancy-blog-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                    </div>
                </div>
            </div>

            <div class="row">
            @foreach($sewa as $s)
                <!-- Single Blog -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                    <img width="1500px" src="{{ url('/file_gambar/'.$s->foto) }}" alt="">
                        <div class="blog-content">
                            <h5><a href="l">{{$s->nama}}</a></h5>
                            <p>Alamat : {{$s->alamat}}</p>
                            <p>Luas : {{$s->panjang}}m x {{$s->lebar}}m</p>
                            <p>Harga : Rp {{$s->harga}}</p>

                            <a href="/detail-sewa/{{$s->id}}" class = "btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
    </section>
    <!-- ***** Blog Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="fancy-footer-area fancy-bg-dark">
        <div class="footer-content section-padding-80-50">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <!--<h6>Our Newsletter</h6>
                            <p>Subscribe to our mailing list to get the updates to your email inbox.</p>
                            <form action="#" method="get">
                                <input type="search" name="search" id="footer-search" placeholder="E-mail">
                                <button type="submit">Subscribe</button>
                            </form>
                            -->
                            <div class="footer-social-widegt d-flex align-items-center">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <h6>Twitter Feed</h6>
                            <div class="single-tweet">
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> With the popularity of podcast shows growing with each year, you might consider starting it yourself as well. <br>https://buff.ly/2zttoJb </a>
                                <span>About 20 hours ago</span>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <h6>Link Categories</h6>
                            <nav>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Agency</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Home</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Studio</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> About</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Studio</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Services</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Blogs</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Work</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Shop</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Privacy</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <h6>Contact Us</h6>
                            <p>1 (800) 686-6688 <br>info.deercreative@gmail.com
                            </p>
                            <p>40 Baria Sreet 133/2 <br>NewYork City, US</p>
                            <p>Open hours: 8.00-18.00 Mon-Fri</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Copywrite -->
        <div class="footer-copywrite-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="copywrite-content h-100 d-flex align-items-center justify-content-between">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                            <!-- Footer Nav -->
                            <div class="footer-nav">
                                <nav>
                                    <ul>
                                        <li><a href="#">Disclaimer</a></li>
                                        <li><a href="#">Privacy</a></li>
                                        <li><a href="#">Advertisement</a></li>
                                        <li><a href="#">Contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>