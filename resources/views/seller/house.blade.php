
@extends('layouts.masterseller')

@section('title', 'House')


@section('style')
    <link rel="stylesheet" href="{{URL::asset('panaroma/photo-sphere-viewer.css')}}">

    <style>

        #photosphere {
            width: 100%;
            height: 500px;
        }

        .psv-button.custom-button {
            font-size: 22px;
            line-height: 20px;
        }

        #map {
            height: 80%;
        }
    </style>
 @endsection

@section('content')

    <div class="row">
        <div class="col s12 m12 l12">
            <div class="card-panel">
        <h5 style="text-align: center">Decent House in {!! $property->getCity() !!} for sale</h5>
            </div>
        </div>
    </div>

    <div class="col s12 m8 14">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <div id="photosphere" style="margin-top: 2%;"></div>
                        </div>
                        <div class="card-content">
                            <div>
                                <p style="font-size: 0.9em;"><i class="fa fa-eye-slash" aria-hidden="true"></i> &nbsp;&nbsp;
                                    Normal view is limited to 180. Wanna see all around? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button id="360" class="btn-floating btn-large waves-effect waves-light ">
                                        360<sup>0</sup></button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end container-->

        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card-panel">
                    <h4 class="header2">Property Details</h4>
                    <div class="row">
                        <form class="col s12">
                            <div class="row">

                                <div class="col s12 m12 l12">
                                    {!! $property->getDes()!!}
                                </div>

                            </div>


                            <div class="row">
                                <div class="input-field col s4">
                                    <p><b>Address:</b> {!! $property->getHnumber() !!},{!! $property->getStreet() !!},{!! $property->getClosecity() !!}</p>
                                </div>

                            </div>

                            <div class="row">
                                <div class="input-field col s2">
                                    <b>Land Size: (Perches)</b><p>{!! $property->getLandarea() !!}</p>

                                </div>

                                <div class="input-field col s2">
                                    <b>Floor area: (Sqft)</b><p>{!! $property->getFloorarea()!!}</p>

                                </div>

                                <div class="input-field col s2">
                                    <b>Bed Rooms:</b><p>{!! $property->getBeds()!!}</p>
                                </div>

                                <div class="input-field col s2">
                                    <b>Bath Rooms:</b><p>{!! $property->getBaths()!!}</p>
                                </div>

                                </div>

                            <div class="row">
                                <div class="input-field col s4">
                                    <p><b>Price:</b>&emsp; {!! $property->getPrice()!!} LKR</p>
                                </div>

                            </div>

                            <div class="row">
                                <div class="input-field col s4">
                                    <p><b>Date: </b>{!! $property->getDate()!!}</p>
                                </div>

                            </div>



                            <a href="{{ URL::route('edit', $property->getPropertyID()) }}" class="waves-effect waves-light btn-large" style="margin-left: 75%"><i class="mdi-editor-border-color left"></i>Edit Details</a>
                        </form>
                    </div>
                </div>


            </div>
        </div>

        <div class="row">
            <div class="col s12 m8 8">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">

                        <div id="map" style="height: 200px"></div>
                    </div>
                    <div class="card-content">
                        <div><p style="font-size: 0.9em;"> Wanna go there Fast? &nbsp;&nbsp;&nbsp;<i
                                        class="fa fa-hand-peace-o" aria-hidden="true"></i></p></div>
                    </div>
                </div>
            </div>
        </div>





<script>
    function initMap() {
        var latdata;
        var lngdata;
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 7,
            center: {lat: 6.9270786, lng: 79.861243}

        });
        directionsDisplay.setMap(map);
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude

                };
                console.log(pos.lat.toString() + "," + pos.lng.toString());

                calculateAndDisplayRoute(directionsService, directionsDisplay, pos);

            }, function () {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }


    }

    function calculateAndDisplayRoute(directionsService, directionsDisplay, pos) {
        var value = pos.lat.toString() + "," + pos.lng.toString();

        var value1 =<?php echo $property->getLatitude(); ?> + "," + <?php echo $property->getLongitude(); ?>;

        directionsService.route({

            origin: value,
            destination:value1,
            travelMode: 'DRIVING'
        }, function (response, status) {
            if (status === 'OK') {
                directionsDisplay.setDirections(response);
            } else {
                window.alert('Directions request failed due to ' + status);
            }
        });
    }

</script>

<script>

</script>


    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClIcoi3SKQaDWgqPNIkcFBSZ6WY5c1NhE&callback=initMap">
</script>



<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="{{URL::asset('panaroma/three.min.js')}}"></script>
<script src="{{URL::asset('panaroma/D.min.js')}}"></script>
<script src="{{URL::asset('panaroma/uevent.min.js')}}"></script>
<script src="{{URL::asset('panaroma/doT.min.js')}}"></script>
<script src="{{URL::asset('panaroma/CanvasRenderer.js')}}"></script>
<script src="{{URL::asset('panaroma/Projector.js')}}"></script>
<script src="{{URL::asset('panaroma/EffectComposer.js')}}"></script>
<script src="{{URL::asset('panaroma/RenderPass.js')}}"></script>
<script src="{{URL::asset('panaroma/ShaderPass.js')}}"></script>
<script src="{{URL::asset('panaroma/MaskPass.js')}}"></script>
<script src="{{URL::asset('panaroma/CopyShader.js')}}"></script>
<script src="{{URL::asset('panaroma/DeviceOrientationControls.js')}}"></script>
<script src="{{URL::asset('panaroma/photo-sphere-viewer.js')}}"></script>
<script src="{{URL::asset('panaroma/base.js')}}"></script>

@endsection
