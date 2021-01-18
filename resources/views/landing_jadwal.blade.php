<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Antasena 2021 adalah kompetisi olimpiade dan seni tahunan yang diselenggarakan oleh siswa-siswi SMAU BP Amanatul Ummah, Mojokerto. dimana kompetisi ini terdiri dari 3 cabang lomba yakni islamic scout competition (ISC), festival qur'ani dan seni islami (FIQSI), dan olimpiade sains remaja indonesia (OSIRIS)" />
  <meta name="keywords"
    content="event antasena,antasena,event" />
  <meta name="author" content="antasena" />

  <title>Jadwal Page</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="{{  asset('landing/logo antasena.png')}}" type="image/x-icon" />
  <!-- Bootstrap 4.5 -->
  <link rel="stylesheet" href="{{ asset('landing/assets/css/bootstrap.min.css')}}" type="text/css" />
  <!-- animate -->
  <link rel="stylesheet" href="{{ asset('landing/assets/css/animate.css')}}" type="text/css" />
  <!-- Swiper -->
  <link rel="stylesheet" href="{{ asset('landing/assets/css/swiper.min.css')}}" />
  <!-- aos -->
  <link rel="stylesheet" href="{{ asset('landing/assets/css/aos.css')}}" type="text/css" />
  <!-- icons -->
  <link rel="stylesheet" href="{{ asset('landing/assets/css/icons.css')}}" type="text/css" />
  <!-- main css -->
  <link rel="stylesheet" href="{{ asset('landing/assets/css/main.css')}}" type="text/css" />
  <!-- normalize -->
  <link rel="stylesheet" href="{{ asset('landing/assets/css/normalize.css')}}" type="text/css" />
  <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
  <!-- <link rel="stylesheet" href="{{ asset('landing2/assets/dist/css/company.style.css')}}"> -->
    <style>

.timeline {
  position: relative;
}
.timeline::before {
  content: '';
  background: #C5CAE9;
  width: 5px;
  height: 95%;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
}

.timeline-item {
  width: 100%;
  margin-bottom: 70px;
}
.timeline-item:nth-child(even) .timeline-content {
  float: right;
  padding: 40px 30px 10px 30px;
}
.timeline-item:nth-child(even) .timeline-content .date {
  right: auto;
  left: 0;
}
.timeline-item:nth-child(even) .timeline-content::after {
  content: '';
  position: absolute;
  border-style: solid;
  width: 0;
  height: 0;
  top: 30px;
  left: -15px;
  border-width: 10px 15px 10px 0;
  border-color: transparent #f5f5f5 transparent transparent;
}
.timeline-item::after {
  content: '';
  display: block;
  clear: both;
}

.timeline-content {
  position: relative;
  width: 45%;
  padding: 10px 30px;
  border-radius: 4px;
  background: #f5f5f5;
  box-shadow: 0 20px 25px -15px rgba(0, 0, 0, 0.3);
}
.timeline-content::after {
  content: '';
  position: absolute;
  border-style: solid;
  width: 0;
  height: 0;
  top: 30px;
  right: -15px;
  border-width: 10px 0 10px 15px;
  border-color: transparent transparent transparent #f5f5f5;
}

.timeline-img {
  width: 30px;
  height: 30px;
  background: #3F51B5;
  border-radius: 50%;
  position: absolute;
  left: 50%;
  margin-top: 25px;
  margin-left: -15px;
}

.timeline-card {
  padding: 0 !important;
}
.timeline-card p {
  padding: 0 20px;
}
.timeline-card a {
  margin-left: 20px;
}

.timeline-item:nth-child(2) .timeline-img-header {
  background: linear-gradient(transparent, rgba(0, 0, 0, 0.4)), url("https://hd.unsplash.com/photo-1458530970867-aaa3700e966d") center center no-repeat;
  background-size: cover;
}
.timeline-item:nth-child(5) .timeline-img-header {
  background: linear-gradient(transparent, rgba(0, 0, 0, 0.4)), url("https://hd.unsplash.com/photo-1444093826349-9ce8c622f4f3") center center no-repeat;
  background-size: cover;
}
.timeline-item:nth-child(6) .timeline-img-header {
  background: linear-gradient(transparent, rgba(0, 0, 0, 0.4)), url("https://hd.unsplash.com/photo-1471479917193-f00955256257") center center no-repeat;
  background-size: cover;
}
.timeline-item:nth-child(8) .timeline-img-header {
  background: linear-gradient(transparent, rgba(0, 0, 0, 0.4)), url("https://hd.unsplash.com/photo-1466840787022-48e0ec048c8a") center center no-repeat;
  background-size: cover;
}
.timeline-item:nth-child(10) .timeline-img-header {
  background: linear-gradient(transparent, rgba(0, 0, 0, 0.4)), url("https://hd.unsplash.com/photo-1447639703758-f525f36456bf") center center no-repeat;
  background-size: cover;
}
.timeline-item:nth-child(11) .timeline-img-header {
  background: linear-gradient(transparent, rgba(0, 0, 0, 0.4)), url("https://hd.unsplash.com/photo-1469429978400-082eec725ad5") center center no-repeat;
  background-size: cover;
}

