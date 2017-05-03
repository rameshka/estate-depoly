@extends('layouts.masterseller')

@section('title', 'Page Title')

@section('style')
    <style>
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
            <div   class="card-panel">
                <h4 class="header2">Create Your Advertisement</h4>
                <form action='{{route('saveproperty')}}' method="post">
                <div class="row">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <select name="city">
                                    <option value="Wadduwa">Wadduwa</option>
                                </select>
                                <label for="city">Location</label>
                            </div>


                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <select name="beds">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="10+">10+</option>
                                </select>
                                <label for="location">Bed Rooms</label>
                            </div>

                            <div class="input-field col s6">
                                <select name="baths">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="10+">10+</option>
                                </select>
                                <label for="location">Bath Rooms</label>
                            </div>


                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="landarea" type="text" name="landarea">
                                <label for="landarea">Land size (Perches)</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="floorarea" type="text" name="floorarea">
                                <label for="floorarea">Floor area (sqft)</label>
                            </div>

                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <input name="telephone" type="tel"/>
                                <label for="telephone">Telephone</label>
                            </div>

                            <div class="input-field col s6">
                                <input name="price" id="price" type="text"/>
                                <label for="price">Price (LKR)</label>

                            </div>
                        </div>

                        <div class="row">
                            <div class="file-field input-field col s12">
                                <input class="file-path validate" type="text"/>
                                <div class="btn">
                                    <span>Image</span>
                                    <input type="file"/>
                                </div>
                            </div>

                        </div>


                        <div class="input-field col s4">
                            <select name="plans">
                                <option value="0">None</option>
                                @foreach($temparray as $p)
                                    <option value={{$p->getId()}}>{{$p->getName()}}</option>
                                @endforeach
                            </select>
                            <label for="location">Attach Financial plans</label>
                        </div>
                        <!-------------------------------------new section------------------------------------------>


                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="des" class="materialize-textarea"  name="des" required></textarea>
                                <label for="des">Description</label>
                            </div>
                        </div>
                        <h6>Address</h6>


                        <div class="row">
                            <div class="input-field col s4">
                                <input id="number" type="text" name="hnumber" required>
                                <label for="hnumber">House number</label>
                            </div>


                            <div class="input-field col s4">
                                <input id="adress1" type="text" name="street" required>
                                <label for="street">Street</label>
                            </div>


                            <div class="input-field col s4">
                                <input id="adress2" type="text" name="closecity" required>
                                <label for="closecity">City</label>
                            </div>
                        </div>


                            <input id="longi" type="number" step="any"  name="longitude" hidden/>


                            <input id="lati" type="number" step="any" name="latitude" hidden/>



                        <input type="hidden" name="_token" value = "{{ csrf_token() }}" />




                        <div class="row">

                            <p > &nbsp;&nbsp; Locate in google maps &nbsp;&nbsp;&nbsp;  <a id="btn" class="btn-floating btn-large waves-effect waves-light pink"><i class="mdi-content-add"></i></a></p>

                            <div id="dvMap" style="width: 300px; height: 300px">
                            </div>

                        </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                                        Submit
                                        <i class="mdi-content-send right"></i>
                                    </button>
                                </div>
                            </div>
                </div>

            </div>
            </form>
        </div>

        @endsection

        @section('getloc')
            <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyClIcoi3SKQaDWgqPNIkcFBSZ6WY5c1NhE">

            </script>

            <script>


                $("#btn").click(function () {

                    var geocoder = new google.maps.Geocoder();
                    var address = document.getElementById('number').value;
                    address += " " + document.getElementById('adress1').value;
                    address += " " + document.getElementById('adress2').value;
                    var address2 = document.getElementById('adress1').value;
                    address2 += " " + document.getElementById('adress2').value;

                    //document.getElementById('info').innerHTML = address;

                    geocoder.geocode({'address': address}, function (results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                           // alert("location : " +  + " " + );
                         //   alert("location : " + results[0].geometry.location.lat() + " " + results[0].geometry.location.lng());

                            document.getElementById('longi').value = results[0].geometry.location.lng().toFixed(6);
                            document.getElementById('lati').value = results[0].geometry.location.lat().toFixed(6);

                        } else {
                            geocoder.geocode({'address': address2}, function (results, status) {
                                if (status == google.maps.GeocoderStatus.OK) {
                                    var mapOptions = {
                                        center: new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()),
                                        zoom: 14,
                                        mapTypeId: google.maps.MapTypeId.ROADMAP
                                    };
                                    var infoWindow = new google.maps.InfoWindow();
                                    var latlngbounds = new google.maps.LatLngBounds();
                                    var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
                                    google.maps.event.addListener(map, 'click', function (e) {
                                     //  alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                                        document.getElementById('longi').value =e.latLng.lng().toFixed(6);
                                        document.getElementById('lati').value = e.latLng.lat().toFixed(6);
                                    });
                                }
                            });
                        }
                    });
                });
            </script>


@endsection