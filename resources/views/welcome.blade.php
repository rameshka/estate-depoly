<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="_token" content="{{csrf_token()}}">
    <!-- Document Title -->
    <title>HOMES.lk</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- FontsOnline -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900,300,100' rel='stylesheet'
          type='text/css'>

    <!-- StyleSheets -->
    <link rel="stylesheet" href=" {{URL::asset('css/welcome/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/welcome/materialize.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/welcome/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/welcome/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/welcome/main.css')}}">
    <link rel="stylesheet" href=" {{URL::asset('css/welcome/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/welcome/responsive.css')}}">
    <!--link rel="stylesheet" href="css/fmf_core.css"-->

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" href="{{URL::asset('css/welcome/settings.css')}}" media="screen"/>

    <!-- JavaScripts -->
    <script src="js/vendors/modernizr.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js'></script>

    <style>

        .agileits_search {
            width: 50%;
            margin-left: 20%;

        }

        .agileits_search form {
            border: 30px solid rgba(0, 0, 0, 0.55);
        }

        .agileits_search input[type="text"] {
            outline: none;
            border: none;
            background: #fff;
            color: #000000;

            padding: 1.1em 1em;
            font-size: 1em;
            float: left;

            width: 80%;
            height: 51px;
        }

        .agileits_search input[type="submit"] {
            outline: none;
            border: none;
            background: #fd463e;
            color: #fff;
            padding: 1.1em 1em;
            font-size: 1em;
            width: 20%;
            -webkit-transition: .5s all;
            -moz-transition: .5s all;
            -o-transition: .5s all;
            -ms-transition: .5s all;
            transition: .5s all;
        }

        .agileits_search input[type="submit"]:hover {
            background: #f71d16;
        }

        .back {
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.4)), url('images/slides/slides-1.jpg');
            height: 700px;

        }

        .back1 {
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.4)), url('images/slides/slides-1.jpg');

        }

        .banner-text {
            padding-top: 25%;

        }

        .banner-text h2 {
            font-size: 2em;
            color: #fff;
            line-height: 1.3em;
            letter-spacing: 1px;
            margin-left: 20%;
            cursor: hand;
        }

        #result1 {
            position: absolute;
            width: 30%;
            padding: 10px;
            display: none;
            margin-top: 35px;
            border-top: 0px;
            overflow: hidden;
            border: 1px #CCC solid;
            background-color: white;
        }


    </style>
</head>
<body>

<!-- LOADER -->
<div id="loader">
    <div class="loader">
        <div class="position-center-center"><img src="images/logo.png" alt="">
            <div class="progress">
                <div class="indeterminate"></div>
            </div>
        </div>
    </div>
</div>

