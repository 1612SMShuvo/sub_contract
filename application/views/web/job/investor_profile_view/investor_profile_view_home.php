<main class="body-padding">
    <section class="requestinvite-area">
        <div class="container">
            <div class="row">
                <?php
                $i=0;
                foreach($profile_details_investor as $v_profile_details_investor)
                    $i++;
                {?>
                <div class="col-md-4">

                    <div class="reqinvite-left">
                        <div class="reqinvite-leftsingle">
                            <div class="reqinvite-leftsingle-top">
                                <div>
                                   <img
                                            src="<?php echo base_url() ?>public/user_profile/<?php echo $v_profile_details_investor->company_logo; ?>"
                                            style="width:100px; height:100px; "><br>
                                </div>
                                <div>
                                    <h4><?php echo $v_profile_details_investor->organization_name?></h4>
                                    <p><?php echo $v_profile_details_investor->office_address?></p>
                                </div>

                            </div>
                        </div>
                        <div class="reqinvite-leftsingle pt-3">
                            <ul>
                                <?php
                                $all_published_job = $this->View_profile_publisher_model->select_all_published_job($v_profile_details_investor->user_id);
                                $user_id = $all_published_job->user_id;
                                $get_result_investor = $this->View_profile_publisher_model->count_all_publisher($user_id);
                                ?>
                                <ul>
                                    <li>Published Job <span><?php echo $get_result_investor->total; ?></span></li>
                                    <?php
                                    $all_invest_job = $this->View_profile_publisher_model->select_all_invest_job($v_profile_details_investor->user_id);
                                    $user_id = $all_invest_job->user_id;
                                    $get_result_invest1 = $this->View_profile_publisher_model->count_all_invest($user_id);
                                    ?>
                                    <li>Invest Job <span><?php echo $get_result_invest1->total; ?></span></li>
                                <li>Done Job <span>0</span></li>
<!--                                <li>Total Earning <span>50,00,000 Tk</span></li>-->
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
                                <li>TIN <span><?php echo $v_profile_details_investor->tin?></span></li>
                                <li>BIN <span><?php echo $v_profile_details_investor->bin?></span></li>
                                <li>NID <span><?php echo $v_profile_details_investor->nid_card;?></span></li>
                            </ul>
                            <ul class="hire">
                                <li><a href="#"
                                       onclick="job_shortlist_active_investor(<?php echo $v_profile_details_investor->id;?>)">Shortlist</a>
                                </li>
                                <li><a href="#"
                                       onclick="job_decline_investor(<?php echo $v_profile_details_investor->id; ?>)">Decline</a>
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
                                    <h4>Request Invite for this Project</h4>
                                </div>
                                <div class="reqinvite-righttop-right">
                                    <p>Investment Process</p>
                                    <p><span><?php echo $v_profile_details_investor->interested_investment;?></span></p>
                                </div>
                            </div>

                            <p><?php echo $v_profile_details_investor->cover_letter?></p>
                        </div>




                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
</main>

<script>
    function job_shortlist_active_investor($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>pending_job/shortlister_investor_active/' + $id,
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
    function job_decline_investor($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>pending_job/decline_investor_active/' + $id,
            success: function (result) {
                if (result) {
//                    window.setTimeout(function () {
//                        window.location.href = '<?php //echo base_url()?>//my_job/my_job_details/' + $id;
//                    }, 100);
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>