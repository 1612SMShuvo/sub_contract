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
                            aria-selected="false">Agreement
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-proposal-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-proposal" type="button" role="tab" aria-controls="pills-proposal"
                            aria-selected="false">Proposal
                    </button>
                </li>

            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <?php
                    foreach ($bidder_pending_job as $v_jobs) { ?>
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
                            <br>
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

                        <div class="imbidder-single">


                            <div class="milestone pt-4">

                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Installment</th>
                                        <th>Agreement Money</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($payment_term as $v_payment_term) { ?>

                                        <tr>
                                            <td><?php echo $v_payment_term->payment_date; ?></td>
                                            <td><?php echo $v_payment_term->work_description; ?></td>
                                            <td><?php echo $v_payment_term->amount; ?></td>

                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>

                                <a href="#" class="btn btn-success" onclick="job_active(<?php echo $post_id; ?>)">Approval</a>
                                <a href="#" class="btn btn-danger" onclick="job_inactive(<?php echo $post_id; ?>)">Decline</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-proposal" role="tabpanel" aria-labelledby="pills-proposal-tab">
                    <div class="imbidder-all">
                        <!-- imbidder-single -->
                        <div class="imbidder-single">
                            <div class="milestone pt-4">
                                <div class="container">
                                    <div class="row">
                                        <?php
                                        foreach ($proposal_details as $v_proposal_details) {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="reqinvite-left">
                                                    <div class="reqinvite-leftsingle">
                                                        <div class="reqinvite-leftsingle-top">

                                                            <div>
                                                                <img
                                                                    src="<?php echo base_url() ?>public/user_profile/<?php echo $v_proposal_details->company_logo ?>"
                                                                    alt="image">
                                                            </div>
                                                            <div>
                                                                <h4><?php echo $v_proposal_details->organization_name ?></h4>
                                                                <p><?php echo $v_proposal_details->office_address ?>    </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="reqinvite-leftsingle pt-3">
                                                        <h5>Legal</h5>
                                                        <ul>
                                                            <li>TIN <span><?php echo $v_proposal_details->tin ?></span>
                                                            </li>
                                                            <li>BIN <span><?php echo $v_proposal_details->bin ?></span>
                                                            </li>
                                                            <li>NID <span><?php echo $v_proposal_details->nid_card ?></span>
                                                            </li>
                                                            <li>Works Experience
                                                                <span><?php echo $v_proposal_details->years_of_experiences ?></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="reqinvite-right">
                                                    <div class="reqinvite-rightsingle">
                                                        <div class="reqinvite-righttop">
                                                            <div class="reqinvite-righttop-left">
                                                                <h4>Cover Latter for this Project</h4>
                                                            </div>
                                                            <div class="reqinvite-righttop-right">
                                                                <p>Budget <span
                                                                        class="ml-20"><?php echo $v_proposal_details->approximate_budget ?></span>
                                                                </p>
                                                                <p>Quotation Price <span
                                                                        class="ml-20"><?php echo $v_proposal_details->quotation_price_for_bidder ?></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p><?php echo $v_proposal_details->cover_letter ?></p>
                                                    </div>

                                                    <div class="reqinvite-rightsingle pt-4">
                                                        <h4 class="pb-4">Specification</h4>
                                                        <p><?php echo $v_proposal_details->specification ?></p>
                                                        <ul class="legal">
                                                            <li><a href="<?php echo base_url()?>public/user_profile/<?php echo $v_proposal_details->specification_file ?>">
                                                                    <img src="<?php echo base_url() ?>public/user_profile/pdf45.png ?>"
                                                                         style="width:100px; height:100px;">
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div class="reqinvite-rightsingle pt-4">
                                                        <h4 class="pb-4">Work Process</h4>
                                                        <p><?php echo $v_proposal_details->work_process ?></p>
                                                        <ul class="legal">
                                                            <li><a href="<?php echo base_url()?>public/user_profile/<?php echo $v_proposal_details->work_process_file ?>">
                                                                    <img src="<?php echo base_url() ?>public/user_profile/pdf45.png ?>"
                                                                         style="width:100px; height:100px;">
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div class="reqinvite-rightsingle pt-4">
                                                        <h4 class="pb-4">Budget</h4>
                                                        <p><?php echo $v_proposal_details->budget ?></p>
                                                        <ul class="legal">
                                                            <li><a href="<?php echo base_url()?>public/user_profile/<?php echo $v_proposal_details->budget_file ?>">
                                                                    <img src="<?php echo base_url() ?>public/user_profile/pdf45.png ?>"
                                                                         style="width:100px; height:100px;">
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                    <div class="reqinvite-rightsingle pt-4">
                                                        <h4 class="pb-4">Manpower</h4>
                                                        <p><?php echo $v_proposal_details->manpower ?></p></p>
                                                        <ul class="legal">
                                                            <li><a href="<?php echo base_url()?>public/user_profile/<?php echo $v_proposal_details->manpower_file ?>">
                                                                    <img src="<?php echo base_url() ?>public/user_profile/pdf45.png ?>"
                                                                         style="width:100px; height:100px;">
                                                                </a>
                                                            </li>

                                                        </ul>

                                                    </div>

                                                    <div class="reqinvite-rightsingle pt-4">

                                                        <h4 class="pb-4">Catalog</h4>
                                                        <p></p>
                                                        <ul class="legal">
                                                            <?php
                                                            $get_file = $this->View_profile_publisher_model->select_all_file($v_proposal_details->id);
                                                            foreach ($get_file as $v_file) {
                                                                ?>
                                                                <li>
                                                                    <a href="<?php echo base_url() ?>public/user_profile/<?php echo $v_file->catalog; ?>"
                                                                       target="_blank">
                                                                        <img src="<?php echo base_url() ?>public/user_profile/pdf45.png ?>"
                                                                             style="width:100px; height:100px;">

                                                                    </a>
                                                                </li>
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                    <div class="reqinvite-rightsingle pt-4">
                                                        <h4 class="pb-4">Submit Your Work Schedule</h4>
                                                        <table class="table table-striped table-bordered">
                                                            <thead>

                                                            <tr>
                                                                <th>Submit Your Work Schedule</th>
                                                                <th>Time</th>

                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            <?php
                                                            $work_schedule = $this->View_profile_publisher_model->select_all_work_schedule($v_proposal_details->id);
                                                            foreach ($work_schedule as $v_schedule) {
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $v_schedule->work_description ?></td>
                                                                    <td><?php echo $v_schedule->time ?></td>
                                                                </tr>
                                                            <?php }?>
                                                            </tbody>

                                                        </table>
                                                    </div>


                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<script>
    function job_active($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>my_work/bidder_active/' + $id,
            success: function (result) {
                if (result) {
                    window.setTimeout(function () {
                        window.location.href = "<?php echo base_url()?>my_work/my_work_pending_details/<?php echo $post_id;?>";
                    }, 2000);
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
    function job_inactive($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>my_work/bidder_inactive/' + $id,
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
