<!doctype html>
<html lang="en">
    <head>

        <title>@yield('title')</title>

        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome/css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap-social/bootstrap-social.css') }}">
        <link rel="stylesheet" href="{{ asset('css/zbowl.css') }}">
        


    </head>
    <body>
    <div id="wrapper" class="container">
    <div id="topheader" class="row">
        <img class="img-responsive" src="{{ asset('images/logo.png') }}" width="562" height="150" alt="Army Surplus Sales"/>
    </div>
    <div id="horizontalnav" class="row">
        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#assNav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"> </span>
                        <span class="icon-bar"> </span>
                        <span class="icon-bar"> </span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="assNav">

                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/pages" class="horizontalnav" >Overview</a></li>
                        <li><a href="/pages/milequip" class="horizontalnav">Buy/Sell Military Gear</a></li>
                        <li><a href="/pages/erecycle" class="horizontalnav">Electronic Recycling</a></li>
                        <li><a href="/pages/frecycle" class="horizontalnav">Furniture Recycling</a></li>
                        {{--<!-- Dropdown Menus --!>
                        <!-- Dropdown menu for military products --!>
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-hashup="true" aria-expanded="false">
                                Military Equipment<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="zDrop">
                                <li><a href="">Tops</a></li>
                                <li><a href="">Bottoms</a></li>
                                <li><a href="">Boots</a></li>
                                <li><a href="">Tents</a></li>
                            </ul>
                        </li>

                        <!-- Dropdown menu for electronic products --!>
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-hashup="true" aria-expanded="false">
                                Electronics<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="zDrop">
                                <li><a href="">Desktops</a></li>
                                <li><a href="">Laptops</a></li>
                                <li><a href="">Monitors</a></li>
                                <li><a href="">Servers</a></li>
                                <li><a href="">Hardware</a></li>
                            </ul>
                        </li>

                        <!-- Dropdown menu for created sites --!>
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-hashup="true" aria-expanded="false">
                                Services<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="zDrop">
                                <li><a href="/pages" class="horizontalnav" >Overview</a></li>
                                <li><a href="/pages/erecycle" class="horizontalnav">Electronic Recycling</a></li>
                                <li><a href="/pages/milequip" class="horizontalnav">Buy/Sell Military Gear</a></li>
                                <li><a href="/pages/frecycle" class="horizontalnav">Furniture Recycling</a></li>
                            </ul>
                        </li>
                        --}}
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li class="navbar-text">Welcome!</li>
                        <li><a href="/create">Create Page</a></li>


                    </ul>
                </div>
            </div>
        </nav>
        </div>
        <!-- main body -->
    <div id="maincontent" class="row">
        <div id="center" class="col-sm-8 col-lg-8 col-md-8 col-sm-push-4">
            <div class="panel panel-default">
                <div  class="panel panel-success panel-heading">
                <!-- this is main content to be displayed -->
                    @yield('header')
                </div>
                <div class="panel panel-body">
                    @yield('body')
                </div>
            </div>
        </div>


        <div id="leftgutter" class="col-sm-4 col-lg-4 col-md-4 col-sm-pull-8">
            <!--Start of the Carousel-->
    <div id="assCarousel" class="carousel slide" data-ride="carousel">
        <!--Carousel Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#assCarousel" data-slide-to="0" class="active" ></li>
            <li data-target="#assCarousel" data-slide-to="1" ></li>
            <li data-target="#assCarousel" data-slide-to="2" ></li>
            <li data-target="#assCarousel" data-slide-to="3" ></li>
            <li data-target="#assCarousel" data-slide-to="4" ></li>
            <li data-target="#assCarousel" data-slide-to="5" ></li>
        </ol>
    <!--Carousel Items -->

        <div class="carousel-inner" role="listbox">
            <div class="item active" >
            
                <img class="img-responsive" src="{{ asset('images/acu-trousers.png') }}"
                    alt="" style="margin-left:auto; margin-right:auto">
            
            </div>
            <div class="item" >
            
                <img class="img-responsive" src="{{ asset('images/dell-19-lcd-monitor.png') }}"
                    alt="" style="margin-left:auto; margin-right:auto">
            
            </div>
            <div class="item" >
            
                <img class="img-responsive" src="{{ asset('images/flight-suit.png') }}"
                    alt="" style="margin-left:auto; margin-right:auto">
            
            </div>
            <div class="item" >
            
                <img class="img-responsive" src="{{ asset('images/oak-dresser.png') }}"
                    alt="" style="margin-left:auto; margin-right:auto">
            
            </div>
            <div class="item" >
            
                <img class="img-responsive" src="{{ asset('images/gortex-combat-boots.png') }}"
                    alt="" style="margin-left:auto; margin-right:auto">
            
            </div>
                    <div class="item" >
            
                <img class="img-responsive" src="{{ asset('images/flight-bag.png') }}"
                    alt="" style="margin-left:auto; margin-right:auto">
            
            </div>
       </div>
              

</div>


        </div>
    </div>
        <div id="footer" class="row" align="center">
          <div id="footerwrap">

<div class="container">
    <div class="col-lg-6">
        <h3>Contact Us</h3>
        <b>Office:</b>
        <p>
          Army Surplus Sales<br/>
                      1205 10th Ave<br />
                      Council Bluffs, IA 51501
        </p>
        <div><b style="width:55px;display:inline-block;">Phone: </b>  &nbsp;<a href="tel:+17123228399">(712) 322-8339</a></div>
        <div style="margin-top:10px;"><b style="width:55px;display:inline-block;">Email: </b> &nbsp;<a href="mailto:armysurplussales@yahoo.com">armysurplussales@yahoo.com</a></div>

        <div style="margin-top:5px;"><a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/Army-Surplus-Sales-181296658568677" target="_blank">
            <span class="fa fa-facebook"></span></a></div>
    </div>

    <div class="col-lg-6">
      <div class="flexible-container">
        <br>
      <iframe frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBDLs-iQm3tTuRh9Ro1QFAU6AVx-zrpO9U&q=Army+Surplus+Sales,1205+10th+Ave,Council+Bluffs+IA+51501" allowfullscreen>
      </iframe>
    </div>{{-- iframe flex --}}
      <br>
    </div>
</div>

</div> {{-- footerwrap --}}
<div id="c">
    <div class="container">
        <p>
            <strong>Copyright &copy; 2016. Powered by <a href="http://ww2.zidors.duckdns.org"><b>Zidros Consulting</b></a>
        </p>
    </div>
</div>
        </div>

        </div>
        <script src="{{ asset('js/jQuery/jquery-1.11.3.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.js') }}" type="text/javascript"></script>
        <script src="{{ asset('ckeditor/ckeditor.js') }}" type="text/javascript"></script>
    </body>
</html>
