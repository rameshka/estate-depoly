@extends('layouts.masterbuyer')

@section('title', 'Plan')

@section('css')
    <link href="{{URL::asset('css/view/ion.rangeSlider.css')}}" type="text/css" rel="stylesheet">
    <link href="{{URL::asset('css/view/ion.rangeSlider.skinFlat.css')}}" type="text/css" rel="stylesheet">
@endsection

@section('content')
    <div class="col s12 m8 14">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <div id="photosphere" style="margin-top: 2%;"></div>
            </div>
            <h5 style="text-align: center">Review and Rate Money Lender</h5>
            <div class="card-content">

                <div id="range_03"></div>

            </div>
            <div class="row" style="margin-left: 2px;">
                <div class="dynamic-color" >

                    <div class="col s1 m1 l1" style="margin-right:-25px;width: 11%">
                        <div class="red lighten-5"></div>
                    </div>

                    <div class="col s1 m1 l1" style="margin-right:-25px;width: 11%">
                        <div class="red lighten-4"></div>
                    </div>


                    <div class="col s1 m1 l1" style="margin-right:-25px;width: 11%">
                        <div class="red lighten-3" ></div>
                    </div>

                    <div class="col s1 m1 l1" style="margin-right:-25px;width: 11%">
                        <div class="red accent-1"></div>
                    </div>

                    <div class="col s1 m1 l1" style="margin-right:-25px;width: 11%">
                        <div class="red lighten-2" ></div>
                    </div>
                    <div class="col s1 m1 l1" style="margin-right:-25px;width: 11%">
                        <div class="red lighten-1"></div>
                    </div>

                    <div class="col s1 m1 l1" style="margin-right:-25px;width: 11%">
                        <div class="red"></div>
                    </div>
                    <div class="col s1 m1 l1" style="margin-right:-25px;width: 11%">
                        <div class="red darken-1"></div>
                    </div>
                    <div class="col s1 m1 l1" style="margin-right:-25px;width: 11%">
                        <div class="red darken-2"></div>
                    </div>
                    <div class="col s1 m1 l1" style="margin-right:-25px;width: 11%">
                        <div class="red darken-3"></div>
                    </div>
                    <div class="col s1 m1 l1" style="margin-right:-25px;width: 11%">
                        <div class="red darken-4"></div>
                    </div>

                </div>
            </div>

        </div>
    </div>



    </div>


@endsection

@section('slider')

    <script type="text/javascript" src="{{URL::asset('js/view/ion.rangeSlider.js')}}"></script>


    <script>
        $("#range_03").ionRangeSlider({
            type: "single",
            grid: true,
            min: 1,
            max: 100,
            from: 1,


        });

        $("#range_03").change(function () {
            console.log($("#range_03").val());

        });

        $("#range_03").change(function () {
            //console.log($('.irs-to')[0].textContent);	//output from sliders
            //console.log($('.irs-from')[0].textContent);
            document.getElementById('amount').value = $("#range_03").val();


        });

    </script>
    <script src="{{URL::asset('bookviewer/web/compatibility.js')}}"></script>
    <script src="{{URL::asset('bookviewer/web/l10n.js')}}"></script>
    <script src="{{URL::asset('bookviewer/build/pdf.js')}}"></script>



    <script src="{{URL::asset('bookviewer/web/viewer.js')}}"></script>

@endsection
