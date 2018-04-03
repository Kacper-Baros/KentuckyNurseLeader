<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <br>

    <div class="padding">

        <div class="mainbody">
            
            <p class="header">Become a Member</p>

            <div class="col-md-4 col-lg-4 col-sm-6">
                <form id="new-member">
                    <!-- <input type="hidden" name="csrf_token" value=""> -->
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class='form-control' name="username" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password_1">Password</label>
                        <input type="password" class='form-control' name="password_1" id="password_1" required>
                    </div>
                    <div class="form-group">
                        <label for="password_2">Confirm Password</label>
                        <input type="password" class='form-control' name="password_2" id="password_2" required>
                    </div>

                    <div class="form-group">
                        <label for="prefix">Prefix</label>
                        <input type="text" class='form-control' name="prefix" id="prefix" required>
                    </div>
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class='form-control' name="first_name" id="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class='form-control' name="last_name" id="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="email_home">Email (home)</label>
                        <input type="email" class='form-control' name="email_home" id="email_home" required>
                    </div>
                    <div class="form-group">
                        <label for="designations">Designations</label>
                        <input type="text" class='form-control' name="designations" id="designations">
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class='form-control' name="title" id="title" required>
                    </div>
                    <div class="form-group">
                        <label for="job_description">Job Description</label>
                        <select name="job_description"  id="job_description" class="form-control">
                            <option value="exec">Nurse Executive</option>
                            <option value="director">Director</option>
                            <option value="manager">Manager</option>
                            <option value="charge">Charge Nurse</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="education_level">Highest Education</label>
                        <select name="education_level"  id="education_level" class="form-control">
                            <option value="associates">Associates</option>
                            <option value="bachelors">Bachelors</option>
                            <option value="masters">Masters</option>
                            <option value="doctorate">Doctorate</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="district">District</label>
                        <select name="district" id="district" class="form-control">
                            <option value="ohio">Ohio Valley</option>
                            <option value="twinlakes">Twin Lakes</option>
                            <option value="bluegass">Blue Grass</option>
                            <option value="cumberland">Cumberland</option>
                        </select>
                    </div>

                    <p class="header">Work Information</p>
                    <div class="form-group">
                        <label for="organization">Organization Name</label>
                        <input type="text" class='form-control' name="organization" id="organization" required>
                    </div>
                    <div class="form-group">
                        <label for="work_street">Organization Street Address</label>
                        <input type="text" class='form-control' name="work_street" id="work_street" required>
                    </div>
                    <div class="form-group">
                        <label for="work_city">City</label>
                        <input type="text" class='form-control' name="work_city" id="work_city" required>
                    </div>
                    <div class="form-group">
                        <label for="work_state">State</label>
                        <select class="form-control" name="work_state" id="work_state">
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
                    </div>

                    <div class="form-group">
                        <label for="work_zip">Zip Code</label>
                        <input type="text" class='form-control' name="work_zip" id="work_zip" required>
                    </div>

                    <div class="form-group">
                        <label for="work_email">Work Email</label>
                        <input type="text" class='form-control' name="work_email" id="work_email" required>
                    </div>
                    <div class="form-group">
                        <label for="work_phone">Phone</label>
                        <input type="text" class='form-control' name="work_phone" id="work_phone" required>
                    </div>
                    <div class="form-group">
                        <label for="work_fax">Fax</label>
                        <input type="text" class='form-control' name="work_fax" id="work_fax" required>
                    </div>

                    <p class="header">Home Information</p>

                    <div class="form-group">
                        <label for="home_street">Home Street Address</label>
                        <input type="text" class='form-control' name="home_street" id="home_street" required>
                    </div>
                    <div class="form-group">
                        <label for="home_city">City</label>
                        <input type="text" class='form-control' name="home_city" id="home_city" required>
                    </div>
                    <div class="form-group">
                        <label for="home_state">State</label>
                        <select class="form-control" name="home_state" id="home_state">
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
                    </div>

                    <div class="form-group">
                        <label for="home_zip">Zip Code</label>
                        <input type="text" class='form-control' name="home_zip" id="home_zip" required>
                    </div>

                    <div class="form-group">
                        <label for="home_phone">Phone</label>
                        <input type="text" class='form-control' name="home_phone" id="home_phone" required>
                    </div>
                    <div class="form-group">
                        <label for="home_fax">Fax</label>
                        <input type="text" class='form-control' name="home_fax" id="home_fax" required>
                    </div>


                    <div class="form-group">
                        <label for="preferred_email_1">Preferred Email Address</label>
                        <input type="radio" name="preferred_email" id="preferred_email_1" value="1">
                        <input type="radio"  name="preferred_email" id="preferred_email_2" value="2">
                    </div>

                    <div class="form-group">
                        <label for="preferred_mail_1">Preferred Mailing Address</label>
                        <input type="radio" name="preferred_mail" id="preferred_mail_1" value="1">
                        <input type="radio"  name="preferred_mail" id="preferred_mail_2" value="2">
                    </div>

                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LfAiEsUAAAAAFsZDXVq4BYH3lcjW3Y6OaEmTGHo"></div><br>
                        <br>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary" id="submit-new-member">Become Member</button>
                    </div>
                </form>

                <img src="images/district_map.jpg" alt="" title="">

            </div>

        </div>

    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>