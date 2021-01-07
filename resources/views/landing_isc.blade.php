<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Isc</title>
	<link rel="icon" type="image/png" href="{{ asset('landing2/assets/logo.png')}}" sizes="192x192">
	</title>
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
      <header class="header">
        <div class="headroom-sticky">
          <nav class="navbar navbar-default ">
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
                  <li class=""><a href="./" >Home</a></li>
				  <li class="active"><a href="{{ url('landing-isc')}}" >Isc</a></li>
				  <li class=""><a href="{{ url('landing-fiqsi')}}" >FIQSI</a></li>
                  <li class=""><a href="{{ url('landing-osiris')}}" >OSIRIS</a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
        </div>
      </header> <!-- end header -->

      <div class="rq-page-content">
        <div class="rq-content-block">
		@foreach($profile_isc as $p)
          <div class="container">
            <div class="rq-title-container text-center" style="padding-bottom:0px;">
              <h2 class="rq-title">{{ $p->nama_prof}}</h2>
              <ol class="breadcrumb rq-subtitle">
                <li><a href="./">Home</a></li>
                <li class="active">Isc</li>
              </ol>
			</div>
		@endforeach
            <div class="rq-blog-listing">
			@foreach($profile_isc as $p)
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="all">
                  <div class="rq-listing-wrapper">
                    <div class="rq-listing-single wow fadeIn" data-wow-deley="0s">
                      <div class="rq-listing-standard-image-post">
                        <img src="{{asset('storage/'.$p->gambar_prof)}}" class="img-circle" style="width:25%;height:25%;" alt="">
                        <h2 class="rq-listing-title">{{$p->tema_prof}}</h2>
                        <div class="post-content">
                          <p><span class="first-line">{{ $p->desc_prof}}
                          </p>
						          </div>
            <a href="{{$p->g_form}}" target="_blank"> <button type="button" class="rq-btn rq-btn-primary btn-medium border-radius">Daftar<i class="arrow_right"></i></button></a>
                      </div>
                    </div>
              
                  </div>
                </div> <!-- /.tabe pane for all -->
              </div>
			@endforeach
            </div> <!-- /.rq-blog-listing -->
		  </div>
		  <div class="blog-grid">
              <div class="container">
                <div class="row">
                  <div class="col-md-12"> <!-- start of elements portion -->
                    <div id="rq-icon-box-portion" class="element-single wow fadeIn"> <!-- start of Icon Boxes -->
                      <h3 class="elements-title">Daftar Lomba</h3>
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
        </div> <!-- /.content-block -->
	  </div> <!-- /.page-content -->
	  <div class="rq-page-content">
        <div class="rq-content-block">
          <div class="container">
          <center><button type="button" class="rq-btn rq-btn-primary btn-large border-radius">Berkas Peserta<i class="arrow_right"></i></button></center>
           </div>
        </div>
    </div>
    </div> <!-- end #main-wrapper -->

    <footer class="rq-footer">
      <div class="rq-main-footer">
	  <div class="container">
          <ul class="rq-footer-social">
          
            <li><a href="#">WhatsApp <i class="fa fa-whatsapp"></i></a></li>
            @foreach($profile_isc as $p)
            <li><a href="{{$p->ig_prof}}" target="_blank">Instagram ISC<i class="fa fa-instagram"></i></a></li>
          @endforeach
          </ul>
        </div>
      </div> <!-- /.rq-main-footer -->
      <div class="rq-copyright-section">
	  @foreach($kontak as $p) 
        <div class="container">
          <p>Copyright © 2021 <a href="#">Ammanatul Ummah</a>. <i class="fa fa-circle"></i>
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
    <script src="{{ asset('landing2/assets/dist/js/owl-carousel.js')}}"></script>
    <script src="{{ asset('landing2/assets/dist/js/lity.min.js')}}"></script>
    <script src="{{ asset('landing2/assets/dist/js/wow.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('landing2/assets/dist/js/scripts.js')}}" type="text/javascript"></script>
  </body>
</html>
