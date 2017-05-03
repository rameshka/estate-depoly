<!doctype html>
<html  lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="_token" content="{{csrf_token()}}">

    <title>HOMES.lk</title>


    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">


    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900,300,100' rel='stylesheet' type='text/css'>

    <!-- StyleSheets -->

    <link rel="stylesheet" href="{{URL::asset('css/welcome/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/welcome/materialize.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/welcome/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/welcome/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/welcome/main.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/welcome/style.css')}}">

    @yield('css')


    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" href="{{URL::asset('css/welcome/settings.css')}}">


    <!-- JavaScripts -->

    <script src="{{URL::asset('js/vendors/modernizr.js')}}" ></script>
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
            cursor: hand;
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
                <div class="logo"><a href="index.html"></a></div>

                <!-- Nav -->
                <nav>
                    <ul id="ownmenu" class="ownmenu">
                        <li class="active"><a href="{{ URL::route('welcome')}}">HOME</a>
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


   @yield('search')


    @yield('heading')





    @yield('content')

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
</div>
    <!-- End Footer -->

<!-- End Page Wrapper -->

<!-- JavaScripts -->
<script src="{{URL::asset('js/vendors/jquery/jquery.min.js')}}" ></script>
<script src="{{URL::asset('js/vendors/wow.min.js')}}" ></script>
<script src="{{URL::asset('js/vendors/bootstrap.min.js')}}" ></script>
<script src="{{URL::asset('js/vendors/materialize.min.js')}}" ></script>
<script src="{{URL::asset('js/vendors/own-menu.js')}}" ></script>
<script src="{{URL::asset('js/vendors/jquery.prettyPhoto.js')}}" ></script>
<script src="{{URL::asset('js/vendors/flexslider/jquery.flexslider-min.js')}}" ></script>
<script src="{{URL::asset('js/vendors/jquery.isotope.min.js')}}" ></script>
<script src="{{URL::asset('js/vendors/owl.carousel.min.js')}}" ></script>

<script src="{{URL::asset('js/main.js')}}" ></script>


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