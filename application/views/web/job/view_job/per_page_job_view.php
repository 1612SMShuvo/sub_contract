<div id="ajaxdata">
    <?php
    $i = 0;
    if ($all_jobs) {
        foreach ($all_jobs as $v_all_job) { ?>
            <div class="findwork-singlejob">
                <div class="singlejob-time">
                    <div class="singlejob-ids">
                        <h4>Tender ID <?php echo $v_all_job->id; ?></h4>
                        <p><?php echo $v_all_job->date_and_time; ?></p>
                    </div>
                    <div class="singlejob-anchors">
                        <?php if ($v_all_job->need_bidder == 1) { ?>
                            <a href="<?php echo base_url() ?>job_details/view_job_details_for_bidder/<?php echo $v_all_job->id; ?>">Bidd</a>
                        <?php } ?>
                        <?php if ($v_all_job->need_investor == 1) { ?>
                            <a href="<?php echo base_url() ?>job_details/view_job_details_for_investor/<?php echo $v_all_job->id; ?>">Invest</a>
                        <?php } ?>
                    </div>
                </div>
                <h4><a href="#"><?php echo $v_all_job->job_title; ?></a></h4>
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
                            <li><a ><?php echo $legal->tin_bidder; ?></a></li>
                        <?php } ?>
                        <?php if ($legal->bin_bidder) { ?>
                            <li><a ><?php echo $legal->bin_bidder; ?></a></li>
                        <?php } ?>
                        <?php if ($legal->nid_bidder) { ?>
                            <li><a ><?php echo $legal->nid_bidder; ?></a></li>
                        <?php } ?>
                        <?php if ($legal->taxreturn_bidder) { ?>
                            <li><a ><?php echo $legal->taxreturn_bidder; ?></a></li>
                        <?php } ?>
                        <?php if ($legal->audit_report_bidder == 1) { ?>
                            <li><a ><?php echo "Audit Report"; ?></a></li>
                        <?php } ?>
                        <?php if ($legal->similar_work_bidder == 1) { ?>
                            <li><a ><?php echo "Similar Work"; ?></a></li>
                        <?php } ?>
                        <?php if ($legal->general_work_bidder == 1) { ?>
                            <li><a ><?php echo "General Work"; ?></a></li>
                        <?php } ?>

                    </ul>
                </div>
                <div class="singlejob-pay">
                    <?php
                    $bidder_count = $this->Job_view_model->select_all_job_apply_bidder($v_all_job->id);
                    $investor_count = $this->Job_view_model->select_all_job_apply_investor($v_all_job->id);
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
            </div>
        <?php } ?>
        <?php echo $links; ?>
    <?php } else { ?>
        <p style="text-align: center;">No data found</p>
    <?php } ?>
</div>
<script>
    $(document).ready(function () {
        $("#ajax_pagingsearc a").attr('onclick', 'return main_page_pagination($(this));');
    });
</script>