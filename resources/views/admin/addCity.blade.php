@extends('layouts.masteradmin')

@section('title', 'Add City')

<!-- START CONTENT -->
@section('content')
                <div class="section">
                    <h3 class="header" style="font-size:28px;font-weight:bold">Add Cities</h3>
                    <div class="divider"></div>

                    <!--Input fields-->
                    <form action='{{route('saveCity')}}' method="post">
                        <div id="input-fields">
                            <h4 class="header">City</h4>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="name" name="city" type="text" class="validate">
                                    <label for="name">City name</label>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div id="input-fields">
                            <h4 class="header">Postal Code</h4>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="ID" type="number" class="validate" name="ID" required>
                                    <label for="first_name">ID</label>
                                </div>
                            </div>
                        </div>
                        <!--Icon Prefixes-->

                        <input type="hidden" name="_token" value = "{{ csrf_token() }}" />
                        <div class="divider"></div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit <i class="mdi-content-send right"></i> </button>
                            </div>
                        </div>
                    </form>
                </div>
          @endsection