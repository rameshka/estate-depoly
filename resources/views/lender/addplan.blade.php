@extends('layouts.masterlender')

@section('title', 'My Plans')

@section('css')
    <link href="{{URL::asset('css/view/ion.rangeSlider.css')}}" type="text/css" rel="stylesheet">
    <link href="{{URL::asset('css/view/ion.rangeSlider.skinFlat.css')}}" type="text/css" rel="stylesheet">
@endsection


@section('content')
    <div class="section">
        <h3 class="header" style="font-size:28px;font-weight:bold">Add Financial Plan</h3>
        <div class="divider"></div>

        <!--Input fields-->
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card-panel">
                    <div class="row">
                        <form action='{{route('savePlan')}}' method="post" class="col s12">
                            <div id="input-fields">
                                <h4 class="header">Plan Name</h4>
                                <div class="row">
                                    <div class="input-field col s4">
                                        <input id="planname" type="text" class="validate" name="pname" required>
                                        <label for="pname">Plan Name</label>
                                    </div>
                                </div>
                            </div>

                            <div id="input-fields col s6">
                                <h4 class="header">Mortage Amount (Lakhs)</h4>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <div id="range_03"></div>

                                    </div>
                                    <input type="text" id="amount" name="amount" value="1" hidden>
                                </div>
                            </div>

                            <div id="input-fields col s4">
                                <h4 class="header">Amortizationt (Years)</h4>
                                <div class="row">
                                    <div class="input-field col s4">
                                        <div id="range_04"></div>

                                    </div>
                                    <div>
                                        <input type="text" name="years" id="years" value="5" hidden>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <h4 class="header">Payment Frequency</h4>
                                <div class="input-field col s4">
                                    <select name="frequency">
                                        <option value="Monthly">Monthly</option>
                                        <option value="Yearly">Yearly</option>
                                    </select>

                                </div>

                            </div>

                            <div class="row">
                                <h4 class="header">Payment Type</h4>
                                <div class="input-field col s4">
                                    <select name="type">
                                        <option value="Simple Interest">Simple interest</option>
                                        <option value="Compound Interest">Compound Interest</option>
                                    </select>

                                </div>

                            </div>

                            <div id="input-fields">
                                <h4 class="header">Interest Rate (%)</h4>
                                <div class="row">
                                    <div class="input-field col s4">
                                        <div id="range_05"></div>

                                    </div>
                                    <input type="text" id="interest" name="interest" value="1" hidden>
                                </div>
                            </div>

                            <!--Icon Prefixes-->

                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                            <div class="row">
                                <h4 class="header">Full Document (pdf)</h4>
                                <div class="col s12 m8 l9">

                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>File</span>
                                            <input type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text">
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                                        Submit <i class="mdi-content-send right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('slider')

    <script type="text/javascript" src="js/view/ion.rangeSlider.js"></script>


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

        $("#range_04").ionRangeSlider({

            grid: true,
            min: 1,
            max: 25,
            from: 5

        });

        $("#range_04").change(function () {
            // console.log($('.irs-to')[1].textContent);	//output from sliders
            // console.log($('.irs-from')[1].textContent);
            //     document.getElementById('years').value = $('.irs-from')[1].textContent;
            document.getElementById('years').value = $("#range_04").val();


        });

        $("#range_05").ionRangeSlider({

            grid: true,
            min: 1,
            max: 50,
            from: 1


        });

        $("#range_05").change(function () {
            //  console.log($('.irs-to')[2].textContent);	//output from sliders
            //console.log($('.irs-from')[2].textContent);
            //document.getElementById('interest').value = $('.irs-from')[2].textContent;

            document.getElementById('interest').value = $("#range_05").val();


        });

    </script>
@endsection