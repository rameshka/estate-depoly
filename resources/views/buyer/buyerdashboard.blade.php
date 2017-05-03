@extends('layouts.masterbuyer')

@section('title','Buyer Dashboard')

@section('token')
    <meta name="_token" content="{{csrf_token()}}">
@endsection

@section('css')

    <link href="{{URL::asset('css/view/ion.rangeSlider.css')}}" type="text/css" rel="stylesheet" >
    <link href="{{URL::asset('css/view/ion.rangeSlider.skinFlat.css')}}" type="text/css" rel="stylesheet" >

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js'></script>

    <style>
        #result1 {
            position: absolute;
            width: 107%;
            padding: 10px;
            display: none;
            margin-top: 30px;
            border-top: 0px;
            overflow: hidden;
            border: 1px #CCC solid;
            background-color: white;
        }



    </style>
@endsection


@section('content')
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="card-panel">
                <div class="row">
                    <form class="col s12" action="searchHome" method="post">

                        <div class="row" style="background-color: #1E88E5;border-radius:3px;">
                            <div class="header-search-wrapper">
                                <div class="input-field col s11">
                                    <i class="mdi-action-search"></i>
                                    <div id="result1"></div>
                                    <input type="text" name="Search" id="searchid" class="header-search-input search1" placeholder="Find your dream home" autocomplete="off"/>
                                </div>
                            </div>
                            <input type="hidden" name="_token" value = "{{ csrf_token() }}" />
                            <div class="input-field col s1 right">
                                <button id="link1" class="btn-floating btn-large waves-effect waves-light" type="submit" style="margin-left: -70%;">
                                    <i class="mdi-action-search"></i></button>
                            </div>

                        </div>
                        <br>
                        <label for="icon_email"><b style="font-size: 1.2em  ">Optional</b><a style="cursor: hand" id="showhidebtn">(show/hide)</a></label>
                        <div id="showhide">
                            <div class="row">
                                <div class="divider"></div>
                                <div class="input-field col s2">
                                    <label for="icon_prefix">Number of bed rooms</label>

                                    <input type="text" hidden name="bedsfrom" value="1" id="b1">
                                    <input type="text" hidden name="bedsto" value="10" id="b2">

                                </div>
                                <div class="input-field col s4">
                                    <div id="range_03"></div>
                                </div>
                                <div class="input-field col s2">
                                    <label for="icon_email">Total Area of land (Perches)</label>
                                    <input type="text" hidden name="landfrom" value="5" id="l1">
                                    <input type="text" hidden name="landto" value="100" id="l2">

                                </div>
                                <div class="input-field col s4">
                                    <div id="range_04"></div>
                                </div>
                            </div>
                            <br>
                            <div class="divider"></div>
                            <div class="row">
                                <br>
                                <label for="icon_email">Money (Lakhs)</label>
                                <input type="text" hidden name="pricefrom" value="100" id="p1">
                                <input type="text" hidden name="priceto" value="100000" id="p2">
                                <div id="range_05"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('ajax')
    <script>

        $(function () {
            $(".search1").keyup(function () {

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
                            console.log(html);
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
@endsection


@section('slider')

    <script type="text/javascript" src="js/view/ion.rangeSlider.js"></script>


    <script>
        $("#range_03").ionRangeSlider({
            type: "double",
            grid: true,
            min: 1,
            max: 10,
            from: 1,
            to: 10,
            prefix: ""

        });

        $("#range_03").change(function () {
            console.log($('.irs-to')[0].textContent);	//output from sliders
            console.log($('.irs-from')[0].textContent);
            document.getElementById('b2').value =$('.irs-to')[0].textContent;
            document.getElementById('b1').value =$('.irs-from')[0].textContent;


        });
        $("#range_04").ionRangeSlider({
            type: "double",
            grid: true,
            min: 5,
            max: 100,
            from: 5,
            to: 100,
            prefix: ""
        });

        $("#range_04").change(function () {
            console.log($('.irs-to')[1].textContent);	//output from sliders
            console.log($('.irs-from')[1].textContent);
            document.getElementById('l2').value =$('.irs-to')[1].textContent;
            document.getElementById('l1').value =$('.irs-from')[1].textContent;
        });

        $("#range_05").ionRangeSlider({
            type: "double",
            grid: true,
            min: 100,
            max: 100000,
            from: 100,
            to: 100000,
            prefix: "",

        })

        $("#range_05").change(function () {
            console.log($('.irs-to')[2].textContent);	//output from sliders
            console.log($('.irs-from')[2].textContent);
            document.getElementById('p2').value =$('.irs-to')[2].textContent;
            document.getElementById('p1').value =$('.irs-from')[2].textContent;
        });

        $('#showhidebtn').click(function () {
            if ($('#showhide').is(':hidden')) {
                $('#showhide').show();
            }
            else {
                $('#showhide').hide();
            }

        });

    </script>
@endsection





<!-- END CONTENT -->

