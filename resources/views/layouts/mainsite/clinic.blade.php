

<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Baringo Emergency response</title>
    <!-- for-meta-tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Health Plus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-meta-tags-->
    <link href="{{asset('dist/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('dist/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="{{asset('dist/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/cl.clinic')}}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <link href="//fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">
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
                    <h3><a class="navbar-brand" href="/"><span>B</span>aringo Mobile Clinics<i class="fa fa-plus" aria-hidden="true"></i> <p>Quality Care 4U</p></a></h3>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                <nav class="menu menu--sebastian">
                    <ul id="m_nav_list" class="m_nav menu__list">
                        <li class="m_nav_item menu__item" id="m_nav_item_1"> <a href="/" class="menu__link"> Home </a></li>
                        <li class="m_nav_item menu__item" id="moble_nav_item_2"> <a href="/diagnosis" class="menu__link"> Self Diagnosis </a> </li>
                        <li class="m_nav_item menu__item menu__item--current" id="moble_nav_item_6"> <a href="/clinic" class="menu__link"> Find a Clinic </a> </li>
                        <li class="m_nav_item menu__item" id="moble_nav_item_2"> <a href="/contact" class="menu__link"> Contact </a> </li>
                    </ul>
                </nav>

            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</div>
<!-- banner -->
<!-- banner1 -->
<div class="container">
    <!--team-2-->
    <div class="row">

        @foreach($clinics as $clinic)
        <div class="col-lg-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{{$clinic->name}}</h3>
                </div>
                <div class="panel-body">

                    <p>{{$clinic->location}}</p>
                    <hr>
                    <p><span class="glyphicon glyphicon-phone"></span>{{$clinic->phone}}</p>
                    <hr>
                    <p><span class="glyphicon glyphicon-map-marker"></span><a style="color: green" href="https://goo.gl/maps/YWqarbJMTNv" target="_blank">View on map</a></p>

                </div>
            </div>
        </div>

            @endforeach


    </div>
    <!--team-2-->

</div>
<!-- footer -->
<div class="footer">
    <div class="container">

        <div class="agile_footer_copy">
            <div class="w3agile_footer_grids">
                <div class="col-md-4 w3agile_footer_grid">
                    <h3>About Us</h3>
                    <p>We offer Mobile clinic medical care to Baringo county residents</span></p>
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
                        <li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a href="gallery.html">Department</a></li>
                        <li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a href="self.html">Self diagnosis</a></li>

                        <li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a href="contact.html">Contact Us</a></li>
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
                    <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_rss"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
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