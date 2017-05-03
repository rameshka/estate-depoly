@extends('layouts.masterbuyer')

@section('title', 'Advisor')


@section('content')
    <div class="section">
        <div class="divider"></div>
        <!--Basic Form-->
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card-panel">
                    <h4 class="header2">Attorney-At-Law: <b> <?php echo $advisor->getName(); ?></b> </h4>
                    <div class="row">
                        <form class="col s12">


                            <div id="responsive-images" class="section">

                                <div class="row">
                                    <div class="col s12 m8 l9" style="margin-left: 30%" >
                                        <div >
                                            <img class="responsive-img"  src="../images/lawyer1.jpg" alt="style typography">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <p><b>Legal Identification number:</b>&emsp;&emsp;&emsp; <?php echo $advisor->getLegalID(); ?> </p>

                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <br><b>Description:</b><br> <?php echo $advisor->getDescription(); ?> </p>

                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

