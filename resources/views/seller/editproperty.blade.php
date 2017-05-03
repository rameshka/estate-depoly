@extends('layouts.masterseller')

@section('title', 'Edit property Details')

@section('content')

    <div class="section">
        <div class="divider"></div>
        <!--Basic Form-->
        <div id="basic-form" class="section">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card-panel">
                        <h4 class="header2">Edit Details - Property ID <?php echo $property->getPropertyID(); ?></h4>
                        <div class="row">
                            <form class="col s12" action='{{route('updatep')}}' method="post">
                                <input type="text" name="propertyID"  hidden value= <?php echo $property->getPropertyID(); ?> >

                                <div class="row">
                                    <div class="input-field col s12">
                                        <p>Located: <?php echo $property->getCity(); ?> </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <p>Bed Rooms</p>
                                        <input name="beds" type="text" required value= <?php echo $property->getBeds(); ?> >
                                    </div>


                                    <div class="input-field col s6">
                                        <p>Bath Rooms</p>
                                        <input name="baths" type="text" required value= <?php echo $property->getBaths(); ?>  >


                                    </div>

                                <input type="hidden" name="_token" value = "{{ csrf_token() }}" />

                                </div>


                                <div class="row">
                                    <div class="input-field col s6">
                                        <p>Land size (Perches)</p>
                                        <input id="landarea" type="text" name="landarea" required value=<?php echo $property->getLandarea(); ?>>

                                    </div>



                                <div class="input-field col s6">
                                    <p>Floor area (sqft)</p>
                                    <input id="floorarea" type="text" name="floorarea" required value=<?php echo $property->getFloorarea(); ?>>

                                </div>
                                </div>


                                 <div class="row">
                                    <div class="input-field col s6">
                                        <p>Price (LKR)</p>
                                        <input name="price" id="price" type="text" required value=<?php echo $property->getPrice(); ?>>
                                    </div>


                                     <div class="input-field col s6">
                                         <p>Telephone</p>
                                         <input name="telephone" type="tel" required value=<?php echo $property->getTelephone(); ?> >

                                     </div>
                                </div>

                                    <div class="row">

                                        <div class="input-field col s12">
                                            <textarea id="des" name="des" required class="materialize-textarea"> <?php echo $property->getDes(); ?></textarea>

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

@endsection