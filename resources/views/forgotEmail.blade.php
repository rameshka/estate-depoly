<!DOCTYPE html>
<html lang="en">


<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
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
  
  <link href="css/login/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/login/style.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/login/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">


  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="css/login/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/login/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
  
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
    <div class="col s12 z-depth-4 card-panel" style="height:300px">
    
 
      <form class="login-form" form action='{{route('forgot')}}' method="post">
        <div class="row">
          <div class="input-field col s12 center">
            <h4>Forgot Password</h4>
            <p class="center">Enter your Email Adress</p>
          </div>
        </div>
        
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input type="email" name="email" id="email" required /><br>
            <label for="email" class="center-align">Email</label>
          </div>
        </div>
      
       <div class="input-field col s12">
		<input type="hidden" name="_token" value = "{{ csrf_token() }}" />
            
        <input type="submit" value="Send" id="submit"  class="btn waves-effect waves-light col s14">
        </div>
      

      </form>
    </div>
  </div>



  <!-- jQuery Library -->
  <script type="text/javascript" src="js/login/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="js/login/materialize.js"></script>
  <!--prism-->
  <script type="text/javascript" src="js/login/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="js/login/perfect-scrollbar.min.js"></script>

  <!--plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="js/login/plugins.js"></script>

</body>

</html>