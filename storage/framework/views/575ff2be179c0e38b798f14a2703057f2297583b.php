<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <br>

    <div class="padding">

        <div class="mainbody">
            
            <p class="header">Site Map</p>

            <ul>
                <li><a href="index.php">Home</a></li>
                
                <li>About Us</li>
                    <ul>
                        <li><a href="<?php echo e(url('/board')); ?>">Board Members</a></li>
                        <li><a href="<?php echo e(url('/memberslist')); ?>">Members List</a></li>
                        <li><a href="<?php echo e(url('/president')); ?>">Presidents Corner</a></li>
                        <li><a href="<?php echo e(url('pdf/current-newsletter.pdf')); ?>" target="_blank">KONL Newsletter</a></li>
                        <li><a href="<?php echo e(url('/legislative')); ?>">Legislative Updates</a></li>
                        <li><a href="<?php echo e(url('/pdf/bylaws.pdf')); ?>" target="_blank">Bylaws</a></li>
                        <li><a href="<?php echo e(url('/strategic_plan')); ?>">Strategic Plan</a></li>
                        <li><a href="<?php echo e(url('/key_priorities')); ?>">Key Priorities with Strategies</a></li>
                    </ul>
                    
                    <li><a href="districts.htm">Districts</a></li>
                    
                    <ul>
                        <li><a href="<?php echo e(url('/district_ohio_valley')); ?>">Ohio Valley</a></li>
                        <li><a href="<?php echo e(url('/district_twin_lakes')); ?>">Twin Lakes</a></li>
                        <li><a href="<?php echo e(url('/district_blue_grass')); ?>">Blue Grass</a></li>
                        <li><a href="<?php echo e(url('/district_cumberland')); ?>">Cumberland</a></li>
                    </ul>
                
                <li>Committees</li>
                
                    <ul>
                        <li><a href="<?php echo e(url('/bylaws_committee')); ?>">Bylaws</a></li>
                        <li><a href="<?php echo e(url('/legislative_committee')); ?>">Legislative</a></li>
                        <li><a href="<?php echo e(url('/membership_committee')); ?>">Membership</a></li>
                        <li><a href="<?php echo e(url('/programs_committee')); ?>">Program</a></li>
                        <li><a href="<?php echo e(url('/scholarship_committee')); ?>">Scholarship</a></li>
                    </ul>
                    
                    <li><a href="become-a-member.php">Become a Member</a></li>
                
                    <li><a href="<?php echo e(url('/contact')); ?>">Contact us</a></li>
                    
                    <li><a href="https://kbn.ky.gov/Pages/default.aspx" target="_blank">Kentucky Board of Nursing</a></li>
                    <ul>
                    <li><a href="https://kbn.ky.gov/online-forms/Pages/connection.aspx" target="_blank">Newsletter</a></li>
                    </ul>
                    
                <li><a href="<?php echo e(url('/login')); ?>">Member Login</a></li>
                <li><a href="<?php echo e(url('/legal')); ?>">Legal Notice</a></li>
                <li><a href="<?php echo e(url('/privacy')); ?>">Privacy Statement</a></li>
                <li><a href="<?php echo e(url('/sitemap')); ?>">Site Map</a></li>

                </ul>

            <p></p>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>