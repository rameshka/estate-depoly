@extends('layouts.masterlender')

@section('title', 'My Plans')

    @section('css')
        <link href="{{URL::asset('css/view/improve.css')}}" type="text/css" rel="stylesheet">
        @endsection

    @section('content')
        <div class="section">
            <div class="row">


                @foreach($temparray as $plan)

                <section class="plans-container" id="plans">
                    <article class="col s12 m6 l4">
                        <div class="card hoverable">
                            <div class="card-image green waves-effect">
                                <div class="card-title">{!! $plan->getName()!!}</div>
                                <div class="price"><sup>Rs</sup>{!! $plan->getAmount()!!} Lakhs</div>
                                <div class="price-desc">{!! $plan->getYears()!!} years</div>
                            </div>
                            <div class="card-content">
                                <ul class="collection">
                                    <li class="collection-item">At annual {!! $plan->getInterest()!!} % interest rate</li>
                                    <li class="collection-item">Pay {!! $plan->getFrequency()!!} </li>
                                    <li class="collection-item">{!! $plan->getType()!!} </li>
                                    <li class="collection-item">{!! $plan->getLender()!!} </li>
                                </ul>
                            </div>
                            <div class="card-action center-align">
                                <a  href="{{ URL::route('fplandetail', $plan->getId()) }}">  <button class="waves-effect waves-light  btn">Details</button></a>
                            </div>
                        </div>
                    </article>

                </section>

                @endforeach

            </div>
        </div>


        @endsection


