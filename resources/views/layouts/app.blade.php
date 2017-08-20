<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/panacea.css') }}" rel="stylesheet">
             
              <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body>
    <header class="wrapper-header">
        <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4"style=" margin:10px 0px 10px 0px">
            <a href="/"><img src="image/LOGO ALONE SILVER.png" alt="logo" style="width:20%;height:30%"></a>                </div>
          <div class="col-lg-8 col-md-8 col-sm-8 ">
              <div class="info pull-right">
               <p><i class="fa fa-phone"></i> Phone (Tanzania) : +255 713-518549</p>
                  <p><i class="fa fa-envelope"></i> E-mail : gchami@techniks.co.tz</p>
              </div>
            </div>
            </div>
        </div>
    </header>
<div id="sticky-ancho" ></div>
<nav id="sticky" class="navbar navbar-inverse" role="navigation" >
      <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav ">
                   <li class="dropdown">
                               <a class="dropdown-toggle" href="/training">TRAINING/EVENTS<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="/generalawareness">General Awareness</a></li>
                                  <li><a href="/securitygovernance">Security Governance</a></li>
                                 
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="dropdown-toggle" href="/service">SERVICE <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="/riskmanagement">Risk Management</a></li>
                                  <li><a href="/securityassessment">Security Assessment</a></li>
                                  <li><a href="/penetrationtesting">Penetration testing</a></li>
                                  <li><a href="/compliencestandards">Complience to standards</a></li>
                                  <li><a href="/compliencereguratory">Complience to Reguratory</a></li>

                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="dropdown-toggle" href="/tools">TOOLS<span class="caret"></span></a>
                              
                          </li>
                          
                          <li class="dropdown">
                              <a class="dropdown-toggle" href="/securitystandards">SECURITY STANDARDS<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="/iso">ISO 27001</a></li>
                                  <li><a href="/pci">PCI DSS</a></li>
                                
                              </ul>
                          </li>
                          <li>
                              <form class="navbar-form">
                      <div class="form-group" style="margin-left:50px;">
                          <input type="text" class="form-control" placeholder="Search">
                      </div>
                      <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </form>
                          </li>

                          <li>
                          <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name .' '.Auth::user()->lastname}} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div></li>
                            </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div id="app">
       

        @yield('content')
    </div>

    <footer>
      <div class="container">
          <div class="row">
              <div class="col-md-4 col-sm-6 footer-col">
                  <div class="logofooter"> Panacea InfoSec</div>
                  <p>For the best security services </p>
                  <p><i class="fa fa-map-pin"></i> P.O. Box 55132, Dar es Salaam, Tanzania</p>
                  <p><i class="fa fa-phone"></i> Phone (Tanzania) : +255 713-518549</p>
                  <p><i class="fa fa-envelope"></i> E-mail : gchami@techniks.co.tz</p>

              </div>
              <div class="col-md-4 col-sm-6 footer-col">
                  <h6 class="heading7">GENERAL LINKS</h6>
                  <ul class="footer-ul">
                  <li><a href="about.html">About us</a></li>
                   <li><a href="contact.html">Contact us</a></li>
                       <li><a href="#"> Privacy Policy</a></li>
                      <li><a href="#"> Terms & Conditions</a></li>
                      <li><a href="#"> Client Gateway</a></li>
                      <li><a href="#"> Ranking</a></li>
                      <li><a href="#"> Case Studies</a></li>
                      <li><a href="#"> Frequently Ask Questions</a></li>
                  </ul>
              </div>

              <div class="col-md-4 col-sm-6 footer-col">
                  <h6 class="heading7">Social Media</h6>
                  <ul class="footer-social">
                      <li><i class="fa fa-linkedin social-icon linked-in" aria-hidden="true"></i>Linkedin</li>
                      <li><i class="fa fa-facebook social-icon facebook" aria-hidden="true"></i>Facebook</li>
                      <li><i class="fa fa-twitter social-icon twitter" aria-hidden="true"></i>Twitter</li>
                      <li><i class="fa fa-google-plus social-icon google" aria-hidden="true"></i>Google+</li>
                  </ul>
              </div>
          </div>
      </div>
  </footer>
  <div class="copyright">
      <div class="container">
              <p >© 2017 - All Rights with TYDInnovationIncubatordeveloper</p>
      </div>
  </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/jquery.js') }}"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/panacea.js') }}"></script>




</body>
</html>
