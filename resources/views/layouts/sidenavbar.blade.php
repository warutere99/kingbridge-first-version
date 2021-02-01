<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{config('app.name','KingShip Properies')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{ asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">King<span>Ship Properties</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="" class="nav-link">About</a></li>
                <li class="nav-item"><a href="" class="nav-link">Services</a></li>
                <li class="nav-item "><a href="" class="nav-link">Post An AD</a></li>
                
                @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.loginform') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('user.registerform'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.registerform') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->firstname }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
              <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="icon-comments"></i>
                  <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                      <img src="images/Person2.jpg" alt="User Avatar" class="avatar">
                      <div class="media-body">
                        <h5 class="dropdown-item-title">
                          Flash 
                          <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                        </h5>
                        <p class="text-sm">Call me whenever you can...</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                      </div>
                    </div>
                    <!-- Message End -->
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                      <img src="images/person3.jpg" alt="User Avatar" class="avatar">
                      <div class="media-body">
                        <h5 class="dropdown-item-title">
                          Joel 
                          <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                        </h5>
                        <p class="text-sm">I got your message bro</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                      </div>
                    </div>
                    <!-- Message End -->
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                      <img src="images/person4.jpg" alt="User Avatar" class="avatar">
                      <div class="media-body">
                        <h5 class="dropdown-item-title">
                          Kenneth
                          <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                        </h5>
                        <p class="text-sm">The subject goes here</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                      </div>
                    </div>
                    <!-- Message End -->
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
              </li>
              
	
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->



<div class="row ml-auto">
    <div class="col-md-2.5 sidebar">
        <div class="avatar">
            <img src="images/person1.jpeg" alt="Avatar" class="avatar">
        </div>
        <nav class="ftco-navbar navbar-nar nav-pills">
            <ul class="sidebar">
                <li class="nav-item"><a href="" class="nav-link ">Insights</a></li>
                <li class="nav-item"><a href="{{route('profile_setting')}}" class="nav-link">Profile Settings</a></li>
                <li class="nav-item"><a href="{{route('profile_setting')}}" class="nav-link ">My Ads</a></li>
                <li class="nav-item"><a href="{{route('profile_setting')}}" class="nav-link active-sidebar">Messages</a></li>
                <li class="nav-item"><a href="{{route('profile_setting')}}" class="nav-link">Payments</a></li>
                <li class="nav-item"><a href="{{route('profile_setting')}}" class="nav-link">My Favourites</a></li>
                <li class="nav-item"><a href="{{route('profile_setting')}}" class="nav-link ">Privacy Settings</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
            </ul>
        </nav>
    </div>

    @yield('content')


    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2"><a href="#" class="logo">King<span>Ship Properties</span></a></h2>
                <p>The leading online platform that sells both Vehicles and Houses.</p>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 ml-md-5">
                <h2 class="ftco-heading-2">Information</h2>
                <ul class="list-unstyled">
                  <li><a href="#" class="py-2 d-block">About</a></li>
                  <li><a href="#" class="py-2 d-block">Services</a></li>
                  <li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
                  <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                  <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
               <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Customer Support</h2>
                <ul class="list-unstyled">
                  <li><a href="#" class="py-2 d-block">FAQ</a></li>
                  <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                  <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                  <li><a href="#" class="py-2 d-block">How it works</a></li>
                  <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Have a Questions?</h2>
                  <div class="block-23 mb-3">
                    <ul>
                      <li><span class="icon icon-map-marker"></span><span class="text">Nandi Road, Karen, Nairobi, Kenya,at Nandi Road, Karen.</span></li>
                      <li><a href="#"><span class="icon icon-phone"></span><span class="text">+254 725122126</span></a></li>
                      <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@KingShip.com</span></a></li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
  
              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>
      </footer>
      
    
  
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
  
  <script src="{{ asset('js/jquery.min.js')}}"></script>
  <script src="{{ asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ asset('js/popper.min.js')}}"></script>
  <script src="{{ asset('js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('js/aos.js')}}"></script>
  <script src="{{ asset('js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
  <script src="{{ asset('js/jquery.timepicker.min.js')}}"></script>
  <script src="{{ asset('js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('js/google-map.js')}}"></script>
  <script src="{{ asset('js/main.js')}}"></script>
      
    </body>
  </html>