@extends('layouts.masterseller')

@section('title', 'Legal Advisors')

@section('content')


    <div id="card-widgets" class="section">
        <div id="card-widgets" class="seaction">
            <div class="row">


                @foreach($result as $advisor)


                    <div class="col s12 m4 l4">

                        <div class="card">
                            <div class="card-image">
                                <a  href="{{ URL::route('viewadvisor', $advisor->getLegalID()) }}"><img src="images/sample-1.jpg" alt="sample image"></a>

                                <span class="card-title"> {!! $advisor->getName() !!}</span>
                            </div>
                            <div class="card-content">
                                <?php
                                    $var =".........";

                                if (strlen($advisor->getDescription())>50)
                                {
                                    $detail = substr($advisor->getDescription(),0,50).$var;
                                }

                                else{

                                    $detail = $advisor->getDescription().$var;
                                    }
                                ?>

                                <p>{!! $detail!!}</p>
                            </div>

                        </div>
                    </div>



                @endforeach
            </div>
        </div>
    </div>


@endsection

