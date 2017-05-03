<DOCTYPE html>
    <html lang="en">
    <head>
        <title>Homes.lk- @yield('title')</title>

        <meta name = "_token" content= "{{csrf_token()}}">
        <!-- Favicons-->
        <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
        <!-- CORE CSS-->

        <link rel="stylesheet" href="css/view/materialize.css">
        <link rel="stylesheet" href="css/view/style.css">

    </head>

    <body>
    <!-- Start Page Loading -->

    <!-- End Page Loading -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">
                    <h1 class="logo-wrapper"><span class="logo-text">Materialize</span></h1>
                    <ul class="right hide-on-med-and-down">

                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-notifications"></i></a> </li>
                        <!-- Dropdown Trigger -->
                        <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a> </li>


                        <li><a href='{{ URL::route('signout') }}' class="waves-effect waves-block waves-light"><i class="mdi-hardware-keyboard-tab"></i></a> </li>
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
                            <div class="col col s4 m4 l4"> <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image"> </div>
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
                                <p class="user-roal">Property Seller</p>
                            </div>
                        </div>
                    </li>
                    <li class="bold"><a href='{{ URL::route('sellerdashboard') }}' class="waves-effect waves-cyan"><i class="mdi-action-search"></i> Search Property </a> </li>
                    <li class="bold"><a href='{{ URL::route('addproperty') }}' class="waves-effect waves-cyan"><i class="mdi-content-add"></i>Add Property</a> </li>
                    <li class="bold"><a href='{{ URL::route('advertisements') }}' class="waves-effect waves-cyan"><i class="mdi-action-home"></i>My Advertisements</a> </li>
                    <li class="bold"><a href='{{ URL::route('guestView') }}' class="waves-effect waves-cyan"><i class="mdi-editor-attach-money"></i>Financial Plans</a> </li>
                    <li class="bold"><a href="#" class="waves-effect waves-cyan"><i class="mdi-social-person"></i> Legal Advisor </a> </li>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                        </ul>

                    <li class="li-hover">
                        <div class="divider"></div>
                    </li>
                    <li class="li-hover">
                        <p class="ultra-small margin more-text">Edit Details</p>
                    </li>
                    <li><a href="#"><i class="mdi-editor-mode-edit"></i>Edit Property</a> </li>
                    </li>

                </ul>

            </aside>

            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">

                </div>



            </section>


        </div>


    </div>



    <!-- jQuery Library -->
    <script src="js/view/jquery-1.11.2.min.js"></script>
    <script src="js/view/materialize.min.js"></script>

    <script src="js/view/plugins.js"></script>


    </body>
    </html>