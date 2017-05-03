@extends('layouts.masteradmin')

@section('title', 'Add Auction)

<!-- START CONTENT -->
@section('content')
                <div class="section">
                    <h3 class="header" style="font-size:28px;font-weight:bold">Add Auction</h3>
                    <div class="divider"></div>

                    <!--Input fields-->
                    <form action='{{route('saveAuction')}}' method="post">
                    <div class="divider"></div>
                    <div id="input-fields">
                        <h4 class="header">Place</h4>
                        <div class="row">
                            <div class="input-field col s6"><i class="mdi-maps-place prefix"></i>
                                <input id="place" type="text" class="validate" name="place" required>
                                <label for="place">Place</label>
                            </div>
                        </div>
                    </div>

                    <div class="divider"></div>
                    <div id="input-fields">
                        <h4 class="header">Time</h4>
                        <div class="row">
                            <div class="input-field col s6"><i class="mdi-image-timer prefix"></i>
                                <input id="time" type="text" class="validate" name="time" required>
                                <label for="time">Time</label>
                            </div>
                        </div>
                    </div>

                        <div class="divider"></div>
                        <div id="input-fields">
                            <h4 class="header">Registration Fee</h4>
                            <div class="row">
                                <div class="input-field col s6"><i class="mdi-editor-attach-money prefix"></i>
                                    <input id="reg" type="number" min="0" class="validate" name="reg" required>
                                    <label for="reg">Dollars</label>
                                </div>
                            </div>
                        </div>

                    <div class="divider"></div>

                        <div class="row">
                            <h4 class="header">Date</h4>
                            <div class="input-field col s6"><i class="mdi-action-today prefix"></i>
                                <input id="sDate" type="date" name="sDate" class="datepicker">
                                <label for="sDate">Start Date</label>
                            </div>

                            <div class="input-field col s6">
                                <input id="eDate" type="date" name="eDate" class="datepicker">
                                <label for="eDate">End Date</label>
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