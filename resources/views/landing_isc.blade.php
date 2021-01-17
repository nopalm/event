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

  <title>Isc Page</title>
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
  <!-- <link rel="stylesheet" href="{{ asset('landing2/assets/dist/css/company.style.css')}}"> -->

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
              <img class="logo" src="{{  asset('landing/web.png')}}" style="width:100%; max-width:240px;" alt="logo" />
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
                  <a class="nav-link dropdown-toggle dropdown_menu active" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Event

                    <div class="icon_arrow">
                      <i class="tio chevron_right"></i>
                    </div>

                  </a>
                  <div class="dropdown-menu single-drop sm_dropdown" aria-labelledby="navbarDropdown">
                    <ul class="dropdown_menu_nav">

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between active" href="{{ url('landing-isc')}}">
                          ISC
                        </a>
                      </li>

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="{{ url('landing-fiqsi')}}">
                          Fiqsi
                        </a>
                      </li>

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="{{ url('landing-osiris')}}">
                          Osiris
                        </a>
                      </li>

                    </ul>

                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#Services">Registrasi</a>
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
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="#">
                          Galeri Foto
                        </a>
                      </li>

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="#">
                          Dokumen
                        </a>
                      </li>

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="#">
                          Jadwal
                        </a>
                      </li>

                    </ul>

                  </div>
                </li>
              </ul>
              <div class="nav_account btn_demo2">
                <a href="#" class="btn btn_sm_primary effect-letter rounded-8">
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
            <div class="row">
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
                  @foreach($profile_isc as $p) 
                  <h1 class="margin-my-3 font-s-60" data-aos="fade-up" data-aos-delay="0">
                   Islamic Scout Competition 2021
                  </h1>
                  <h3 class="margin-my-3 font-s-30" data-aos="fade-up" data-aos-delay="0">
                  {{$p->tema_prof}}
                  </h3>
                  @endforeach
                  <h3 class="margin-my-3 font-s-20" data-aos="fade-up" data-aos-delay="0">
                  tanngal
                  </h3>
                </div>
              </div>
            </div>

          </div>
        </section>
        <!-- End banner_about -->

        <!-- Start content-Sblog -->
        <section class="content-Sblog" data-sticky-container>
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                @foreach($profile_isc as $p) 
                  <h2>Tentang Islamic Scout Competition </h2>
                  <p class="margin-b-3">{{ $p->desc_prof}}</p>
                @endforeach
                 
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End. content-Sblog -->
        <!-- Start content-daftar lomba -->
        <section class="content-Sblog" data-sticky-container>
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <!-- @foreach($profile_isc as $p)  -->
                  <center><h2>Daftar Lomba </h2></center>
                  <!-- <p class="margin-b-3">{{ $p->desc_prof}}</p> -->
                <!-- @endforeach -->
                <div class="blog-grid">
              <div class="container">
                <div class="row">
                  <div class="col-md-12"> <!-- start of elements portion -->
                    <div id="rq-icon-box-portion" class="element-single wow fadeIn"> <!-- start of Icon Boxes -->
                      <!-- <h3 class="elements-title">Daftar Lomba</h3> -->
                      <div class="row">
					@foreach($isc as $p) 
					  <div class="col-md-4 col-sm-4">
                          <div class="rq-icon-box-single">
                            <div class="rq-icon">
                              <img src="{{asset('storage/'.$p->gambarisc)}}" style="width:95%;" alt=""/>
                            </div>
                            <h5>{{$p->judulisc}}</h5>
                            <p>{{$p->deskripsiisc}}</p>
                          </div>
                        </div>
					@endforeach
                      </div>
                    </div> <!-- end of Icon Boxes -->
                  </div> <!-- end of elements portion -->
          
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End. content-daftar Lomba -->

        <!-- Start dividar -->
        <section class="dividar margin-t-12"></section>
        <!-- End. dividar -->



      </main>
    </div>
    <!-- [id] content -->

    <!-- Start footer -->
    <footer class="foot_demo2 padding-py-12 footer_inner_one bg-black">
      <div class="container">
        <!-- Start footer -->
        <div class="defalut-footer">
          <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-sm-0">
              <div class="item_about">
                <a class="logo" href="hosting.html">
                  <img src="../../assets/img/logo.svg" alt="" />
                </a>
                <p>
                  Rakon is a simple, elegant, and secure way to build your
                  bitcoin and crypto portfolio.
                </p>
                <div class="address">
                  <span>1989 Don Jackson Lane</span>
                  <span>Call us:
                    <a class="c-red" href="tel:8089569599">808-956-9599</a></span>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="item_links">
                <h4>Social</h4>
                <a class="nav-link" href="">Blog</a>
                <a class="nav-link" href="">Facebook</a>
                <a class="nav-link" href="">Twitter</a>
                <a class="nav-link" href="">Instagram</a>
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="item_links">
                <h4>Company</h4>
                <a class="nav-link" href="">About</a>
                <a class="nav-link" href="">Affiliates</a>
                <a class="nav-link" href="">Careers</a>
                <a class="nav-link" href="">Legal & Privacy</a>
              </div>
            </div>
            <div class="col-md-4 mt-4 mt-sm-0">
              <div class="item_subscribe">
                <h4>Subscribe</h4>
                <p>
                  Subscribe to get the latest<br />
                  news form us
                </p>
                <form class="form-row">
                  <div class="col-md-11 form-group subscribebtn">
                    <div class="item_input">
                      <input type="email" class="form-control rounded-pill" id="exampleInputEmail1"
                        placeholder="Enter email address" aria-describedby="emailHelp" />
                      <button type="button" class="btn ripple_circle scale rounded-circle btn_subscribe">
                        <i class="tio send"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 margin-t-1">
              <select data-menu>
                <option selected>English</option>
                <option>Arabic</option>
                <option>Russian</option>
              </select>
            </div>
          </div>
          <div class="col-12 text-center padding-t-6">
            <div class="copyright">
              <span>© 2020
                <a href="https://themeforest.net/user/orinostu" target="_blank">OrinoStu.</a>
                All Right Reseved</span>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </footer>
    <!-- End Footer -->

    <!-- Video Modal -->
    <div class="modal mdll_video fade" id="mdllVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <!-- Close -->
      <button type="button" class="close bbt_close ripple_circle" data-dismiss="modal" aria-label="Close">
        <i class="tio clear"></i>
      </button>
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                allow="autoplay"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

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

</body>

</html>