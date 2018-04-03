@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Lang::get('titles.activation') }}</div>
                <div class="panel-body">
                    <p>{{ Lang::get('auth.regThanks') }}</p>
                    <p>{{ Lang::get('auth.anEmailWasSent',['email' => Auth::User()->email, 'date' => Auth::User()->created_at ] ) }}</p>
                    <p>{{ Lang::get('auth.clickInEmail') }}</p>
                    <p><a href='/resendemail' class="btn btn-primary">{{ Lang::get('auth.clickHereResend') }}</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection