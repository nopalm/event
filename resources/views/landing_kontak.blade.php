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

  <title>Kontak Page</title>
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
      .rq-icon-list {
  position: relative;
  width: 100%;
}
.rq-icon-list.primary i {
  color: #cc3333;
}
.rq-icon-list.circle li {
  padding-left: 45px;
  padding-top: 10px;
  padding-bottom: 10px;
}
.rq-icon-list.circle i {
  width: 35px;
  height: 35px;
  border: 1px solid #999999;
  line-height: 35px;
  border-radius: 50%;
  text-align: center;
  top: 4px;
}
.rq-icon-list.circle.primary i {
  background: #cc3333;
  color: #ffffff;
  border-color: #cc3333;
}
.rq-icon-list ul {
  list-style: none;
  padding: 0;
  margin: 0;
  margin-bottom: 25px;
}
.rq-icon-list ul li {
  position: relative;
  padding-left: 30px;
  padding-top: 5px;
  padding-bottom: 5px;
  color: #666666;
}
.rq-icon-list ul li i {
  position: absolute;
  left: 0;
  top: 6px;
  font-size: 15px;
}
.rq-icon-box-single {
  position: relative;
  width: 100%;
  text-align: center;
}
.rq-icon-box-single:hover .rq-icon {
  box-shadow: 0 0 0 7px rgba(204, 51, 51, 0.2);
}
.rq-icon-box-single .rq-icon {
  width: 100px;
  height: 100px;
  /* background: #cc3333; */
  border-radius: 50%;
  line-height: 100px;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
  transition: all 0.3s ease;
  box-shadow: 0 0 0 5px rgba(204, 51, 51, 0.2);
  text-align: center;
  margin: 0 auto;
  margin-bottom: 25px;
}
.rq-icon-box-single .rq-icon img {
  width: 45px;
  margin: 0 auto;
}
/* .rq-icon-box-single h5 {
  text-transform: uppercase;
  font-family: "Montserrat-Regular";
  margin: 0;
  line-height: 24px;
} */
/* .rq-icon-box-single p {
  font-size: 13px;
} */

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
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="{{ url('landing-galeri')}}">
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
                  <h1 class="margin-my-3 font-s-60" data-aos="fade-up" data-aos-delay="0">
                   Contact 
                  </h1>
                  <h3 class="margin-my-3 font-s-20" data-aos="fade-up" data-aos-delay="0">
                  Contact us for any information you need
                  </h3>
                </div>
              </div>
            </div>

          </div>
        </section>
        <!-- End banner_about -->

        <!-- Start section_contact_four -->
        <section class="section_contact_five contact_six simplecontact_section margin-t-5 padding-t-7 margin-b-10">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div class="title_sections_inner">
                  <h2>Drop us message for any query</h2>
                </div>
                @foreach($kontak as $p) 
                <div class="information_agency d-md-flex">
                  <div class="item_data mr-5">
                    <p>Phone Number</p>
                    <a class="tel" href="">{{$p->phone}}</a>
                  </div>
                  <div class="item_data">
                    <p>Our Email</p>
                    <a class="tel" href="">{{$p->email}}</a>
                  </div>
                           
                </div>

                <h3 class="font-s-16 font-w-500 c-gray margin-t-4">Alamat</h3>
                <p class="font-s-16">{{$p->alamat}}</p>
                @endforeach

                <div class="scoail__media">
                  <a href="">
                    <i class="tio instagram"></i>
                  </a>
                </div>
              </div>

              <div class="col-lg-6 ml-auto">
              @if (\Session::has('success'))
                  <div class="alert alert-success">
                      <ul>
                          <li>{!! \Session::get('success') !!}</li>
                      </ul>
                  </div>
              @endif
                <div class="form_cc_four">
                  <form action="{{ url('/sendmail')}}" method="post"  class="row">
                  {{ csrf_field() }}
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control" >
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="nama" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" name="pesan" rows="7"></textarea>
                      </div>
                      <button type="submit" class="btn btn_md_primary bg-red rounded-8 c-white h-fit-content">
                        Send Message
                      </button>
                    </div>
                    
                  </form>
                </div>
              </div>
                <div class="circle-ripple">
                <div class="ripple ripple-1"></div>
                <div class="ripple ripple-2"></div>
                <div class="ripple ripple-3"></div>
                </div>
            </div>
            </div>
          </div>
        </section>
        <!-- End. section_contact_four -->
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

</body>

</html>