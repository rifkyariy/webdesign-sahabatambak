@extends('layouts.app')

@section('content')

    <!-- ***** Preloader Start ***** -->
    {{-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <img src="{{ asset('images/logo/logo-alt.png') }}" alt="SahabaTambak" width="50px">
        </div>
    </div> --}}
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="{{ asset('images/logo/logo-alt.png') }}" alt="SahabaTambak">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#welcome" class="menu-item">Home</a></li>
                            <li class="scroll-to-section"><a href="#about" class="menu-item">About</a></li>
                            <li class="scroll-to-section"><a href="#testimonials" class="menu-item">Testimonials</a></li>
                            <li><a href="{{ route('demo.dashboard') }}" >Demo</a></li>
                            @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            @else
                            <li>
                                <div class="dropdown">
                                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a  class="dropdown-item" 
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"
                                    >
                                    Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                </div>
                            </li>
                            @endguest
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1><em>SahabaTambak</em></h1>
                        <p><p>Sebuah platform website dan mobile apps yang digunakan untuk menganalisis tambak ikan terutama dalam penentuan pengambilan keputusan terhadap berbagai masalah yang terjadi di tambak dengan memperhatikan berbagai faktor seperti suhu, pH, oksigen terlarut dan berbagai faktor lainnya.</a></p> 
                        <a href="admin/index.html" class="main-button-slider">Demo Aplikasi</a>
                        <a href="#about" class="secondary-button-slider">Cara Kerja</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="center-heading" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <h2>
                    Cara Kerja Kami
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>01</h2>
                            <img src="{{ asset('images/logo/scan.svg') }}" alt="">
                            <h4>Scan Kolam</h4>
                            <p>Kami memindai kolam dalam pola waktu tertentu untuk mencari faktor faktor yang mempengaruhi kualitas kolam </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>02</h2>
                            <img src="{{ asset('images/logo/pond.svg') }}" alt="">
                            <h4>Analisis Kolam</h4>
                            <p>Kami menganalisis kolam berdasarkan faktor faktor yang telah didapat untuk mengetahui kualitas kolam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>03</h2>
                            <img src="{{ asset('images/logo/graph.svg') }}" alt="">
                            <h4>Rekomendasi Perawatan</h4>
                            <p>Kami memberikan rekomendasi mengenai berbagai hal yang harus dilakukan demi menjaga kualitas kolam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class="left-image-decor"></div>

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="promotion">
        <div class="container">
            <div class="row">
                <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{ asset('images/logo/apps.png') }}" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <img src="{{ asset('images/logo/mitra.svg') }}" alt="">
                            <div class="text">
                                <h4>Mitra Kami</h4>
                                <p>Unit Pelayanan Teknis (UPT) Pengembangan Budidaya dan Pemasaran Perikanan Dinas Pertanian</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <img src="{{ asset('images/logo/multiplatform.svg') }}" alt="">
                            <div class="text">
                                <h4>Kelebihan Kami</h4>
                                <p>Kualitas terjamin, Tahan lama, Multiplatform, Prediksi akurat, dan Harga terjangkau</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                            <img src="{{ asset('images/logo/iot.svg') }}" alt="">
                            <div class="text">
                                <h4>Tipe Aplikasi</h4>
                                <p>Iot, Smart Fish Pond, Data Analytics, and Decision Support System</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="center-heading" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <h2>
                    Beberapa Rekanan Kami
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <img class="mitra-img" src="{{ asset('images/mitra/2.png') }}" alt="">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <img class="mitra-img" src="{{ asset('images/mitra/1.png') }}" alt="">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <img class="mitra-img" src="{{ asset('images/mitra/3.jpg') }}" alt="">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <img class="mitra-img" src="{{ asset('images/mitra/4.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class="right-image-decor"></div>
    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>Testimoni Mitra</em></h2>
                        <p>Sedikit pesan dan kesan mengenai kami oleh para mitra</p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="{{ asset('images/logo/bptpb.png') }}" alt="Author One"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Yudi Kasmono</h4>
                                <p>Platform yang bagus, Kami berharap dengan adanya platform ini dapat digunakan untuk menjaga kualitas kolam disini.”</p>
                                <span><b>Kepala UPT</b></span>
                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="{{ asset('images/logo/pegawai.png') }}" alt="Second Author"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Maryanto</h4>
                                <p>“Aplikasi  yang hebat, cepat ,dan dapat mempermudah kami dalam mengelola dan menganalisis kolam ikan yang ada disini.”</p>
                                <span><b>Pegawai UPT</b></span>
                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <i><img src="{{ asset('images/logo/ahsan.png') }}" alt="Author Third"></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4>Dik Ahsan</h4>
                                <p>“Kalau saya sih yes”</p>
                                <span><b>Fullstack Engineer</b></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->
    
    <!-- ***** Banner ***** -->
    <section id="banner-callus">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"
                data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                <div class="banner">
                    <div class="row">
                        <div class="col-lg-7 banner-con">
                            <h1 class="banner-title">Manajemen cerdas perikanan dimulai dari sini</h1>
                        </div>
                        <div class="col-lg-5 banner-con text-center">
                            <h5>Tertarik dengan SahabaTambak?</h5>
                            <br/>
                            <button id="callus-btn" class="btn btn-md btn-warning" type="button" >
                                Hubungi Kami
                            </button>
                        </div>        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="sub-footer">
                <p>Copyright &copy; 2020 SahabaTambak

                | Designed by Rifky Ari Yunanto / 18520244008</p>
            </div>
        </div>
    </footer>
@endsection
