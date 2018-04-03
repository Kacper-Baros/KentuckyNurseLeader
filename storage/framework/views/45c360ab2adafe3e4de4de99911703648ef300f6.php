<?php $__env->startSection('content'); ?>


<div id="myCarousel" class="carousel carousel-fade" data-ride="carousel">
      <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="<?php echo e(url('img/1-secondary-flash.jpg')); ?>" alt="First slide">
        </div>
        <div class="item">
            <img class="second-slide" src="<?php echo e(url('img/2-secondary-flash.jpg')); ?>" alt="Second slide">
        </div>
        <div class="item">
            <img class="third-slide" src="<?php echo e(url('img/4-secondary-flash.jpg')); ?>" alt="Third slide">
        </div>
        <div class="item">
            <img class="third-slide" src="<?php echo e(url('img/5-secondary-flash.jpg')); ?>" alt="Third slide">
        </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>    
</div><!-- /.carousel -->


<div class="container-fluid">
    <br>

    <div class="padding">

        <div class="mainbody">
      
            <p class="header">Welcome to the Kentucky Organization of Nurse Leaders</p>

            <p>The Kentucky Organization of Nurse Leaders (KONL) is a non-profit organization and chapter of the <a href="http://www.aone.org/" target="_blank">American Organization of Nurse Executives (AONE)</a>. It is also an allied society of the <a href="http://www.kyha.com/" target="_blank">Kentucky Hospital Association (KHA)</a>.</p>
            <p>The purpose of the organization is to advance the development of   effective administrative leadership in nursing services, in sites where   healthcare is delivered.</p>
            <p>The organization operates for charitable, scientific and educational   purposes. KONL provides educational programs for nurse leaders   throughout the state, funds scholarships for members, shares scientific   works between members and provides forums for discussion and networking   through district and state level meetings. KONL is divided into four   districts: Bluegrass, Cumberland, Ohio Valley and Twin Lakes. Districts   are equally represented in statewide decisions, and forums are provided,   at both the district and state level, for members to become involved   and share their views.</p>
            <p>Membership is open to all registered nurses serving as a nursing   leadership professional along with KONL members who have retired from a   nursing leadership position.</p>
            <p>Associate membership is available for aspiring nurse leaders and   those in relevant degree programs with a career path in nursing   administration.</p>

            <hr>

            <!-- Three columns of text below the carousel -->
            <div class="row">

                <div class="col-lg-3 col-sm-6">

                    <p><img src="<?php echo e(url('img/1.jpg')); ?>" alt="Annual Membership Made Easy" title="Annual Membership Made Easy" width="400" height="600" class="img-responsive image-border"></p>

                    <p class="header_boxes" align="center">Annual Membership Made Easy</p>

                    <p>It's easy to become a KONL Member. <a href="become-a-member.php">Click here</a> to sign up and pay online. You can also, <a href="pdf/KYONL-Membership-Application-2015.pdf" target="_blank">print the application</a>, fill out the requested information and mail it in with your $50 check made out to the KONL.</p>

                </div><!-- /.col-lg-3 -->

                <div class="col-lg-3 col-sm-6">
         
                    <p><img src="<?php echo e(url('img/2.jpg')); ?>" alt="Scholarships Available to KONL Members" title="Scholarships Available to KONL Members" width="400" height="600" class="img-responsive image-border"></p> 

                    <p class="header_boxes" align="center">Scholarships Available to KONL Members</p>

                    <p>KONL will be awarding 
                    four
                    scholarships, each valued at $2,500 to students 
                    within our Kentucky Nursing Community as a means of promoting professional growth and development. <a href="pdf/scholarship.pdf" target="_blank">Click here</a> for more information.</p>

                </div><!-- /.col-lg-3 -->

                <div class="col-lg-3 col-sm-6">

                    <p><img src="<?php echo e(url('img/3.jpg')); ?>" alt="KONL Membership Survey" title="KONL Membership Survey" width="400" height="600" class="img-responsive image-border"></p>

                    <p class="header_boxes" align="center">KONL Membership Survey</p>

                    <p>Curious about other members of KONL? What role are they in and how does their KONL Membership benefit them? Learn more today...<a href="pdf/konl-survey-9_9_15.pdf" target="_blank">click here</a> to review results from the most recent Membership Survey.</p>


                </div><!-- /.col-lg-3 -->

                <div class="col-lg-3 col-sm-6">

                    <p><img src="<?php echo e(url('img/4.jpg')); ?>" alt="Important Documents" title="Important Documents" width="400" height="600" class="img-responsive image-border"></p>

                    <p class="header_boxes" align="center">Important Documents</p>

                    <ul>
                        <li><a href="pdf/Enhanced-Nurse-Licensure.pdf" target="_blank">Enhanced Nurse Licensure Compact (PDF)</a></li>
                        <li><a href="pdf/KONL-RIDGE-2017.pdf" target="_blank">The Ridge Behavioral Health System (PDF)</a></li>
                        <li><a href="pdf/AONE.pdf" target="_blank">AONE Stragetic Plan 2017-2019 (PDF)</a></li>
                        <li><a href="pdf/current-newsletter.pdf" target="_blank">Winter 2017 Newsletter (PDF)</a></li>
                    </ul>
                    
                </div><!-- /.col-lg-3 -->

            </div><!-- /.row -->

        </div>

    </div>

</div>


<div class="container-fluid headline">

    <p align="center" class="mission">OUR MISSION</p>

    <p align="center" class="description">Striving to Develop, Support and Advocate for Nurse Leaders as<br>
    they Enhance the Delivery of Health Care in Kentucky.</p>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>