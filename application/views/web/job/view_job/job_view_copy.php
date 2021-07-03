<main class="findwork-area">
    <div class="container">
        <div class="findwork-category">
            <div class="findwork-catheadline">
                <h1>Job Feed</h1>
            </div>
            <div class="findwork-allcat">

                <aside class="sidebar">
                    <div id="leftside-navigation" class="nano">
                        <ul class="nano-content">

                            <li class="sub-menu inactive">
                                <?php
                                $i = 0;
                                foreach ($all_cates as $v_all_cat) {
                                    $i++; ?>
                                    <a href="javascript:void(0);"><span><?php echo $v_all_cat->category_name; ?></span></i>
                                    </a>
                                <?php } ?>
                                <ul>
                                    <?php
                                    $i = 0;
                                    foreach ($all_subs as $v_all_sub) {
                                        $i++; ?>
                                        <li><a href="#"><?php echo $v_all_sub->sub_category_name; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </aside>

            </div>
        </div>
        <div class="findwork-jobs">
            <div class="findwork-jobsearch">
                <form>
                    <input type="search" placeholder="Search fo Job">
                    <button><img src="<?php echo base_url() ?>web_assets/images/search.png" alt="search"></button>
                </form>
            </div>
            <div class="findwork-alljob">
                <?php
                $i = 0;
                foreach ($all_jobs as $v_all_job) {
                    $i++; ?>
                    <!-- findwork-singlejob -->
                    <div class="findwork-singlejob">
                        <div class="singlejob-time">

                            <div class="singlejob-ids">

                                <h4>Tender ID 896120</h4>
                                <p>Posted 30 Minutes ago</p>
                            </div>
                            <div class="singlejob-anchors">
                                <a href="#">Bidd</a>
                                <a href="#">Invest</a>
                            </div>
                        </div>
                        <h4><a href="#"><?php echo $v_all_job->job_title; ?></a></h4>
                        <div class="singlejob-feature">
                            <ul>
                                <li>Work Type: <span><?php echo $v_all_job->work_type_bidder; ?></span></li>
                                <li>Ministry/Division: <span>Local Government Division (LGD)</span></li>
                                <li>Department: <span>Local Government Engineering</span></li>
                                <li>Tender Caller: <span>Md. Raziullah, Upazila Engineer, </span></li>
                                <li>Published in: <span>May 17, 2021</span></li>
                                <li>Closing date: <span>N/A</span></li>
                                <li>Price of Schedule: <span></span></li>
                            </ul>
                        </div>
                        <div class="singlejob-tags">
                            <ul>
                                <li><a href="#">TIN</a></li>
                                <li><a href="#">BIN</a></li>
                                <li><a href="#">NID</a></li>
                                <li><a href="#">Text Return</a></li>
                                <li><a href="#">Audit Report</a></li>
                                <li><a href="#">Similar Work Experience</a></li>
                            </ul>
                        </div>
                        <div class="singlejob-pay">
                            <ul>
                                <li><a href="#"><img src="<?php echo base_url() ?>web_assets/images/pay.png"
                                                     alt="image">Payment
                                        Verified</a></li>
                                <li><a href="#"><img src="<?php echo base_url() ?>web_assets/images/bidder.png"
                                                     alt="image">10
                                        Bider</a></li>
                                <li><a href="#"><img src="<?php echo base_url() ?>web_assets/images/investor.png"
                                                     alt="image">10 Investor</a></li>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>


        <!-- findwork-singlejob -->

        <!-- findwork-singlejob -->
        <div class="findwork-profile">
            <div class="mobilehide" style="width: 100%; height: 105px;"></div>
            <div class="findwork-personalpro mb-5">
                <div class="personalprofile pb-2">
                    <div class="personalpro-img">
                        <img src="<?php echo base_url() ?>web_assets/images/profile.png" alt="image">
                    </div>
                    <div class="personalpro-desc">
                        <h4>My Profile</h4>
                    </div>
                    <div class="personalpro-edit">
                        <a href="#"><img src="<?php echo base_url() ?>web_assets/images/edit.png" alt="image"></a>
                    </div>
                </div>
                <div class="profile-completed">
                    <div class="profilepercent"></div>
                    <p>10 % incomplete <a href="#">*Please Upgrade your Profile</a></p>
                </div>
                <div class="profile-job">
                    <ul>
                        <li>Published Job <span>42</span></li>
                        <li>Invest Job <span>20</span></li>
                        <li>Done Job <span>60</span></li>
                    </ul>
                </div>
                <div class="profile-rating">
                    <ul>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                    </ul>
                </div>
            </div>

            <div class="upgrade-subscription">
                <h4>Upgrade Your <br>Subscription</h4>
                <a href="#">Daily Subscription</a>
                <a href="#">Monthly Subscription</a>
                <a href="#">Yearly Subscription</a>
            </div>

        </div>


    </div>
</main>
<script>
    $("#leftside-navigation .sub-menu > a").click(function (e) {
        $("#leftside-navigation ul ul").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(),
            e.stopPropagation()
    })
</script>




