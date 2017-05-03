<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    
    <title>Materialize - Material Design Admin Template</title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- CORE CSS-->    
    <link href="css/login/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/login/style.css" type="text/css" rel="stylesheet" media="screen,projection">
	<meta name = "_token" content= "{{csrf_token()}}">
	<link href="ImageUpload/jquery.cropbox.min.css" rel="stylesheet" type="text/css">
<style>
div.cropbox .btn-file {
    position: relative;
    overflow: hidden;
}
div.cropbox .btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
div.cropbox .cropped {
    margin-top: 10px;
}
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

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                     <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal">Administrator</p>
                            </div>
                        </div>
                    </li>
                    <li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i>  Auction</a>
                    </li>
                    <li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Legal Party</a>
                    </li>
                    <li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i>  Money Lender</a>
                    </li>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
         


                        </ul>
                     <li class="li-hover"><div class="divider"></div></li>
                    <li class="li-hover"><p class="ultra-small margin more-text">MORE</p></li>
       
                    <li><a href="css-helpers.html"><i class="mdi-communication-live-help"></i> Helpers</a>
                    </li>
             
                    </li>
                    <li class="li-hover">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="sample-chart-wrapper">                            
                                   
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">
					
                    
                    <section id="content">

                <!--start container-->
                <div class="container">
				   
                  <div class="row">
                         <div id="profile-page" class="section">
            <!-- profile-page-header -->
            <div id="profile-page-header" class="card" style="background-image:url(images/user-profile-bg.jpg);">
            <!--
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="images/user-profile-bg.jpg" alt="user background">                    
                </div>-->
                
                <figure class="card-profile-image">
                    <img src="images/avatar.jpg" alt="profile image" class="circle z-depth-2 responsive-img activator" id="dataImage">
                <a class="btn-floating activator waves-effect waves-light darken-2" id="avaterBtn" style="margin-top:-10%; margin-left:-8.8%;">
                          <i class="mdi-action-perm-identity"></i>
                      </a>
                   <div class="col s4 left-align" id="questionText" style="margin-top:5%; color:#FFFFFF; font-size:1.2em;">
                    &nbsp;
                    </div>
                </figure>
             
            </div>
<div id="plugin" class="cropbox">
    <div class="workarea-cropbox">
        <div class="bg-cropbox">
            <img class="image-cropbox">
            <div class="membrane-cropbox"></div>
        </div>
        <div class="frame-cropbox">
            <div class="resize-cropbox"></div>
        </div>
    </div>
    <div class="btn-group">
    	<div hidden="">
        <span class="btn btn-primary btn-file" hidden>
            <i class="glyphicon glyphicon-folder-open"></i>
            Browse <input type="file" accept="image/*" id="imageInput">
        </span>
        </div>
        <div id="cropDiv" hidden="" >
        <p style="margin-left:30%;"> <strong> Please select the prefed area and crop as you wish </strong> &nbsp;
        <button type="button" class="btn btn-success btn-crop" disabled="" id="crop">
            <i class="glyphicon glyphicon-scissors"></i> Crop
        </button></p>
        <hr>
      </div>
    </div>
    <div class="cropped panel panel-default" hidden>
        <div class="panel-heading"><h3 class="panel-title">Result of cropping</h3></div>
        <div class="panel-body" >...</div>
    </div>
    <div class="form-group" hidden>
        <label hidden>Info of cropping</label>
        <textarea class="data form-control" id="datacode"; rows="5" ></textarea>
        <button id= "show">Show</button>
    </div>
</div>

<input type="file" id="bannerImg" hidden=""  />

<div id="res"></div>

              <div class="col s12 m12 l6">

                      <div id="profile-card" class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="images/user-bg.jpg" alt="user bg">
                    </div>
                    <div class="card-content">
                      <img src="images/profileDetails.png" alt="" class="circle responsive-img activator card-profile-image">
                      <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right" id="changeProf">
                        <i class="mdi-editor-mode-edit"></i>
                      </a>

                      <span class="card-title activator grey-text text-darken-4">Profile Details</span>
                      <p><i class="mdi-action-perm-identity"></i> &nbsp; Name of the person</p>
                      <p><i class="mdi-action-account-balance"></i> &nbsp; Account type</p>
                      <p><i class="mdi-communication-email"></i> &nbsp; Email Address</p>
                      <p style="font-size:0.9em;"><i class="mdi-action-info"></i> &nbsp;(Click <i class="mdi-editor-mode-edit"></i> to change details.)</p>

                    </div>
                  </div>
              </div>
              <!-- Form with validation -->
              <div class="col s12 m12 l6">
                <div class="card-panel">
                  <div class="row">
                    <form  class="col s12" id="detailsForm">
                    <fieldset disabled  style="border:0;" id="chanegDetails">
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-account-circle prefix"></i>
                          <input id="name4" name="name" type="text" class="validate" required>
                          <label for="first_name">Name</label>
                        </div>
                      </div>
                      <div class="row">
                         <div class="input-field col s12" hidden="" id="passrelated1">
                          <i class="mdi-action-lock-outline prefix"></i>
                          <input id="passwordCurrent" name="currentPass" type="password" class="validate" value="NoChange" required>
                          <label for="password">Current Password</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12" hidden="" id="passrelated2">
                          <i class="mdi-action-lock-outline prefix"></i>
                          <input id="passwordNew" name="newpass" type="password" class="validate" value="NoChange" required>
                          <label for="password">New Password</label>
                        </div>
                      </div>
                      <div class="row">
                         <div class="input-field col s12" hidden="" id="passrelated3">
                          <i class="mdi-action-lock-outline prefix"></i>
                          <input id="passwordReenter" name="reenterpass" type="password" class="validate" value="NoChange" required>
                          <label for="password">Reenter New Password</label>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                              <i class="mdi-content-send right"></i>
                            </button>
                            <button class="btn cyan waves-effect waves-light right" type="button" name="action" style="margin-right:3%" id="cpasswd">Change Password
                            </button>
                           
                          </div>
                        </div>
                      </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
                      
                    <!--chart dashboard start-->
                    <div id="chart-dashboard">
                    
                    

					</div>
                    
                    
                    </div>
                    </section>
                    </div>
                    </section>

				</div>
                </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://superal.github.io/canvas2image/canvas2image.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>

