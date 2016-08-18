<!doctype html>
<html lang="en">
    <head>
        
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome/css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap-social/bootstrap-social.css') }}">
        <link rel="stylesheet" href="{{ asset('css/zbowl.css') }}">
        <script src="{{ asset('js/jQuery/jquery-1.11.3.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.js') }}" type="text/javascript"></script>
        <script src="{{ asset('ckeditor/ckeditor.js') }}" type="text/javascript"></script>
        
        
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
                        <li class="active"><a href="/">Home</a></li>

                        <!-- Dropdown menu for military products -->
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

                        <!-- Dropdown menu for electronic products -->
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

                        <!-- Dropdown menu for created sites -->
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-hashup="true" aria-expanded="false">
                                Services<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="zDrop">
                                <li><a href="/pages">Overview</a></li>
                                <li><a href="/pages/erecycle">Electronic Recycling</a></li>
                                <li><a href="/pages/milequip">Buy/Sell Military Gear</a></li>
                                <li><a href="/pages/frecycle">Furniture Recycling</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>Welcome  </li>
                        <li><a href="{{ route('tasks.index') }}">Tasks</a></li>

                    </ul> 
                </div>
            </div>
        </nav>
        </div>
    <div id="maincontent" class="row">
        <div id="center" class="col-sm-8 col-lg-8 col-md-8 col-sm-push-3">

            <!-- this is main content to be displayed -->

            @yield('content')

        </div>
        <div id="leftgutter" class="col-sm-3 col-lg-3 col-md-3 col-sm-pull-8">
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
            <a href="">
                <img class="img-responsive" src="{{ asset('images/acu-trousers.png') }}" 
                    alt="" style="margin-left:auto; margin-right:auto">
            </a>
            </div>
            <div class="item" >
            <a href="">
                <img class="img-responsive" src="{{ asset('images/dell-19-lcd-monitor.png') }}"
                    alt="" style="margin-left:auto; margin-right:auto">
            </a>
            </div>
            <div class="item" >
            <a href="">
                <img class="img-responsive" src="{{ asset('images/flight-suit.png') }}"
                    alt="" style="margin-left:auto; margin-right:auto">
            </a>
            </div>
            <div class="item" >
            <a href="">
                <img class="img-responsive" src="{{ asset('images/oak-dresser.png') }}" 
                    alt="" style="margin-left:auto; margin-right:auto">
            </a>
            </div>
            <div class="item" >
            <a href="">
                <img class="img-responsive" src="{{ asset('images/gortex-combat-boots.png') }}" 
                    alt="" style="margin-left:auto; margin-right:auto">
            </a>
            </div>
                    <div class="item" >
            <a href="">
                <img class="img-responsive" src="{{ asset('images/flight-bag.png') }}" 
                    alt="" style="margin-left:auto; margin-right:auto">
            </a>
            </div>
       </div>
              <!-- Left and Right Carousel Arrows -->
        <a class="left carousel-control" href="#assCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#assCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
</div>
        </div>
    </div>
        <div id="footer" class="row" align="center">
            Army Surplus Sales<br/>
            1205 10th Ave<br/>
            Council Bluffs, IA 51501<br/>

            <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/Army-Surplus-Sales-181296658568677" target="_blank">
                <span class="fa fa-facebook"></span></a>

        </div>

        </div>
    </body>
</html>
