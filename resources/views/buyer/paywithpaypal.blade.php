@extends('layouts.masterbuyer')

@section('title', 'Auctions')

        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- START CONTENT -->
@section('content')
        <section id="content">

            <!--start container-->
            <div class="container">
                <div id="invoice">
                    <div class="invoice-header">
                        <div class="row section">
                            <div class="col s12 m6 l6">

                                <img src="{{URL::asset('images/login-logo.jpg')}}" style="width: 100px;height: 100px;border-radius: 50%" alt="company logo">
                                <p>To,
                                    <br/>
                                    <span class="strong">{{$send[0]}}</span>
                                    <br/>
                                    <span>{{$send[1]}}</span>
                                    <br/>

                                </p>
                            </div>

                            <div class="col s12 m6 l6">
                                <div class="invoce-company-address right-align">
                                    <p><span class="strong">Lankan-Realtor (Pvt) Ltd.</span>
                                        <br/>
                                        <span>Address</span>
                                        <br/>
                                        <span>Telephone</span>
                                        <br/>

                                    </p>
                                </div>

                                <div class="invoce-company-contact right-align">
                                    <span class="invoice-icon"><i class="mdi-communication-quick-contacts-mail cyan-text"></i></span>
                                    <p><span class="strong">Email</span>
                                        <br/>
                                        <span>info@exampledomain.com</span>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            @if ($send[6] =="success")
                                <div class="custom-alerts alert alert-success fade in">
                                    <p style="font-size: 1.6em; color:green; margin-top: -5%;">
                                        Payment Sucess
                                    </p>
                                </div>

                            @endif
                            @if ($message = Session::get('error'))
                                <div class="custom-alerts alert alert-danger fade in">
                                    <p style="font-size: 1.6em; color: red; margin-top: -5%;">
                                        {!! $message !!}
                                    </p>
                                </div>
                                <?php Session::forget('error');?>
                            @endif

                        </div>
                    </div>
                    <div class="invoice-lable">
                        <div class="row">
                            <div class="col s12 m3 l3 cyan">
                                <h4 class="white-text invoice-text">INVOICE</h4>
                            </div>
                            <div class="col s12 m9 l9 invoice-brief cyan white-text">
                                <div class="row">

                                    <div class="col s12 m3 l4">
                                        <p class="strong">Invoice No</p>
                                        <h4 class="header">{{$send[3]}}</h4>
                                    </div>

                                    <div class="col s12 m3 l3">
                                        <p class="strong">Total Due</p>
                                        <h4 class="header">$ {{$send[2]}}</h4>
                                    </div>

                                    <div class="col s12 m3 l3">
                                        <p class="strong">Due Date</p>
                                        <h4 class="header">{{$send[4]}}</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="invoice-table">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <table class="striped">
                                    <thead>
                                    <tr>

                                        <th data-field="nameoftheuser" >Name of the user : {{$send[0]}} </th>

                                    </tr>
                                    </thead>

                                </table>
                                <br>
                                <table class="striped">
                                    <thead>
                                    <tr>

                                        <th data-field="Description">Description : Auction Registration (Property Buyer)</th>

                                    </tr>
                                    </thead>

                                </table>
                            </div>

                        </div>
                    </div>
                    <br>
                    <div class ="divider" style="color:blue; height: 20px;"></div>
                    <br>
                    <div class="invoice-footer">
                        <div class="row">
                            <div class="col s12 m6 l6">
                                <p class="strong">Payment Method</p>
                                <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!! URL::route('addmoney.paypal') !!}" >
                                    {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                                        <div class="col-md-6">
                                            <input id="amount" type="text" class="form-control" name="amount" value={{$send[2]}} autofocus hidden="">
                                            @if ($errors->has('amount'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <input type="text" name = "paypalname"value = {{$send[0]}} hidden="">
                                            <input type = "text" name = "paypalAmount" value = {{$send[2]}} hidden="">

                                            <input type = "number" name ="fee" value = {{$send[2]}} hidden >
                                            <input type="text" name="invoice" value={{$send[3]}} hidden>
                                            <input type="text" name="type" value="auction" hidden="">
                                            <input type="text" name="email" value={{$send[1]}} hidden>
                                            <input type="number" name="auctionID" value={{$send[5]}} hidden>

                                            <input type = "text" name = "paypalDescription" value  = "Registration for auction ID :".{{$send[5]}} hidden="">
                                            @if ( $send[6]!="success")

                                                <button type="submit" class="btn btn-primary">
                                                    Paywith Paypal
                                                </button>
                                            @endif
                                            @if (  $send[6]=="success")


                                            @endif
                                        </div>
                                    </div>
                                </form>
                                <p class="strong">Terms & Condition</p>
                                <ul>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="col s12 m6 l6 center-align">
                                <p>Approved By,</p>
                                <p>Managing Director</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!--end container-->

        </section>
        <!-- END CONTENT -->

    </div>
    <!-- END WRAPPER -->

</div>
    @endsection
