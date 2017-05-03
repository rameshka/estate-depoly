@extends('layouts.masterseller')

@section('title', 'Auctions')


@section('content')

    <div class="section">
        <div class="row">
            @foreach($temparray as $auction)

                <section class="plans-container" id="plans">
                    <article class="col s12 m6 l4">
                        <div class="card hoverable">
                            <div class="card-image purple waves-effect">
                                <div class="card-title">Auction</div>

                            </div>
                            <div class="card-content">
                                <ul class="collection">
                                    <li class="collection-item">Venue {!! $auction->place!!} </li>
                                    <li class="collection-item">From {!! $auction->startDate!!} </li>
                                    <li class="collection-item">To {!! $auction->endDate!!} </li>
                                    <li class="collection-item">at {!! $auction->time!!} </li>

                                </ul>
                            </div>
                            <div class="card-action center-align">
                                <a  href="{{ URL::route('anauction', $auction->auctionID) }}">  <button class="waves-effect waves-light  btn">Add Property</button></a>
                            </div>
                        </div>
                    </article>

                </section>

            @endforeach

        </div>
    </div>


@endsection