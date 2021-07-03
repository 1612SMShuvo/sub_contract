<main class="">
    <section class="requestinvite-area specification-area">
        <div class="container">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <?php
                    foreach ($job_details_admin as $v_job) { ?>
                        <div class="jobdetails-left">
                            <div class="findwork-singlejob">
                                <div class="singlejob-time">
                                    <div class="singlejob-ids">
                                        <h4>Tender ID:<?php echo $v_job->id; ?></h4>
                                        <p><?php echo $v_job->date_and_time; ?></p>
                                    </div>
                                    <div class="singlejob-anchors">

                                    </div>
                                </div>
                                <h4><a href="#"><?php echo $v_job->job_title; ?></a></h4>
                                <div class="singlejob-feature">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <ul>
                                                <ul>

                                                    <li>Work Type: <span>
                                                 <?php
                                                 if ($v_job->work_type_bidder == 1) {
                                                     echo "Goods";
                                                 } else if ($v_job->work_type_bidder == 2) {
                                                     echo "Service";
                                                 } else if ($v_job->work_type_bidder == 3) {
                                                     echo "Work";
                                                 } else if ($v_job->work_type_bidder == 4) {
                                                     echo "Others";
                                                 } ?>
                                            </span></li>
                                                    <li>Work Authority: <span>
                                                 <?php
                                                 if ($v_job->work_authority == 1) {
                                                     echo "Sports Ministry";
                                                 } else if ($v_job->work_authority == 2) {
                                                     echo "ICT Ministry";
                                                 } else if ($v_job->work_authority == 3) {
                                                     echo "NGO";
                                                 } else if ($v_job->work_authority == 4) {
                                                     echo "Others";
                                                 } ?>

                                            </span></li>
                                                    <li>Department: <span>
                                                 <?php
                                                 if ($v_job->work_category_id == 1) {
                                                     echo "Web Development";
                                                 } else if ($v_job->work_category_id == 2) {
                                                     echo "Software Development";
                                                 } else if ($v_job->work_category_id == 3) {
                                                     echo "App Development";
                                                 } else if ($v_job->work_category_id == 4) {
                                                     echo "Others";
                                                 } ?>


                                            </span></li>
                                                    <li>Tender Caller:
                                                        <span><?php echo $v_job->organization_name; ?></span>
                                                    </li>
                                                    <li>Published in:
                                                        <span><?php echo $v_job->publish_date; ?></span>
                                                    </li>
                                                    <li>Closing date:
                                                        <span><?php echo $v_job->submit_date; ?></span>
                                                    </li>
                                                    <li>Need Invest Amount:
                                                        <span><?php echo $v_job->approximate_budget; ?>
                                                            TK</span></li>
                                                </ul>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 texts-right">
                                            <p>Approximate Budget</p>
                                            <h3><?php echo $v_job->approximate_budget; ?> TK</h3>
                                            <p>Invest Amount</p>
                                            <h3><?php echo $v_job->investment_amount; ?> TK</h3>
                                            <p>Benefit of Invest</p>
                                            <h3><?php echo $v_job->profit_share; ?></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="singlejob-tags">
                                    <ul>
                                        <h4>Bidder Requirement:</h4><br>
                                        <?php if ($v_job->tin_bidder) { ?>
                                            <li><a href="#"><?php echo $v_job->tin_bidder; ?></a></li>
                                        <?php } ?>
                                        <?php if ($v_job->bin_bidder) { ?>
                                            <li><a href="#"><?php echo $v_job->bin_bidder; ?></a></li>
                                        <?php } ?>
                                        <?php if ($v_job->nid_bidder) { ?>
                                            <li><a href="#"><?php echo $v_job->nid_bidder; ?></a></li>
                                        <?php } ?>
                                        <?php if ($v_job->taxreturn_bidder) { ?>
                                            <li><a href="#"><?php echo $v_job->taxreturn_bidder; ?></a>
                                            </li>
                                        <?php } ?>
                                        <?php if ($v_job->audit_report_bidder == 1) { ?>
                                            <li><a href="#"><?php echo "Audit Report"; ?></a></li>
                                        <?php } ?>
                                        <?php if ($v_job->similar_work_bidder == 1) { ?>
                                            <li><a href="#"><?php echo "Similar Work"; ?></a></li>
                                        <?php } ?>
                                        <?php if ($v_job->general_work_bidder == 1) { ?>
                                            <li><a href="#"><?php echo "General Work"; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                    <br>
                                    <ul><h4>Investor Requirement:</h4></br>
                                        <?php if ($v_job->tin_bidder) { ?>
                                            <li><a href="#"><?php echo $v_job->tin_investor; ?></a></li>
                                        <?php } ?>
                                        <?php if ($v_job->bin_bidder) { ?>
                                            <li><a href="#"><?php echo $v_job->bin_investor; ?></a></li>
                                        <?php } ?>
                                        <?php if ($v_job->nid_bidder) { ?>
                                            <li><a href="#"><?php echo $v_job->nid_investor; ?></a></li>
                                        <?php } ?>
                                        <?php if ($v_job->taxreturn_bidder) { ?>
                                            <li><a href="#"><?php echo $v_job->taxreturn_investor; ?></a>
                                            </li>
                                        <?php } ?>
                                        <?php if ($v_job->audit_report_investor == 1) { ?>
                                            <li><a href="#"><?php echo "Audit Report"; ?></a></li>
                                        <?php } ?>
                                        <?php if ($v_job->similar_work_investor == 1) { ?>
                                            <li><a href="#"><?php echo "Similar Work"; ?></a></li>
                                        <?php } ?>
                                        <?php if ($v_job->general_work_investor == 1) { ?>
                                            <li><a href="#"><?php echo "General Work"; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="singlejob-pay">
                                    <ul>
                                        <?php
                                        $bidder = $this->Job_approve_model->check_bidder_apply($v_job->id);
                                        $investor = $this->Job_approve_model->check_investor_apply($v_job->id);
                                        ?>
                                        <li><a href="#"><img src="<?php echo base_url() ?>web_assets/images/pay.png"
                                                             alt="image">Payment Verified</a></li>
                                        <li><a href="#"><img src="<?php echo base_url() ?>web_assets/images/bidder.png"
                                                             alt="image"><?php echo $bidder->total; ?> Bidder</a></li>
                                        <li><a href="#"><img
                                                    src="<?php echo base_url() ?>web_assets/images/investor.png"
                                                    alt="image"><?php echo $investor->total; ?> Investor</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="work-description">
                                <div class="workdes-top">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h3>Work Description/ Specification/Tor/Boq</h3>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="<?php echo base_url() ?>public/job_file/<?php echo $v_job->work_description_file; ?>"
                                               target="_blank">View PDF</a>
                                        </div>
                                    </div>
                                </div>
                                <p><?php echo $v_job->work_description; ?></p>
                            </div>
                            <div class="work-description">
                                <div class="workdes-top">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h3>Qualification</h3>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="<?php echo base_url() ?>public/job_file/<?php echo $v_job->qualifications_file; ?>"
                                               target="_blank">View PDF</a>
                                        </div>
                                    </div>
                                </div>
                                <p><?php echo $v_job->qualifications; ?></p>

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
                                <p><?php echo $v_job->terms_condition; ?></p>

                            </div>


                        </div>

                    <?php } ?>
                </div>
                <!-- tab 2 -->

            </div>


        </div>
    </section>
</main>