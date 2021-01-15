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
    content="Welcome to Rakon Multi-Purpose HTML5 Templates RTL Supported, built with HTML, JS, SASS, CSS3 and jQuery, RTL Supported, Easy User Experience and Responsive to all devices" />
  <meta name="keywords"
    content="HTML, CSS, JavaScript, Bootstrap, jQuery, Rakon, Themeforest, Template, envato, SASS, SCSS, HTML5, landing page, SaaS Product, SaaS Modern,  MultiPurpose, Crypto, Currency, ICO, Hosting, Agency, Mobile, App, Interior, Charity" />
  <meta name="author" content="Rakon - Creative Multi-Purpose HTML5 Templates" />

  <title>Antasena</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="{{  asset('landing2/assets/logo.png')}}" type="image/x-icon" />
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
            <a class="navbar-brand" href="../../index.html">
              <img class="logo" src="{{ asset('landing/assets/img/logo.svg')}}" alt="logo" />
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
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="#">
                          ISC
                        </a>
                      </li>

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="#">
                          Fiqsi
                        </a>
                      </li>

                      <li class="dropdown-submenu dropdown-hover"><a
                          class="dropdown-item dropdown-toggle dropdown_menu d-flex justify-content-between" href="#">
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
                    <h2 class="c-dark">{{ $p->nama_prof }}</h2>
                    <p class="c-gray">
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
                    <h2 class="c-dark">{{ $p->nama_prof }}</h2>
                    <p class="c-gray">
                    {{ $p->tema_prof }}
                    </p>
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
                    <h2 class="c-dark">{{ $p->nama_prof }}</h2>
                    <p class="c-gray">
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
                      <img src="{{asset('storage/'.$p->gambarab)}}"  style="max-width:500px;width:100%;"/>
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
        <!-- Start Tabs Service -->
        <section class="tabs_works tabs_service margin-b-6">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-lg-5">
                <div class="title_sections_inner margin-b-5">
                  <h2>Maskot </h2>
                </div>
              </div>
            </div>
            <!-- Start Tabs -->
            <div class="row">
              <div class="col-md-10 col-lg-4">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-ss1-tab" data-toggle="pill" href="#v-pills-ss1" role="tab"
                    aria-controls="v-pills-ss1" aria-selected="true">
                    <h4 class="margin-b-2 font-s-18">Manage your portfolio</h4>
                    <p>
                      Buy and sell popular digital currencies, keep track of
                      them in the one place.
                    </p>
                  </a>
                  <a class="nav-link" id="v-pills-ss2-tab" data-toggle="pill" href="#v-pills-ss2" role="tab"
                    aria-controls="v-pills-ss2" aria-selected="false">
                    <h4 class="margin-b-2 font-s-18">Vault protection</h4>
                    <p>
                      For added security, store your funds in a vault with
                      time delayed withdrawals.
                    </p>
                  </a>
                  <a class="nav-link" id="v-pills-ss3-tab" data-toggle="pill" href="#v-pills-ss3" role="tab"
                    aria-controls="v-pills-ss3" aria-selected="false">
                    <h4 class="margin-b-2 font-s-18">Mobile apps</h4>
                    <p>
                      Stay on top of the markets with the Coinbase app for
                      <span class="c-blue">Android</span> or
                      <span class="c-blue">iOS</span>.
                    </p>
                  </a>
                </div>
              </div>
              <div class="col-md-10 col-lg-7 ml-auto mt-md-auto">
                <div class="tab-content img--tabs slide_bottom" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-ss1" role="tabpanel"
                    aria-labelledby="v-pills-ss1-tab">
                    <img class="--img" src="{{ asset('landing/isc-maskot.png')}}" style="max-width:500px;width:100%;" alt="" />
                  </div>
                  <div class="tab-pane fade" id="v-pills-ss2" role="tabpanel" aria-labelledby="v-pills-ss2-tab">
                    <img class="--img" src="{{ asset('landing/fiqsi-maskot.png')}}" style="max-width:500px;width:100%;" alt="" />
                  </div>
                  <div class="tab-pane fade" id="v-pills-ss3" role="tabpanel" aria-labelledby="v-pills-ss3-tab">
                    <img class="--img" src="{{ asset('landing/osiris-maskot.png')}}" style="max-width:500px;width:100%;" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <!-- End Tabs -->
          </div>
        </section>
        <!-- End. Tabs Service -->

        <!-- Start Testimonial -->
        <section class="testimonial_demo2 padding-t-12">
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="item_mmon">
                  <div class="profile_user">
                    <img src="{{ asset('landing/assets/img/persons/14.png')}}" />
                    <div class="categ">
                      <span>Project Manager</span>
                    </div>
                  </div>
                  <div class="info_persons">
                    <p>
                      "Mobiteam created our full Visual Brand Identity and our
                      online store. We worked together on this project for 4
                      months and I have exclusively positive feedback. We were
                      far from IT and development."
                    </p>
                    <h5>Tommy Reaves</h5>
                    <span>Rexona</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="item_mmon">
                  <div class="profile_user">
                    <img src="{{ asset('landing/assets/img/persons/13.png')}}" />
                    <div class="categ">
                      <span>CEO Founder</span>
                    </div>
                  </div>
                  <div class="info_persons">
                    <p>
                      "We looked for an ambitious team to join us for this
                      realization journey. Right from the beginning, we were
                      impressed how Marcel and his team carefully and
                      proactively read and commented on our proposal."
                    </p>
                    <h5>Lydia James</h5>
                    <span>orino Stu.</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End. Testimonial -->

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

        <!-- Start Agency About -->
        <section class="about_agency padding-t-12" id="About">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <div class="title_sections mb-0">
                  <div class="before_title">
                    <span>Digital Agency</span>
                    <span class="c-blue">People</span>
                  </div>
                  <h2>The brightest minds in digital, at your service 👋</h2>
                  <p>
                    Coinbase has a variety of features that make it the best
                    place to start trading
                  </p>
                  <p>
                    You’re unique. A one-off. A fascinating work in progress.
                    Your life isn’t off-the-shelf. So should your home be?
                  </p>
                  <p>
                    We say no. It’s why you can change the size, colours and
                    materials of nearly every design. And we’re here to help
                    you style your home, your way. And although styling advice
                    is always free in our stores, this month, you can enjoy
                    the full in-home experience at no cost.
                  </p>
                  <p>
                    Live a life as individual as you are. Live ekstraordinær.
                  </p>
                  <img class="inside_pic" src="{{ asset('landing/assets/img/agency/98701.jpg')}}" />
                </div>
              </div>
              <div class="col-lg-5 ml-auto">
                <div class="pro_agency">
                  <img src="{{ asset('landing/assets/img/agency/0976401.jpg')}}" />
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Edn. Agency About -->

        <!-- strat Blog -->
        <section class="blog_agency margin-t-5 padding-t-12" id="Blog">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-lg-3">
                <div class="title_sections">
                  <h2>We Write Insightful Stuff</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 mb-3 mb-lg-0 items">
                <a href="#" class="item_art">
                  <div class="item_top">
                    <div class="date_mo">
                      <h5>31</h5>
                      <span>Mar</span>
                    </div>
                    <div class="item_cai">
                      <span class="c-red">Popular Posts</span>
                      <div class="name_pub">By John Smith</div>
                    </div>
                  </div>
                  <img src="../../assets/img/agency/097422.png" />
                  <div class="ga_info">
                    <h4>
                      Should Your Brand ride the Coronavirus Wave to drive
                      gains?
                    </h4>
                    <div class="tags__bottom">
                      <span>#Google </span>
                      <span>#Amazon</span>
                      <span>#Design</span>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 mb-3 mb-lg-0 items">
                <a href="#" class="item_art">
                  <div class="item_top">
                    <div class="date_mo">
                      <h5>4</h5>
                      <span>Jun</span>
                    </div>
                    <div class="item_cai">
                      <span>Design</span>
                      <div class="name_pub">By John Smith</div>
                    </div>
                  </div>
                  <img src="../../assets/img/agency/654.png" />
                  <div class="ga_info">
                    <h4>
                      Should Your Brand ride the Coronavirus Wave to drive
                      gains?
                    </h4>
                    <div class="tags__bottom">
                      <span>#Google </span>
                      <span>#Amazon</span>
                      <span>#Design</span>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 mb-3 mb-lg-0 items">
                <a href="#" class="item_art is_image">
                  <img src="../../assets/img/agency/09874.png" />
                </a>
              </div>
              <div class="col-lg-4 mb-3 mb-lg-0 items">
                <a href="#" class="item_art is_image">
                  <img src="../../assets/img/agency/06541.png" />
                </a>
              </div>
              <div class="col-lg-4 mb-3 mb-lg-0 items">
                <a href="#" class="item_art">
                  <div class="item_top">
                    <div class="date_mo">
                      <h5>9</h5>
                      <span>Jun</span>
                    </div>
                    <div class="item_cai">
                      <span>Developer</span>
                      <div class="name_pub">By John Smith</div>
                    </div>
                  </div>
                  <img src="../../assets/img/agency/0654.png" />
                  <div class="ga_info">
                    <h4>
                      Should Your Brand ride the Coronavirus Wave to drive
                      gains?
                    </h4>
                    <div class="tags__bottom">
                      <span>#Google </span>
                      <span>#Amazon</span>
                      <span>#Design</span>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 mb-3 mb-lg-0 items">
                <a href="#" class="item_art">
                  <div class="item_top">
                    <div class="date_mo">
                      <h5>13</h5>
                      <span>Jun</span>
                    </div>
                    <div class="item_cai">
                      <span>Illustration</span>
                      <div class="name_pub">By John Smith</div>
                    </div>
                  </div>
                  <img src="../../assets/img/agency/11654.png" />
                  <div class="ga_info">
                    <h4>
                      Should Your Brand ride the Coronavirus Wave to drive
                      gains?
                    </h4>
                    <div class="tags__bottom">
                      <span>#Google </span>
                      <span>#Amazon</span>
                      <span>#Design</span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- End. Blog -->

      </main>
      <!-- end main -->
    </div>
    <!-- [id] content -->

    <!-- footr -->
    <footer class="defalut-footer foot_demo3 light margin-t-12 padding-py-8">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="item_about">
              <a class="logo" href="agency.html">
                <img src="../../assets/img/logo.svg" alt="" />
              </a>
              <p>
                Rakon is a simple, elegant, and secure way to build your
                bitcoin and crypto portfolio.
              </p>
              <div class="address">
                <span>1989 Don Jackson Lane</span>
                <span>Call us: <a href="tel:8089569599">808-956-9599</a></span>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-6 col-lg-2">
            <div class="item_links">
              <h4>Social</h4>
              <a class="nav-link" href="">Blog</a>
              <a class="nav-link" href="">Facebook</a>
              <a class="nav-link" href="">Twitter</a>
              <a class="nav-link" href="">Instagram</a>
            </div>
          </div>
          <div class="col-6 col-md-6 col-lg-2">
            <div class="item_links">
              <h4>Company</h4>
              <a class="nav-link" href="">About</a>
              <a class="nav-link" href="">Affiliates</a>
              <a class="nav-link" href="">Careers</a>
              <a class="nav-link" href="">Legal & Privacy</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mt-4 mt-lg-0">
            <div class="item_subscribe">
              <h4>Subscribe</h4>
              <p>
                Subscribe to get the latest<br />
                news form us
              </p>
              <form class="form-row">
                <div class="col-md-11 form-group subscribebtn">
                  <div class="item_input">
                    <input type="email" class="form-control rounded-8" id="exampleInputEmail1"
                      placeholder="Enter email address" aria-describedby="emailHelp" />
                    <button type="button" class="btn ripple_circle scale rounded-8 btn_subscribe">
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
              <option>French</option>
              <option selected>English</option>
              <option>Arabic</option>
              <option>Russian</option>
            </select>
          </div>
        </div>
        <div class="col-12 text-center padding-t-4">
          <div class="copyright">
            <span>© 2020
              <a href="https://themeforest.net/user/orinostu" target="_blank">OrinoStu.</a>
              All Right Reseved</span>
          </div>
        </div>
      </div>
    </footer>
    <!-- End. -->

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

    <!-- Start Section Loader -->
    <section class="loading_overlay">
      <div class="loader_logo">
        <img class="logo" src="{{ asset('landing/assets/img/logo.svg')}}" />
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