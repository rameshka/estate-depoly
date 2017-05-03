@extends('layouts.masteradmin')

@section('title', 'Message')

<!-- START CONTENT -->
@section('content')
                    <div class="divider"></div>
                    <!--Basic Form-->
                    <div id="basic-form" class="section">
                        <div class="row">
                            <div class="col s12 m12 l6">
                                <div class="card-panel">
                                    <h4 class="header2">Compose Message</h4>
                                    <div class="row">
                                        <form class="col s12" action='{{route('sendMessage')}}' method="post">

                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <h4 class="header2">Audience</h4>

                                                    <select name="role">
                                                        <option value="AL">ALL</option>
                                                        <option value="S">Property Seller</option>
                                                        <option value="B">Property Buyer</option>

                                                        <option value="SB">Property Seller/Property Buyer</option>
                                                        <option value="M">Money Lender</option>
                                                    </select>

                                                </div>
                                            </div>



                                            <div class="row">

                                                <div class="input-field col s12">

                                                    <h4 class="header2">Message</h4>
                                                    <input name="message" type="text" >

                                                </div>
                                                <input type="hidden" name="_token" value = "{{ csrf_token() }}" />

                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit <i class="mdi-content-send right"></i> </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
@endsection