<!-- Page Wrapper -->
<div id="wrap">
    <!-- Header -->
    <header class="header coporate-header">
        <div class="sticky">
            <div class="container">


                <!-- Nav -->
                <nav>
                    <ul id="ownmenu" class="ownmenu">
                        <li class="active"><a href="{{ URL::route('welcome') }}">HOME</a>
                        </li>
                        <li><a href="{{ URL::route('advicewelcome') }}">Advice</a></li>
                        <li><a href="{{ URL::route('auctionwelcome') }}">Auction</a></li>
                        <li><a href="{{ URL::route('planswelcome') }}">Financial Plans</a></li>
                        <li><a href="{{ URL::route('loginSeller') }}">Sell Property</a></li>
                        <li><a href="{{ URL::route('loginView') }}">Login</a></li>
                    </ul>
                </nav>

            </div>
        </div>
    </header>
    <!-- End Header -->

    <!--======= HOME MAIN SLIDER =========-->

    <div class=" back">


        <div class="banner-text" id="home">
            <h2>Find your Dream Home</h2>
        </div>
        <div class="agileits_search back1">
            <form action="searchHome" method="post">

                    <input name="Search" class="search1" id="searchid" type="text" placeholder="Enter City" required="" autocomplete="off">
                    <div id="result1"></div>
                <input type="hidden" name="_token" value = "{{ csrf_token() }}" />
                <input type="submit" value="Search">
            </form>
        </div>


    </div>

    <!-- Content -->
    <div id="content">

        <!-- Services -->
        <section class="welcome padding-top-100 padding-bottom-100 ">
            <div class="container">
                <!-- HEADING BLOCK -->
                <div class="heading-block text-center margin-bottom-80">
                    <h3>Welcome to Homes.lk</h3>
                    <hr>
                    <div class="work-process">
                    <p class="into-type" style="color:#000000 ">

                        We provide customers in the property market to find their ideal future homes while providing best opportunities to property sellers
                        to market their properties.
                        Homes.lk is an ode to the ultimate real estate enthusiast:
                        the one who can't pass up snagging a flier from a for-sale sign.
                        Going beyond the classical model of real-estate marketing, we support you with financial aid and legal support
                        to procure your dream house.
                        <br><br><b>-Register with us and accelerate your life-</b>
                    </p>
                    </div>
                </div>

                <!-- Icon Row -->
                <div class="text-center margin-bottom-50"><img class="img-responsive" src="images/slides-2.jpg" style="width: 600px;height: 300px; box-shadow: 10px 10px 5px #888888"
                                                               alt=""></div>
                <div class="services-welcome text-center">
                    <ul class="row">

                        <!-- Services -->
                        <li class="col-md-4">
                            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                            <h5 class="margin-top-40 margin-bottom-20">who we are</h5>
                            <p style="color: #000000">
                                Homes.lk is  supported by <b>Lankan-Realtor </b> which is an emerging intermediary real estate marketing company providing
                                support to customers in the property market.
                            </p>
                        </li>

                        <!-- Services -->
                        <li class="col-md-4">
                            <div class="icon"><i class="ion-ios-color-wand-outline"></i></div>
                            <h5 class="margin-top-40 margin-bottom-20">what we do</h5>
                            <p style="color: #000000">
                                Lankan-Realtor, real estate marketing team aid the customers by providing best solutions for their
                                dream house including legal advising and financial aid. We provide best opportunities for the property sellers to
                                advertise properties.

                            </p>
                        </li>

                        <!-- Services -->
                        <li class="col-md-4">
                            <div class="icon"><i class="ion-ios-infinite-outline"></i></div>
                            <h5 class="margin-top-40 margin-bottom-20">our great team</h5>
                            <p  style="color: #000000">
                              Lankan-Realtor consists of a team of professionals in Marketing, Advertising, Management sectors.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- PROMO -->
        <section class="video-sec text-center padding-bottom-100 padding-top-100"
                 style="background:url(images/bg/video-bg.jpg) no-repeat;">
            <div class="container">

                <a href="#." class="waves-effect waves-light video-btn"><i class="fa fa-play"></i></a>
                <h6 class="text-white font-bold text-uppercase letter-space-4 margin-top-40">Find your Dream Home</h6>
            </div>
        </section>

        <!-- SERVICES -->
        <section class="services padding-top-100 padding-bottom-80">
            <div class="container">

                <!-- HEADING BLOCK -->
                <div class="heading-block text-center margin-bottom-80" id="services">
                    <h3>Why search at Homes.lk®?</h3>
                    <hr>

                </div>
                <div class="services-welcome text-center" >
                    <ul class="row">

                        <!-- Services -->


                        <!-- Services -->
                        <li class="col-md-4">
                            <article class="z-depth-1">
                                <div class="icon"><img src="images/house.jpg" style="height: 200px; width: 200px; box-shadow: 10px 10px 5px #888888"></div>
                                <h5 class="margin-top-30 margin-bottom-10">Property</h5>
                                <p>
                                    Homes.lk helps you to find your dream house and to advertise your home. <br>Tired with classical Real-estate business ?
                                    We prvide advanced and customized facilities to the registered memeber .
                                </p>
                                <a href="#." class="waves-effect waves-ripple btn">Register Here</a></article>
                        </li>

                        <li class="col-md-4">
                            <article class="z-depth-1">
                                <div class="icon"><img src="images/advicearrow.jpg" style="height: 200px; width: 200px; box-shadow: 10px 10px 5px #888888"></div>
                                <h5 class="margin-top-30 margin-bottom-10">Legal Advising</h5>
                                <p>
                                     We aid you with Legal Advising you need for acquiring your dream home.
                                    Register with us to find a professionals in Real-estate Legal Advising.Call Lankan-Realtor to get connected with the professional.

                                </p>
                                <a href="#." class="waves-effect waves-ripple btn">Register Here</a></article>
                        </li>

                        <!-- Services -->
                        <li class="col-md-4">
                            <article class="z-depth-1">
                                <div class="icon"><img src="images/mortgage.jpg" style="height: 200px; width: 200px;box-shadow: 10px 10px 5px #888888"></div>
                                <h5 class="margin-top-30 margin-bottom-10">Financial Aid</h5>
                                <p>
                                    Lankan.Relator aid you with Mortgage loans from trusted parties. Register with us to find a professionals in Real-estate Mortgage Loans.Call Lankan-Realtor to get connected with the professional.


                                </p>
                                <a href="#" class="waves-effect waves-ripple btn">Register Here</a></article>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="promo purple-bg padding-bottom-60 padding-top-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h3 class="text-white text-uppercase no-margin">Do you want to discuss wth us?</h3>
                    </div>
                    <div class="col-md-5 text-right"><a href="{{route("contactus")}}"
                                                        class="waves-effect waves-light btn  btn-white margin-right-20">contact
                            us</a>
                </div>
            </div>
            </div>
        </section>

    <footer>
        <div class="container">
            <div class="row">

                <!-- About -->
                <div class="col-md-3"><img class="margin-bottom-20" src="images/login-logo.jpg" style="width: 100px;height: 100px;border-radius: 50%" alt="">
                    <p>Lankan-Realtor</p>

                    <!-- Social Icon -->
                    <ul class="social-icons">
                        <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#."><i class="fa fa-google"></i></a></li>

                    </ul>
                </div>

                <!-- Our Services -->
                <div class="col-md-3">
                    <h5>Our Services</h5>
                    <ul class="links">
                        <li><a href="#services">Property Advertising</a></li>
                        <li><a href="#services">Legal Advising</a></li>
                        <li><a href="#services">Financial Aid</a></li>

                    </ul>
                </div>

                <!-- useful links -->
                <div class="col-md-3">
                    <h5>Useful Links</h5>

                    <ul class="links">
                        <li><a href="#.">Terms of Trade</a></li>
                        <li><a href="#.">Privacy Policy</a></li>
                        <li><a href="#.">Copy Rights</a></li>

                    </ul>
                </div>
            </div>

            <!-- Links -->
            <ul class="bottom-links">
                <li><a href="#.">About </a></li>
                <li><a href="#services"> services </a></li>
                <li><a href="{{route("contactus")}}"> contact us</a></li>
            </ul>

            <!-- Rights -->
            <div class="rights">
                <p>© 2017 All Rights Reserved</p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
