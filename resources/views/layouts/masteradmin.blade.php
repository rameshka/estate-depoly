<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homes.lk- @yield('title')</title>

    <meta name = "_token" content= "{{csrf_token()}}">
    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- CORE CSS-->

    <link href="{{URL::asset('css/view/materialize.css')}}" type="text/css" rel="stylesheet" >
    <link href="{{URL::asset('css/view/style.css')}}" type="text/css" rel="stylesheet" >


    <link href="{{URL::asset('css/view/messages.css')}}" type="text/css" rel="stylesheet" >
    @yield('css')
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
                    <li><h1 class="logo-wrapper"><a href="{{route('admindashboard')}}" class="brand-logo darken-1"><img src="{{URL::asset('images/man-half-house.png')}}" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1></li>
                </ul>

                <ul class="right hide-on-med-and-down">

                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">5</small></i>

                        </a>
                    </li>
                    <li><a href="{{route('signout')}}" class="waves-effect waves-block waves-light"><i class="mdi-hardware-keyboard-tab" id="signout"></i></a>
                    </li>
                </ul>
                <!-- translation-button -->

                <!-- notifications-dropdown -->
                <ul id="notifications-dropdown" class="dropdown-content">
                    <li>
                        <h5>NOTIFICATIONS <span class="new badge">5</span></h5>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-action-stars"></i> Completed the task</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-action-settings"></i> Settings updated</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-editor-insert-invitation"></i> Director meeting started</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-action-trending-up"></i> Generate monthly report</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- end header nav-->
</header>

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
                            <p class="user-roal">Administrator</p>
                        </div>
                    </div>
                </li>
                <li class="bold"><a href="{{ URL::route('admindashboard') }}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Legal Party </a> </li>
                <li class="bold"><a href="{{ URL::route('lenderAdd') }}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i>Money Lender </a> </li>
                <li class="bold"><a href="{{ URL::route('addAuction') }}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i>Auction</a> </li>
                <li class="bold"><a href="{{ URL::route('addCity') }}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> City </a> </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                    </ul>

                <li class="li-hover">
                    <div class="divider"></div>
                </li>
                <li class="li-hover">
                    <p class="ultra-small margin more-text">Edit Details</p>
                </li>
                <li><a href="{{ URL::route('getAdvisor') }}"><i class="mdi-editor-insert-comment"></i>Legal Party</a> </li>
                </li>

                <li><a href="{{ URL::route('getLender') }}"><i class="mdi-editor-insert-comment"></i>Money Lender</a> </li>
                </li>

                <li><a href="#"><i class="mdi-editor-insert-comment"></i>Auction</a> </li>
                </li>


                <li class="li-hover">
                    <div class="divider"></div>
                </li>
                <li class="li-hover">
                    <p class="ultra-small margin more-text">Compose Messegae</p>
                </li>

                <li><a href="{{ URL::route('message') }}"><i class="mdi-editor-insert-comment"></i>Message</a> </li>
                </li>

            </ul>

        </aside>

        <!-- END LEFT SIDEBAR NAV-->

        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- START CONTENT -->
        <section id="content">

            <!--start container-->
            <div class="container">


               <!--------------------------Error message errors-------------------------------------->
                <div class="popup">
                    <div class="popuptext" id="myPopup" >

                    </div>
                </div>
                <div class="popup">
                    <div class="popuptext" id="myPopupInfo" >

                    </div>
                </div>
                <div class="popup">
                    <div class="popuptext" id="myPopupSucces" >

                    </div>
                </div>
                <!-- Get Errors end -->
                <div id="messages" style="display: none">
                    <div class="col s12 m4 l4" style="position: absolute; left: 45%;z-index: 10;" id="newsmessage">
                        <div id="card-alert" class="card light-blue">
                            <div class="card-content white-text">
                                <p id="newsmessagecontent"><i class="mdi-social-notifications"></i> NEWS : You have done 5 actions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 l4" style="position: absolute; left: 45%;z-index: 10;" id="infomessage">
                        <div id="card-alert" class="card deep-purple">
                            <div style="float: right;">
                                <button type="button" class="close-white-text" data-dismiss="alert" aria-label="Close" style="background: transparent; border: none" id="messagebutton">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="card-content white-text" id="infomessagecontent">
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 l4" style="position: absolute; left: 45%;z-index: 10;" id="successmessage">
                        <div id="card-alert" class="card green">
                            <div style="float: right;">
                                <button type="button" class="close-white-text" data-dismiss="alert" aria-label="Close" style="background: transparent; border: none" id="messagebutton">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="card-content white-text" id="successmessagecontent">
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 l4" style="position: absolute; left: 45%;z-index: 10;" id="errormessage">
                        <div id="card-alert" class="card red">
                            <div style="float: right;">
                                <button type="button" class="close-white-text" data-dismiss="alert" aria-label="Close" style="background: transparent; border: none" id="messagebutton">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="card-content white-text" id="errormessagecontent">
                            </div>

                        </div>
                    </div>
                </div>


                <!--------------------------Error message errors-------------------------------------->


                @yield('content')
            </div>

            <!--end container-->

        </section>
        <!-- END CONTENT -->

    </div>
    <!-- END WRAPPER -->

