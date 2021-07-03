<main class="body-padding">
    <section class="requestinvite-area">
        <div class="container">
            <div class="row">
                <?php
                $i = 0;
                foreach ($profile_details_publisher as $v_profile_details)
                    $i++;
                {
                    ?>
                    <div class="col-md-4">
                        <div class="reqinvite-left">
                            <div class="reqinvite-leftsingle">
                                <div class="reqinvite-leftsingle-top">
                                    <div>
                                        <img
                                            src="<?php echo base_url() ?>public/user_profile/<?php echo $v_profile_details->company_logo; ?>"
                                            alt="image">
                                    </div>

                                    <div>
                                        <h4><?php echo $v_profile_details->organization_name; ?></h4>
                                        <p><?php echo $v_profile_details->office_address; ?></p>
                                    </div>

                                </div>
                            </div>
                            <div class="reqinvite-leftsingle pt-3">
                                <?php

                                $all_published_job = $this->View_profile_publisher_model->select_all_published_job($v_profile_details->user_id);
                                $user_id = $all_published_job->user_id;
                                $get_result2 = $this->View_profile_publisher_model->count_all_publisher($user_id);
                                ?>
                                <ul>
                                    <li>Published Job <span><?php echo $get_result2->total; ?></span></li>
                                    <?php
                                    $all_bid_job = $this->View_profile_publisher_model->select_all_bid_job($v_profile_details->user_id);
                                    $user_id = $all_bid_job->user_id;
                                    $get_result3 = $this->View_profile_publisher_model->count_all_bid($user_id);
                                    ?>
                                    <li>Bid Job <span><?php echo $get_result3->total; ?></span></li>
                                    <li>Done Job <span>0</span></li>
<!--                                    <li>Total Earning <span>0</span></li>-->
                                </ul>
                                <ul class="rating">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="reqinvite-leftsingle pt-3">
                                <h5>Legal</h5>
                                <ul>
                                    <li>NID<span><?php echo $v_profile_details->nid_card; ?></span></li>
                                    <li>TIN <span><?php echo $v_profile_details->tin; ?></span></li>
                                    <li>BIN <span><?php echo $v_profile_details->bin; ?></span></li>
                                    <!--                                <li>Tax Return <span>1,00,00,000</span></li>-->
                                    <li>Works Experience
                                        <span><?php echo $v_profile_details->years_of_experiences; ?></span></li>
                                    <?php
                                    $result = $this->View_profile_publisher_model->select_category_id($v_profile_details->id);
                                    $category_id = $result->category_id;
                                    $get_result = $this->View_profile_publisher_model->count_related_work($category_id);
                                    if ($get_result) {
                                        $set_result = $get_result->total;
                                    } else {
                                        $set_result = "";
                                    }
                                    ?>
                                    <li>Similar Work <span><?php echo $set_result; ?></span></li>
                                    <?php
                                    $general_work = $this->View_profile_publisher_model->select_general_work($v_profile_details->id);
                                    $user_id = $general_work->user_id;
                                    $get_result1 = $this->View_profile_publisher_model->count_all_work($user_id);
                                    if ($general_work) {
                                        $set_result1 = $get_result1->total;
                                    } else {
                                        $set_result1 = "";
                                    }
                                    ?>
                                    <li>General Work <span><?php echo $set_result1; ?></span></li>
                                </ul>
                                <ul class="hire">
                                    <li><a href="#"
                                           onclick="job_shortlist_active(<?php echo $v_profile_details->id; ?>)">Shortlist</a>
                                    </li>
                                    <li><a href="#"
                                           onclick="job_decline_bidder(<?php echo $v_profile_details->id; ?>)">Decline</a>
                                    </li>

                                </ul>
                            </div>
                            <!--                            <div class="reqinvite-leftsingle pt-3">-->
                            <!--                                <h5>Profile, Portfolio and Link</h5>-->
                            <!--                                <a href="#"><img src="--><?php //echo base_url()
                            ?><!--web_assets/images/legal2.png"></a>-->
                            <!--                                <a href="#"><img src="--><?php //echo base_url()
                            ?><!--web_assets/images/legal.png"></a>-->
                            <!--                            </div>-->
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
                                                class="ml-20"><?php echo $v_profile_details->approximate_budget ?></span>
                                        </p>
                                        <p>Quotation Price <span
                                                class="ml-20"><?php echo $v_profile_details->quotation_price_for_bidder ?></span>
                                        </p>
                                    </div>
                                </div>
                                <p><?php echo $v_profile_details->cover_letter ?></p>

                            </div>

                            <div class="reqinvite-rightsingle pt-4">
                                <h4 class="pb-4">Specification</h4>
                                <p><?php echo $v_profile_details->specification ?></p>

                                <ul class="legal">
                                    <li>

                                        <a href="<?php echo base_url() ?>public/user_profile/<?php echo $v_profile_details->specification_file ?>"
                                           target="_blank">
                                            <img src="<?php echo base_url() ?>public/user_profile/pdf45.png ?>"
                                                 style="width:100px; height:100px;">
                                    </li>

                                </ul>
                            </div>

                            <div class="reqinvite-rightsingle pt-4">
                                <h4 class="pb-4">Work Process</h4>
                                <p><?php echo $v_profile_details->work_process ?></p>
                                <ul class="legal">
                                    <li>
                                        <a href="<?php echo base_url() ?>public/user_profile/<?php echo $v_profile_details->work_process_file ?>"
                                           target="_blank">
                                            <img src="<?php echo base_url() ?>public/user_profile/pdf45.png ?>"
                                                 style="width:100px; height:100px;">
                                        </a></li>

                                </ul>
                            </div>

                            <div class="reqinvite-rightsingle pt-4">
                                <h4 class="pb-4">Budget</h4>
                                <p><?php echo $v_profile_details->budget ?></p>
                                <ul class="legal">
                                    <li>
                                        <a href="<?php echo base_url() ?>public/user_profile/<?php echo $v_profile_details->budget_file ?>"
                                           target="_blank">
                                            <img src="<?php echo base_url() ?>public/user_profile/pdf45.png ?>"
                                                 style="width:100px; height:100px;">
                                    </li>

                                </ul>
                            </div>
                            <div class="reqinvite-rightsingle pt-4">
                                <h4 class="pb-4">Manpower</h4>
                                <p><?php echo $v_profile_details->manpower ?></p>
                                <ul class="legal">
                                    <li>
                                        <a href="<?php echo base_url() ?>public/user_profile/<?php echo $v_profile_details->manpower_file ?>"
                                           target="_blank">
                                            <img src="<?php echo base_url() ?>public/user_profile/pdf45.png ?>"
                                                 style="width:100px; height:100px;">

                                        </a></li>
                                    <li>
                                </ul>
                            </div>

                            <div class="reqinvite-rightsingle pt-4">

                                <h4 class="pb-4">Catalog</h4>
                                <p></p>
                                <ul class="legal">
                                    <?php
                                    $get_file = $this->View_profile_publisher_model->select_all_file($v_profile_details->id);
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
                                    $work_schedule = $this->View_profile_publisher_model->select_all_work_schedule($v_profile_details->id);
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
    </section>
</main>

<div class="modal fade bd-example-modal-lg show" id="load_modal" tabindex="-1"
     aria-labelledby="exampleStandardModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div id="load_from">

                </div>

            </div>
        </div>
    </div>
</div>

<script>
    function job_shortlist_active($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>pending_job/shortlister_active/' + $id,
            success: function (result) {
                if (result) {

                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>

<script>
    function job_decline_bidder($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>pending_job/decline_bidder_active/' + $id,
            success: function (result) {
                if (!result) {
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>