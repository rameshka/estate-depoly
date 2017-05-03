@extends('layouts.masterlender')

@section('title','Search Results')

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
            width: 250px;
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
                        <label for="icon_email"><b style="font-size: 1.2em">Optional</b><a
                                    id="showhidebtn">(show/hide)</a></label>
                        <div id="showhide">
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

    <div id="card-widgets" class="section">
        <div id="card-widgets" class="seaction">
            <div class="row">


                @foreach($temparray as $property)


                    <div class="col s12 m4 l4">

                        <div class="card">
                            <div class="card-image">
                                <a  href="{{ URL::route('mysearchresult', $property->getPropertyID()) }}"><img src="images/sample-1.jpg" alt="sample image"></a>
                                <span class="card-title"> {!! $property->getCity()!!}</span>
                            </div>
                            <div class="card-content">


                                <p><b>Bed Rooms :</b>{!! $property->getBeds()!!}</p>
                                <p><b>Bath Rooms:</b>{!! $property->getBaths()!!}</p>
                                <p><b>Adress :</b>{!! $property->getHnumber()!!},{!! $property->getStreet()!!},{!! $property->getClosecity()!!}</p>
                            </div>

                        </div>
                    </div>
                @endforeach
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
            max: 5,
            from: 1,
            to: 3,
            prefix: ""

        });

        $("#range_03").change(function () {
            console.log($('.irs-to')[0].textContent);	//output from sliders
            console.log($('.irs-from')[0].textContent);
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

