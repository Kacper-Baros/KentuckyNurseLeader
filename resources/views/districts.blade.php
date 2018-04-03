@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <br>

    <div class="padding">

        <div class="mainbody">
            
            <p class="header">Districts</p>
            <p><img src="img/district_map.jpg" width="700" height="448" usemap="#Map" class="img-responsive">
            <map name="Map">
                <area shape="poly" coords="614,204,569,210,527,270,479,254,423,280,419,256,406,249,422,200,415,181,419,174,410,159,423,147,417,117,453,121,584,152,609,180" href="district-blue-grass.htm">
                <area shape="poly" coords="407,158,380,162,365,193,327,245,298,223,289,239,316,268,309,289,278,297,298,324,331,309,362,312,367,344,384,360,410,371,440,353,444,318,417,290,418,257,403,249,419,213,418,192" href="district-ohio-valley.htm">
                <area shape="poly" coords="381,392,372,372,379,359,361,314,301,325,277,295,308,285,313,270,285,241,252,245,235,265,191,250,148,287,121,315,115,347,71,328,34,408,156,413" href="district-twin-lakes.htm">
                <area shape="poly" coords="385,363,376,377,386,394,529,391,573,372,586,361,599,351,604,342,614,327,675,276,650,269,622,236,611,210,569,214,527,268,479,256,424,279,437,301,453,322,436,346,439,361,412,375" href="distict-cumberland.htm">
            </map>
            </p>

            <p></p>

        </div>

    </div>

</div>

@endsection