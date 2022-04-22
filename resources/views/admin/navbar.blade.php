<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Beyond Property</title>
        <meta name="description" content="GARO is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="{{asset('beyond/assets/css/normalize.css')}}">
        <link rel="stylesheet" href="{{asset('beyond/assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('beyond/assets/css/fontello.css')}}">
        <link href="{{asset('beyond/assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet">
        <link href="{{asset('beyond/assets/fonts/icon-7-stroke/css/helper.css')}}" rel="stylesheet">
        <link href="{{asset('beyond/assets/css/animate.css')}}" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="{{asset('beyond/assets/css/bootstrap-select.min.css')}}"> 
        <link rel="stylesheet" href="{{asset('beyond/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('beyond/assets/css/icheck.min_all.css')}}">
        <link rel="stylesheet" href="{{asset('beyond/assets/css/price-range.css')}}">
        <link rel="stylesheet" href="{{asset('beyond/assets/css/owl.carousel.css')}}">  
        <link rel="stylesheet" href="{{asset('beyond/assets/css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{asset('beyond/assets/css/owl.transitions.css')}}">
        <link rel="stylesheet" href="{{asset('beyond/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('beyond/assets/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('beyond/assets/css/lightslider.min.css')}}">
        
        
    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->

        <div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8  col-xs-12">
                        <div class="header-half header-call">
                            <p>
                                <span><i class="pe-7s-call"></i> +1 234 567 7890</span>
                                <span><i class="pe-7s-mail"></i> your@company.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                        <div class="header-half header-social">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                {{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> --}}
                                {{-- <li><a href="#"><i class="fa fa-vine"></i></a></li> --}}
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                {{-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li> --}}
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
        <!--End top header -->

        <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="{{asset('beyond/assets/img/Beyondlogo.png')}}" width="130px" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        {{-- <button class="navbar-btn nav-button wow bounceInRight login" onclick=" window.open('{{ route('login') }}')" data-wow-delay="0.4s">Login</button> --}}
                        {{-- <button class="navbar-btn nav-button wow fadeInRight" onclick=" window.open('submit-property.html')" data-wow-delay="0.5s">Submit</button> --}}
                    
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                        {{-- <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="index.html" class="dropdown-toggle active" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Home <b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                <li>
                                    <a href="index-2.html">Home Style 2</a>
                                </li>
                                <li>
                                    <a href="index-3.html">Home Style 3</a>
                                </li>
                                <li>
                                    <a href="index-4.html">Home Style 4</a>
                                </li>
                                <li>
                                    <a href="index-5.html">Home Style 5</a>
                                </li>

                            </ul>
                        </li> --}}

                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="/index">Home</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="{{route('property.create')}}">Create_Property</a></li>
                        {{-- <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="property.html">Property</a></li> --}}
                        {{-- <li class="dropdown yamm-fw" data-wow-delay="0.1s">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Template <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    
                                </li>
                            </ul>
                        </li> --}}

                        <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="{{route('property.index')}}">Listing</a></li>
                        
                          <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                
                                    <li class="nav-item">
                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                               {{ Auth::user()->name }} | {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        
                                    </li>
                                
                                @endguest
                        
                    </ul>


                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        
        <!-- End of nav bar -->

        
