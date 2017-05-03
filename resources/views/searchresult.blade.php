@extends('layouts.masterwelcome')

@section('search')
    <div class=" back">


        <div class="banner-text">
            <h2>Find your Dream Home</h2>
        </div>
        <div class="agileits_search back1">
            <form action="searchHome" method="post">

                <input name="Search" class="search1" id="searchid" type="text" placeholder="Enter City" required="" autocomplete="off">
                <div id="result1"></div>
                <input type="hidden" name="_token" value = "{{ csrf_token() }}" />
                <input type="submit" value="Search">
            </form>
        </div>


    </div>
    @endsection

@section('heading')

    <section class="welcome padding-top-100 padding-bottom-100 ">
        <div class="container">
            <!-- HEADING BLOCK -->

            <div class="heading-block text-center margin-bottom-80">
                <h3 style="text-align: center">Search Results</h3>
                <hr>

            </div>

        </div>
    </section>

@endsection

@section('content')
      <div id="content" style="margin-left: 10%">

    <div id="card-widgets" class="section" >

            <div class="row" >

                @foreach($temparray as $property)


                    <div class="col s9 m4 l3"  >

                        <div class="card">
                            <div class="card-image">
                                <a  href="{{ URL::route('mysearchresult', $property->getPropertyID()) }}"><img src="images/sample-1.jpg" alt="sample image"></a>
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