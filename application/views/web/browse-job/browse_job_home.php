<!-- <main class="findwork-area">
    <div class="container">
        <div class="findwork-category">
            <div class="findwork-catheadline">
            </div>
        </div>
        <div class="findwork-jobs">
            <div class="findwork-jobsearch">
                <form>
                    <input type="search" id="search_job" placeholder="Search fo Job">
                    <button><img src="<?php echo base_url() ?>web_assets/images/Search.png" alt="search"></button>
                </form>
            </div>
        </div>
    </div>
</main>
 -->
 <main>
<section class="newjobs-area">
        <div class="container">
 <br><br>
             <br><br>
             <center><h2>Jobs Feed</h2></center>
             <hr>
                <div class="findwork-alljob">
                    <div id="ajaxdata" class="row">
                        <?php
                        if ($all_jobs) {
                            foreach ($all_jobs as $v_all_job) { ?>
                                <div class="col-lg-4 col-md-4">
                                <div class="findwork-singlejob">
                                    <div class="singlejob-time">
                                        <div class="singlejob-ids">
                                            <h4>Tender ID <?php echo $v_all_job->id; ?></h4>
                                            <p><?php echo $v_all_job->date_and_time; ?></p>
                                        </div>
                                        <div class="singlejob-anchors">
                                            <a href="<?php echo base_url() ?>welcome/sign_in">Bidd</a>
                                            <a href="<?php echo base_url() ?>welcome/sign_in">Invest</a>
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
                                            <li>Job Sub-Category: <span><?php echo $v_all_job->sub_category_name; ?></span>
                                            </li>
                                            <li>Tender Caller: <span><?php echo $v_all_job->organization_name; ?></span>
                                            </li>
                                            <li>Published in: <span><?php echo $v_all_job->publish_date; ?></span></li>
                                            <li>Closing date: <span><?php echo $v_all_job->submit_date; ?></span></li>
                                            <li>Approximate Budget:
                                                <span><?php echo $v_all_job->approximate_budget; ?></span>
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
                                                    Verified</a></li> -->
                                            <li><a href="#"><img src="<?php echo base_url() ?>web_assets/images/bidder.png"
                                                                 alt="image">
                                                    <?php echo $bidder_count->total; ?>
                                                    Bider</a></li>
                                            <li><a href="#"><img
                                                        src="<?php echo base_url() ?>web_assets/images/investor.png"
                                                        alt="image"> <?php echo $investor_count->total; ?> Investor</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                </div>
                            <?php } ?>
                        <?php } else { ?>
                            <p>Sorry..!! There is no such jobs....</p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <input type="hidden" id="search_id">
</section>
</main>
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
                url: '<?php echo base_url(); ?>browse_job/browse_job_all',
                data: {sub_category_id: set_id},
                success: function (data) {
                    $("#ajaxdata").html(data);
                }
            });
        } else {
            $.post(base_url + "browse_job/browse_job_all", function (data) {
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
                url: '<?php echo base_url(); ?>browse_job/browse_job_all',
                data: {search_data: search_data},
                success: function (data) {
                    $("#ajaxdata").html(data);
                }
            });
        } else {
            $.post(base_url + "browse_job/browse_job_all/", function (data) {
                $("#ajaxdata").html(data);
            });
        }
        return false;
    }
</script>