</div>


<!-- jQuery Library -->

<script src="{{URL::asset('js/view/jquery-1.11.2.min.js')}}" ></script>
<script src="{{URL::asset('js/view/materialize.min.js')}}" ></script>
@yield('tablejs')
<script src="{{URL::asset('js/view/plugins.js')}}" ></script>
<script>


    $( document ).ready(function() {
console.log("hi");
        popups();



    });
    function popups() {

        var errors = [<?php echo '"'.implode('","', $errors->all()).'"' ?>];
        if (errors[0]!= "") {
            for (var i = 0; i < errors.length; i++) {
                var error = '<p><i class="mdi-alert-error"></i> Error :replace</p>';
                error = error.replace('replace', errors[i]);
                $('#errormessagecontent').append(error);
            }

            $('#myPopup').append($('#errormessage'));
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
        }
        var messages = [<?php $info=[];
            if(Session::has('info')){
                $info = Session::get('info');}
            echo '"'.implode('","',$info ).'"' ?>];
        if (messages[0]!= "") {
            for (var i = 0; i < messages.length; i++) {
                var message = ' <p><i class="mdi-action-info-outline"></i> replace</p>';
                message = message.replace('replace', messages[i]);
                $('#infomessagecontent').append(message);
            }
            $('#myPopupInfo').append($('#infomessage'));
            var popupinfo = document.getElementById("myPopupInfo");
            popupinfo.classList.toggle("show");
        }
        var succesmsgs = [<?php $success=[];
            if(Session::has('success')){
                $success = Session::get('success');}
            echo '"'.implode('","',$success ).'"' ?>];
        console.log(succesmsgs[0]);
        if (succesmsgs[0]!= "") {
            for (var i = 0; i < succesmsgs.length; i++) {
                var succesmsg = ' <p><i class="mdi-navigation-check"></i>  replace</p>';
                succesmsg = succesmsg.replace('replace', succesmsgs[i]);
                $('#successmessagecontent').append(succesmsg);
            }
            $('#myPopupSucces').append($('#successmessage'));
            var popupsucces = document.getElementById("myPopupSucces");
            popupsucces.classList.toggle("show");
        }
    }

    $('.close-white-text').click(function(){
        $(this).parents().eq(3).hide();
    });


</script>
<script src="{{URL::asset('js/view/jquery-1.11.2.min.js')}}" ></script>
<script src="{{URL::asset('js/view/materialize.min.js')}}" ></script>
@yield('tablejs')
<script src="{{URL::asset('js/view/plugins.js')}}" ></script>



</body>
</html>