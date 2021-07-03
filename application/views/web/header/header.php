<!-- header-area start -->
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="header-full">
                <div class="header-logo">
                    <a href="<?php echo base_url() ?>/job_view/all_job"><img
                            src="<?php echo base_url() ?>web_assets/images/logo.png" alt="image"></a>
                </div>
                <div class="header-menu">
                    <div class="responsive_bars">
                        <i class="fas fa-bars"></i>
                    </div>
                    <div class="menu-mobile">
                        <ul class="first-menu">
                            <li><a href="<?php echo base_url() ?>job_view/all_job">Browse Job</a></li>
                            <li><a href="<?php echo base_url() ?>active_job_publiser/all_active_job_publiser">My
                                    Publish</a></li>
                            <li><a href="<?php echo base_url() ?>my_work/all_active_invest_work">My Invest</a></li>
                            <li><a href="<?php echo base_url() ?>my_work/all_my_work">My Bid</a></li>
                        </ul>
                        <ul class="third-menu">
                            <?php
                            $CI =& get_instance();
                            $this->load->model('Welcome_model');
                            $user_id = $this->session->userdata('user_id');
                            $result = $CI->Welcome_model->select_all_notification($user_id);
                            $result1 = $CI->Welcome_model->select_all_notification_investor($user_id);
                            $result2 = $CI->Welcome_model->select_all_notification_by_bidder($user_id);
                            $result3 = $CI->Welcome_model->select_all_notification_by_investor($user_id);
                            $total = count($result);
                            $total1 = count($result1);
                            $total2 = count($result2);
                            $total3 = count($result3);
                            ?>
                            <li>
                                <a href="<?php echo base_url() ?>browse_job/browse_all_boost_jobs/">
                                    <i class="fas fa-mug-hot"></i>
                                </a>
                                <a href="#"><img
                                        src="<?php echo base_url() ?>web_assets/images/notification.png"><?php echo $total + $total1 +$total2+$total3; ?>
                                </a>
                                <div class="profile_dropdown">
                                    <div class="row d-flex align-items-center">
                                        <ul>
                                            <?php
                                            foreach ($result as $v_result) {
                                                ?>
                                                <li>
                                                    <a href="<?php echo base_url() ?>my_work/my_work_pending_details/<?php echo $v_result->post_id; ?>">
                                                        you are hired by "<?php echo $v_result->job_title; ?>"
                                                    </a>
                                                </li>
                                            <?php } ?>

                                            <?php
                                            foreach ($result1 as $v_result) {
                                                ?>
                                                <li>
                                                    <a href="<?php echo base_url() ?>my_work/my_investor_approve/<?php echo $v_result->post_id; ?>">
                                                        you are hired by "<?php echo $v_result->job_title; ?>"
                                                    </a>
                                                </li>
                                            <?php } ?>
                                            <?php
                                            foreach ($result2 as $v_result) {
                                                ?>
                                                <li>
                                                    <a href="<?php echo base_url() ?>active_job_publiser/details_active_job_publiser/<?php echo $v_result->post_id; ?>">
                                                        You Job Approved by "<?php echo $v_result->organization_name; ?>"
                                                    </a>
                                                </li>
                                            <?php } ?>

                                            <?php
                                            foreach ($result3 as $v_result) {
                                                ?>
                                                <li>
                                                    <a href="<?php echo base_url() ?>active_job_publiser/details_active_job_publiser_investor/<?php echo $v_result->post_id; ?>">
                                                        You Job Approved by "<?php echo $v_result->organization_name; ?>"
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <?php
                                    $user_id = $this->session->userdata("user_id");
                                    $result1 = $this->Main_model->getValue("user_id='$user_id'", 'basic', '*', "id desc");
                                    if($result1){
                                        foreach ($result1 as $v_picture) { ?>
                                            <img style="height:30px; width: 30px;" src="<?php echo base_url() ?>public/user_profile/<?php echo $v_picture->company_logo; ?>" alt="image" style="width:50px;">
                                    <?php } } else { ?>
                                        <img style="height:30px; width: 30px;"
                                             src="<?php echo base_url() ?>public/user_profile/demo_picture.jpg"
                                             alt="image">
                                    <?php } ?> </span>
                                </a>
                                <?php
                                $result1 = $this->Main_model->getValue("user_id='$user_id'", 'basic', '*', "id desc");
                                $user = $this->session->userdata("user_name");
                                echo $user;
                                ?>
                                <div class="profile_dropdown">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-9">
                                            <a class="myprofile"
                                               href="<?php echo base_url() ?>frontend/profile_all_details">
                                                <?php
                                                $user_id = $this->session->userdata("user_id");
                                                $result1 = $this->Main_model->getValue("user_id='$user_id'", 'basic', '*', "id desc");
                                                    if($result1){
                                                    foreach ($result1 as $v_picture) { ?>
                                                        <img style="height:30px; width: 30px;"
                                                             src="<?php echo base_url() ?>public/user_profile/<?php echo $v_picture->company_logo; ?>"
                                                             alt="image" style="width:50px;">
                                                    <?php } }else { ?>
                                                        <img style="height:30px; width: 30px;"
                                                             src="<?php echo base_url() ?>public/user_profile/demo_picture.jpg"
                                                             alt="image">
                                                    <?php } ?>
                                                <span>My Profile</span>
                                            </a>


                                        </div>

                                        <div class="col-3">
                                            <a class="edit" href="<?php echo base_url() ?>frontend/profile_all_details">
                                                <img src="<?php echo base_url() ?>web_assets/images/edit.png">
                                            </a>
                                        </div>
                                        <ul>
                                            <li><button type="button" class="btn btn-secondary" onclick="window.location.href = '<?php echo base_url(); ?>boost/hosted_view';">Hosted Checkout</button></li>
                                            <li><a href="<?php echo base_url() ?>frontend/edit_password">Update Password</a></li>
                                            <li><a href="<?php echo base_url() ?>list_of_all/list_of_investor">List of
                                                    Investor</a></li>
                                            <li><a href="<?php echo base_url() ?>list_of_all/list_of_bidder">List of
                                                    Bidder</a></li>
                                            <li>
                                                <a href="<?php echo base_url() ?>certificate/all_certificate">Certificate</a>
                                            </li>
                                            <li><a href="<?php echo base_url() ?>earning/all_earning">Earning</a></li>
                                            <li>
                                                <a href="<?php echo base_url() ?>payment_as_publisher/all_payment_as_publisher">Payment</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url() ?>subscription_view/subscription_all_show">Subscription</a>
                                            </li>
                                            <li><a href="<?php echo base_url() ?>boost/boost_all">Boosting</a></li>
                                            <li><a href="<?php echo base_url() ?>Main/logout">Logout</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="<?php echo base_url() ?>terms_privacy/terms_service_user">Trams
                                                & condition</a></li>
                                            <li><a href="<?php echo base_url() ?>terms_privacy/privacy_user">Privacy &
                                                    Policy</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area end -->