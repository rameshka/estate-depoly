@extends('layouts.masteradmin')

@section('title', 'Edit Advsior')

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
                    <form class="col s12" action='{{route('sendEdit')}}' method="post">
                      <div class="row">
                        <div class="input-field col s12">
                          <input name="ID" type="text" value= <?php echo $advisor->getLegalID(); ?> readonly>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input name="name" type="text" value= <?php echo $advisor->getName(); ?> >

                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input name="email" type="email" value= <?php echo $advisor->getEmail(); ?> >

                        </div>
                      </div>

                      <div class="row">
                      <div class="input-field col s12">
                        <input name="telephone" type="tel" value=<?php echo $advisor->getTelephone(); ?> >

                      </div>
                      </div>
                      <input type="hidden" name="_token" value = "{{ csrf_token() }}" />
                      <div class="row">
                        <div class="input-field col s12">
                          <input name="des" type="text" value=<?php echo $advisor->getDescription(); ?>>

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
              <div class="col s12 m12 l6">
                <div class="card-panel">
                  <h4 class="header2">Remove Entry</h4>
                  <div class="row">
                    <form class="col s12">
                      <div class="row">
                        <div class="input-field col s12">
                          <input type="hidden" name="_token" value = "{{ csrf_token() }}" />
                        <input id="name" type="text" value=<?php echo $advisor->getLegalID(); ?> readonly>
                        </div>
                        <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Remove <i class="mdi-content-send right"></i> </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection