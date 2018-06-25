

<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Baringo Emergency response</title>
    <!-- for-meta-tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-meta-tags-->
    <link href="{{asset('dist/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('dist/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="{{asset('dist/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <link href="//fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">

    @yield('header')
</head>

<body>
<div class="main" id="home">
    <!-- banner -->
    <div class="header_agileinfo">
        <div class="w3_agileits_header_text">
            <ul class="top_agile_w3l_info_icons">
                <li><i class="fa fa-home" aria-hidden="true"></i>Baringo County</li>
                <li class="second"><i class="fa fa-phone" aria-hidden="true"></i>+254 745 784 754</li>

                <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:baringoresponse@gmail.com">baringoresponse@gmail.com</a></li>
            </ul>


        </div>
        <div class="agileinfo_social_icons">
            <ul class="agileits_social_list">
                <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#" class="w3_agile_rss"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>

    <div class="header-bottom">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo">
                    {{--<h3><a class="navbar-brand" href="/"><span>B</span>aringo Mobile Clinics<i class="fa fa-plus" aria-hidden="true"></i> <p>Quality Care 4U</p></a></h3>--}}
                            <img src="dist/images/logo.png">
                </div>


            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                <nav class="menu menu--sebastian">
                    <ul id="m_nav_list" class="m_nav menu__list">

                        
                        <li class="m_nav_item menu__item" id="m_nav_item_1"> <a href="/" class="menu__link"> Home </a></li>
                        <li class="m_nav_item menu__item menu__item--current" id="moble_nav_item_6"> <a href="/diagnosis" class="menu__link"> Self Diagnosis </a> </li>
                        <li class="m_nav_item menu__item" id="moble_nav_item_2"> <a href="/contact" class="menu__link"> Contact</a> </li>

                    </ul>
                </nav>

            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</div>
{{--<!-- banner -->--}}
{{--<!-- banner1 -->--}}
{{--<div class="banner1 jarallax">--}}
    {{--<div class="container">--}}
    {{--</div>--}}
{{--</div>--}}

<div style="background-color: #000" class="services-breadcrumb">
    <div class="container">
        <ul>
            <li><a href="/">Home</a><i>|</i></li>
            <li style="color: #fff">Diagnose</li>
            @if(!Auth::guest())
            <li style="float: right; color: white; font-size: 15px; margin-left: 20px">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
            <li style="float: right; color: white; font-size: 15px">Welcome <strong style="color: red">{{Auth::user()->name}}</strong>!</li>
                @elseif(Auth::user()->admin==1)
                <li style="float: right; color: white; font-size: 15px; margin-left: 20px">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                <li style="float: right; color: white; font-size: 15px">Welcome <strong style="color: red">{{Auth::user()->name}}</strong>!</li>
                <li><a href="/home" style="color: white">Admin Panel</a></li>

                @endif


        </ul>
    </div>
</div>
<!-- //banner1 -->

@yield('content')

<hr>

<a class="btn btn-danger btn-lg center-block" style="margin-top: 1px;margin-right: 15px; margin-left: 15px;margin-bottom: 10px;" data-toggle="modal" href="#modal-id">Request Medical Attention</a>
<div class="modal fade" id="modal-id">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Mobile clinic Contacts</h4>
            </div>
            <div class="modal-body" style="background-color: black">
                <div class="card-columns" style="margin-left: 10px">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="holder.js/100%x180/" alt="">
                        <div class="card-block" style="color: red">
                            <h4 class="card-title">Baringo town clinic</h4>
                            <p class="card-text"><strong>Mobile: </strong>+254 725 589658</p>
                            <p class="card-text"><strong>Mobile: </strong>+254 702 548867</p>
                            <p class="card-text"><strong>Fax: </strong>+254 698 454245</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top img-fluid" src="holder.js/100%x180/" alt="">
                        <div class="card-block" style="color: red">
                            <h4 class="card-title">Bareswa clinic</h4>
                            <p class="card-text"><strong>Mobile: </strong>+254 726 564854</p>
                            <p class="card-text"><strong>Mobile: </strong>+254 703 369854</p>
                            <p class="card-text"><strong>Fax: </strong>+254 845 454512</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<hr>

<!-- footer -->
<div class="footer">
    <div class="container">

        <div class="agile_footer_copy">
            <div class="w3agile_footer_grids">
                <div class="col-md-4 w3agile_footer_grid">
                    <h3>About Us</h3>
                    <p>We offer Mobile clinic medical care to Baringo county residents</p>
                </div>
                <div class="col-md-4 w3agile_footer_grid">
                    <h3>Contact Info</h3>
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Uzuri towers, <span>Baringo town.</span></li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="">Baringomobile@gmail.com</a></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>+254 723 456345</li>
                    </ul>
                </div>
                <div class="col-md-4 w3agile_footer_grid w3agile_footer_grid1">
                    <h3>Navigation</h3>
                    <ul>
                        <li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a href="/">Home</a></li>
                        <li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a href="/diagnosis">Self diagnosis</a></li>

                        <li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a href="/Contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="w3_agileits_copy_right_social">
            <div class="col-md-6 agileits_w3layouts_copy_right">
                <p>&copy; 2018 Mobile Clinics. All rights reserved | Design by <a href="">Peter Igogo</a></p>
            </div>
            <div class="col-md-6 w3_agile_copy_right">
                <ul class="agileits_social_list">
                    <font size="+5">
                    <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_rss"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                    </font>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //footer -->
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- bootstrap-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                Health Plus
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

        </div>
    </div>
    <!-- //bootstrap-pop-up -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{asset('dist/js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('dist/js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <script src="{{asset('dist/js/jarallax.js')}}"></script>
    <script src="{{asset('dist/js/SmoothScroll.min.js')}}"></script>
    <script type="text/javascript">
        /* init Jarallax */
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })
    </script>

    <script src="{{asset('dist/js/bootstrap.js')}}"></script>
    <!-- //for bootstrap working -->
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <!-- //here ends scrolling icon -->
</body>
</html>