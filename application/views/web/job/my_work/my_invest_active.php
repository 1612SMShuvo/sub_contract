<main>
    <section class="publisher-area">
        <div class="container">
            <div class="publisher-menu mb-4">
                <ul>
                    <li><a class="active" href="<?php echo base_url() ?>my_work/all_active_invest_work/">Active Job</a></li>
                    <li><a href="<?php echo base_url() ?>my_work/my_invest_pending/">Pending Work</a></li>
                    <li><a href="<?php echo base_url() ?>my_work/all_invest_work/">All Work</a></li>
                </ul>
            </div>
            <div class="publisherjob-all investor-all">
                <!-- publisherjob-single -->
                <?php
                foreach ($my_invest as $v_my_bid)
                {?>
                    <div class="publisherjob-single">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="publisherjob-title">
                                    <h4>Tender ID <?php echo $v_my_bid->id; ?></h4><br>
                                    <h4><a href="<?php echo base_url() ?>my_work/my_invest_details/<?php echo $v_my_bid->id; ?>"><?php echo $v_my_bid->job_title; ?></h4>
                                </div>
                                <div class="publisherjob-list">
                                    <a href="<?php echo base_url() ?>my_work/my_invest_details/<?php echo $v_my_bid->id; ?>">
                                        <ul>
                                            <li>Work Type: <span>
                                                 <?php
                                                 if ($v_my_bid->work_type_bidder == 1) {
                                                     echo "Goods";
                                                 } else if ($v_my_bid->work_type_bidder == 2) {
                                                     echo "Service";
                                                 } else if ($v_my_bid->work_type_bidder == 3) {
                                                     echo "Work";
                                                 } else if ($v_my_bid->work_type_bidder == 4) {
                                                     echo "Others";
                                                 } ?>
                                            </span></li>
                                            <li>Work Authority:<span><?php echo $v_my_bid->work_authority_name; ?></span></li>
                                            <li>Department: <span>
                                                 <?php
                                                 if ($v_my_bid->work_category_id == 1) {
                                                     echo "Web Development";
                                                 } else if ($v_my_bid->work_category_id == 2) {
                                                     echo "Software Development";
                                                 } else if ($v_my_bid->work_category_id == 3) {
                                                     echo "App Development";
                                                 } else if ($v_my_bid->work_category_id == 4) {
                                                     echo "Others";
                                                 } ?>
                                            </span>
                                            </li>
                                            <li>Job Category: <span><?php echo $v_my_bid->category_name; ?></span></li>
                                            <li>Job Sub-Category: <span><?php echo $v_my_bid->sub_category_name; ?></span></li>
                                            <li>Tender Caller: <span><?php echo $v_my_bid->organization_name; ?></span></li>
                                            <li>Published in: <span><?php echo $v_my_bid->publish_date; ?></span></li>
                                            <li>Closing date: <span><?php echo $v_my_bid->submit_date; ?></span></li>
                                            <li>Approximate Budget: <span><?php echo $v_my_bid->approximate_budget; ?>TK</span></li>
                                        </ul></a>
                                </div>
                            </div>
                            <!--                        <div class="col-md-2"></div>-->
                            <div class="col-md-6">
                                <div class="publisherjobr-list">
                                    <ul class="pb-2">
                                        <li>Contract date <span>01,02,2021</span></li>
                                        <li>Work Finish Date <span><?php echo $v_my_bid->work_completion_date; ?></span></li>
                                        <li>Approve Budget <span><?php echo $v_my_bid->interested_investment; ?> TK</span></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- publisherjob-single -->
                <?php }?>
                <!-- pagination -->
            </div>
        </div>
    </section>
</main>