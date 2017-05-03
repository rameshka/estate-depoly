@extends('layouts.masterseller')

@section('title', 'My Advertisements')

@section('content')

    <div id="card-widgets" class="section">
        <div id="card-widgets" class="seaction">
            <div class="row">


                @foreach($temparray as $property)


                    <div class="col s12 m4 l4">

                        <div class="card">
                            <div class="card-image">
                                <a  href="{{ URL::route('myadvertisement', $property->getPropertyID()) }}"><img src="images/sample-1.jpg" alt="sample image"></a>
                                <span class="card-title"> {!! $property->getCity()!!}</span>
                            </div>
                            <div class="card-content">


                                <p><b>Bed Rooms :</b>{!! $property->getBeds()!!}</p>
                                <p><b>Bath Rooms:</b>{!! $property->getBaths()!!}</p>
                                <p><b>Adress :</b>{!! $property->getHnumber()!!},{!! $property->getStreet()!!},{!! $property->getClosecity()!!}</p>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @endsection
