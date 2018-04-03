<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="public ">
    <meta name="robots" content="all">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{url('/css/app.css')}}" rel="stylesheet">
    <link href="{{url('/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{url('/css/master.css')}}" rel="stylesheet">
    <link href="{{url('/css/carousel.css')}}" rel="stylesheet">    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="icon.png" rel="shortcut icon" type="image/x-icon">
    <link href="icon.png" rel="icon" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans+Condensed:300|Cinzel|Raleway|Anton|Roboto|Playfair+Display" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <script type="text/javascript">
        var switchTo5x=false;
    </script>

    <script type="text/javascript">
        stLight.options({publisher: "ur-14fe579e-7a0f-b849-b899-e48d7e5927"});
    </script>
    



    
</head>
<body>
    <div id="app">
        <div class="background_noshadow">
            <div class="container-fluid header_image">
                <div class="row">
                    <div class="col-md-5"><a href="/" class="padding-logo"><img src="{{url('img/logo.png')}}" width="279" height="140" class="img-responsive"></a></div>
                    @if (Auth::check())
                        <div class="col-md-7">
                            <br>
                            <div align="right">
                                <a href="subscription-history.htm">Subscription History</a>
                                | 
                                <a href="update-profile.htm">Update Your Profile</a>
                                | 
                                <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                | 
                                <a href="view-member-info.htm">View Member Info</a>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
            
            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">

                        <ul class="nav navbar-nav">

                            <li><a href="/">HOME</a></li>
                            @if (Auth::check())
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT US <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/board') }}">Board Members</a></li>
                                        <li><a href="{{ url('/memberslist') }}">Members List</a></li>
                                        <li><a href="{{ url('/president') }}">Presidents Corner</a></li>
                                        <li><a href="{{ url('pdf/current-newsletter.pdf') }}" target="_blank">KONL Newsletter</a></li>
                                        <li><a href="{{ url('/legislative') }}">Legislative Updates</a></li>
                                        <li><a href="{{ url('/pdf/bylaws.pdf') }}" target="_blank">Bylaws</a></li>
                                        <li><a href="{{ url('/strategic_plan') }}">Strategic Plan</a></li>
                                        <li><a href="{{ url('/key_priorities') }}">Key Priorities with Strategies</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="{{ url('/districts') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DISTRICTS <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/district_ohio_valley') }}">Ohio Valley</a></li>
                                        <li><a href="{{ url('/district_twin_lakes') }}">Twin Lakes</a></li>
                                        <li><a href="{{ url('/district_blue_grass') }}">Blue Grass</a></li>
                                        <li><a href="{{ url('/district_cumberland') }}">Cumberland</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">COMMITTEES <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('/bylaws_committee') }}">Bylaws</a></li>
                                        <li><a href="{{ url('/legislative_committee') }}">Legislative</a></li>
                                        <li><a href="{{ url('/membership_committee') }}">Membership</a></li>
                                        <li><a href="{{ url('/programs_committee') }}">Program</a></li>
                                        <li><a href="{{ url('/scholarship_committee') }}">Scholarship</a></li>
                                    </ul>
                                </li>
                            @else
                                <li><a href="{{ url('/register')}}">BECOME A MEMBER</a></li>
                            @endif

                                <li>
                                    <a href="{{ url('/contact') }}">CONTACT US</a>
                                </li>

                            @if (Auth::check())
                                <li class="dropdown"><a href="https://kbn.ky.gov/Pages/default.aspx" target="_blank" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">KENTUCKY BOARD OF NURSING <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="https://kbn.ky.gov/online-forms/Pages/connection.aspx" target="_blank">Newsletter</a></li>
                                    </ul>
                                </li>
                            @else

                            <li><a href="{{ url('/login')}}">MEMBER LOGIN</a></li>

                            @endif

                        </ul>

                    </div><!--/.nav-collapse -->
                </div>
            </nav>
            
            @if (Auth::check() && Auth::User()->verified == "1" && Auth::User()->membership_level != 1)
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="pull-right sub-note">Subscription End is XXX Days</p>
                    </div>
                </div>
            </div>
            @endif
        </div>

        @yield('content')
        <footer>
            <div class="container-fluid marketing grey-footer">

                <p class="header-white" align="center">Share Us On</p>
                <center>
                    <span class='st_sharethis_large' displayText='ShareThis'></span>
                    <span class='st_facebook_large' displayText='Facebook'></span>
                    <span class='st_twitter_large' displayText='Tweet'></span>
                    <span class='st_googleplus_large' displayText='Google +'></span>
                    <span class='st_linkedin_large' displayText='LinkedIn'></span>
                    <span class='st_email_large' displayText='Email'></span>


                    <br><br>
                    <hr>
                    <br>

                </center>
                <p align="center">
                    <a href="{{ url('/home') }}">Home</a> | 
                    <a href="{{ url('/districts') }}">Districts </a> | 
                    <a href="{{ url('/register') }}">Become a Member</a> | 
                    <a href="{{ url('/contact') }}">Contact Us</a> | 
                    <a href="{{ url('/legal') }}">Legal Notice</a> | 
                    <a href="{{ url('/privacy') }}">Privacy Statement</a> | 
                    <a href="{{ url('/sitemap') }}">Site Map</a>
                </p>

                <p align="center">Copyright &copy; Kentucky Organization of Nurse Leaders. All rights reserved.<br>
                    Website Design and Maintenance  by <a target="_blank" href="http://www.catalyst-marketing.com">Catalyst Marketing</a> / <a target="_blank" href="http://www.worryfreewebsites.com">Worry Free Websites </a></p>

            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{url('/js/app.js')}}"></script>
    <script src="{{url('/js/script.js')}}"></script>
    <script src="http://w.sharethis.com/button/buttons.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>
