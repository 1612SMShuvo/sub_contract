<main>
    <section class="publisher-area">
        <div class="container">
            <div class="publisher-menu mb-4">
                <ul>
                    <li><a class="active" href="">Active Job</a></li>
                    <li><a href="">Pending Work</a></li>
                    <li><a href="">All Work</a></li>
                </ul>
            </div>
            <div class="publisherjob-all investor-all">
                <!-- publisherjob-single -->
                <?php
                foreach ($my_invest as $v_my_invest)
                {?>
                    <div class="publisherjob-single">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="publisherjob-title">
                                    <h4>Tender ID <?php echo $v_my_invest->id; ?></h4><br>
                                    <h4><a href="<?php echo base_url() ?>view_investor_job/investor_job_details/<?php echo $v_my_invest->id; ?>"><?php echo $v_my_invest->job_title; ?></h4>
                                </div>
                                <div class="publisherjob-list">
                                    <a href="<?php echo base_url() ?>view_investor_job/investor_job_details/<?php echo $v_my_invest->id; ?>">
                                        <ul>
                                            <li>Work Type: <span>
                                                 <?php
                                                 if ($v_my_invest->work_type_bidder == 1) {
                                                     echo "Goods";
                                                 } else if ($v_my_invest->work_type_bidder == 2) {
                                                     echo "Service";
                                                 } else if ($v_my_invest->work_type_bidder == 3) {
                                                     echo "Work";
                                                 } else if ($v_my_invest->work_type_bidder == 4) {
                                                     echo "Others";
                                                 } ?>
                                            </span></li>
                                            <li>Work Authority:<span><?php echo $v_my_invest->work_authority_name; ?></span></li>
                                            <li>Department: <span>
                                                 <?php
                                                 if ($v_my_invest->work_category_id == 1) {
                                                     echo "Web Development";
                                                 } else if ($v_my_invest->work_category_id == 2) {
                                                     echo "Software Development";
                                                 } else if ($v_my_invest->work_category_id == 3) {
                                                     echo "App Development";
                                                 } else if ($v_my_invest->work_category_id == 4) {
                                                     echo "Others";
                                                 } ?>
                                            </span>
                                            </li>
                                            <li>Job Category: <span><?php echo $v_my_invest->category_name; ?></span></li>
                                            <li>Job Sub-Category: <span><?php echo $v_my_invest->sub_category_name; ?></span></li>
                                            <li>Tender Caller: <span><?php echo $v_my_invest->organization_name; ?></span></li>
                                            <li>Published in: <span><?php echo $v_my_invest->publish_date; ?></span></li>
                                            <li>Closing date: <span><?php echo $v_my_invest->submit_date; ?></span></li>
                                            <li>Need Invest Amount: <span><?php echo $v_my_invest->investment_amount; ?>TK</span></li>
                                        </ul></a>
                                </div>
                            </div>
                            <!--                        <div class="col-md-2"></div>-->
                            <div class="col-md-4">
                                <div class="publisherjobr-list">
                                    <ul class="pb-2">
                                        <li>Work Statas : 50% Complete</li>
                                        <li>Contract date <span>01,02,2021</span></li>
                                        <li>Work Finish Date <span><?php echo $v_my_invest->work_completion_date; ?></span></li>
                                        <li>Approve Invest<span><?php echo $v_my_invest->interested_investment; ?>TK</span></li>
                                    </ul>
                                    <ul class="pb-3">
                                        <li>Received Payment Date <span>Received Payment Amount</span></li>
                                        <li>05.04.2021 <span>40,000 TK</span></li>
                                        <li>05.04.2021 <span>40,000 TK</span></li>
                                    </ul>
                                    <ul>
                                        <li>Next Payment Date <span>Payment Amount</span></li>
                                        <li>05.06.2021 <span>60,000 TK</span></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- publisherjob-single -->
                <?php }?>
                <!-- pagination -->
                <div class="reqinvite-pagination">
                    <ul>
                        <li><a href="#"><img src="<?php echo base_url() ?>web_assets/images/left.png"></a></li>
                        <li><a href="#">1</a></li>
                        <li><a class="active" href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><img src="<?php echo base_url() ?>web_assets/images/right.png"></a></li>
                    </ul>
                    <p>Total 26 page</p>
                </div>



            </div>
        </div>
    </section>
</main>