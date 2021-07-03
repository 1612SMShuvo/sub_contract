<section class="banner-area">
    <div class="container">
        <div class="row">
            <div class="banner-text">
                <h1>Find & Hire <br> <span>Experienced <br> Company</span></h1>
                <p>Work with the best enlisted company from our secure, flexible
                    and cost effective platform.</p>
                <div class="banner-search">
                    <form action="<?php echo base_url(); ?>browse_job/browse_job_all" method="POST">
                        <input type="search" id="search_job" onkeyup="search_all_job()" name="search_data" placeholder="Search fo Job">
                        <button type="submit">Search Work</button>
                    </form>
                </div>
            </div>
            <div class="banner-heading">
                <h1>It's Secure to Get <br>
                    <span>Work Done on Enlist Work </span></h1>
            </div>
        </div>
    </div>
</section>
<!-- banner-area end -->

<!-- work-area start -->
<section class="work-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="work-single">
                    <img src="<?php echo base_url() ?>web_assets/images/work1.png" alt="image">
                    <h3>Post a Work</h3>
                    <p>Create your free job posting and start receiving Quotes within hours.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="work-single work-single2">
                    <img src="<?php echo base_url() ?>web_assets/images/work2.png" alt="image">
                    <h3>Find Investor & Company</h3>
                    <p>Compare the Quotes you receive and hire the best freelance professionals for the job.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="work-single work-single3">
                    <img src="<?php echo base_url() ?>web_assets/images/work3.png" alt="image">
                    <h3>Project Progress & Work Done</h3>
                    <p>Decide on how and when payments will be made and work rooms to collaborate, communicate and track work.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="work-single work-single4">
                    <img src="<?php echo base_url() ?>web_assets/images/work4.png" alt="image">
                    <h3>Secure Payment</h3>
                    <p>Choose From Multiple Payment Methods with SafePay payment protection</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- work-area end -->

<!-- agrement-area start -->
<section class="agrement-area">
    <div class="container">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <h1>Work Your Way</h1>
                <h2>Choose From Four Payment Terms & Create Agreements.</h2>
                <div class="row agrementdeal">
                    <div class="col-md-6 mb-4">
                        <div class="agrement-single">
                            <a>
                                <img src="<?php echo base_url() ?>web_assets/images/agrement1.png" alt="image">
                                <span>Govt Work</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="agrement-single agrement-single2">
                            <a>
                                <img src="<?php echo base_url() ?>web_assets/images/agrement2.png" alt="image">
                                <span>Private Work</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="agrement-single agrement-single3">
                            <a>
                                <img src="<?php echo base_url() ?>web_assets/images/agrement3.png" alt="image">
                                <span>Organization Work</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="agrement-single agrement-single4">
                            <a>
                                <img src="<?php echo base_url() ?>web_assets/images/agrement4.png" alt="image">
                                <span>Inventory Work</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- agrement-area end -->

