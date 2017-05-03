<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Materialize - Material Design Admin Template</title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->
    <link rel="stylesheet" href="css/view/materialize.css">
    <link rel="stylesheet" href="css/view/style.css">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="loginassets/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="loginassets/js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="loginassets/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('panaroma/photo-sphere-viewer.css')}}">
    <link href="loginassets/js/plugins/ionRangeSlider/css/ion.rangeSlider.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!--Flat Skin-->
    <link href="loginassets/js/plugins/ionRangeSlider/css/ion.rangeSlider.skinFlat.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="loginassets/css/custom/style.css" type="text/css" rel="stylesheet" media="screen,projection">

    <meta name = "_token" content= "{{csrf_token()}}">
    <style>
        .input-field label.error {
            margin-left:40%;
            font-size: 0.8rem;
            color:#A73E1B;
            -webkit-transform: translateY(-140%);
            -moz-transform: translateY(-140%);
            -ms-transform: translateY(-140%);
            -o-transform: translateY(-140%);
            transform: translateY(-140%);
        }
    </style>

    <style>

        #photosphere {
            width: 100%;
            height: 500px;
        }

        .psv-button.custom-button {
            font-size: 22px;
            line-height: 20px;
        }
        #map {
            height: 80%;
        }
    </style>

</head>

<body>
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START HEADER -->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="cyan">
            <div class="nav-wrapper">
                <h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="images/materialize-logo.png" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1>
                <ul class="right hide-on-med-and-down">
                    <li class="search-out">
                        <input type="text" class="search-out-text">
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-block waves-light show-search"><i class="mdi-action-search"></i></a>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-notifications"></i></a>
                    </li>
                    <!-- Dropdown Trigger -->
                    <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>
<!-- END HEADER -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- START CONTENT -->
        <section id="content" >
            <!--start container-->
            <div class="container">
                <div class="col s12 m8 14">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <div id="photosphere" style="margin-top: 2%;"></div>
                        </div>
                        <div class="card-content">
                            <div> <p style="font-size: 0.9em;"> <i class="fa fa-eye-slash" aria-hidden="true"></i> &nbsp;&nbsp; Normal view is limited to 180. Wanna see all around? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button id="360"  class="btn-floating btn-large waves-effect waves-light "> 360<sup>0</sup> </button>   </p></div>
                        </div>
                    </div>
                </div>
                <div class ="row">
                    <div class="col s12 m8 8">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                                <div id="map"></div>

                            </div>
                            <div class="card-content">
                                <div> <p style="font-size: 0.9em;">  Wanna go there Fast? &nbsp;&nbsp;&nbsp;<i class="fa fa-hand-peace-o" aria-hidden="true"></i></p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card-panel">
                            <div class="row">
                                <form class="col s12">

                                    <div class="row" style="background-color: #1E88E5;border-radius:3px;">
                                        <div class="header-search-wrapper" >
                                            <div class="input-field col s11">
                                                <i class="mdi-action-search"></i>
                                                <input type="text" name="Search" class="header-search-input " placeholder="Explore Materialize" />

                                            </div>
                                        </div>
                                        <div class="input-field col s1 right" >
                                            <a class="btn-floating btn-large waves-effect waves-light" style="margin-left: -70%;">  <i class="mdi-action-search"></i></a>
                                        </div>

                                    </div>
                                    <br>
                                    <label for="icon_email"><b style="font-size: 1.2em">Optional</b><a id="showhidebtn">(show/hide)</a></label>
                                    <div id ="showhide">
                                        <div class="row">
                                            <div class="divider"></div>
                                            <div class="input-field col s2">
                                                <label for="icon_prefix">Number of bed rooms</label>


                                            </div>
                                            <div class="input-field col s4">
                                                <div id="range_03"></div>
                                            </div>
                                            <div class="input-field col s2">
                                                <label for="icon_email">Total Area of land</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <div id="range_04"></div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="divider"></div>
                                        <div class="row">
                                            <br>
                                            <label for="icon_email">Money</label>
                                            <div id="range_05"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div id = "final file">

                    <div class="row">
                        <div class="col s12 m12 l12">
                            <div class="card-panel">
                                <h4 class="header2">Form Advance</h4>
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="first_name" type="text">
                                                <label for="first_name">First Name</label>
                                            </div>

                                            <div class="input-field col s6">
                                                <input id="last_name" type="text">
                                                <label for="last_name">Last Name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="number" type="text">
                                                <label for="first_name">1st Line</label>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="adress1" type="text">
                                                <label for="first_name">2nd Line</label>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="adress2" type="text">
                                                <label for="first_name">3rd Line</label>
                                            </div>

                                        </div>
                                        <div class="row">

                                            <div id="dvMap" style="width: 300px; height: 300px">
                                            </div>
                                            <p id="btn">Button</p>
                                        </div>


                                        <div class="row">

                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                                        <i class="mdi-content-send right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end container-->
        </section>
        <!-- END CONTENT -->
        <!-- START RIGHT SIDEBAR NAV-->
        <aside id="right-sidebar-nav">
            <ul id="chat-out" class="side-nav rightside-navigation">
                <li class="li-hover">
                    <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
                    <div id="right-search" class="row">
                        <form class="col s12">
                            <div class="input-field">
                                <i class="mdi-action-search prefix"></i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Search</label>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="li-hover">
                    <ul class="chat-collapsible" data-collapsible="expandable">
                        <li>
                            <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>
                            <div class="collapsible-body recent-activity">
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">just now</a>
                                        <p>Jim Doe Purchased new equipments for zonal office.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">Yesterday</a>
                                        <p>Your Next flight for USA will be on 15th August 2015.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">5 Days Ago</a>
                                        <p>Natalya Parker Send you a voice mail for next conference.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">Last Week</a>
                                        <p>Jessy Jay open a new store at S.G Road.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">5 Days Ago</a>
                                        <p>Natalya Parker Send you a voice mail for next conference.</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
                            <div class="collapsible-body sales-repoart">
                                <div class="sales-repoart-list  chat-out-list row">
                                    <div class="col s8">Target Salse</div>
                                    <div class="col s4"><span id="sales-line-1"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Payment Due</div>
                                    <div class="col s4"><span id="sales-bar-1"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Total Delivery</div>
                                    <div class="col s4"><span id="sales-line-2"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Total Progress</div>
                                    <div class="col s4"><span id="sales-bar-2"></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
                            <div class="collapsible-body favorite-associates">
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Eileen Sideways</p>
                                        <p class="place">Los Angeles, CA</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Zaham Sindil</p>
                                        <p class="place">San Francisco, CA</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Renov Leongal</p>
                                        <p class="place">Cebu City, Philippines</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Weno Carasbong</p>
                                        <p>Tokyo, Japan</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Nusja Nawancali</p>
                                        <p class="place">Bangkok, Thailand</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
        <!-- LEFT RIGHT SIDEBAR NAV-->

    </div>
    <!-- END WRAPPER -->

