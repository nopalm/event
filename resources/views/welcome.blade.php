<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="icon" href="{{ asset('landing2/assets/loader.gif')}}"> -->
    <link rel="icon" type="image/png" href="{{ asset('landing2/assets/logo.png')}}" sizes="192x192">
    <title>Antasena</title>
    <!-- Main style -->
    <link rel="stylesheet" href="{{ asset('landing2/assets/dist/css/company.style.css')}}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="rq-page-loading">
      <div class="rq-loading-icon"><i class="ion-load-c"></i></div>
    </div>
    <div id="main-wrapper">
    @foreach($ab as $p)
      <header class="header home-header"
        style="background: url('{{asset('storage/'.$p->gambarab)}}') top center no-repeat; background-size: cover;">
        <div class="header-overlay"></div>
        <div class="headroom-sticky home-page-menu">
          <nav class="navbar navbar-default navbar-home">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                  data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./"><img src="{{ asset('landing2/assets/logo.png')}}" style="width:30%;" alt=""/></a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="./" >Home</a></li>
                  <li class=""><a href="{{ url('landing-isc')}}" >isc</a></li>
                  <li class=""><a href="{{ url('landing-fiqsi')}}" >FIQSI</a></li>
                  <li class=""><a href="{{ url('landing-osiris')}}" >OSIRIS</a></li>

                  <!-- <li class="login-register-link"><a href="registration.html">
                      <i class="icon_lock-open_alt"></i>Login or Register</a>
                  </li> -->
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
        </div>

      
        <div class="header-body">
          <div class="container">
            <h1 class="wow fadeInUp">{{ $p->judulab }}</h1>
            <p class="wow fadeInUp">{{ $p->tema }}</p>
            <p class="wow fadeInUp">{{ $p->tanggal }}</p>
          </div>
        </div> <!-- /.header-body -->
        @endforeach
      </header> <!-- end header -->

      @foreach($ab as $p)
      <div class="rq-page-content">
        <div class="rq-content-block gray-bg">
          <div class="container">
            <div class="rq-title-container text-center wow fadeIn">
              <h2 class="rq-title">{{ $p->judulab }} </h2>
              <p class="rq-subtitle">{{ $p->deskripsiab }}</p>
            </div>
          </div>
        </div>
        @endforeach
        <!-- /.rq-content-block category -->

        <div class="rq-content-block">
          <div class="container">
            <div class="rq-title-container text-center wow fadeIn">
              <!-- <h2 class="rq-title">Explore some companies in your area</h2>
              <p class="rq-subtitle">Here listing some companies that maybe you want to see</p> -->
            </div>
            <div class="row">
              <div class="rq-explore-company masonry-wrapper">
                
              @foreach($profile_isc as $p)
                <div class="rq-masonry-item item-width">
                  <a href="{{ url('landing-isc')}}">
                    <div class="rq-company-single wow fadeIn" class="img-circle">
                      <!-- <div class="rq-overlay"></div> -->
                      <img src="{{asset('storage/'.$p->gambar_prof)}}" style="width:100%; height:100%;" alt="" srcset="">
                      <!-- <span class="company-name">{{ $p->nama_prof }}</span> -->
                      <!-- <span class="location"><i class="icon_pin"></i>96 Moutain Ave St</span> -->
                      <!-- <span class="company-experties">{{ Str::limit($p->desc_prof, 50)}}</span> -->
                    </div>
                  </a>
                </div>
                @endforeach

                @foreach($profile_fiqsi as $p)
                <div class="rq-masonry-item item-width">
                  <a href="{{ url('landing-fiqsi')}}">
                    <div class="rq-company-single wow fadeIn">
                      <!-- <div class="rq-overlay"></div> -->
                      
                      <img src="{{asset('storage/'.$p->gambar_prof)}}"  style="width:100%; height:100%;" alt="" srcset="">
                      <!-- <span class="company-name">{{ $p->nama_prof }}</span> -->
                      <!-- <span class="location"><i class="icon_pin"></i>96 Moutain Ave St</span> -->
                      <!-- <span class="company-experties">{{ Str::limit($p->desc_prof, 50)}}</span> -->
                    </div>
                  </a>
                </div>
                @endforeach
                @foreach($profile_osiris as $p)
                <div class="rq-masonry-item item-width">
                  <a href="{{ url('landing-osiris')}}l">
                    <div class="rq-company-single wow fadeIn">
                      <!-- <div class="rq-overlay"></div> -->
                      <img src="{{asset('storage/'.$p->gambar_prof)}}"  style="width:100%; height:100%;" alt="" srcset="">
                      <!-- <span class="company-name">{{ $p->nama_prof }}</span> -->
                      <!-- <span class="location"><i class="icon_pin"></i>175 Orchard St</span> -->
                      <!-- <span class="company-experties">{{ Str::limit($p->desc_prof, 50)}}</span> -->
                    </div>
                  </a>
                </div>
              </div>
              @endforeach
              <!-- /.rq-explore-company -->
              <!-- <div class="rq-view-more">
                <a href="#">View All Companies</a>
              </div> -->
              
           <div>
            <img src="{{ asset('landing2/assets/New_Project.png')}}" class="img-responsive">
          </div>
            </div>
          </div>
        </div> <!-- /.rq-content-block feature company -->

        <!-- <div class="rq-content with-bg-img  wow fadeIn">
          <div class="rq-block-overlay"></div>
          <div class="container">
            <div class="rq-title-container text-center" >
             
            </div>
           <div>
             <img src="../company/New Project.png" class="img-responsive">
           </div>
          </div>
        </div> -->
         <!-- /.rq-content-block feature company -->

        <div class="rq-content-block wow fadeIn" data-wow-delay=".1s">
          <div class="container">
            <div class="rq-title-container text-center">
              <h2 class="rq-title">Media Partner</h2>
              <!-- <p class="rq-subtitle">Browse the latest articles from our blog.</p> -->
            </div>
            <div class="rq-interested-category">
              <div class="row">
              @foreach($partner as $p)
                <div class="col-md-3 col-sm-4">
                  <a href="listing-plain-heading.html">
                    <div class="rq-category-single wow fadeIn">
                      <img src="{{asset('storage/'.$p->gambarpart)}}" style="width:50%;">
                      <div class="rq-overlay"></div>
                      <span>{{ $p->name }}</span>
                    </div>
                  </a>
                </div>
              @endforeach
              </div>
            </div>
          </div>
        </div> <!-- /.rq-content-block home blog -->

        <div class="rq-partners-section">
          <div class="container">
            <h3 class="meta" style="color: black;">Sponsored</h3>
            <!-- <h2 class="rq-title">Sponsored</h2> -->
            <div class="partners-wrapper">
            @foreach($sponsor as $p)
              <div class="item">
                <div class="partner-single"><img src="{{asset('storage/'.$p->gambarspon)}}" style="width:50%;" alt="{{ $p->judulspon}}"></div>
              </div>
            @endforeach
            </div>
          </div>
        </div> <!-- /.rq-partners-section -->
      </div> <!-- /.page-content -->
    </div> <!-- end #main-wrapper -->

    <footer class="rq-footer">
      <div class="rq-main-footer">
      @foreach($kontak as $p) 
        <div class="container">
          <ul class="rq-footer-social">
            <li><a href="{{$p->wa}}" target="_blank">WhatsApp <i class="fa fa-whatsapp"></i></a></li>
            <li><a href="{{$p->ig}}" target="_blank">Instagram Antasena<i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      @endforeach
      </div> <!-- /.rq-main-footer -->
      <div class="rq-copyright-section">
      @foreach($kontak as $p) 
        <div class="container">
          <p>Copyright © 2021<a href="https://www.mbi-au.sch.id/newmbi/" target="_blank"> Ammanatul Ummah</a>. <i class="fa fa-circle"></i>
            {{$p->alamat}} <i class="fa fa-circle"></i><span>{{ $p->phone}}</span> </p>
		</div>
	  @endforeach
      </div> <!-- /.rq-copyright-section -->
    </footer>
    <script src="{{ asset('landing2/assets/dist/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('landing2/assets/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('landing2/assets/dist/js/fitvids.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('landing2/assets/dist/js/jquery.flexslider-min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('landing2/assets/dist/js/masonry.pkgd.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('landing2/assets/dist/js/selectize.min.js')}}"></script>
    <script src="{{ asset('landing2/assets/dist/js/jquery.sticky.js')}}" type="text/javascript"></script>
    <script src="{{ asset('landing2/assets/dist/js/wow.min.js')}}"></script>
    <script src="{{ asset('landing2/assets/dist/js/owl-carousel.js')}}"></script>
    <script src="{{ asset('landing2/assets/dist/js/scripts.js')}}" type="text/javascript"></script>
  </body>
</html>
