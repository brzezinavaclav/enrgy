@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Můj účet<span style="float: right"><a href="account/edit">Upravit</a></span></div>
                <div class="panel-body">
                    <div class="col-md-2" style="padding-top: 10px">
                        <img src="http://placehold.it/120x130">
                    </div>
                    <div class="col-md-10">
                        <fieldset>
                            <legend>Kontaktní informace</legend>
                            <p><b>Jméno: </b>{{ Auth::user()->name }} </p>
                            <p><b>Ulice: </b>{{ Auth::user()->street }} </p>
                            <p><b>Město: </b>{{ Auth::user()->city }} </p>
                            <p><b>E-mail: </b>{{ Auth::user()->email }} </p>
                        </fieldset>
                        <fieldset>
                            <legend>Elektřina</legend>
                        </fieldset>
                        <fieldset>
                            <legend>Plyn</legend>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
