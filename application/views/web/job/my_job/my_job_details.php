<main class="body-padding">

    <section class="requestinvite-area specification-area">
        <div class="container">

            <h3 class="improve">Improvement of Road by RCC & BFS</h3>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">View Job Post</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Interested Bidder</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Interested Investor</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2" aria-selected="false">Shortlist Bidder</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact3" type="button" role="tab" aria-controls="pills-contact3" aria-selected="false">Shortlist Investor</button>
                </li>
<!--                <li class="nav-item" role="presentation">-->
<!--                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact4" type="button" role="tab" aria-controls="pills-contact4" aria-selected="false">Hire Bidder</button>-->
<!--                </li>-->
<!--                <li class="nav-item" role="presentation">-->
<!--                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact5" type="button" role="tab" aria-controls="pills-contact5" aria-selected="false">Hire Investor</button>-->
<!--                </li>-->
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <?php
                    foreach ($view_job as $v_jobs) {?>
                    <div class="jobdetails-left">
                        <div class="findwork-singlejob">
                            <div class="singlejob-time">
                                <div class="singlejob-ids">
                                    <h4>Tender ID:<?php echo $v_jobs->id; ?></h4>
                                    <p>Posted 30 Minutes ago</p>
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
                                                <li>Work Authority: <span><?php echo $v_jobs->work_authority_name; ?></span></li>
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
                                                <li>Job Category: <span><?php echo $v_jobs->category_name; ?></span></li>
                                                <li>Job Sub-Category: <span><?php echo $v_jobs->sub_category_name; ?></span></li>
                                                <li>Tender Caller: <span><?php echo $v_jobs->organization_name; ?></span></li>
                                                <li>Published in: <span><?php echo $v_jobs->publish_date; ?></span></li>
                                                <li>Closing date: <span><?php echo $v_jobs->submit_date; ?></span></li>
                                                <li>Need Invest Amount: <span><?php echo $v_jobs->approximate_budget; ?> TK</span></li>
                                            </ul>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 texts-right">
                                        <p>Approximate Budget</p>
                                        <h3><?php echo $v_jobs->approximate_budget; ?> TK</h3>
                                        <p>Invest Amount</p>
                                        <h3><?php echo $v_jobs->investment_amount; ?> TK</h3>
                                        <p>Benefit of Invest</p>
                                        <h3><?php echo $v_jobs->profit_share; ?></h3>
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
                                </ul><br>
                                <ul><h4>Investor Requirement:</h4></br>
                                    <?php if ($v_jobs->tin_bidder) { ?>
                                        <li><a href="#"><?php echo $v_jobs->tin_investor; ?></a></li>
                                    <?php }?>
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
                                $bidder_count = $this->Job_view_model->select_all_job_apply_bidder($v_jobs->id);
                                $investor_count = $this->Job_view_model->select_all_job_apply_investor($v_jobs->id);
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
                                            <a href="<?php echo base_url() ?>public/job_file/<?php echo $v_jobs->work_description_file;?>" target="_blank">View PDF</a>
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
                                            <a href="<?php echo base_url() ?>public/job_file/<?php echo $v_jobs->qualifications_file;?>" target="_blank">View PDF</a>
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
                        foreach ($interest_bidder as $v_interest_bidder) {?>
                            <div class="imbidder-single">


                                <div class="row d-flex align-items-center">

                                    <div class="col-md-2 ">
                                        <img src="<?php echo base_url() ?>public/user_profile/<?php echo $v_interest_bidder->company_logo; ?>" style="width:100px; height:100px; "><br>
                                        <h6><?php echo $v_interest_bidder->organization_name; ?></h6>
                                    </div>

                                    <div class="col-md-2 published">
                                        <?php
                                        $id=$this->input->post['id'];
                                        $all_published_job = $this->Job_view_model->select_all_published_job($id);
                                        $all_invest_job = $this->Job_view_model->select_all_invest_job($id);
                                        ?>
                                        <ul>
                                            <li>Published Job <span><?php echo $all_published_job->total; ?></span></li>
                                            <li>Invest Job <span><?php echo $all_invest_job->total; ?><span></span></li>
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
                                            <li>Quotation Price <span><?php echo $v_interest_bidder->quotation_price_for_bidder; ?></span></li>
                                            <li>Work Completion Date <span><?php echo $v_interest_bidder->work_completion_date; ?></span></li>
                                        </ul>

                                    </div>

                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-2 buttons">
                                        <ul>
                                            <li><a href="#" onclick="job_shortlist_active(<?php echo $v_interest_bidder->id; ?>)">Shortlist</a></li>
                                            <li><a href="#" onclick="job_decline_bidder(<?php echo $v_interest_bidder->id; ?>)" >Decline</a></li>
                                            <li><a href="#" onclick="job_hire_bidder(<?php echo $v_interest_bidder->id; ?>)">Hire</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        <?php }?>
                        <!-- pagination -->

                    </div>
                </div>


                <!--Investor Interest tab 3 -->

                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="imbidder-all">
                        <!-- imbidder-single -->
                        <?php
                        foreach ($interest_investor as $v_interest_investor) {?>
                            <div class="imbidder-single">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-2 ">
                                        <img src="<?php echo base_url() ?>public/user_profile/<?php echo $v_interest_investor->company_logo; ?>" style="width:100px; height:100px; "><br>
                                        <h6><?php echo $v_interest_investor->organization_name; ?></h6>
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
                                            <li>Interested Investment <span><?php echo $v_interest_investor->interested_investment; ?></span></li>
                                            <li>Benefit of Investment  <span><?php echo $v_interest_investor->profit_share; ?></span></li>
                                            <li>First Invest <span>40,000</span></li>
                                            <li>Second Invest <span>30,000</span></li>
                                            <li>Third Invest <span>30,000</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-2 buttons">
                                        <ul>
                                            <li><a href="#" onclick="job_shortlist_active_investor(<?php echo $v_interest_investor->id; ?>)">Shortlist</a></li>
                                            <li><a href="#" onclick="job_decline_investor(<?php echo $v_interest_investor->id; ?>)">Decline</a></li>
                                            <li><a href="#" onclick="job_hire_investor(<?php echo $v_interest_investor->id; ?>)">Hire</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <!-- pagination -->

                    </div>
                </div>
                <!-- tab 4 Bidder Shortlist -->
                <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="imbidder-all">
                        <?php
                        foreach ($shortlist_bidder as $v_shortlist_bidder) {?>
                            <!-- imbidder-single -->
                            <div class="imbidder-single">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-2 ">
                                        <img src="<?php echo base_url() ?>public/user_profile/<?php echo $v_shortlist_bidder->company_logo; ?>" style="width:100px; height:100px; "><br>
                                        <h6><?php echo $v_shortlist_bidder->organization_name; ?></h6>
                                    </div>
                                    <div class="col-md-2 published">
                                        <ul>
                                            <li>Published Job <span></span></li>
                                            <li>Invest Job <span></span></li>
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
                                            <li>Quotation Price <span><?php echo $v_shortlist_bidder->quotation_price_for_bidder; ?></span></li>
                                            <li>Work Completion Date <span><?php echo $v_shortlist_bidder->work_completion_date; ?></span></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-2 buttons">
                                        <ul>
                                            <li><a href="#" onclick="job_hire_bidder(<?php echo $v_shortlist_bidder->id; ?>)">Hire</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <!-- imbidder-single -->
                        <!-- pagination -->

                    </div>
                </div>
                <!-- tab 5 investor Short List -->
                <div class="tab-pane fade" id="pills-contact3" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="imbidder-all">
                        <!-- imbidder-single -->
                        <?php
                        foreach($shortlist_investor as $v_shortlist_investor)
                        {?>
                            <div class="imbidder-single">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-2 ">
                                        <img src="<?php echo base_url() ?>public/user_profile/<?php echo $v_shortlist_investor->company_logo; ?>" style="width:100px; height:100px; "><br>
                                        <h6><?php echo $v_shortlist_investor->organization_name; ?></h6>
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
                                            <li>Interested Investment <span><?php echo $v_shortlist_investor->interested_investment; ?></span></li>
                                            <li>Benefit of Investment  <span><?php echo $v_shortlist_investor->profit_share; ?></span></li>
                                            <li>First Invest <span>40,000</span></li>
                                            <li>Second Invest <span>30,000</span></li>
                                            <li>Third Invest <span>30,000</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-2 buttons">
                                        <ul>
                                            <li><a href="#" onclick="job_hire_investor(<?php echo $v_shortlist_investor->id; ?>)" >Hire</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <!-- pagination -->

                    </div>
                </div>
                <!-- tab 6 Bidder Hire List -->
                <div class="tab-pane fade" id="pills-contact4" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="imbidder-all">
                        <!-- imbidder-single -->
                        <?php
                        foreach ($hire_bidder as $v_hire)
                        {?>
                            <div class="imbidder-single">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-2 ">
                                        <img src="<?php echo base_url() ?>public/user_profile/<?php echo $v_hire->company_logo; ?>" style="width:100px; height:100px; "><br>
                                        <h6><?php echo $v_hire->organization_name; ?></h6>
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
                                            <li>Quotation Price <span><?php echo $v_hire->quotation_price_for_bidder; ?></span></li>
                                            <li>Work Completion Date <span><?php echo $v_hire->work_completion_date; ?></span></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-2 buttons">
                                        <ul>
                                            <li><a class="work" href="#">Work Status</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>

                <!-- tab 7 hire Investor List -->
                <div class="tab-pane fade" id="pills-contact5" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="imbidder-all">
                        <!-- imbidder-single -->
                        <?php

                        foreach($hire_investor as $v_hire_investor)
                        {?>
                            <div class="imbidder-single">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-2 ">
                                        <img src="<?php echo base_url() ?>public/user_profile/<?php echo $v_hire_investor->company_logo; ?>" style="width:100px; height:100px; "><br>
                                        <h6><?php echo $v_hire_investor->organization_name; ?></h6>
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
                                            <li>Interested Investment <span><?php echo $v_hire_investor->interested_investment; ?></span></li>
                                            <li>Benefit of Investment  <span><?php echo $v_hire_investor->profit_share; ?></span></li>
                                            <li>First Invest <span>40,000</span></li>
                                            <li>Second Invest <span>30,000</span></li>
                                            <li>Third Invest <span>30,000</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                    <div class="col-md-2 buttons">
                                        <ul>
                                            <li><a class="work" href="#">Work Status</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <!-- imbidder-single -->
                        <!-- pagination -->

                    </div>
                </div>
            </div>



        </div>
    </section>
</main>