.timeline-img-header {
  height: 200px;
  position: relative;
  margin-bottom: 20px;
}
.timeline-img-header h2 {
  color: #FFFFFF;
  position: absolute;
  bottom: 5px;
  left: 20px;
}

blockquote {
  margin-top: 30px;
  color: #757575;
  border-left-color: #3F51B5;
  padding: 0 20px;
}

.date {
  background: #322f3d;
  display: inline-block;
  color: #FFFFFF;
  padding: 10px;
  position: absolute;
  top: 0;
  right: 0;
}

@media screen and (max-width: 768px) {
  .timeline::before {
    left: 50px;
  }
  .timeline .timeline-img {
    left: 50px;
  }
  .timeline .timeline-content {
    max-width: 100%;
    width: auto;
    margin-left: 70px;
  }
  .timeline .timeline-item:nth-child(even) .timeline-content {
    float: none;
  }
  .timeline .timeline-item:nth-child(odd) .timeline-content::after {
    content: '';
    position: absolute;
    border-style: solid;
    width: 0;
    height: 0;
    top: 30px;
    left: -15px;
    border-width: 10px 15px 10px 0;
    border-color: transparent #f5f5f5 transparent transparent;
  }
}

    </style>

  <!-- js for Brwoser -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="myNavbar">
  <div id="wrapper">
    <div id="content">
      <!-- Start header -->

      <header class="header-nav-center no_blur white-scroll-dark active-red">
        <div class="container">
          <!-- navbar -->
          <nav class="navbar navbar-expand-lg navbar-light px-sm-0">
            <a class="navbar-brand" href="./">
            @foreach($ab as $p)
            <img src="{{asset('storage/'.$p->logo)}}" style="width:100%;max-width:250px;" alt="" />
            @endforeach
            </a>

            <button class="navbar-toggler menu ripplemenu" type="button" data-toggle="collapse"
              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <svg viewBox="0 0 64 48">
                <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
              </svg>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto nav-pills">
                <li class="nav-item">
                  <a class="nav-link" href="./">Home</a>
                </li>  
                <li class="nav-item dropdown dropdown-hover">
                  <a class="nav-link dropdown-toggle dropdown_menu " href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Event

                    <div class="icon_arrow">
                      <i class="tio chevron_right"></i>
                    </div>

                  </a>
                  <div class="dropdown-menu single-drop sm_dropdown" aria-labelledby="navbarDropdown">
                    <ul class="dropdown_menu_nav">

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between " href="{{ url('landing-isc')}}">
                          ISC
                        </a>
                      </li>

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="{{ url('landing-fiqsi')}}">
                          FIQSI
                        </a>
                      </li>

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="{{ url('landing-osiris')}}">
                          OSIRIS
                        </a>
                      </li>

                    </ul>

                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#Services">Registrasi</a>
                </li>
                <li class="nav-item dropdown dropdown-hover active">
                  <a class="nav-link dropdown-toggle dropdown_menu" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Informasi

                    <div class="icon_arrow">
                      <i class="tio chevron_right"></i>
                    </div>

                  </a>
                  <div class="dropdown-menu single-drop sm_dropdown" aria-labelledby="navbarDropdown">
                    <ul class="dropdown_menu_nav">

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between  active" href="{{ url('landing-galeri')}}">
                          Galeri Foto
                        </a>
                      </li>

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="{{ url('landing-informasi')}}">
                          Dokumen
                        </a>
                      </li>

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="{{ url('landing-jadwal')}}">
                          Jadwal
                        </a>
                      </li>

                    </ul>

                  </div>
                </li>
              </ul>
              <div class="nav_account btn_demo2">
                <a href="{{ url('landing-kontak')}}" class="btn btn_sm_primary effect-letter rounded-8">
                  Contact
                </a>
              </div>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>
        <!-- end container -->
      </header>
      <!-- End header -->

      <!-- Stat main -->
      <main data-spy="scroll" data-target="#navbar-example2" data-offset="0">

        <!-- Start banner_about -->
        <section class="pt_banner_inner banner_px_image single_blog featured_image">
          <div class="parallax_cover">
            <img class="cover-parallax" src="{{ asset('landing/assets/img/agency/girl.svg')}}" alt="image">
          </div>
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-md-8 col-lg-8">
                <div class="banner_title_inner">
                <!-- 
                  <div class="about_post">
                    <span class="c_ategory">
                      <a href="#Design">Design</a>
                      <a href="#Developer">Developer</a>
                    </span>
                    <span class="dot"></span>
                    <time>15min</time>
                  </div> -->
                  <h1 class="margin-my-3 font-s-60" data-aos="fade-up" data-aos-delay="0">
                  Jadwal
                  </h1>
                  <h3 class="margin-my-3 font-s-30" data-aos="fade-up" data-aos-delay="0">
                  Jadwal Kegiatan
                  </h3>
                </div>
              </div>
            </div>

          </div>
        </section>
        <!-- End banner_about -->
