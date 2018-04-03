@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <br>

    <div class="padding">

        <div class="mainbody">
            
            <p class="header">Site Map</p>

            <ul>
                <li><a href="index.php">Home</a></li>
                
                <li>About Us</li>
                    <ul>
                        <li><a href="{{ url('/board') }}">Board Members</a></li>
                        <li><a href="{{ url('/memberslist') }}">Members List</a></li>
                        <li><a href="{{ url('/president') }}">Presidents Corner</a></li>
                        <li><a href="{{ url('pdf/current-newsletter.pdf') }}" target="_blank">KONL Newsletter</a></li>
                        <li><a href="{{ url('/legislative') }}">Legislative Updates</a></li>
                        <li><a href="{{ url('/pdf/bylaws.pdf') }}" target="_blank">Bylaws</a></li>
                        <li><a href="{{ url('/strategic_plan') }}">Strategic Plan</a></li>
                        <li><a href="{{ url('/key_priorities') }}">Key Priorities with Strategies</a></li>
                    </ul>
                    
                    <li><a href="districts.htm">Districts</a></li>
                    
                    <ul>
                        <li><a href="{{ url('/district_ohio_valley') }}">Ohio Valley</a></li>
                        <li><a href="{{ url('/district_twin_lakes') }}">Twin Lakes</a></li>
                        <li><a href="{{ url('/district_blue_grass') }}">Blue Grass</a></li>
                        <li><a href="{{ url('/district_cumberland') }}">Cumberland</a></li>
                    </ul>
                
                <li>Committees</li>
                
                    <ul>
                        <li><a href="{{ url('/bylaws_committee') }}">Bylaws</a></li>
                        <li><a href="{{ url('/legislative_committee') }}">Legislative</a></li>
                        <li><a href="{{ url('/membership_committee') }}">Membership</a></li>
                        <li><a href="{{ url('/programs_committee') }}">Program</a></li>
                        <li><a href="{{ url('/scholarship_committee') }}">Scholarship</a></li>
                    </ul>
                    
                    <li><a href="become-a-member.php">Become a Member</a></li>
                
                    <li><a href="{{ url('/contact') }}">Contact us</a></li>
                    
                    <li><a href="https://kbn.ky.gov/Pages/default.aspx" target="_blank">Kentucky Board of Nursing</a></li>
                    <ul>
                    <li><a href="https://kbn.ky.gov/online-forms/Pages/connection.aspx" target="_blank">Newsletter</a></li>
                    </ul>
                    
                <li><a href="{{ url('/login') }}">Member Login</a></li>
                <li><a href="{{ url('/legal') }}">Legal Notice</a></li>
                <li><a href="{{ url('/privacy') }}">Privacy Statement</a></li>
                <li><a href="{{ url('/sitemap') }}">Site Map</a></li>

                </ul>

            <p></p>

        </div>

    </div>

</div>

@endsection