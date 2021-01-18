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

  <title>Antasena</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="{{  asset('landing/logo antasena.png')}}" type="image/x-icon" />
  <!-- Bootstrap 4.5 -->
  <link rel="stylesheet" href="{{ asset('landing/assets/css/bootstrap.min.css')}}" type="text/css" />
  <!-- animate -->
  <link rel="stylesheet" href="{{ asset('landing/assets/css/animate.css')}}" type="text/css" />
  <!-- Swiper -->
  <link rel="stylesheet" href="{{ asset('landing/assets/css/swiper.min.css')}}" />
  <!-- icons -->
  <link rel="stylesheet" href="{{ asset('landing/assets/css/icons.css')}}" type="text/css" />
  <!-- aos -->
  <link rel="stylesheet" href="{{ asset('landing/assets/css/aos.css')}}" type="text/css" />
  <!-- main css -->
  <link rel="stylesheet" href="{{ asset('landing/assets/css/main.css')}}" type="text/css" />
  <!-- normalize -->
  <link rel="stylesheet" href="{{ asset('landing/assets/css/normalize.css')}}" type="text/css" />

  <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
  

  <!-- js for Brwoser -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>
  <div id="wrapper">
    <div id="content">
      <!-- Start header -->
      <header class="header-nav-center active-blue" id="myNavbar">
        <div class="container">
          <!-- navbar -->
          <nav class="navbar navbar-expand-lg navbar-light px-sm-0">
            <a class="navbar-brand" href="./">
            @foreach($ab as $p)
              <img src="{{asset('storage/'.$p->logo)}}" style="width:100%; max-width:240px;" alt="logo" />
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
                  <a class="nav-link dropdown-toggle dropdown_menu" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Event

                    <div class="icon_arrow">
                      <i class="tio chevron_right"></i>
                    </div>

                  </a>
                  <div class="dropdown-menu single-drop sm_dropdown" aria-labelledby="navbarDropdown">
                    <ul class="dropdown_menu_nav">

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="{{ url('landing-isc')}}">
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
                  <a class="nav-link" href="{{ url('landing-registrasi')}}">Registrasi</a>
                </li>
                <li class="nav-item dropdown dropdown-hover">
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
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="{{('landing-galeri')}}">
                          Galeri Foto
                        </a>
                      </li>

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="{{('landing-informasi')}}">
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
                <a href="{{('landing-kontak')}}" class="btn btn_sm_primary effect-letter rounded-8">
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
        <!-- Start Banner Section -->
        <section class="demo_1 banner_section banner_demo7">
        @foreach($ab as $p)
          <div class="container">
            <div class="row">
              <div class="col-md-5 my-auto">
                <div class="banner_title">
                  <h1>{{ $p->judulab }}</h1>
                  <h2>
                  {{ $p->tema }}
                  </h2>
                  <h3>{{ $p->tanggal }}</h3>
                  <!-- <a href="#" class="btn btn_md_primary effect-letter rounded-8 bg-blue c-white">Discover</a> -->
                </div>
              </div>
              <div class="col-md-7">
                <img class="ill_05" src="{{ asset('landing/assets/img/agency/girl.svg')}}" />
              </div>
            </div>
          </div>
        @endforeach
        </section>
        <!-- End Banner -->

        <!-- Start About -->
        <section class="abo_company">
          <div class="container">
          
            <div class="row">
            @foreach($profile_isc as $p)
            <div class="col-lg-4 emo mb-4 mb-lg-0">
                <div class="gq_item ill_item" style="background-color:#ffe9e9;">
                  <!-- <span class="d-block c-dark font-s-16">ISC</span> -->
                  <img class="img-fluid ill_sec" src="{{asset('storage/'.$p->gambar_prof)}}" />
                  <div class="title_sections">
                    <h2 class="c-dark text-center">{{ $p->nama_prof }}</h2>
                  <p class="c-gray text-center">
                    {{ $p->tema_prof }}
                    </p>
                  </div>
                </div>
              </div>  
            @endforeach

            @foreach($profile_fiqsi as $p)  
              <div class="col-lg-4 emo mb-4 mb-lg-0">
                <div class="gq_item ill_item">
                  <!-- <span class="d-block c-dark font-s-16">AMC Networks</span> -->
                  <img class="img-fluid ill_sec" src="{{asset('storage/'.$p->gambar_prof)}}" />
                  <div class="title_sections">
                  <h2 class="c-dark text-center">{{ $p->nama_prof }}</h2>
                  <p class="c-gray text-center">
                    {{ $p->tema_prof }}
                  </div>
                </div>
              </div>
              @endforeach

              @foreach($profile_osiris as $p) 
              <div class="col-lg-4 emo">
                <div class="gq_item ill_item">
                  <!-- <span class="d-block c-dark font-s-16">Musicfolio</span> -->
                  <img class="img-fluid ill_sec" src="{{asset('storage/'.$p->gambar_prof)}}" />
                  <div class="title_sections">
                  <h2 class="c-dark text-center">{{ $p->nama_prof }}</h2>
                  <p class="c-gray text-center">
                    {{ $p->tema_prof }}
                    </p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </section>
        <!-- End. About -->

        <!-- Start logos -->
        <section class="logos_section logos_demo2 padding-t-10">
          <div class="container">
            <div class="row">
            @foreach($ab as $p)
              <div class="col-lg-6 ml-auto">
                <div class="title_sections mb-0">
                  <h1>Seputar Antasena</h1>
                  <h2>
                  {{ $p->judulab }}
                  </h2>
                  <p>{{ $p->deskripsiab }}
                  </p>
                </div>
              </div>

              <div class="col-lg-6 ml-auto">
                <div class="row">
                  <div class="col-md-6 ml-auto">
                    <div class="item_logo" data-aos="fade-up" data-aos-delay="0">
                      <img src="{{asset('storage/'.$p->gambarab)}}"  style="max-width:400px;width:100%;"/>
                      <!-- <p class="c-gray">
                        Trusted Rakon Design Agency.
                      </p> -->
                    </div>
                  </div>
            
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </section>
        <!-- End logos -->
               
        <!-- hide Header -->
        <!-- <div id="triggerForm"></div> -->
        <!-- End. -->

        <!-- Start Services -->
        <!-- <section class="service_demo4 content_item" id="pinContainer">
          <div class="Slide_horizontal_scroll">
            <div class="container">
              <div id="slideContainer">
                <div class="row">
                  <div class="col-md-12">
                    <div class="item_slide panel">
                      <div class="block_img">
                        <div class="block_item" data-fx="22">
                          <a class="block__title c-dark" data-img="../../assets/img/agency/xore___solar_system.gif">Branding &
                            Identity</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="item_slide panel">
                      <div class="block_img">
                        <div class="block_item" data-fx="22">
                          <a class="block__title c-dark" data-img="../../assets/img/agency/notsohotdogdribbble.gif">Websites &
                            Digital
                            Platforms</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="item_slide panel">
                      <div class="block_img">
                        <div class="block_item" data-fx="22">
                          <a class="block__title c-dark" data-img="../../assets/img/agency/098401.gif">eCommerce
                            Experiences</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="item_slide panel">
                      <div class="block_img">
                        <div class="block_item" data-fx="22">
                          <a class="block__title c-dark" data-img="../../assets/img/agency/turtle-power.gif">Performance
                            Marketing</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="item_slide panel">
                      <div class="block_img">
                        <div class="block_item" data-fx="22">
                          <a class="block__title c-dark" data-img="../../assets/img/agency/5_b.gif">eCommerce
                            Experiences</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->
        <!-- End Services -->

        <!-- Show Header -->
        <!-- <div id="triggerTo"></div> -->
        <!-- End. -->

        <!-- Start Section Products -->
        <section class="products_section product_demo2 bg-white margin-b-6">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-lg-5">
                <div class="title_sections_inner margin-b-5">
                  <h2>Our Maskot</h2>
                </div>
                
               
              </div>
            </div>
            <!-- Start Tabs -->
            <div class="tabs_works  ">
              <div class="row pt-0">
                <div class="col-md-8 col-lg-4">
                  <div class="title_sections margin-b-6">
                    <h2 class="c-dark">
                      <!-- System structure is advanced and simple -->
                    </h2>
                    <p class="c-gray">
                      <!-- Duis aute irure dolor in reprehenderit in voluptate
                      velit esse cillum dolore eu fugiat nulla pariatur. -->
                    </p>
                  </div>
                  
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  @foreach($profile_isc as $p)
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                      aria-controls="v-pills-home" aria-selected="true">
                      <h4 class="margin-b-2 font-s-20 c-dark">ISC</h4>
                      <p>
                      Nama :  {{ $p-> tema_maskot}}  <br>
                      Deskripsi : {{ $p-> slogan_maskot}}
                      </p>
                    </a>
                  @endforeach
                  @foreach($profile_fiqsi as $p)
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                      aria-controls="v-pills-profile" aria-selected="false">
                      <h4 class="margin-b-2 font-s-20 c-dark">FIQSI</h4>
                      <p>
                      Nama :  {{ $p-> tema_maskot}} <br>
                      Deskripsi : {{ $p-> slogan_maskot}}
                      </p>
                    </a>
                  @endforeach
                  @foreach($profile_fiqsi as $p)
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                      aria-controls="v-pills-messages" aria-selected="false">
                      <h4 class="margin-b-2 font-s-20 c-dark">OSIRIS</h4>
                      <p>
                      Nama : {{ $p-> tema_maskot}} <br>
                      Deskripsi : {{ $p-> slogan_maskot}}
                      </p>
                    </a>
                  @endforeach
                  </div>
                </div>
                <div class="col-lg-7 ml-auto">
                  <div class="tab-content img--tabs" id="v-pills-tabContent">
                  @foreach($profile_isc as $p)
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                      aria-labelledby="v-pills-home-tab">
                      <img class="--img" src="{{asset('storage/'.$p->maskot)}}" style="width:100%;max-width:400px;" alt="" />
                    </div>
                  @endforeach
                  @foreach($profile_fiqsi as $p)
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                      aria-labelledby="v-pills-profile-tab">
                      <img class="--img" src="{{asset('storage/'.$p->maskot)}}" style="width:100%;max-width:400px;"  alt="" />
                    </div>
                  @endforeach
                  @foreach($profile_osiris as $p)
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                      aria-labelledby="v-pills-messages-tab">
                      <img class="--img" src="{{asset('storage/'.$p->maskot)}}"  style="width:100%;max-width:400px;" alt="" />
                    </div>
                  @endforeach
                  </div>
                </div>
              </div>
            </div>
            <!-- End Tabs -->
          </div>
          <!-- .container -->
        </section>
        <!-- End Section Products -->
        
        <!-- Start section__stories -->
        <section class="section__stories margin-b-6" id="Stories">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-lg-5">
                <div class="title_sections_inner margin-b-5">
                  <h2>Media Partner</h2>
                </div>
              </div>
            </div>
            <div class="swip__topic">
              <!-- Swiper -->
              <div class="swiper-container swipe_basic_topic">
                <div class="swiper-wrapper">
                @foreach($partner as $p)
                  <div class="swiper-slide">
                    <div class="item">
                      <div class="media">
                        <!-- <div class="ico__top"> -->
                          <img src="{{asset('storage/'.$p->gambarpart)}}" style="width:100%;max-width:100px;">
                            <g id="_03" data-name="03" transform="translate(-5 -2)">
                              <path id="Oval-2" d="M12,19a7,7,0,0,0,7-7q0-3.866-7-10Q5,8.134,5,12A7,7,0,0,0,12,19Z"
                                fill-rule="evenodd" opacity="0.3"></path>
                              <rect id="Rectangle" width="2" height="11" rx="1" transform="translate(11 11)"></rect>
                            </g>
                        <!-- </div> -->
                        <div class="media-body">
                          <div class="t_text">
                            <!-- <h3>{{ $p->name }}</h3> -->
                            <!-- <span>54 Topic</span> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End. section__stories -->

      </main>
      <!-- end main -->
    </div>
    <!-- [id] content -->

    <!-- Start footer -->
    <footer class="foot_demo2 padding-py-12 footer_inner_one bg-black" style="background-color: rgb(18, 22, 27) !important;">
      <div class="container">
        <!-- Start footer -->
        <div class="defalut-footer">
          <div class="row">
            <div class="col-md-4 col-lg-4 mb-4 mb-sm-0">
              @foreach($ab as $p)
              <div class="item_about">
                <a class="logo" href="./">
                  <img src="{{asset('storage/'.$p->logo_foot)}}" style="width:100%;max-width:250px;" alt="" />
                </a>
                <p>
                {{ $p->deskripsiab}}
                </p>
                
                <div class="address">
                  <!-- <span>1989 Don Jackson Lane</span>
                  <span>Call us:
                    <a class="c-red" href="tel:8089569599">808-956-9599</a></span> -->
                </div>
                @endforeach
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
                    <p class="nav-link"><i class="material-icons">phone</i>{{$p->phone_isc}} (ISC)</p>
                    <p class="nav-link"><i class="material-icons">phone</i>{{$p->phone_fiqsi}} (FIQSI)</p>
                    <p class="nav-link"><i class="material-icons">phone</i>{{$p->phone_osiris}} (OSIRIS)</p>
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

    <!-- Tosts -->
    <!-- <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center">
      <div class="toast toast_demo" id="myTost" role="alert" aria-live="assertive" aria-atomic="true"
        data-animation="true" data-autohide="false">
        <div class="toast-body">
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <i class="tio clear"></i>
          </button>
          <h5>Hi there 👋</h5>
          <p>We are glad you joined us <a href="#">Join us</a></p>
        </div>
      </div>
    </div> -->
    <!-- End. Toasts -->

    <!-- Start Section Loader -->
    <section class="loading_overlay">
      <div class="loader_logo">
        <img src="{{ asset('landing/logo antasena.png')}}" style="width:100%;max-width:150px;
        -webkit-animation: text-focus-in 1.5s cubic-bezier(0.55, 0.085, 0.68, 0.53) both !important;
        -moz-animation: text-focus-in 1.5s cubic-bezier(0.55, 0.085, 0.68, 0.53) both !important;
        -o-animation: text-focus-in 1.5s cubic-bezier(0.55, 0.085, 0.68, 0.53) both !important;
        -ms-animation: text-focus-in 1.5s cubic-bezier(0.55, 0.085, 0.68, 0.53) both !important;
        animation: text-focus-in 1.5s cubic-bezier(0.55, 0.085, 0.68, 0.53) both !important;"  />
      </div>
    </section>
    <!-- End. Loader -->
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
  <!-- agency -->
  <script src="{{ asset('landing/assets/js/pages/agency.js')}}" type="text/javascript"></script>

</body>

</html>