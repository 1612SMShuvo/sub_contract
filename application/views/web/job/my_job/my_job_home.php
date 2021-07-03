
<main>
    <section class="publisher-area">
        <div class="container">
            <div class="publisher-menu mb-4">
                <ul>
                    <li><a  href="<?php echo base_url() ?>active_job_publiser/all_active_job_publiser">Active Job</a></li>
                    <li><a href="<?php echo base_url() ?>pending_job/all_pending_job">Pending Job</a></li>
                    <li><a class="active"  href="<?php echo base_url() ?>my_job/all_my_job">New Job</a></li>
                    <li><a href="<?php echo base_url() ?>job_post/create_job_post">Post New Job</a></li>
                </ul>
            </div>
            <div class="publisherjob-all">
                <!-- publisherjob-single -->
                <?php foreach ($my_job as $v_job) { ?>
                    <div class="publisherjob-single">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="publisherjob-title">
                                    <h4>Tender ID <?php echo $v_job->id; ?></h4><br>
                                    <h4><a href="<?php echo base_url() ?>my_job/my_job_details/<?php echo $v_job->id; ?>"><?php echo $v_job->job_title; ?></h4>
                                </div>
                                <div class="publisherjob-list">
                                    <a href="<?php echo base_url() ?>my_job/my_job_details/<?php echo $v_job->id; ?>">
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
                                            <li>Work Authority:<span><?php echo $v_job->work_authority_name; ?></span></li>
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
                                            </span>
                                            </li>
                                            <li>Job Category: <span><?php echo $v_job->category_name; ?></span></li>
                                            <li>Job Sub-Category: <span><?php echo $v_job->sub_category_name; ?></span></li>
                                            <li>Tender Caller: <span><?php echo $v_job->organization_name; ?></span></li>
                                            <li>Published in: <span><?php echo $v_job->publish_date; ?></span></li>
                                            <li>Closing date: <span><?php echo $v_job->submit_date; ?></span></li>
                                            <li>Need Invest Amount: <span><?php echo $v_job->investment_amount; ?>TK</span></li>
                                        </ul></a>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-5">
                                <div class="publisherjobr-list">
                                    <a href="<?php echo base_url() ?>my_job/my_job_details/<?php echo $v_job->id; ?>">
                                        <ul class="pb-4">
                                            <li>Work Status :  Short list</li>
                                        </ul>
                                        <ul>
                                            <li>Approach Budget <span><?php echo $v_job->approximate_budget; ?>TK</span></li>
                                            <li>Work Finish Date <span><?php echo $v_job->work_completion_date; ?></span></li>
                                            <li>Manpower <span><?php echo $v_job->manpower; ?></span></li>
                                        </ul></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</main>>