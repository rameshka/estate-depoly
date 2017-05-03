<!DOCTYPE html>
<html lang="en">


<head>

    <title>Homes.lk</title>
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <!-- Favicons-->
    <link rel="icon" href="images/favicon.ico" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <meta name="_token" content="{{csrf_token()}}">


    <!-- CORE CSS-->
    <link rel="stylesheet" href="{{URL::asset('css/login/materialize.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/login/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/login/page-center.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/login/prism.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/login/perfect-scrollbar.css')}}">


    <script src='https://www.google.com/recaptcha/api.js'></script>
    <style>
        input#submit {
            background: none;
            border: none;
            font-size: 1em;
            color: white;
            width: 250px;
            height: 40px;
        }

        .input-field label.error {
            margin-left: 40%;
            font-size: 0.8rem;
            color: #A73E1B;
            -webkit-transform: translateY(-140%);
            -moz-transform: translateY(-140%);
            -ms-transform: translateY(-140%);
            -o-transform: translateY(-140%);
            transform: translateY(-140%);
        }

    </style>


</head>

<body class="cyan">
<div>
    @if(Session::has('message'))
        {{ Session::get('message') }}
    @endif
</div>
<!-- Errors -->
<div>
    @if(count($errors) >0)
        <div class="row">
            <div class="col-md-6">
                <ul>
                    @foreach($errors->all() as $error)

                        {{$error}}
                    @endforeach

                </ul>
            </div>
        </div>
    @endif
</div>

<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->


<div id="login-page" class="row">
    <div class="col s13 z-depth-4 card-panel">


        <form class="login-form" id="regForm" action='{{route('adminSignIn')}}' method="post">
            <div class="row">
                <div class="input-field col s12 center">
                    <h4>Register</h4>
                    <p class="center">Join our community now !</p>
                </div>
            </div>

            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-social-person-outline prefix"></i>
                    <input id="username" type="text" name="username" required>
                    <label for="username" class="center-align">Username</label>
                </div>
            </div>

            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-communication-email prefix"></i>
                    <input id="email" type="email" required autocomplete="off" name="email">
                    <label for="email" class="center-align">Email</label>
                </div>
            </div>

            <div id="status"></div>


            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-action-lock-outline prefix"></i>
                    <input id="password" type="password" name="password" required>
                    <label for="password">Password</label>
                </div>
            </div>

            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-action-lock-outline prefix"></i>
                    <input id="passwordreenter" type="password" name="passwordreenter" required>
                    <label for="passwordreenter">Password again</label>
                </div>
            </div>

            <div class="input-field col s12">
                <div class="g-recaptcha" name="recaptcha" id="recaptcha" data-callback="enableBtn"
                     data-expired-callback="capcha_expired"
                     data-sitekey="6LczxxQUAAAAAHUOKh2DExTVoN92jeqSB7qN8F80"></div>
            </div>

            <div class="input-field col s12">
                <input type="checkbox" name="checkBox" id="check" value="Agreed" required/>
                <label style="color:#030303" for="check">&nbsp;&nbsp;&nbsp;&nbsp;I agreed to the Homes.lk Private
                    Policy.</label>
            </div>
            <div class="input-field col s12">

                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                <input type="submit" value="Register Now" id="submit" class="btn waves-effect waves-light col s14">
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <p class="margin center medium-small sign-up">Already have an account? <a
                                href="{{ URL::route('loginView') }}">Login</a></p>
                </div>
            </div>

        </form>
    </div>
</div>


<!-- jQuery Library -->
<script src="{{URL::asset('js/login/jquery-1.11.2.min.js')}}"></script>

<!--materialize js-->
<script src="{{URL::asset('js/login/materialize.js')}}"></script>
<!--prism-->
<script src="{{URL::asset('js/login/prism.js')}}"></script>
<!--scrollbar-->
<script src="{{URL::asset('js/login/perfect-scrollbar.min.js')}}"></script>
<script src="{{URL::asset('js/login/plugins.js')}}"></script>

<script>
    //////////////////////////  ajax part finding email///////////////////////////////////////
    $(document).ready(function () {
        $("#email").keyup(function () {
            var email = $("#email").val();
            var token = $('meta[name="_token"]').attr('content');
            var urlData = '{{route("emailCheck")}}';
            if (email.length == 0) {
                $("#status").html("");
            }
            if (email.length >= 2) {
                $("#status").html('<img src="welcomeassets/loader.gif" /> Checking availability...');
                $.ajax({
                    type: "POST",
                    url: urlData,
                    data: {_token: token, 'datafile': email},
                    cache: false,
                    success: function (data) {
                        var datavales = data.split("|");
                        $("#status").html(datavales[0]);
                        if (datavales[1] == "false") {
                            document.getElementById("submit").disabled = true;
                        }
                        else if (datavales[1] == "true") {
                            document.getElementById("submit").disabled = false;
                        }
                    }
                });
            }

        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.js"></script>
<script>

    jQuery('#regForm').validate({


        rules: {

            password: {
                minlength: 5
            },
            passwordreenter: {
                minlength: 5,
                equalTo: "#password"
            },

        }
    });

    $('#submit').click(function () {
        console.log($('#regForm').valid());

    });

    function enableBtn() {
        document.getElementById("submit").disabled = false;
    }

</script>


</body>

</html>