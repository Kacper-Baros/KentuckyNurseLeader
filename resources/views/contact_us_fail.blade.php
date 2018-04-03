@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <br>

    <div class="padding">

        <div class="mainbody">
            
            <p class="header">Contact Us</p>

            <p style="color:red">Error. Wrong security code. Please try again. Use the back button below.</p>
            <p>
                <input type=button value="Back" onClick="history.go(-1)">
            </p>
            <p>&nbsp;</p>

        </div>

    </div>

</div>

@endsection
