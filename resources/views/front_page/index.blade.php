@extends('layouts.app')

@section('content')
    <div class="jumbotron" style="background-color: #604688;">
        <div class="container-fluid">
            <h1 style="color: white;">ExcelAsia Intranet</h1>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="col-lg-3">
                    <div class="thumbnail">
                        <img src="{{ URL::to('/') }}/imgs/vicidial.png" alt="...">
                        <div class="caption">
                            <h3>VICIdial</h3>
                            <p>
                                <a href="http://192.168.0.2/vicidial/welcome.php" class="btn btn-primary" role="button">ViciDial</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="thumbnail">
                        <img src="{{ URL::to('/') }}/imgs/timeclock_5.png" style="height: 175px !important;">
                        <div class="caption">
                            <h3>VICIdial Timeclock</h3>
                            <p>
                                <a href="http://192.168.0.2/agc/timeclock.php?referrer=welcome" class="btn btn-primary" role="button">Timeclock</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="thumbnail">
                        <img src="..." alt="...">
                        <div class="caption">
                            <h3>Web Server</h3>
                            <p><a href="http://192.168.0.3/" class="btn btn-primary" role="button">Web Server</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="thumbnail">
                        <img src="..." alt="...">
                        <div class="caption">
                            <h3>WorthRand-CRM</h3>
                            <p>
                            <a href="http://192.168.0.2/" class="btn btn-primary" role="button">WorthRand-CRM</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@stop