</div>
<!-- END MAIN -->



<!-- //////////////////////////////////////////////////////////////////////////// -->

<script type="text/template" id="pin-content">

    <pre><code>
#header h1 a {
        display: block;
        width: 300px;
        height: 80px;
    }
</code></pre>
</script>

<svg id="patterns">
    <defs>
        <pattern id="dots" x="10" y="10" width="30" height="30" patternUnits="userSpaceOnUse">
            <circle cx="10" cy="10" r="10" style="stroke: none; fill: rgba(255,0,0,0.4)" />
        </pattern>
        <pattern id="points" x="10" y="10" width="15" height="15" patternUnits="userSpaceOnUse">
            <circle cx="10" cy="10" r="0.8" style="stroke: none; fill: red" />
        </pattern>
    </defs>
</svg>

<!-- ================================================
Scripts
================================================ -->
<script type="text/javascript" src="loginassets/js/plugins/ionRangeSlider/js/ion.rangeSlider.js"></script>
<script>

    $("#range_03").ionRangeSlider({
        type: "double",
        grid: true,
        min: 1,
        max: 5,
        from: 1,
        to: 3,
        prefix: ""

    });
    $("#range_03").change(function()
    {
        console.log( $('.irs-to')[0].textContent);
        console.log( $('.irs-from')[0].textContent);
    });
    $("#range_04").ionRangeSlider({
        type: "double",
        grid: true,
        min: 0,
        max: 1000,
        from: 200,
        to: 800,
        prefix: ""
    });
    $("#range_05").ionRangeSlider({
        type: "double",
        grid: true,
        min: 0,
        max: 1000,
        from: 200,
        to: 800,
        prefix: "$"
    })

    $('#showhidebtn').click(function()
    {
        if($('#showhide').is(':hidden'))
        {
            $('#showhide').show();
        }
        else {
            $('#showhide').hide();
        }

    });
</script>
<script>
    function initMap() {
        var latdata;
        var lngdata;
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 7,
            center: {lat: 41.85, lng: -87.65}
        });
        directionsDisplay.setMap(map);
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                calculateAndDisplayRoute(directionsService, directionsDisplay,pos);

            }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }


    }

    function calculateAndDisplayRoute(directionsService, directionsDisplay,pos) {
        var value = pos.lat.toString()+","+ pos.lng.toString();
        directionsService.route({

            origin: value,
            destination: "6.872916,79.888634",
            travelMode: 'DRIVING'
        }, function(response, status) {
            if (status === 'OK') {
                directionsDisplay.setDirections(response);
            } else {
                window.alert('Directions request failed due to ' + status);
            }
        });
    }
</script>
<!--script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script-->
<script>

    $("#btn").click(function() {
        var geocoder = new google.maps.Geocoder();
        var address = document.getElementById('number').value;
        address += " "+document.getElementById('adress1').value;
        address += " "+document.getElementById('adress2').value;
        var address2 = document.getElementById('adress1').value;
        address2 += " "+document.getElementById('adress2').value;

        //document.getElementById('info').innerHTML = address;

        geocoder.geocode({'address': address}, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                alert("location : " + results[0].geometry.location.lat() + " " + results[0].geometry.location.lng());
            } else {
                geocoder.geocode({'address': address2}, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var mapOptions = {
                            center: new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()),
                            zoom: 14,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        };
                        var infoWindow = new google.maps.InfoWindow();
                        var latlngbounds = new google.maps.LatLngBounds();
                        var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
                        google.maps.event.addListener(map, 'click', function (e) {
                            alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                        });
                    }
                });
            }
        });
    });


</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClIcoi3SKQaDWgqPNIkcFBSZ6WY5c1NhE&callback=initMap">
</script>
<!-- jQuery Library -->
<script src="js/view/jquery-1.11.2.min.js"></script>
<script src="js/view/materialize.min.js"></script>
<script src="js/view/plugins.js"></script>

<!--scrollbar-->
<script type="text/javascript" src="loginassets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>


<!-- chartist -->
<script type="text/javascript" src="loginassets/js/plugins/chartist-js/chartist.min.js"></script>

<!-- sparkline -->
<script type="text/javascript" src="loginassets/js/plugins/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="loginassets/js/plugins/sparkline/sparkline-script.js"></script>

<!--jvectormap-->
<script type="text/javascript" src="loginassets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script type="text/javascript" src="loginassets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script type="text/javascript" src="loginassets/js/plugins/jvectormap/vectormap-script.js"></script>


<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="loginassets/js/plugins.js"></script>

</body>

</html>