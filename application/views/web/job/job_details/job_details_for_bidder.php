<main class="body-padding">
    <section class="jobdetails-area">
        <?php if ($bidder == 0) { ?>
            <div class="container">
                <div class="row">
                    <div class="container">
                        <div class="bs-example">
                            <div class="alert alert-warning alert-dismissible fade show">
                                <h4 class="alert-heading"><i class="fas fa-exclamation-triangle"></i> Warning!</h4>
                                <hr>
                                <p>Please Complete your Profile Then Bidding any Job.......! <a
                                        href="<?php echo base_url() ?>frontend">Create a specialized profile.</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="jobdetails-left">
                            <div class="findwork-singlejob">

                                <div class="singlejob-time">
                                    <div class="singlejob-ids">
                                        <h4>Tender ID:<?php echo $view_job_details->id; ?></h4>
                                        <p><?php echo $view_job_details->date_and_time; ?></p>
                                    </div>
                                    <div class="singlejob-anchors">

                                    </div>
                                </div>
                                <h4><a href="#"><?php echo $view_job_details->job_title; ?></a></h4>
                                <div class="singlejob-feature">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <ul>

                                                <li>Work Type:
                                                    <span>
                                                        <?php
                                                        if ($view_job_details->work_type_bidder == 1) {
                                                            echo "Goods";
                                                        } else if ($view_job_details->work_type_bidder == 2) {
                                                            echo "Service";
                                                        } else if ($view_job_details->work_type_bidder == 3) {
                                                            echo "Work";
                                                        } else if ($view_job_details->work_type_bidder == 4) {
                                                            echo "Others";
                                                        } ?>
                                                    </span>
                                                </li>
                                                <li>Work Authority:
                                                    <span><?php echo $view_job_details->work_authority_name; ?></span>
                                                </li>
                                                    <span>
                                                         <?php
                                                         if ($view_job_details->work_category_id == 1) {
                                                             echo "Web Development";
                                                         } else if ($view_job_details->work_category_id == 2) {
                                                             echo "Software Development";
                                                         } else if ($view_job_details->work_category_id == 3) {
                                                             echo "App Development";
                                                         } else if ($view_job_details->work_category_id == 4) {
                                                             echo "Others";
                                                         } ?>

                                                    </span>
                                                </li>

                                                <li>Job Category:
                                                    <span><?php echo $view_job_details->category_name; ?></span></li>
                                                <li>Job Sub-Category:
                                                    <span><?php echo $view_job_details->sub_category_name; ?></span>
                                                </li>
                                                <li>Tender Caller:
                                                    <span><?php echo $view_job_details->organization_name; ?></span>
                                                </li>
                                                <li>Published in:
                                                    <span><?php echo $view_job_details->publish_date; ?></span></li>
                                                <li>Closing date:
                                                    <span><?php echo $view_job_details->submit_date; ?></span></li>
                                                <li>Approximate Budget:
                                                    <span><?php echo $view_job_details->approximate_budget; ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 texts-right">
                                            <p>Budget</p>
                                            <h3><?php echo $view_job_details->approximate_budget; ?></h3>

                                        </div>
                                    </div>
                                </div>
                                <div class="singlejob-tags">
                                    <ul>
                                        <?php
                                        $legal = $this->Job_view_model->select_legal_information($view_job_details->id);
                                        ?>
                                        <?php if ($legal->tin_bidder) { ?>
                                            <li><a><?php echo $legal->tin_bidder; ?></a></li>
                                        <?php } ?>
                                        <?php if ($legal->bin_bidder) { ?>
                                            <li><?php echo $legal->bin_bidder; ?></li>
                                        <?php } ?>
                                        <?php if ($legal->nid_bidder) { ?>
                                            <li><?php echo $legal->nid_bidder; ?></li>
                                        <?php } ?>
                                        <?php if ($legal->taxreturn_bidder) { ?>
                                            <li><?php echo $legal->taxreturn_bidder; ?></li>
                                        <?php } ?>
                                        <?php if ($legal->audit_report_bidder == 1) { ?>
                                            <li><?php echo "Audit Report"; ?></li>
                                        <?php } ?>
                                        <?php if ($legal->similar_work_bidder == 1) { ?>
                                            <li><?php echo "Similar Work"; ?></li>
                                        <?php } ?>
                                        <?php if ($legal->general_work_bidder == 1) { ?>
                                            <li><?php echo "General Work"; ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="singlejob-pay">
                                    <?php
                                    $bidder_count = $this->Job_details_model->select_all_bidder($view_job_details->id);
                                    $investor_count = $this->Job_details_model->select_all_investor($view_job_details->id);
                                    {
                                        ?>
                                        <ul>

                                            <li><a><img src="<?php echo base_url() ?>web_assets/images/pay.png"
                                                     alt="image">Payment Verified
                                                </a></li>

                                            <li><img src="<?php echo base_url() ?>web_assets/images/bidder.png"
                                                     alt="image"><?php echo $bidder_count->total; ?> Bider
                                            </li>
                                            <li><img src="<?php echo base_url() ?>web_assets/images/investor.png"
                                                     alt="image"><?php echo $investor_count->total; ?> Investor
                                            </li>
                                        </ul>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="work-description">
                                <div class="workdes-top">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h3>Work Description/ Specification/Tor/Boq</h3>
                                        </div>
                                        <div class="col-sm-6">

                                            <a href="#">View PDF</a>
                                        </div>
                                    </div>
                                </div>
                                <p><?php echo $view_job_details->work_description; ?></p>
                            </div>
                            <div class="work-description">
                                <div class="workdes-top">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h3>Qualification</h3>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="#">View PDF</a>
                                        </div>
                                    </div>
                                </div>
                                <p><?php echo $view_job_details->qualifications; ?></p>
                            </div>
                            <div class="work-description">
                                <div class="workdes-top">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h3>Terms & Conditions</h3>
                                        </div>
                                        <div class="col-sm-6">

                                        </div>
                                    </div>
                                </div>
                                <p><?php echo $view_job_details->terms_condition; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <div class="container">
                <?php
                if ($view_job_details) {
                    ?>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="jobdetails-left">
                                <div class="findwork-singlejob">

                                    <div class="singlejob-time">
                                        <div class="singlejob-ids">
                                            <h4>Tender ID:<?php echo $view_job_details->id; ?></h4>
                                            <p><?php echo $view_job_details->date_and_time; ?></p>
                                        </div>
                                        <div class="singlejob-anchors">

                                        </div>
                                    </div>
                                    <h4><a href="#"><?php echo $view_job_details->job_title; ?></a></h4>
                                    <div class="singlejob-feature">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <ul>

                                                    <li>Work Type:
                                                        <span>
                                                            <?php
                                                            if ($view_job_details->work_type_bidder == 1) {
                                                                echo "Goods";
                                                            } else if ($view_job_details->work_type_bidder == 2) {
                                                                echo "Service";
                                                            } else if ($view_job_details->work_type_bidder == 3) {
                                                                echo "Work";
                                                            } else if ($view_job_details->work_type_bidder == 4) {
                                                                echo "Others";
                                                            } ?>
                                                        </span>
                                                    </li>

                                                    <li>Work Authority:
                                                        <span><?php echo $view_job_details->work_authority_name; ?></span>
                                                    </li>
                                                    
                                                    <li>Job Category:
                                                        <span><?php echo $view_job_details->category_name; ?></span>
                                                    </li>
                                                    <li>Job Sub-Category:
                                                        <span><?php echo $view_job_details->sub_category_name; ?></span>
                                                    </li>
                                                    <li>Tender Caller:
                                                        <span><?php echo $view_job_details->organization_name; ?></span>
                                                    </li>
                                                    <li>Published in:
                                                        <span><?php echo $view_job_details->publish_date; ?></span></li>
                                                    <li>Closing date:
                                                        <span><?php echo $view_job_details->submit_date; ?></span></li>
                                                    <li>Approximate Budget:
                                                        <span><?php echo $view_job_details->approximate_budget; ?></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 texts-right">
                                                <p>Budget</p>
                                                <h3><?php echo $view_job_details->approximate_budget; ?></h3>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="singlejob-tags">
                                        <ul>
                                            <?php
                                            $legal = $this->Job_view_model->select_legal_information($view_job_details->id);
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
                                        $bidder_count = $this->Job_details_model->select_all_bidder($view_job_details->id);
                                        $investor_count = $this->Job_details_model->select_all_investor($view_job_details->id);
                                        {
                                            ?>
                                            <ul>

                                                <li><a><img src="<?php echo base_url() ?>web_assets/images/pay.png"
                                                         alt="image">Payment Verified</a>
                                                </li>
                                                <li><a><img src="<?php echo base_url() ?>web_assets/images/bidder.png"
                                                         alt="image"><?php echo $bidder_count->total; ?> Bider</a>
                                                </li>
                                                <li><a><img src="<?php echo base_url() ?>web_assets/images/investor.png"
                                                         alt="image"><?php echo $investor_count->total; ?> Investor</a>
                                                </li>
                                            </ul>
                                        <?php } ?>
                                    </div>
                                </div>

                                <div class="work-description">
                                    <div class="workdes-top">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3>Work Description/ Specification/Tor/Boq</h3>
                                            </div>
                                            <div class="col-sm-6">

                                                <a href="<?php echo base_url() ?>public/job_file/<?php echo $view_job_details->work_description_file; ?>"
                                                   target="_blank">View PDF</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p><?php echo $view_job_details->work_description; ?></p>
                                </div>
                                <div class="work-description">
                                    <div class="workdes-top">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3>Qualification</h3>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="<?php echo base_url() ?>public/job_file/<?php echo $view_job_details->qualifications_file; ?>"
                                                   target="_blank">View PDF</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p><?php echo $view_job_details->qualifications; ?></p>
                                </div>
                                <div class="work-description">
                                    <div class="workdes-top">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h3>Terms & Conditions</h3>
                                            </div>
                                            <div class="col-sm-6">

                                            </div>
                                        </div>
                                    </div>
                                    <p><?php echo $view_job_details->terms_condition; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <?php if ($status != 1) { ?>
                                <a href="<?php echo base_url() ?>apply_for_bidder/apply_bidder/<?php echo $view_job_details->id; ?>"
                                   class="btn btn-success apply_button" style="background-color:#373F45; color:white; border-radius:15px;">Proposal Submit
                                   </a>
                            <?php } else { ?>
                                <a href="<?php echo base_url() ?>welcome/sign_up"
                                   class="btn apply_button" style="background-color:#004793; color:white; border-radius:15px;">Proposal Submit
                                    </a>
                            <?php } ?>
                            <div class="jobdetails-right">
                                <div class="findwork-personalpro mb-1" style="padding:30px 0px;">
                                    <div class="personalprofile pb-2">
                                        <div class="personalpro-img">
                                            <img
                                                src="<?php echo base_url() ?>public/user_profile/<?php echo $view_job_details->company_logo; ?>"
                                                alt="image">
                                        </div>
                                        <div class="personalpro-desc">
                                            <h4><?php echo $view_job_details->organization_name; ?></h4>
                                        </div>
                                        <div class="personalpro-edit">
                                        </div>
                                    </div>
                                    <div class="profile-completed">
                                        <?php
                                        $user_id = $this->session->userdata("user_id");
                                        $result1 = $this->Main_model->getValue("user_id='$user_id'", 'basic', '*', "id desc");
                                        $result2 = $this->Main_model->getValue("user_id='$user_id'", 'management_team', '*', "id desc");
                                        $result3 = $this->Main_model->getValue("user_id='$user_id'", 'experience', '*', "id desc");
                                        $result4 = $this->Main_model->getValue("user_id='$user_id'", 'legal', '*', "id desc");
                                        $result5 = $this->Main_model->getValue("user_id='$user_id'", 'financial', '*', "id desc");
                                        $result6 = $this->Main_model->getValue("user_id='$user_id'", 'award_certification', '*', "id desc");
                                        $result7 = $this->Main_model->getValue("user_id='$user_id'", 'portfolio_link', '*', "id desc");
                                        $result8 = $this->Main_model->getValue("user_id='$user_id'", 'nominee', '*', "id desc");
                                        $result9 = $this->Main_model->getValue("user_id='$user_id'", 'official_contract', '*', "id desc");
                                        if ($result1) {
                                            $set_result1 = 11;
                                        } else {
                                            $set_result1 = 0;
                                        }
                                        if ($result2) {
                                            $set_result2 = 11;
                                        } else {
                                            $set_result2 = 0;
                                        }
                                        if ($result3) {
                                            $set_result3 = 11;
                                        } else {
                                            $set_result3 = 0;
                                        }
                                        if ($result4) {
                                            $set_result4 = 11;
                                        } else {
                                            $set_result4 = 0;
                                        }
                                        if ($result5) {
                                            $set_result5 = 11;
                                        } else {
                                            $set_result5 = 0;
                                        }
                                        if ($result6) {
                                            $set_result6 = 11;
                                        } else {
                                            $set_result6 = 0;
                                        }
                                        if ($result7) {
                                            $set_result7 = 11;
                                        } else {
                                            $set_result7 = 0;
                                        }
                                        if ($result8) {
                                            $set_result8 = 11;
                                        } else {
                                            $set_result8 = 0;
                                        }
                                        if ($result9) {
                                            $set_result9 = 12;
                                        } else {
                                            $set_result9 = 0;
                                        }
                                        $progress_status = round($set_result1 + $set_result2 + $set_result3 + $set_result4 + $set_result5 + $set_result6 + $set_result7 + $set_result8 + $set_result9);
                                        ?>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar"
                                                 style=" background-color:#373F45;width: <?php echo $progress_status ?>%;"
                                                 aria-valuenow="<?php echo $progress_status; ?>" aria-valuemin="0"
                                                 aria-valuemax="100"><?php echo $progress_status; ?>%
                                            </div>
                                        </div>
                                        <p> <?php
                                            $incomplete_percent = 100 - $progress_status;
                                            if ($incomplete_percent > 0) {
                                                echo $incomplete_percent;
                                                ?>
                                                % incomplete <a href="<?php echo base_url() ?>frontend/profile_all_details">*Please Upgrade
                                                    your
                                                    Profile</a>
                                            <?php } ?>
                                        </p>
                                    </div>
                                    <div class="profile-job">
                                        <?php
                                        $all_published_job = $this->Job_view_model->select_all_published_job($user_id);
                                        $all_invest_job = $this->Job_view_model->select_all_invest_job($user_id);
                                        ?>
                                        <ul>
                                            <li>Published Job <span><?php echo $all_published_job->total; ?></span></li>
                                            <li>Invest Job <span><?php echo $all_invest_job->total; ?><span></span></li>
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
                                <div class="findwork-personalpro mb-1">
                                    <div class="profile-job latestprofile-job">
                                        <ul>
                                            <li>Published Date
                                                <span><?php echo $view_job_details->publish_date; ?></span></li>
                                            <li>Last Date of Submission
                                                <span><?php echo $view_job_details->submit_date; ?></span></li>
                                            <li>Priority of Work <span>
                                                    <?php
                                                    if ($view_job_details->priority_of_works == 1) {
                                                        echo "Urgent Work";
                                                    } else if ($view_job_details->priority_of_works == 2) {
                                                        echo "Very Urgent Work";
                                                    } else if ($view_job_details->priority_of_works == 3) {
                                                        echo "Regular Work";
                                                    }
                                                    ?>
                                                </span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="findwork-personalpro mb-1">
                                    <div class="profile-joblink">
                                        <p>Job Link</p>
                                        <input type="text" id="myInput"
                                               value="<?php echo base_url() ?>job_details/view_job_details_for_bidder/<?php echo $job_id; ?>/1">
                                        <a href="#" onclick="myFunction()">Copy Link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </section>
</main>
<script>
    function myFunction() {
        var copyText = document.getElementById("myInput");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");
    }
</script>

<!---->