<!-- newjob-area start -->
<section class="newjobs-area">
    <div class="container">
        <h1>New Jobs</h1>
        <div class="row gy-4">

            <?php foreach ($all_home_jobs as $v_home_jobs) { ?>
                <div class="col-lg-4 col-md-6">
                    <div class="findwork-singlejob">
                        <div class="singlejob-time">
                            <div class="singlejob-ids">
                                <h4>Tender ID <?php echo $v_home_jobs->id; ?></h4>
                                <p><?php echo $v_home_jobs->date_and_time; ?></p>
                            </div>
                            <div class="singlejob-anchors">
                                <?php if ($v_home_jobs->need_bidder == 1) { ?>
                                    <a href="<?php echo base_url() ?>welcome/sign_in">Bidd</a>
                                <?php } ?>
                                <?php if ($v_home_jobs->need_investor == 1) { ?>
                                    <a href="<?php echo base_url() ?>welcome/sign_in">Invest</a>
                                <?php } ?>
                            </div>
                        </div>
                        <h4><a href="#"><?php echo $v_home_jobs->job_title; ?></a></h4>
                        <div class="singlejob-feature">
                            <ul>
                                <li>Work Type : <span>
                                        <?php
                                        if ($v_home_jobs->work_type_bidder == 1) {
                                            echo "Goods";
                                        } else if ($v_home_jobs->work_type_bidder == 2) {
                                            echo "Service";
                                        } else if ($v_home_jobs->work_type_bidder == 3) {
                                            echo "Work";
                                        } else if ($v_home_jobs->work_type_bidder == 4) {
                                            echo "Others";
                                        } ?>
                                    </span>
                                </li>
                                <li>Work Authority: <span>
                                         <?php
                                         if ($v_home_jobs->work_authority == 1) {
                                             echo "Sports Ministry";
                                         } else if ($v_home_jobs->work_authority == 2) {
                                             echo "ICT Ministry";
                                         } else if ($v_home_jobs->work_authority == 3) {
                                             echo "NGO";
                                         } else if ($v_home_jobs->work_authority == 4) {
                                             echo "Others";
                                         } ?>
                                    </span>
                                </li>
                                <li>Job Sub-Category: <span><?php echo $v_home_jobs->sub_category_name; ?></span></li>
                                <li>Tender Caller: <span><?php echo $v_home_jobs->organization_name; ?></span></li>
                                <li>Published in: <span><?php echo $v_home_jobs->publish_date; ?></span></li>
                                <li>Closing date: <span><?php echo $v_home_jobs->submit_date; ?></span></li>
                            </ul>
                        </div>

                        <div class="singlejob-tags">
                            <ul>
                                <?php
                                $legal = $this->Job_view_model->select_legal_information($v_home_jobs->id);
                                ?>
                                <?php if ($legal->tin_bidder) { ?>
                                    <li><a><?php echo $legal->tin_bidder; ?></a></li>
                                <?php } ?>
                                <?php if ($legal->bin_bidder) { ?>
                                    <li><a><?php echo $legal->bin_bidder; ?></a></li>
                                <?php } ?>
                                <?php if ($legal->nid_bidder) { ?>
                                    <li><a><?php echo $legal->nid_bidder; ?></a></li>
                                <?php } ?>
                                <?php if ($legal->taxreturn_bidder) { ?>
                                    <li><a><?php echo $legal->taxreturn_bidder; ?></a></li>
                                <?php } ?>
                                <?php if ($legal->audit_report_bidder == 1) { ?>
                                    <li><a><?php echo "Audit Report"; ?></a></li>
                                <?php } ?>
                                <?php if ($legal->similar_work_bidder == 1) { ?>
                                    <li><a><?php echo "Similar Work"; ?></a></li>
                                <?php } ?>
                                <?php if ($legal->general_work_bidder == 1) { ?>
                                    <li><a><?php echo "General Work"; ?></a></li>
                                <?php } ?>

                            </ul>
                        </div>
                        <div class="singlejob-pay">
                            <?php
                            $bidder_count = $this->Job_view_model->select_all_job_apply_bidder($v_home_jobs->id);
                            $investor_count = $this->Job_view_model->select_all_job_apply_investor($v_home_jobs->id);
                            ?>
                            <ul>

                                <!-- <li><a href="#"><img src="<?php echo base_url() ?>web_assets/images/pay.png"
                                                     alt="image">Payment Verified</a></li> -->
                                <li><a href="#"><img src="<?php echo base_url() ?>web_assets/images/bidder.png"
                                                     alt="image"><?php echo $bidder_count->total; ?> Bider</a></li>
                                <li><a href="#"><img src="<?php echo base_url() ?>web_assets/images/investor.png"
                                                     alt="image"><?php echo $investor_count->total; ?> Investor</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div><br>
            <div class="agrement-button text-center">
                <a href="<?php echo base_url()?>browse_job/browse_job_all" class="btn btn-primary " style="font-size:20px;">More Jobs </a>
            </div>
            </div>
</section>
<!-- new job-area end -->

<!-- listwork-area start -->
<section class="listwork-area">
    <div class="container">
        <div class="row">
            <h1>Browse Enlisted Work</h1>
        </div>
        <div class="row gx-5 gy-5">
            <?php 
                $i=0;
                foreach ($job_category as $category) {
            ?>
            <div class="col-lg-3 col-md-6">
            <a href="<?php echo base_url();?>welcome/search_job_home/<?php echo $category->id;?>">
                <div class="listwork-single">
                    <?php 
                        $i++;
                        if($i%4==0) {
                    ?>
                    <img src="<?php echo base_url() ?>web_assets/images/work1.png" alt="image">
                    <?php } elseif ($i%3==0) { ?>
                    <img src="<?php echo base_url() ?>web_assets/images/work2.png" alt="image">
                    <?php } elseif($i%2==0) { ?>
                    <img src="<?php echo base_url() ?>web_assets/images/work3.png" alt="image">
                    <?php } else{ ?>
                    <img src="<?php echo base_url() ?>web_assets/images/work4.png" alt="image">
                    <?php } ?>
                    <p><h3><?php echo $category->category_name;?></h3></p>
                </div>
            </a>
            </div>
            <?php }?>
        </div>
        <div class="row">
            <div class="col-md-12 listwork-button">
                <a href="<?php echo base_url()?>welcome/job_category_view">See All....</a>
            </div>
        </div>
    </div>
</section>
<!-- listwork-area end -->

<!-- quote-area start -->
<section class="quote-area">
    <div class="container">
        <div class="row">
            <div class="quotefull">
                <h1>Get Quotes From Top <span>Enlisted Professionals For Free!</span></h1>
                <div class="quote-button">
                        <a href="<?php echo base_url() ?>welcome/sign_in/1">Post a New Work</a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- quote-area end -->

<!-- client-area start -->
<section class="client-area">
    <div class="container">
        <div class="row">
            <div class="client-full">
                <div class="client-single">
                    <a href="#"><img src="<?php echo base_url() ?>web_assets/images/unicef.png"></a>
                </div>
                <div class="client-single">
                    <a href="#"><img src="<?php echo base_url() ?>web_assets/images/ubisoft.png"></a>
                </div>
                <div class="client-single">
                    <a href="#"><img src="<?php echo base_url() ?>web_assets/images/navigare.png"></a>
                </div>
                <div class="client-single">
                    <a href="#"><img src="<?php echo base_url() ?>web_assets/images/film.png"></a>
                </div>
                <div class="client-single">
                    <a href="#"><img src="<?php echo base_url() ?>web_assets/images/diamond.png"></a>
                </div>
                <div class="client-single">
                    <a href="#"><img src="<?php echo base_url() ?>web_assets/images/unicef.png"></a>
                </div>
                <div class="client-single">
                    <a href="#"><img src="<?php echo base_url() ?>web_assets/images/ubisoft.png"></a>
                </div>
                <div class="client-single">
                    <a href="#"><img src="<?php echo base_url() ?>web_assets/images/navigare.png"></a>
                </div>
                <div class="client-single">
                    <a href="#"><img src="<?php echo base_url() ?>web_assets/images/film.png"></a>
                </div>
                <div class="client-single">
                    <a href="#"><img src="<?php echo base_url() ?>web_assets/images/diamond.png"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- client-area end -->

<!-- footer-area start -->

<script src="web_assets/js/jquery-3.6.0.min.js"></script>
<script src="web_assets/js/bootstrap.bundle.min.js"></script>
<script src="web_assets/js/slick.min.js"></script>
<script src="web_assets/js/script.js"></script>

        <script>
            $('.client-full').click({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    } ]
            });
        </script>
