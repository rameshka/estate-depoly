<DOCTYPE html>
    <html lang="en">
    <head>
        <title>Homes.lk- @yield('title')</title>

        <meta name = "_token" content= "{{csrf_token()}}">
        <!-- Favicons-->
        <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
        <!-- CORE CSS-->

        <link href="{{URL::asset('css/view/materialize.css')}}" type="text/css" rel="stylesheet" >
        <link href="{{URL::asset('css/view/style.css')}}" type="text/css" rel="stylesheet" >


        @yield('css')
        @yield('style')
    </head>

    <body>
    <!-- Start Page Loading -->

    <!-- End Page Loading -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">
                        <li><h1 class="logo-wrapper"><a href="{{route('lenderdashboard')}}" class="brand-logo darken-1"><img
                                            src="{{URL::asset('images/man-half-house.png')}}" alt="materialize logo"></a> <span
                                        class="logo-text">Materialize</span></h1></li>

                    </ul>
                    <ul class="right hide-on-med-and-down">

                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">5</small></i>

                            </a>
                        </li>
                        <li><a href="{{route('signout')}}" class="waves-effect waves-block waves-light"><i
                                        class="mdi-hardware-keyboard-tab" id="signout"></i></a>
                        </li>
                    </ul>
                    <!-- translation-button -->

                    <!-- notifications-dropdown -->
                    <ul id="notifications-dropdown" class="dropdown-content"
                        style="max-height:300px; width: 250px ;max-width: 350px ;overflow-y: scroll;">
                        <li>
                            <h5>NOTIFICATIONS <span class="new badge">5</span></h5>
                        </li>
                        <li class="divider"></li>


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
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4"> <img src="{{URL::asset('images/avatar.jpg')}}" alt="" class="circle responsive-img valign profile-image"> </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a> </li>
                                    <li><a href="#"><i class="mdi-action-settings"></i> Settings</a> </li>
                                    <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a> </li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a> </li>
                                    <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a> </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal">Money Lenderr</p>
                            </div>
                        </div>
                    </li>
                    <li class="bold"><a href='{{ URL::route('lenderdashboard') }}' class="waves-effect waves-cyan"><i class="mdi-action-search"></i> Search Property </a> </li>
                    <li class="bold"><a href='{{ URL::route('addplans') }}' class="waves-effect waves-cyan"><i class="mdi-editor-attach-money"></i>Add Financial Plans</a> </li>
                    <li class="bold"><a href='{{ URL::route('myplans') }}' class="waves-effect waves-cyan"><i class="mdi-action-wallet-membership"></i>My Financial Plans</a> </li>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                        </ul>

                </ul>

            </aside>

            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">
                    @yield('content')
                </div>

                <!--end container-->

            </section>
            <!-- END CONTENT -->

        </div>
        <!-- END WRAPPER -->

    </div>

    @yield('mapjs')

    @yield('mapapi')

    <!-- jQuery Library -->
    <script src="{{URL::asset('js/view/jquery-1.11.2.min.js')}}" ></script>
    <script src="{{URL::asset('js/view/materialize.min.js')}}" ></script>
    @yield('ajax')
    <script src="{{URL::asset('js/view/plugins.js')}}" ></script>

    @yield('slider')

    <script>

        var timeout = 1000;
        var interval;
        var url = '{{route("messagereq")}}';
        var url1= '{{route("messageall")}}';
        var token = $('meta[name="_token"]').attr('content');
        var listarray = new Array();

        function set() {
            $.ajax({

                type: 'GET',
                url: url1,
                data: {_token: token},

                success: function (data) {
                    var jdata = JSON.parse(data);
                    notification(jdata, listarray);

                }
            });
        }


        function callAjax() {
            $.ajax({

                type: 'GET',
                url: url,
                data: {_token: token},
                success: function (data) {
                    var jdata = JSON.parse(data);
                    notification(jdata, listarray);
                    interval = setTimeout(callAjax, timeout);

                }
            });
        }

        function notification(val, listarray) {

            var str = "";


            for (var x = 0; x < val.length; x++) {
                var i = jQuery.inArray(val[x]["msgID"], listarray);

                if (i == -1) {
                    var temp = val[x]['content'];
                    var date = val[x]['Date'];

                    str += '<li>' + '<a href="" style="pointer-events: none;">' + '<i class="mdi-action-stars">' + '</i>' + temp + '</a>' + '<time class="media-meta" >' + date + '</time>' + '</li>';
                    listarray.push(val[x]["msgID"]);

                }


            }

            $("#notifications-dropdown").append(str);
        }


        set();
        callAjax();


    </script>


    </body>
    </html>