<main class="body-padding">

    <section class="requestinvite-area specification-area">
        <div class="container">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">View Job Post
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Interested Bidder
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Interested Investor
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2"
                            aria-selected="false">Shortlist Bidder
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact3" type="button" role="tab" aria-controls="pills-contact3"
                            aria-selected="false">Shortlist Investor
                    </button>
                </li>
<!--                <li class="nav-item" role="presentation">-->
<!--                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"-->
<!--                            data-bs-target="#pills-contact4" type="button" role="tab" aria-controls="pills-contact4"-->
<!--                            aria-selected="false">Hire Bidder-->
<!--                    </button>-->
<!--                </li>-->
<!--                <li class="nav-item" role="presentation">-->
<!--                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"-->
<!--                            data-bs-target="#pills-contact5" type="button" role="tab" aria-controls="pills-contact5"-->
<!--                            aria-selected="false">Hire Investor-->
<!--                    </button>-->
<!--                </li>-->
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <input type="hidden" id="post_id" value="<?php echo $post_id ?>">
                    <?php
                    foreach ($view_pending_job as $v_jobs) { ?>
                    <h3 class="improve"><?php echo $v_jobs->job_title; ?></h3>
                    <div class="jobdetails-left">
                        <div class="findwork-singlejob">
                            <div class="singlejob-time">
                                <div class="singlejob-ids">
                                    <h4>Tender ID:<?php echo $v_jobs->id; ?></h4>
                                    <p><?php echo $v_jobs->date_and_time; ?></p>
                                </div>
                                <div class="singlejob-anchors">

                                </div>
                            </div>
                            <h4><a href="#"><?php echo $v_jobs->job_title; ?></a></h4>
                            <div class="singlejob-feature">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <ul>
                                            <ul>

                                                <li>Work Type: <span>
                                                 <?php
                                                 if ($v_jobs->work_type_bidder == 1) {
                                                     echo "Goods";
                                                 } else if ($v_jobs->work_type_bidder == 2) {
                                                     echo "Service";
                                                 } else if ($v_jobs->work_type_bidder == 3) {
                                                     echo "Work";
                                                 } else if ($v_jobs->work_type_bidder == 4) {
                                                     echo "Others";
                                                 } ?>
                                            </span></li>
                                                <li>Work Authority:
                                                    <span><?php echo $v_jobs->work_authority_name; ?></span></li>
                                                <li>Department: <span>
                                                 <?php
                                                 if ($v_jobs->work_category_id == 1) {
                                                     echo "Web Development";
                                                 } else if ($v_jobs->work_category_id == 2) {
                                                     echo "Software Development";
                                                 } else if ($v_jobs->work_category_id == 3) {
                                                     echo "App Development";
                                                 } else if ($v_jobs->work_category_id == 4) {
                                                     echo "Others";
                                                 } ?>


                                            </span></li>
                                                <li>Job Category: <span><?php echo $v_jobs->category_name; ?></span>
                                                </li>
                                                <li>Job Sub-Category:
                                                    <span><?php echo $v_jobs->sub_category_name; ?></span></li>
                                                <li>Tender Caller:
                                                    <span><?php echo $v_jobs->organization_name; ?></span></li>
                                                <li>Published in: <span><?php echo $v_jobs->publish_date; ?></span></li>
                                                <li>Closing date: <span><?php echo $v_jobs->submit_date; ?></span></li>
                                                <li>Need Invest Amount: <span><?php echo $v_jobs->approximate_budget; ?>
                                                        TK</span></li>
                                            </ul>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 texts-right">
                                        <p>Approximate Budget</p>
                                        <h3><?php echo $v_jobs->approximate_budget; ?> TK</h3>
                                        <h6><br>
                                        <?php

                                        if($v_jobs->need_investor==1){
                                            echo"<h3>Investment Amount:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$v_jobs->investment_amount</h3><br>";


                                        }?>
                                        </h6><br>
                                        <h6>
                                            <?php

                                            if($v_jobs->need_investor==1){
                                                echo"<h3>Benefit of Invest:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$v_jobs->profit_share</h3><br>";


                                            }?>
                                        </h6>

                                    </div>
                                </div>
                            </div>
                            <div class="singlejob-tags">
                                <ul>
                                    <h4>Bidder Requirement:</h4><br>
                                    <?php if ($v_jobs->tin_bidder) { ?>
                                        <li><a href="#"><?php echo $v_jobs->tin_bidder; ?></a></li>
                                    <?php } ?>
                                    <?php if ($v_jobs->bin_bidder) { ?>
                                        <li><a href="#"><?php echo $v_jobs->bin_bidder; ?></a></li>
                                    <?php } ?>
                                    <?php if ($v_jobs->nid_bidder) { ?>
                                        <li><a href="#"><?php echo $v_jobs->nid_bidder; ?></a></li>
                                    <?php } ?>
                                    <?php if ($v_jobs->taxreturn_bidder) { ?>
                                        <li><a href="#"><?php echo $v_jobs->taxreturn_bidder; ?></a></li>
                                    <?php } ?>
                                    <?php if ($v_jobs->audit_report_bidder == 1) { ?>
                                        <li><a href="#"><?php echo "Audit Report"; ?></a></li>
                                    <?php } ?>
                                    <?php if ($v_jobs->similar_work_bidder == 1) { ?>
                                        <li><a href="#"><?php echo "Similar Work"; ?></a></li>
                                    <?php } ?>
                                    <?php if ($v_jobs->general_work_bidder == 1) { ?>
                                        <li><a href="#"><?php echo "General Work"; ?></a></li>
                                    <?php } ?>
                                </ul>
                                <br>
                                <ul><h4>Investor Requirement:</h4></br>
                                    <?php if ($v_jobs->tin_bidder) { ?>
                                        <li><a href="#"><?php echo $v_jobs->tin_investor; ?></a></li>
                                    <?php } ?>
                                    <?php if ($v_jobs->bin_bidder) { ?>
                                        <li><a href="#"><?php echo $v_jobs->bin_investor; ?></a></li>
                                    <?php } ?>
                                    <?php if ($v_jobs->nid_bidder) { ?>
                                        <li><a href="#"><?php echo $v_jobs->nid_investor; ?></a></li>
                                    <?php } ?>
                                    <?php if ($v_jobs->taxreturn_bidder) { ?>
                                        <li><a href="#"><?php echo $v_jobs->taxreturn_investor; ?></a></li>
                                    <?php } ?>
                                    <?php if ($v_jobs->audit_report_investor == 1) { ?>
                                        <li><a href="#"><?php echo "Audit Report"; ?></a></li>
                                    <?php } ?>
                                    <?php if ($v_jobs->similar_work_investor == 1) { ?>
                                        <li><a href="#"><?php echo "Similar Work"; ?></a></li>
                                    <?php } ?>
                                    <?php if ($v_jobs->general_work_investor == 1) { ?>
                                        <li><a href="#"><?php echo "General Work"; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="singlejob-pay">
                                <?php
                                $bidder_count = $this->Pending_job_model->select_all_job_apply_bidder($v_jobs->id);
                                $investor_count = $this->Pending_job_model->select_all_job_apply_investor($v_jobs->id);
                                ?>
                                <ul>
                                    <li><a href="#"><img src="<?php echo base_url() ?>web_assets/images/pay.png"
                                                         alt="image">Payment
                                            Verified</a></li>
                                    <li><a href="#"><img src="<?php echo base_url() ?>web_assets/images/bidder.png"
                                                         alt="image">
                                            <?php echo $bidder_count->total; ?>
                                            Bider</a></li>
                                    <li><a href="#"><img src="<?php echo base_url() ?>web_assets/images/investor.png"
                                                         alt="image"> <?php echo $investor_count->total; ?> Investor</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="work-description">
                                <div class="workdes-top">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h3>Work Description/ Specification/Tor/Boq</h3>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="<?php echo base_url() ?>public/job_file/<?php echo $v_jobs->work_description_file; ?>"
                                               target="_blank">View PDF</a>
                                        </div>
                                    </div>
                                </div>
                                <p><?php echo $v_jobs->work_description; ?></p>
                            </div>
                            <div class="work-description">
                                <div class="workdes-top">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h3>Qualification</h3>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="<?php echo base_url() ?>public/job_file/<?php echo $v_jobs->qualifications_file; ?>"
                                               target="_blank">View PDF</a>
                                        </div>
                                    </div>
                                </div>
                                <p><?php echo $v_jobs->qualifications; ?></p>

                            </div>
                            <div class="work-description">
                                <div class="workdes-top">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h3>Terms &amp; Conditions</h3>
                                        </div>
                                        <div class="col-sm-6">

                                        </div>
                                    </div>
                                </div>
                                <p><?php echo $v_jobs->terms_condition; ?></p>

                            </div>
                        </div>

                    </div>


                </div>
                <?php } ?>

                <!--Bidder Interest tab 2 -->
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="imbidder-all">
                        <!-- imbidder-single -->
                        <?php
                        $i = 0;
                        foreach ($interest_bidder as $v_interest_bidder) {
                            $i++;
                            ?>
                            <input type="hidden" id="user_id<?php echo $i ?>"
                                   value="<?php echo $v_interest_bidder->user_id ?>">
                            <div class="imbidder-single">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-2 ">
                                        <img
                                            src="<?php echo base_url() ?>public/user_profile/<?php echo $v_interest_bidder->company_logo; ?>"
                                            style="width:100px; height:100px; "><br>
                                        <h6><a href="<?php echo base_url()?>view_profile_publisher/view_profile_publisher_all/<?php echo $v_interest_bidder->user_id; ?>"><?php echo $v_interest_bidder->organization_name; ?></a></h6>
                                    </div>

                                    <div class="col-md-2 published">
                                        <?php
                                        $all_published_job = $this->View_profile_publisher_model->select_all_published_job($v_interest_bidder->user_id);
                                        $user_id = $all_published_job->user_id;
                                        $get_result = $this->View_profile_publisher_model->count_all_publisher($user_id);
                                        ?>
                                        <ul>
                                            <li>Published Job <span><?php echo $get_result->total; ?></span></li>
                                            <?php
                                            $all_bid_job = $this->View_profile_publisher_model->select_all_bid_job($v_interest_bidder->user_id);
                                            $user_id = $all_bid_job->user_id;
                                            $get_result1 = $this->View_profile_publisher_model->count_all_bid($user_id);
                                            ?>
                                            <li>Bid Job <span><?php echo $get_result1->total; ?></span></li>
                                            <li>Done Job <span>0</span></li>
                                        </ul>
                                        <ul class="star">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-4 quotation">
                                        <ul>
                                            <li>Quotation Price
                                                <span><?php echo $v_interest_bidder->quotation_price_for_bidder; ?></span>
                                            </li>
                                            <li>Work Completion Date
                                                <span><?php echo $v_interest_bidder->work_completion_date; ?></span>
                                            </li>
                                        </ul>

                                    </div>

                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-2 buttons">
                                        <ul>
                                            <li><a href="#" onclick="job_shortlist_active(<?php echo $v_interest_bidder->id; ?>)">Shortlist</a>
                                            </li>
                                            <li><a href="#"
                                                   onclick="job_decline_bidder(<?php echo $v_interest_bidder->id; ?>)">Decline</a>
                                            </li>
                                            <li><a href="<?php echo base_url()?>view_profile_publisher/view_profile_publisher_all/<?php echo $v_interest_bidder->user_id; ?>">Details</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                            </div>
                        <?php } ?>
                        <!-- pagination -->

                    </div>
                </div>


                <!--Investor Interest tab 3 -->

                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="imbidder-all">
                        <!-- imbidder-single -->
                        <?php
                        $i = 0;
                        foreach ($interest_investor as $v_interest_investor) {
                            $i++;
                            ?>
                            <input type="hidden" id="user_id<?php echo $i ?>"
                                   value="<?php echo $v_interest_investor->user_id ?>">
                            <div class="imbidder-single">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-2 ">
                                        <img
                                            src="<?php echo base_url() ?>public/user_profile/<?php echo $v_interest_investor->company_logo; ?>"
                                            style="width:100px; height:100px; "><br>
                                        <h6><a href="<?php echo base_url()?>investor_profile_view/investor_profile/<?php echo $v_interest_investor->user_id; ?>"><?php echo $v_interest_investor->organization_name; ?></a></h6>
                                    </div>
                                    <div class="col-md-2 published">
                                        <?php
                                        $all_published_job = $this->View_profile_publisher_model->select_all_published_job($v_interest_investor->user_id);
                                        $user_id = $all_published_job->user_id;
                                        $get_result_investor = $this->View_profile_publisher_model->count_all_publisher($user_id);
                                        ?>
                                        <ul>
                                            <li>Published Job <span><?php echo $get_result_investor->total; ?></span></li>
                                            <?php
                                            $all_invest_job = $this->View_profile_publisher_model->select_all_invest_job($v_interest_investor->user_id);
                                            $user_id = $all_invest_job->user_id;
                                            $get_result_invest1 = $this->View_profile_publisher_model->count_all_invest($user_id);
                                            ?>
                                            <li>Invest Job <span><?php echo $get_result_invest1->total; ?></span></li>
                                            <li>Done Job <span>0</span></li>
                                        </ul>
                                        <ul class="star">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>

                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-4 quotation">
                                        <ul>
                                            <li>Interested Investment
                                                <span><?php echo $v_interest_investor->interested_investment; ?></span>
                                            </li>
                                            <li>Benefit of Investment
                                                <span><?php echo $v_interest_investor->profit_share; ?></span></li>
<!--                                            <li>First Invest <span>40,000</span></li>-->
<!--                                            <li>Second Invest <span>30,000</span></li>-->
<!--                                            <li>Third Invest <span>30,000</span></li>-->
                                        </ul>
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-2 buttons">
                                        <ul>
                                            <li><a href="#"
                                                   onclick="job_shortlist_active_investor(<?php echo $v_interest_investor->id;?>)">Shortlist</a>
                                            </li>
                                            <li><a href="#"
                                                   onclick="job_decline_investor(<?php echo $v_interest_investor->id; ?>)">Decline</a>
                                            </li>
                                            <li><a href="<?php echo base_url()?>investor_profile_view/investor_profile/<?php echo $v_interest_investor->user_id; ?>">Details</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- pagination -->

                    </div>
                </div>
                <!-- tab 4 Bidder Shortlist -->
                <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="imbidder-all">
                        <?php
                        $i=0;
                        foreach ($shortlist_bidder as $v_shortlist_bidder)

                        {
                            $i++;
                            ?>
                            <!-- imbidder-single -->
                            <input type="hidden" id="user_id<?php echo $i ?>"
                                   value="<?php echo $v_shortlist_bidder->user_id ?>">
                            <div class="imbidder-single">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-2 ">
                                        <img
                                            src="<?php echo base_url() ?>public/user_profile/<?php echo $v_shortlist_bidder->company_logo; ?>"
                                            style="width:100px; height:100px; "><br>
                                        <h6><a href="<?php echo base_url()?>view_profile_publisher/view_profile_publisher_all/<?php echo $v_shortlist_bidder->user_id; ?>"><?php echo $v_shortlist_bidder->organization_name;?></a></h6>
                                    </div>
                                    <div class="col-md-2 published">
                                        <?php

                                        $all_published_job = $this->View_profile_publisher_model->select_all_published_job($v_shortlist_bidder->user_id);
                                        $user_id = $all_published_job->user_id;
                                        $get_result2 = $this->View_profile_publisher_model->count_all_publisher($user_id);
                                        ?>
                                        <ul>
                                            <li>Published Job <span><?php echo $get_result2->total; ?></span></li>
                                            <?php
                                            $all_bid_job = $this->View_profile_publisher_model->select_all_bid_job($v_shortlist_bidder->user_id);
                                            $user_id = $all_bid_job->user_id;
                                            $get_result3 = $this->View_profile_publisher_model->count_all_bid($user_id);
                                            ?>
                                            <li>Bid Job <span><?php echo $get_result3->total; ?></span></li>
                                            <li>Done Job <span>0</span></li>
                                        </ul>
                                        <ul class="star">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-4 quotation">
                                        <ul>
                                            <li>Quotation Price
                                                <span><?php echo $v_shortlist_bidder->quotation_price_for_bidder; ?></span>
                                            </li>
                                            <li>Work Completion Date
                                                <span><?php echo $v_shortlist_bidder->work_completion_date; ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-2 buttons">
                                        <ul>
                                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#load_modal"
                                                   onclick="return agreement_form(<?php echo $i ?>);">Hire</a>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- imbidder-single -->
                        <!-- pagination -->

                    </div>
                </div>
                <!-- tab 5 investor Short List -->
                <div class="tab-pane fade" id="pills-contact3" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="imbidder-all">
                        <!-- imbidder-single -->
                        <?php
                        $i=0;
                        foreach ($shortlist_investor as $v_shortlist_investor)

                        {
                            $i++;
                            ?>
                            <input type="hidden" id="user_id<?php echo $i ?>"
                                   value="<?php echo $v_shortlist_investor->user_id ?>">
                            <div class="imbidder-single">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-2 ">
                                        <img
                                            src="<?php echo base_url() ?>public/user_profile/<?php echo $v_shortlist_investor->company_logo; ?>"
                                            style="width:100px; height:100px; "><br>
                                        <h6><a href="<?php echo base_url()?>investor_profile_view/investor_profile/<?php echo $v_shortlist_investor->user_id; ?>"><?php echo $v_shortlist_investor->organization_name; ?></a></h6>
                                    </div>
                                    <div class="col-md-2 published">
                                        <?php
                                        $all_published_job = $this->View_profile_publisher_model->select_all_published_job($v_shortlist_investor->user_id);
                                        $user_id = $all_published_job->user_id;
                                        $get_result_investor4 = $this->View_profile_publisher_model->count_all_publisher($user_id);
                                        ?>
                                        <ul>
                                            <li>Published Job <span><?php echo $get_result_investor4->total; ?></span></li>
                                            <?php
                                            $all_invest_job = $this->View_profile_publisher_model->select_all_invest_job($v_shortlist_investor->user_id);
                                            $user_id = $all_invest_job->user_id;
                                            $get_result_invest5 = $this->View_profile_publisher_model->count_all_invest($user_id);
                                            ?>
                                            <li>Invest Job <span><?php echo $get_result_invest5->total; ?></span></li>
                                            <li>Done Job <span>0</span></li>
                                        </ul>
                                        <ul class="star">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>

                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-4 quotation">
                                        <ul>
                                            <li>Interested Investment
                                                <span><?php echo $v_shortlist_investor->interested_investment; ?></span>
                                            </li>
                                            <li>Benefit of Investment
                                                <span><?php echo $v_shortlist_investor->profit_share; ?></span></li>
<!--                                            <li>First Invest <span>40,000</span></li>-->
<!--                                            <li>Second Invest <span>30,000</span></li>-->
<!--                                            <li>Third Invest <span>30,000</span></li>-->
                                        </ul>
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-2 buttons">
                                        <ul>

                                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#load_modal"
                                                   onclick="return investor_agreement_form(<?php echo $i ?>);">Hire</a></li>;






                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- pagination -->

                    </div>
                </div>
                <!-- tab 6 Bidder Hire List -->
                <div class="tab-pane fade" id="pills-contact4" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="imbidder-all">
                        <!-- imbidder-single -->
                        <?php
                        foreach ($hire_bidder as $v_hire) {
                            ?>
                            <div class="imbidder-single">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-2 ">
                                        <img
                                            src="<?php echo base_url() ?>public/user_profile/<?php echo $v_hire->company_logo; ?>"
                                            style="width:100px; height:100px; "><br>
                                        <h6><a href="<?php echo base_url()?>view_profile_publisher/view_profile_publisher_all/<?php echo $v_hire->user_id; ?>"><?php echo $v_hire->organization_name;?></a></h6>
                                    </div>
                                    <div class="col-md-2 published">
                                        <ul>
                                            <li>Published Job <span>42</span></li>
                                            <li>Invest Job <span>20</span></li>
                                            <li>Done Job <span>60</span></li>
                                        </ul>
                                        <ul class="star">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <p>100% incomeplete</p>
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-4 quotation">
                                        <ul>
                                            <li>Quotation Price
                                                <span><?php echo $v_hire->quotation_price_for_bidder; ?></span></li>
                                            <li>Work Completion Date
                                                <span><?php echo $v_hire->work_completion_date; ?></span></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-2 buttons">

                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <!-- tab 7 hire Investor List -->
                <div class="tab-pane fade" id="pills-contact5" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="imbidder-all">
                        <!-- imbidder-single -->
                        <?php

                        foreach ($hire_investor as $v_hire_investor) {
                            ?>
                            <div class="imbidder-single">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-2 ">
                                        <img
                                            src="<?php echo base_url() ?>public/user_profile/<?php echo $v_hire_investor->company_logo; ?>"
                                            style="width:100px; height:100px; "><br>
                                        <h6><a href="<?php echo base_url()?>investor_profile_view/investor_profile/<?php echo $v_hire_investor->user_id; ?>"><?php echo $v_hire_investor->organization_name; ?></a></h6>
                                    </div>
                                    <div class="col-md-2 published">
                                        <ul>
                                            <li>Published Job <span>42</span></li>
                                            <li>Invest Job <span>20</span></li>
                                            <li>Done Job <span>60</span></li>
                                        </ul>
                                        <ul class="star">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                        <p>100% incomeplete</p>
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-4 quotation">
                                        <ul>
                                            <li>Interested Investment
                                                <span><?php echo $v_hire_investor->interested_investment; ?></span></li>
                                            <li>Benefit of Investment
                                                <span><?php echo $v_hire_investor->profit_share; ?></span></li>
                                            <li>First Invest <span>40,000</span></li>
                                            <li>Second Invest <span>30,000</span></li>
                                            <li>Third Invest <span>30,000</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-2 buttons">

                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- imbidder-single -->
                        <!-- pagination -->

                    </div>
                </div>
            </div>


        </div>
        <div class="modal fade bd-example-modal-lg show" id="load_modal" tabindex="-1"
             aria-labelledby="exampleStandardModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="title"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="load_from">

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
</main>
<script>
    function job_shortlist_active_investor($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>pending_job/shortlister_investor_active/' + $id,
            success: function (result) {
                if (result) {

                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>

<script>
    function job_decline_investor($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>pending_job/decline_investor_active/' + $id,
            success: function (result) {
                if (result) {
//                    window.setTimeout(function () {
//                        window.location.href = '<?php //echo base_url()?>//my_job/my_job_details/' + $id;
//                    }, 100);
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>
<script>
    function agreement_form($id) {
        var set_id = $id;
        var post_id = $('#post_id').val();
        var user_id = $('#user_id' + set_id + "").val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>pending_job/load_add_agreement_from',
            data: {post_id: post_id, user_id: user_id},
            success: function (result) {
                if (result) {
                    $('#title').html('Aggrement Form For Bidder');
                    $('#load_from').html(result);
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>

<script>
    function investor_agreement_form($id) {
        var set_id = $id;
        var post_id = $('#post_id').val();
        var user_id = $('#user_id' + set_id + "").val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>pending_job/load_investor_add_agreement_from',
            data: {post_id: post_id, user_id: user_id},
            success: function (result) {
                if (result) {
                    $('#title').html('Aggrement Form For Investor');
                    $('#load_from').html(result);
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>

<script>
    function job_shortlist_active($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>pending_job/shortlister_active/' + $id,
            success: function (result) {
                if (result) {
                    window.setTimeout(function () {
                        window.location.href = "<?php echo base_url()?>/pending_job/pending_job_details/<?php echo $post_id;?>";
                    }, 100);
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>

<script>
    function job_shortlist_active_investor($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>pending_job/shortlister_investor_active/' + $id,
            success: function (result) {
                if (result) {
                    window.setTimeout(function () {
                      window.location.href = "<?php echo base_url()?>/pending_job/pending_job_details/<?php echo $post_id;?>";
                   }, 100);
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>

<script>
    function job_decline_investor($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>pending_job/decline_investor_active/' + $id,
            success: function (result) {
                if (result) {
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>


<script>
    function job_decline_bidder($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>pending_job/decline_bidder_active/' + $id,
            success: function (result) {
                if (!result) {
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>


<script>
    function job_hire_investor($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>pending_job/hire_investor_active/' + $id,
            success: function (result) {
                if (result) {
                    return false;
                } else {

                    return false;
                }
            }
        });
        return false;
    }
</script>