</div>
</div>
<!-- End Page Wrapper -->

<!-- JavaScripts -->
<script src="js/vendors/jquery/jquery.min.js"></script>
<script src="js/vendors/wow.min.js"></script>
<script src="js/vendors/bootstrap.min.js"></script>
<script src="js/vendors/materialize.min.js"></script>
<script src="js/vendors/own-menu.js"></script>
<script src="js/vendors/jquery.prettyPhoto.js"></script>
<script src="js/vendors/flexslider/jquery.flexslider-min.js"></script>
<script src="js/vendors/jquery.isotope.min.js"></script>
<script src="js/vendors/owl.carousel.min.js"></script>


<script src="js/main.js"></script>

<script>

    $(function () {

        $(".search1").keyup(function () {
            console.log("piyumi");
            var searchid = $(this).val();

            var dataString = searchid;
            var token = $('meta[name="_token"]').attr('content');
            var url1 = '{{route("cityfinder")}}';

            if (searchid != '') {
                $.ajax({
                    type: "POST",
                    url: url1,
                    data: {_token: token, 'datafile': dataString},
                    cache: false,
                    success: function (html) {
                        console.log("piyumi");
                        $("#result1").show();
                        $("#result1").html(html).show();
                    }
                });
            }
            else {
                $("#result1").hide();
            }
            return false;
        });

        jQuery("#result1").on("click", function (e) {

            var $clicked = $(e.target);
            var $name = $clicked.text().trim();
            //var $name = $clicked.find('.name').html();
            //var decoded = $("<div/>").html($name).text();
            // document.getElementById('#searchid').value=$name1;
            $('#searchid').val($name);
            // var a = document.getElementById('link1');

        });
        jQuery(document).on('click', function (e) {
            var $clicked = $(e.target);
            if (!$clicked.hasClass("search1")) {
                jQuery("#result1").fadeOut();
            }
        });

    });

</script>
</body>
</html>