@extends('layouts.masteradmin')

@section('title', 'Add Lender')

<!-- START CONTENT -->
@section('content')
                <div class="section">
                    <h3 class="header" style="font-size:28px;font-weight:bold">Money Lender Details</h3>
                    <div class="divider"></div>

                    <!--Input fields-->
                    <form action='{{route('savelender')}}' method="post">
                        <div id="input-fields">
                            <h4 class="header">Name</h4>
                            <div class="row">
                                <div class="input-field col s6"><i class="mdi-social-person prefix"></i>
                                    <input id="name" name="name" type="text" class="validate">
                                    <label for="name">Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div id="input-fields">
                            <h4 class="header">Registraion ID</h4>
                            <div class="row">
                                <div class="input-field col s6"><i class="mdi-social-person-outline prefix"></i>
                                    <input id="ID" type="text" class="validate" name="ID" required>
                                    <label for="first_name">ID</label>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>

                        <!--Icon Prefixes-->
                        <div id="icon-prefixes" class="section">
                            <h4 class="header">Telephone</h4>
                            <div class="row">
                                <div class="input-field col s6"> <i class="mdi-communication-phone prefix"></i>
                                    <input id="telephone" type="tel" name="telephone" class="validate">
                                    <label for="telephone">Telephone</label>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div id="icon-prefixes" class="section">
                            <h4 class="header">Email</h4>
                            <div class="row">
                                <div class="input-field col s6"><i class="mdi-communication-email prefix"></i>
                                    <input id="email" type="email" name="email" class="validate">
                                    <label for="email">email</label>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>


                        <div id="icon-prefixes" class="section">
                            <h4 class="header">Password</h4>
                            <div class="row">
                                <div class="input-field col s6"><i class="mdi-action-lock-outline prefix"></i>
                                    <input id="password" type="text" name="password" class="validate" required>
                                    <label for="password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>

                        <!--Input Textarea-->
                        <div id="input-textarea" class="section">
                            <h4 class="header">Description</h4>
                            <div class="row">
                                <div class="input-field col s12"> <i class="mdi-editor-mode-edit prefix"></i>
                                    <textarea id="des" name="des" class="materialize-textarea"></textarea>
                                    <label for="des" class="">Brief Description</label>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>

                        <!--Input File Input-->
                        <div id="input-file-input" class="section">
                            <h4 class="header">Profile Picture</h4>
                            <div class="row">
                                <div class="file-field input-field">
                                    <input class="file-path validate" type="text" name="image"/>
                                    <div class="btn"> <span>File</span>
                                        <input type="file" />
                                    </div>
                                </div>
                            </div>
                        </div>
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