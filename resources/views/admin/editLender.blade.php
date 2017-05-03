@extends('layouts.masteradmin')

@section('title', 'Edit Lender')

<!-- START CONTENT -->
@section('content')
                <div class="section">
                    <div class="divider"></div>
                    <!--Basic Form-->
                    <div id="basic-form" class="section">
                        <div class="row">
                            <div class="col s12 m12 l6">
                                <div class="card-panel">
                                    <h4 class="header2">Edit Details</h4>
                                    <div class="row">
                                        <form class="col s12" method="post" action='{{route('sendLender')}}'>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input name="ID" type="text" value= <?php echo $lender->getLenderID(); ?> readonly>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input name="name" type="text" value= <?php echo $lender->getName(); ?> >

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input name="email" type="email" value= <?php echo $lender->getEmail(); ?>  readonly>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input name="telephone" type="tel" value=<?php echo $lender->getTelephone(); ?> >

                                            </div>
                                        </div>
                                        <input type="hidden" name="_token" value = "{{ csrf_token() }}" />
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input name="des" type="text" value=<?php echo $lender->getDescription(); ?>>

                                            </div>

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
                            <!-- Form with placeholder -->

                        </div>
                    </div>
                </div>
    @endsection