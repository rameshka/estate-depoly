<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name = "_token" content= "{{csrf_token()}}">
  
  <title>Homes.lk</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon.ico" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="css/login/materialize.css"  rel="stylesheet">
  <link href="css/login/style.css"  rel="stylesheet">
  <link href="css/login/page-center.css"  rel="stylesheet">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="css/login/prism.css"  rel="stylesheet">
  <link href="css/login/perfect-scrollbar.css" rel="stylesheet">
  
  <script type="text/javascript" src="js/login/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="js/login/materialize.js"></script>
  <script type="text/javascript" src="js/login/prism.js"></script>
  <script type="text/javascript" src="js/login/perfect-scrollbar.min.js"></script>
  
  <style>
  
  input#submit{
  background:none;
  border:none;
  font-size:1em;
  color:white;
  width:250px;
  height:40px;
}
</style>
  
</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" action='{{route('login')}}' method="post">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="images/login-logo.jpg" alt="" class="circle responsive-img valign profile-image-login">
          </div>
        </div>
        
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input id="email" type="email" name="email" required>
            <label for="email" class="center-align">Email</label>
          </div>
        </div>
        
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" name="password" required>
            <label for="password">Password</label>
          </div>
        </div>

		<input type="hidden" name="_token" value = "{{ csrf_token() }}" />
        
        
          <div class="input-field col s12">
             <input type="submit" value="Login" id="submit" name="login"  class="btn waves-effect waves-light col s14">
          </div>

        
        <div class="row" style="width:120%">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="{{ URL::route('registerView') }}">Register Now!</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="{{ URL::route('forgotEmail') }}">Forgot password ?</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div>




 

  <!--plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="js/login/plugins.js"></script>

</body>

</html>