<script src="ImageUpload/jquery.cropbox.min.js"></script>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.js"></script>          
<script>
jQuery('#detailsForm').validate({
			
            rules : {
				currentPass:{
					minlength : 5
				},
                newpass : {
                    minlength : 5,
                },
                reenterpass : {
                    minlength : 5,
                    equalTo : "#passwordNew"
                },
		
            }
		
});

$('#cpasswd').click(function()
{
	$('#passrelated1').show();
	$('#passrelated2').show();
	$('#passrelated3').show();
	$('#passwordCurrent').val("");
	$('#passwordNew').val("");
	$('#passwordReenter').val("");
	$(this).hide();
	});
</script>
<script>
$('#plugin').cropbox({
    selectors: {
        inputInfo: '#plugin textarea.data',
        inputFile: '#plugin input[type="file"]',
        btnCrop: '#plugin .btn-crop',
        btnReset: '#plugin .btn-reset',
        resultContainer: '#plugin .cropped .panel-body',
        messageBlock: '#message'
    },
    imageOptions: {
        class: 'img-thumbnail',
		id:'widget',
        style: 'margin-right: 5px; margin-bottom: 5px; hidden'
    },
    variants: [
        {
            width: 200,
            height: 200,
            minWidth: 180,
            minHeight: 200,
            maxWidth: 350,
            maxHeight: 350
        },
        {
            width: 150,
            height: 200
        }
    ],
});


	
$(document).ready(function() {
  $('#crop').click(function()
{	
	$('#dataImage').attr('src',$('#widget').attr('src')) ;
	$('#questionText').text("");
	$('#avaterBtn').hide();
	$('#questionText').append('Do you like to save this image as your profile picture?<br><button onclick=saveProfpic() type="button" class="btn btn-success btn-crop" id="yesProfPic" style="margin-top:2%"><i class="glyphicon glyphicon-scissors"></i>Yes</button>&nbsp;<button onclick="noCheck()" type="button" class="btn btn-success btn-crop" id="noProfPic"  style="margin-top:2%"><i class="glyphicon glyphicon-scissors"></i>No</button>');
	$('body').scrollTop(0);
	$('#plugin').hide();
	});
});
 $('#avaterBtn').click(function() {
	 $('#cropDiv').show();
    $('#imageInput').click();
	 $('html, body').animate({
        scrollTop: $("#crop").offset().top
    }, 2000);

  });
  
$('#changeProf').click(function()
{$('#chanegDetails').prop('disabled',false);
	}); 
 
</script>
<script>
function saveProfpic() { 
	/*
	console.log('hi');
        html2canvas($("#widget"), {
            onrendered: function(canvas) {
                theCanvas = canvas;
                //document.body.appendChild(canvas);

                // Convert and download as image 
                //Canvas2Image.saveAsPNG(canvas); 
				 var image = Canvas2Image.convertToPNG(canvas);
				 */
	
				 
               var image_data = $('#widget').attr('src');
			   var token = $('meta[name="_token"]').attr('content');
				var urlData='{{route("addImage")}}';
				$.ajax({
    			type: "POST",
    			url: urlData ,
    			data: { _token:token , 'datafile':image_data},
    			cache: false,
    			success: function(data)
    				{	
    				}
    			});
			   //console.log(image_data);
                //$("#img-out").append(canvas);
                // Clean up 
                //document.body.removeChild(canvas);
            //}
        //});
    
 location.reload();
};

 function noCheck() { 
 console.log('enough');
 };
</script>
         
                <!--end container-->

              
                    


    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/login/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/login/materialize.min.js"></script>

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/login/plugins.js"></script>
    <!-- Toast Notification -->

   
</body>

</html>