<section class="timeline margin-t-12 padding-py-10">
  <div class="container">
    @foreach($jadwal as $p)
    <div class="timeline-item">
      <div class="timeline-img"></div>
      <div class="timeline-content" data-aos="fade-up" data-aos-delay="0">
        <h2>{{ $p->juduljadwal}}</h2>
        <div class="date">{{$p->tanggaljadwal}}</div>
        <p>{{ $p->deskripsijadwal}}</p>
      </div>
    </div>
    @endforeach
  </div>
</section>

        <!-- Start dividar -->
        <section class="dividar margin-t-12"></section>
        <!-- End. dividar -->



      </main>
    </div>
    <!-- [id] content -->

    <!-- Start footer -->
    <footer class="foot_demo2 padding-py-12 footer_inner_one bg-black"  style="background-color: rgb(18, 22, 27) !important;">
      <div class="container">
        <!-- Start footer -->
        <div class="defalut-footer">
          <div class="row">
            <div class="col-md-4 col-lg-4 mb-4 mb-sm-0">
              <div class="item_about">
                <a href="./">
                @foreach($ab as $p)
            <img src="{{asset('storage/'.$p->logo_foot)}}" style="width:100%;max-width:250px;" alt="" />
            @endforeach
                </a>
                @foreach($ab as $p)
                <p>
                {{ $p->deskripsiab}}
                </p>
                @endforeach
                <div class="address">
                  <!-- <span>1989 Don Jackson Lane</span>
                  <span>Call us:
                    <a class="c-red" href="tel:8089569599">808-956-9599</a></span> -->
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-2">
              <!-- <div class="item_links"> -->
              <img src="{{  asset('landing/antasena-fullpage.png')}}" style="width:100%;" alt="" />
                <!-- <h4>Company</h4> -->
                <!-- <a class="nav-link" href="">About</a>
                <a class="nav-link" href="">Affiliates</a>
                <a class="nav-link" href="">Careers</a>
                <a class="nav-link" href="">Legal & Privacy</a> -->
              <!-- </div> -->
            </div>
            <div class="col-md-4 mt-4 mt-sm-0">
                <div class="item_links">
                    <h4>Kontak</h4>
                    @foreach($kontak as $p) 
                    <p class="nav-link"><i class="material-icons">location_on</i>{{$p->alamat}}</p>
                    <p class="nav-link"><i class="material-icons">mail</i>{{$p->email}}</p>
                    <p class="nav-link"><i class="material-icons">phone</i>{{$p->phone}} (Kantor)</p>
                    <p class="nav-link"><i class="material-icons">phone</i>{{$p->phone_isc}}(ISC)</p>
                    <p class="nav-link"><i class="material-icons">phone</i>{{$p->phone_fiqsi}}(FIQSI)</p>
                    <p class="nav-link"><i class="material-icons">phone</i>{{$p->phone_osiris}}(OSIRIS)</p>
                    @endforeach
                </div>     
            </div>
          </div>
          <div class="col-12 text-center padding-t-6">
            <div class="copyright">
              <span>© 2020
                <a href="" target="_blank">Antasena</a>
                All Right Reseved</span>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </footer>
    <!-- End Footer -->

    <!-- Back to top with progress indicator-->
    <div class="prgoress_indicator">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>

  </div>
  <!-- End. wrapper -->

  <!-- jquery -->
  <script src="{{ asset('landing/assets/js/jquery-3.5.0.js')}}" type="text/javascript"></script>
  <!-- jquery-migrate -->
  <script src="{{ asset('landing/assets/js/jquery-migrate.min.js')}}" type="text/javascript"></script>
  <!-- popper -->
  <script src="{{ asset('landing/assets/js/popper.min.js')}}" type="text/javascript"></script>
  <!-- bootstrap -->
  <script src="{{ asset('landing/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
  <!--
  ============
  vendor file
  ============
   -->
  <!-- particles -->
  <script src="{{ asset('landing/assets/js/vendor/particles.min.js')}}" type="text/javascript"></script>
  <!-- TweenMax -->
  <script src="{{ asset('landing/assets/js/vendor/TweenMax.min.js')}}" type="text/javascript"></script>
  <!-- ScrollMagic -->
  <script src="{{ asset('landing/assets/js/vendor/ScrollMagic.js')}}" type="text/javascript"></script>
  <!-- animation.gsap -->
  <script src="{{ asset('landing/assets/js/vendor/animation.gsap.js')}}" type="text/javascript"></script>
  <!-- addIndicators -->
  <script src="{{ asset('landing/assets/js/vendor/debug.addIndicators.min.js')}}" type="text/javascript"></script>
  <!-- Swiper js -->
  <script src="{{ asset('landing/assets/js/vendor/swiper.min.js')}}" type="text/javascript"></script>
  <!-- countdown -->
  <script src="{{ asset('landing/assets/js/vendor/countdown.js')}}" type="text/javascript"></script>
  <!-- simpleParallax -->
  <script src="{{ asset('landing/assets/js/vendor/simpleParallax.min.js')}}" type="text/javascript"></script>
  <!-- waypoints -->
  <script src="{{ asset('landing/assets/js/vendor/waypoints.min.js')}}" type="text/javascript"></script>
  <!-- counterup -->
  <script src="{{ asset('landing/assets/js/vendor/jquery.counterup.min.js')}}" type="text/javascript"></script>
  <!-- charming -->
  <script src="{{ asset('landing/assets/js/vendor/charming.min.js')}}" type="text/javascript"></script>
  <!-- imagesloaded -->
  <script src="{{ asset('landing/assets/js/vendor/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
  <!-- BX-Slider -->
  <script src="{{ asset('landing/assets/js/vendor/jquery.bxslider.min.js')}}" type="text/javascript"></script>
  <!-- Sharer -->
  <script src="{{ asset('landing/assets/js/vendor/sharer.js')}}" type="text/javascript"></script>
  <!-- sticky -->
  <script src="{{ asset('landing/assets/js/vendor/sticky.min.js')}}" type="text/javascript"></script>
  <!-- Aos -->
  <script src="{{ asset('landing/assets/js/vendor/aos.js')}}" type="text/javascript"></script>
  <!-- main file -->
  <script src="{{ asset('landing/assets/js/main.js')}}" type="text/javascript"></script>

  <script src="{{ asset('landing2/assets/dist/js/wow.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('landing2/assets/dist/js/scripts.js')}}" type="text/javascript"></script>
    <script>
        $(function(){

window.sr = ScrollReveal();

if ($(window).width() < 768) {

    if ($('.timeline-content').hasClass('js--fadeInLeft')) {
        $('.timeline-content').removeClass('js--fadeInLeft').addClass('js--fadeInRight');
    }

    sr.reveal('.js--fadeInRight', {
      origin: 'right',
      distance: '300px',
      easing: 'ease-in-out',
      duration: 800,
    });

} else {
    
    sr.reveal('.js--fadeInLeft', {
      origin: 'left',
      distance: '300px',
        easing: 'ease-in-out',
      duration: 800,
    });

    sr.reveal('.js--fadeInRight', {
      origin: 'right',
      distance: '300px',
      easing: 'ease-in-out',
      duration: 800,
    });

}

sr.reveal('.js--fadeInLeft', {
      origin: 'left',
      distance: '300px',
        easing: 'ease-in-out',
      duration: 800,
    });

    sr.reveal('.js--fadeInRight', {
      origin: 'right',
      distance: '300px',
      easing: 'ease-in-out',
      duration: 800,
    });


});
    </script>
</body>

</html>