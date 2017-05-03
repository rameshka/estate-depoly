@extends('layouts.masterseller')

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

            <form class="col s12" action='{{route('saverateLender')}}' method="post">

                <input type="text" name="id" hidden value= {{$id}} >
                <input type="text" id="val" hidden name="val" value="1">
                <input type="hidden" name="_token" value = "{{ csrf_token() }}" />
                <div class="row">
                    <div class="input-field col s11">
                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Rate<i class="right"></i> </button>
                    </div>
                </div>
            </form>
        </div>



        </form>


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

            document.getElementById('val').value = $("#range_03").val();


        });

    </script>

@endsection
