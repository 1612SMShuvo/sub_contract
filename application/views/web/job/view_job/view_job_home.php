<main class="findwork-area">
    <div class="container">
        <div class="findwork-category">
            <!--<div class="findwork-catheadline">-->
            <!--    <h1>Job Feed</h1>-->
            <!--</div>-->
            <div class="findwork-allcat">
                <!--<div class="findwork-catheadline">-->
                <!--    <h1>Job Feed</h1>-->
                <!--</div>-->
                <div class="findwork-jobsearch mb-4">
                    <form>
                        <input type="search" id="search_job" onkeyup="search_all_job()" placeholder="Search fo Job">
                        <button><img src="<?php echo base_url() ?>web_assets/images/Search.png" alt="search"></button>
                    </form>
                </div>
                <aside class="sidebar">
                    <div id="leftside-navigation" class="nano">
                        <ul class="nano-content">
                            <?php
                            foreach ($all_category as $v_all_cat) { ?>
                                <li class="sub-menu">
                                    <a href="javascript:void(0);"><span><?php echo $v_all_cat->category_name; ?></span></i>
                                    </a>
                                    <ul>
                                        <?php
                                        $all_subcategory = $this->Job_view_model->all_sub_category($v_all_cat->id);
                                        foreach ($all_subcategory as $v_sub_category) {
                                            $id = $v_sub_category->id;
                                            ?>
                                            <li>
                                                <a href="#" onclick="search_content(<?php echo $v_sub_category->id ?>)"><?php echo $v_sub_category->sub_category_name; ?></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </aside>

            </div>
        </div>
        <div class="findwork-jobs">
            <!--<div class="findwork-jobsearch">-->
            <!--    <form>-->
            <!--        <input type="search" id="search_job" onkeyup="search_all_job()" placeholder="Search fo Job">-->
            <!--        <button><img src="<?php echo base_url() ?>web_assets/images/Search.png" alt="search"></button>-->
            <!--    </form>-->
            <!--</div>-->
            <div class="findwork-alljob">
                <div id="ajaxdata">
                    <?php
                    $i = 0;
                    foreach ($all_jobs as $v_all_job) {
                        ?>
                        <div class="findwork-singlejob">
                            <div class="singlejob-time">
                                <div class="singlejob-ids">
                                    <h4>Tender ID <?php echo $v_all_job->id; ?></h4>
                                    <p><?php echo $v_all_job->date_and_time; ?></p>
                                </div>
                                <div class="singlejob-anchors">
                                    <?php
                                    $user_id = $this->session->userdata("user_id");
                                    if($v_all_job->user_id != $user_id){
                                        if ($v_all_job->need_bidder == 1) { ?>
                                        <a href="<?php echo base_url() ?>job_details/view_job_details_for_bidder/<?php echo $v_all_job->id; ?>">Bidd</a>
                                    <?php } ?>
                                    <?php if ($v_all_job->need_investor == 1) { ?>
                                        <a href="<?php echo base_url() ?>job_details/view_job_details_for_investor/<?php echo $v_all_job->id; ?>">Invest</a>
                                    <?php } } else{ ?>
                                        <a href="<?php echo base_url() ?>pending_job/pending_job_details/<?php echo $v_all_job->id; ?>">Details</a>
                                    <?php }?>
                                </div>

                            </div>
                            <h4><a><?php echo $v_all_job->job_title; ?></a></h4>
                            <div class="singlejob-feature">
                                <ul>
                                    <li>Work Type: <span>
                                        <?php
                                        if ($v_all_job->work_type_bidder == 1) {
                                            echo "Goods";
                                        } else if ($v_all_job->work_type_bidder == 2) {
                                            echo "Service";
                                        } else if ($v_all_job->work_type_bidder == 3) {
                                            echo "Work";
                                        } else if ($v_all_job->work_type_bidder == 4) {
                                            echo "Others";
                                        } ?>
                                    </span>
                                    </li>
                                    <li>Job Category: <span><?php echo $v_all_job->category_name; ?></span></li>
                                    <li>Job Sub-Category: <span><?php echo $v_all_job->sub_category_name; ?></span></li>
                                    <li>Tender Caller: <span><?php echo $v_all_job->organization_name; ?></span></li>
                                    <li>Published in: <span><?php echo $v_all_job->publish_date; ?></span></li>
                                    <li>Closing date: <span><?php echo $v_all_job->submit_date; ?></span></li>
                                    <li>Approximate Budget: <span><?php echo $v_all_job->approximate_budget; ?></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="singlejob-tags">
                                <ul>
                                    <?php
                                    $legal = $this->Job_view_model->select_legal_information($v_all_job->id);
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
                                $bidder_count = $this->Job_view_model->select_all_job_apply_bidder($v_all_job->id);
                                $investor_count = $this->Job_view_model->select_all_job_apply_investor($v_all_job->id);
                                ?>
                                <ul>
                                    <!-- <li><a><img src="<?php echo base_url() ?>web_assets/images/pay.png"
                                                alt="image">Payment
                                            Verified
                                        </a></li> -->
                                    <li><img src="<?php echo base_url() ?>web_assets/images/bidder.png"
                                             alt="image">
                                        <?php echo $bidder_count->total; ?>
                                        Bider
                                    </li>
                                    <li></li>
                                    <li><img src="<?php echo base_url() ?>web_assets/images/investor.png"
                                             alt="image"> <?php echo $investor_count->total; ?> Investor</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>
                    <?php echo $links; ?>
                </div>
            </div>
        </div>


        <?php
        $result1 = $this->Main_model->getValue("user_id='$user_id'", 'basic', '*', "id desc");
        $result2 = $this->Main_model->getValue("user_id='$user_id'", 'management_team', '*', "id desc");
        $result3 = $this->Main_model->getValue("user_id='$user_id'", 'experience', '*', "id desc");
        $result4 = $this->Main_model->getValue("user_id='$user_id'", 'legal', '*', "id desc");
        $result5 = $this->Main_model->getValue("user_id='$user_id'", 'financial', '*', "id desc");
        $result6 = $this->Main_model->getValue("user_id='$user_id'", 'award_certification', '*', "id desc");
        $result7 = $this->Main_model->getValue("user_id='$user_id'", 'portfolio_link', '*', "id desc");
        $result8 = $this->Main_model->getValue("user_id='$user_id'", 'nominee', '*', "id desc");
        $result9 = $this->Main_model->getValue("user_id='$user_id'", 'official_contract', '*', "id desc");
        ?>
        <div class="findwork-profile">
            <!--<div class="mobilehide" style="width: 100%; height: 105px;"></div>-->
            <div class="findwork-personalpro mb-5">
                <div class="personalprofile pb-2">
                    <?php
                    foreach ($result1 as $v_picture) { ?>
                        <div class="personalpro-img">
                            <?php if ($v_picture->company_logo) { ?>
                                <img src="<?php echo base_url() ?>public/user_profile/<?php echo $v_picture->company_logo; ?>"
                                    alt="image" style="border-radius:50%;">
                            <?php } else { ?>
                                <img src="<?php echo base_url() ?>public/user_profile/demo_picture.jpg" alt="image">
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <div class="personalpro-desc">
                        <h4>My Profile</h4>
                    </div>
                    <div class="personalpro-edit">
                        <a href="<?php echo base_url() ?>frontend/profile_all_details">
                            <img src="<?php echo base_url() ?>web_assets/images/edit.png" alt="image"></a>
                    </div>
                    <!--                    <div class="personalpros-edit">-->
                    <!--                        <a href="-->
                    <?php //echo base_url() ?><!--frontend/profile_all_details" <i class="fas fa-edit"></i></a>-->
                    <!--                    </div>-->
                </div>
                <div class="profile-completed">
                    <?php
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

                    $all_bid_job = $this->Job_view_model->select_all_bidd_job($user_id);
                    $all_complete_job = $this->Job_view_model->select_all_complete_job($user_id);
                    $all_complete_bid = $this->Job_view_model->select_all_published_job($user_id);
                    ?>
                    <ul>
                        <li>Published Job: <span><?php echo $all_published_job->total; ?></span></li>
                        <li>Invest Job: <span><?php echo $all_invest_job->total; ?><span></span></li>
                        <li>Bidd Job: <span><?php echo $all_bid_job->total; ?></span></li>
                        <li>Complete Project: <span><?php echo $all_complete_job->total; ?></span></li>
                    </ul>
                </div>
                <!-- <div class="profile-rating">
                    <ul>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                    </ul>
                </div> -->
            </div>


            <div class="upgrade-subscription">
                <h4>Upgrade Your <br>Subscription</h4>
                <a href="<?php echo base_url() ?>subscription_view/subscription_all_show">Daily Subscription</a>
                <a href="<?php echo base_url() ?>subscription_view/subscription_all_show">Monthly Subscription</a>
                <a href="<?php echo base_url() ?>subscription_view/subscription_all_show">Yearly Subscription</a>
            </div>

        </div>
    </div>
</main>
<input type="hidden" id="search_id">
<script>
    $("#leftside-navigation .sub-menu > a").click(function (e) {
        $("#leftside-navigation ul ul").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(),
            e.stopPropagation()
    })
</script>


<script>
    $(document).ready(function () {
        $("#ajax_pagingsearc a").attr('onclick', 'return main_page_pagination($(this));');
    });
</script>

<script>
    function main_page_pagination($this) {
        var url = $this.attr("href");
        var sub_category_id = $('#search_id').val();
        var search_data = $('#search_job').val();
        if (url != '') {
            $.ajax({
                type: "POST",
                url: url,
                data: {sub_category_id: sub_category_id, search_data: search_data},
                success: function (msg) {
                    $("#ajaxdata").html(msg);
                }
            });
        }
        return false;
    }
</script>

<script>
    function search_content($id) {
        var base_url = "<?php echo base_url(); ?>";
        var set_id = $id;
        $('#search_id').val(set_id);
        if ($.trim(set_id) != "") {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>job_view/all_job',
                data: {sub_category_id: set_id},
                success: function (data) {
                    $("#ajaxdata").html(data);
                }
            });
        } else {
            $.post(base_url + "job_view/all_job/", function (data) {
                $("#ajaxdata").html(data);
            });
        }
        return false;
    }
</script>

<script>
    function search_all_job() {
        var base_url = "<?php echo base_url(); ?>";
        var search_data = $('#search_job').val();
        if ($.trim(search_data) != "") {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>job_view/all_job',
                data: {search_data: search_data},
                success: function (data) {
                    $("#ajaxdata").html(data);
                }
            });
        } else {
            $.post(base_url + "job_view/all_job/", function (data) {
                $("#ajaxdata").html(data);
            });
        }
        return false;
    }
</script>


