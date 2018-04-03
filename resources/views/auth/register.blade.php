@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <p class="header">Become a Member</p>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('prefix') ? ' has-error' : '' }}">
                            <label for="prefix" class="col-md-4 control-label">prefix</label>

                            <div class="col-md-6">
                                <input id="prefix" type="text" class="form-control" name="prefix" value="{{ old('prefix') }}" required>

                                @if ($errors->has('prefix'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prefix') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email (home)</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('designations') ? ' has-error' : '' }}">
                            <label for="designations" class="col-md-4 control-label">Designations</label>

                            <div class="col-md-6">
                                <input id="designations" type="text" class="form-control" name="designations" value="{{ old('designations') }}" required>

                                @if ($errors->has('designations'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('designations') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('job_description') ? ' has-error' : '' }}">
                            <label for="job_description" class="col-md-4 control-label">Job Description</label>
                            
                            <div class="col-md-6">
                                <select id="job_description" class="form-control" name="job_description">
                                    <option value="exec">Nurse Executive</option>
                                    <option value="director">Director</option>
                                    <option value="manager">Manager</option>
                                    <option value="charge">Charge Nurse</option>
                                    <option value="other">Other</option>
                                </select>
                                
                                @if ($errors->has('job_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('job_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('highest_education') ? ' has-error' : '' }}">
                            <label for="highest_education" class="col-md-4 control-label">Job Description</label>
                            
                            <div class="col-md-6">
                                <select id="highest_education" class="form-control" name="highest_education">
                                    <option value="associates">Associates</option>
                                    <option value="bachelors">Bachelors</option>
                                    <option value="masters">Masters</option>
                                    <option value="doctorate">Doctorate</option>
                                </select>
                                
                                @if ($errors->has('highest_education'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('highest_education') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('district') ? ' has-error' : '' }}">
                            <label for="district" class="col-md-4 control-label">District</label>
                            
                            <div class="col-md-6">
                                <select id="district" class="form-control" name="district">
                                    <option value="ohio">Ohio Valley</option>
                                    <option value="twinlakes">Twin Lakes</option>
                                    <option value="bluegass">Blue Grass</option>
                                    <option value="cumberland">Cumberland</option>
                                </select>
                                
                                @if ($errors->has('district'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('district') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        

                        <p class="header">Work Information</p>

                        <div class="form-group{{ $errors->has('organization_name') ? ' has-error' : '' }}">
                            <label for="organization_name" class="col-md-4 control-label">Organization Name</label>

                            <div class="col-md-6">
                                <input id="organization_name" type="text" class="form-control" name="organization_name" value="{{ old('organization_name') }}" required>

                                @if ($errors->has('organization_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('organization_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('organization_street_address') ? ' has-error' : '' }}">
                            <label for="organization_street_address" class="col-md-4 control-label">Organization Street Address</label>

                            <div class="col-md-6">
                                <input id="organization_street_address" type="text" class="form-control" name="organization_street_address" value="{{ old('organization_name') }}" required>

                                @if ($errors->has('organization_street_address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('organization_street_address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('work_city') ? ' has-error' : '' }}">
                            <label for="work_city" class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <input id="work_city" type="text" class="form-control" name="work_city" value="{{ old('organization_name') }}" required>

                                @if ($errors->has('work_city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('work_city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('work_state') ? ' has-error' : '' }}">
                            <label for="work_state" class="col-md-4 control-label">State</label>
                            
                            <div class="col-md-6">
                                <select id="work_state" class="form-control" name="work_state">
                                    <option value="Alabama">Alabama</option>
                                    <option value="Alaska">Alaska</option>
                                    <option value="Arizona">Arizona</option>
                                    <option value="Arkansas">Arkansas</option>
                                    <option value="California">California</option>
                                    <option value="Colorado">Colorado</option>
                                    <option value="Connecticut">Connecticut</option>
                                    <option value="Delaware">Delaware</option>
                                    <option value="District of Columbia">District of Columbia</option>
                                    <option value="Florida">Florida</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Hawaii">Hawaii</option>
                                    <option value="Idaho">Idaho</option>
                                    <option value="Illinois">Illinois</option>
                                    <option value="Indiana">Indiana</option>
                                    <option value="Iowa">Iowa</option>
                                    <option value="Kansas">Kansas</option>
                                    <option value="Kentucky" selected="selected">Kentucky</option>
                                    <option value="Louisiana">Louisiana</option>
                                    <option value="Maine">Maine</option>
                                    <option value="Maryland">Maryland</option>
                                    <option value="Massachusetts">Massachusetts</option>
                                    <option value="Michigan">Michigan</option>
                                    <option value="Minnesota">Minnesota</option>
                                    <option value="Mississippi">Mississippi</option>
                                    <option value="Missouri">Missouri</option>
                                    <option value="Montana">Montana</option>
                                    <option value="Nebraska">Nebraska</option>
                                    <option value="Nevada">Nevada</option>
                                    <option value="New Hampshire">New Hampshire</option>
                                    <option value="New Jersey">New Jersey</option>
                                    <option value="New Mexico">New Mexico</option>
                                    <option value="New York">New York</option>
                                    <option value="North Carolina">North Carolina</option>
                                    <option value="North Dakota">North Dakota</option>
                                    <option value="Ohio">Ohio</option>
                                    <option value="Oklahoma">Oklahoma</option>
                                    <option value="Oregon">Oregon</option>
                                    <option value="Pennsylvania">Pennsylvania</option>
                                    <option value="Rhode Island">Rhode Island</option>
                                    <option value="South Carolina">South Carolina</option>
                                    <option value="South Dakota">South Dakota</option>
                                    <option value="Tennessee">Tennessee</option>
                                    <option value="Texas">Texas</option>
                                    <option value="Utah">Utah</option>
                                    <option value="Vermont">Vermont</option>
                                    <option value="Virginia">Virginia</option>
                                    <option value="Washington">Washington</option>
                                    <option value="West Virginia">West Virginia</option>
                                    <option value="Wisconsin">Wisconsin</option>
                                    <option value="Wyoming">Wyoming</option>
                                </select>
                                
                                @if ($errors->has('work_state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('work_state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('work_zipcode') ? ' has-error' : '' }}">
                            <label for="work_zipcode" class="col-md-4 control-label">Zip Code</label>

                            <div class="col-md-6">
                                <input id="work_zipcode" type="text" class="form-control" name="work_zipcode" value="{{ old('organization_name') }}" required>

                                @if ($errors->has('work_zipcode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('work_zipcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('work_phone') ? ' has-error' : '' }}">
                            <label for="work_phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="work_phone" type="text" class="form-control" name="work_phone" value="{{ old('organization_name') }}" required>

                                @if ($errors->has('work_phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('work_phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('work_fax') ? ' has-error' : '' }}">
                            <label for="work_fax" class="col-md-4 control-label">Fax</label>

                            <div class="col-md-6">
                                <input id="work_fax" type="text" class="form-control" name="work_fax" value="{{ old('work_fax') }}" required>

                                @if ($errors->has('work_fax'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('work_fax') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <p class="header">Home Information</p>

                        <div class="form-group{{ $errors->has('home_street_address') ? ' has-error' : '' }}">
                            <label for="home_street_address" class="col-md-4 control-label">Home Street Address</label>

                            <div class="col-md-6">
                                <input id="home_street_address" type="text" class="form-control" name="home_street_address" value="{{ old('organization_name') }}" required>

                                @if ($errors->has('home_street_address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('home_street_address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('home_city') ? ' has-error' : '' }}">
                            <label for="home_city" class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <input id="home_city" type="text" class="form-control" name="home_city" value="{{ old('organization_name') }}" required>

                                @if ($errors->has('home_city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('home_city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('home_state') ? ' has-error' : '' }}">
                            <label for="home_state" class="col-md-4 control-label">State</label>
                            
                            <div class="col-md-6">
                                <select id="home_state" class="form-control" name="home_state">
                                    <option value="Alabama">Alabama</option>
                                    <option value="Alaska">Alaska</option>
                                    <option value="Arizona">Arizona</option>
                                    <option value="Arkansas">Arkansas</option>
                                    <option value="California">California</option>
                                    <option value="Colorado">Colorado</option>
                                    <option value="Connecticut">Connecticut</option>
                                    <option value="Delaware">Delaware</option>
                                    <option value="District of Columbia">District of Columbia</option>
                                    <option value="Florida">Florida</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Hawaii">Hawaii</option>
                                    <option value="Idaho">Idaho</option>
                                    <option value="Illinois">Illinois</option>
                                    <option value="Indiana">Indiana</option>
                                    <option value="Iowa">Iowa</option>
                                    <option value="Kansas">Kansas</option>
                                    <option value="Kentucky" selected="selected">Kentucky</option>
                                    <option value="Louisiana">Louisiana</option>
                                    <option value="Maine">Maine</option>
                                    <option value="Maryland">Maryland</option>
                                    <option value="Massachusetts">Massachusetts</option>
                                    <option value="Michigan">Michigan</option>
                                    <option value="Minnesota">Minnesota</option>
                                    <option value="Mississippi">Mississippi</option>
                                    <option value="Missouri">Missouri</option>
                                    <option value="Montana">Montana</option>
                                    <option value="Nebraska">Nebraska</option>
                                    <option value="Nevada">Nevada</option>
                                    <option value="New Hampshire">New Hampshire</option>
                                    <option value="New Jersey">New Jersey</option>
                                    <option value="New Mexico">New Mexico</option>
                                    <option value="New York">New York</option>
                                    <option value="North Carolina">North Carolina</option>
                                    <option value="North Dakota">North Dakota</option>
                                    <option value="Ohio">Ohio</option>
                                    <option value="Oklahoma">Oklahoma</option>
                                    <option value="Oregon">Oregon</option>
                                    <option value="Pennsylvania">Pennsylvania</option>
                                    <option value="Rhode Island">Rhode Island</option>
                                    <option value="South Carolina">South Carolina</option>
                                    <option value="South Dakota">South Dakota</option>
                                    <option value="Tennessee">Tennessee</option>
                                    <option value="Texas">Texas</option>
                                    <option value="Utah">Utah</option>
                                    <option value="Vermont">Vermont</option>
                                    <option value="Virginia">Virginia</option>
                                    <option value="Washington">Washington</option>
                                    <option value="West Virginia">West Virginia</option>
                                    <option value="Wisconsin">Wisconsin</option>
                                    <option value="Wyoming">Wyoming</option>
                                </select>
                                
                                @if ($errors->has('home_state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('home_state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('home_zipcode') ? ' has-error' : '' }}">
                            <label for="home_zipcode" class="col-md-4 control-label">Zip Code</label>

                            <div class="col-md-6">
                                <input id="home_zipcode" type="text" class="form-control" name="home_zipcode" value="{{ old('organization_name') }}" required>

                                @if ($errors->has('home_zipcode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('home_zipcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('home_phone') ? ' has-error' : '' }}">
                            <label for="home_phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="home_phone" type="text" class="form-control" name="home_phone" value="{{ old('organization_name') }}" required>

                                @if ($errors->has('home_phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('home_phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('home_fax') ? ' has-error' : '' }}">
                            <label for="home_fax" class="col-md-4 control-label">Fax</label>

                            <div class="col-md-6">
                                <input id="home_fax" type="text" class="form-control" name="home_fax" value="{{ old('work_fax') }}" required>

                                @if ($errors->has('home_fax'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('home_fax') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('preferred_email_1') ? ' has-error' : '' }}">
                            <label for="preferred_email_1" class="col-md-4 control-label">Preferred Email Address</label>

                            <div class="col-md-6">
                                <input type="radio" name="preferred_email" id="preferred_email_1" value="1">
                                <input type="radio"  name="preferred_email" id="preferred_email_2" value="2">

                                @if ($errors->has('preferred_email_1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('preferred_email_1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('preferred_mail_1') ? ' has-error' : '' }}">
                            <label for="preferred_mail_1" class="col-md-4 control-label">Preferred Mailing Address</label>

                            <div class="col-md-6">
                                <input type="radio" name="preferred_mail" id="preferred_mail_1" value="1">
                                <input type="radio"  name="preferred_mail" id="preferred_mail_2" value="2">

                                @if ($errors->has('preferred_mail_1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('preferred_mail_1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('g-recaptcha') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <br>
                                <div class="g-recaptcha" data-sitekey="6LfAiEsUAAAAAFsZDXVq4BYH3lcjW3Y6OaEmTGHo"></div>
                                <br>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>

                    <img src="img/district_map.jpg" alt="" title="">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
