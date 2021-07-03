<main class="body-padding profileview-update">
    <section class="profilepage-area">
        <div class="container">
            <div class="row">
                <div class="profilepage-intro">
                    <div class="profilepageintro-left">
                        <div class="profilepagel-img">
                            <?php
                            $i = 0;
                            if($user_profiles){
                            foreach ($user_profiles as $v_profile) { ?>
                            <img src="<?php echo base_url() ?>public/user_profile/<?php echo $v_profile->company_logo; ?>" alt="image" style="width:150px; height:150px">
                        </div>

                            <div class="profilepagel-text">
                                <h4><?php echo $v_profile->organization_name; ?></h4>
                                <p>
                                    <?php
                                    if ($v_profile->publisher == 1 and $v_profile->investor == 2 and $v_profile->bidder == 3) {
                                        echo "You are a: Publisher-Investor-Bidder";
                                    }

                                    else if($v_profile->publisher == 1 and $v_profile->investor == 2){
                                        echo "You are a:Publisher-Investor.";
                                    }
                                    else if($v_profile->publisher == 1 and $v_profile->bidder == 3){
                                        echo "You are a: Publisher-Bidder";
                                    }
                                    else if($v_profile->investor == 2 and $v_profile->bidder == 3){
                                        echo "You are a:Investor-Bidder.";
                                    }
                                    else if($v_profile->publisher == 1){
                                        echo "You are a:Publisher.";
                                    }
                                    else if($v_profile->investor == 2){
                                        echo "You are a:Investor.";
                                    }
                                    else if($v_profile->bidder == 3){
                                        echo "You are a: Bidder.";
                                    }


                                    ?>

                                </p>

                                <p>
                                    <?php
                                    if ($v_profile->business_type == 1) {
                                        echo "Business Type:Government.";
                                    }
                                    else if($v_profile->business_type == 2 ){
                                        echo "Business Type: Private/Ltd/Group of Company.";
                                    }
                                    else if($v_profile->business_type == 3 ){
                                        echo "Business Type: Private/Ltd/Group of Company.";
                                    }
                                    else if($v_profile->business_type == 4){
                                        echo "Business Type: NGO/NPO.";
                                    }


                                    ?>

                                </p>

                                <ul>
                                    <li>Experiences Year: <span><?php echo $v_profile->years_of_experiences ?></span>
                                    </li>
                                    <li>Number Of Employee: <span><?php echo $v_profile->number_of_employees ?></span>
                                    </li>
                                    <li>Official Contact: <span><?php echo $v_profile->official_contact ?></span></li>
                                    <li>Web Address: <span><?php echo $v_profile->web_address ?></span></li>
                                    <li>Office Address: <span><?php echo $v_profile->office_address ?></span>
                                    </li>

                                    <li>NID Number: <span><?php echo $v_profile->nid_card ?></span></li>
                                    <li>TIN Number: <span><?php echo $v_profile->tin ?></span></li>
                                    <li>BIN Number: <span><?php echo $v_profile->bin ?></span>
                                    </li>
                                </ul>
                            </div>
                        <?php } } ?>
                    </div>
                    <div class="profilepageintro-right">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#load_modal"
                           onclick="return edit_basic();"><i class="far fa-edit"></i></a>
                        <a href="<?php echo base_url() ?>frontend/index"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
</div>
                <!-- profile-management -->
                <div class="profile-management">
                    <div class="row">
                        <div class="profilenew-heading">
                            <h1 style="border-top: none;">Management & Team</h1>
                            <a href="<?php echo base_url() ?>frontend/management_team_view"><i class="fas fa-plus"></i></a>
                        </div>
                        <!--<div class="col-md-2">-->
                        <!--    <div class="profilepageintro-right">-->
                        <!--        <a href="<?php echo base_url() ?>frontend/management_team_view"><i class="fas fa-plus"></i></a>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                    <div class="row gy-4">
                        <?php if($management_team){ foreach ($management_team as $v_team) { ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="promanagement-single profilehover-style">
                                    <div class="promanagement-img">
                                        <img
                                            src="<?php echo base_url() ?>public/user_profile/<?php echo $v_team->profile_picture; ?>"
                                            alt="image" style="width:150px; height:150px">
                                    </div>
                                    <div>
                                        <h4><?php echo $v_team->name; ?></h4>
                                        <p><?php echo $v_team->designation; ?></p>
                                        <ul>
                                            <li>NID- <span><?php echo $v_team->nid; ?></span></li>
                                            <li>TIN- <span><?php echo $v_team->tin; ?></span></li>
                                            <li>Email- <span><?php echo $v_team->email; ?></span></li>
                                            <li>Phone <span><?php echo $v_team->phone; ?></span></li>
                                        </ul>
                                    </div>
                                    <div class="profilepageintro-right" style="padding-top:30px;">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#load_modal"
                                           onclick="return edit_management(<?php echo $v_team->id ?>);"><i
                                                class="far fa-edit"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-md-2">-->
                            <!--    <div class="profilepageintro-right" style="padding-top:30px;">-->
                            <!--        <a href="#" data-bs-toggle="modal" data-bs-target="#load_modal"-->
                            <!--           onclick="return edit_management(<?php echo $v_team->id ?>);"><i-->
                            <!--                class="far fa-edit"></i></a>-->
                            <!--    </div>-->
                            <!--</div>-->
                        <?php } }?>
                    </div>
                </div>
                <!-- nominee-area -->
                <div class="nominee-area">
                    <div class="row">
                        <div class="profilenew-heading">
                            <h1>Experience</h1>
                            <a href="<?php echo base_url() ?>frontend/work_area_profile_view"><i class="fas fa-plus"></i></a>
                        </div>
                        <!--<div class="col-md-10 ">-->
                        <!--    <h1>Experience</h1>-->
                        <!--</div>-->
                        <!--<div class="col-md-2 p-4">-->
                        <!--    <div class="profilepageintro-right">-->
                        <!--        <a href="<?php echo base_url() ?>frontend/work_area_profile_view"><i class="fas fa-plus"></i></a>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>

                    <div class="row gy-4">
                        <?php foreach ($experience as $v_experience) { ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="experience-single profilehover-style">
                                    <div class="experiences-top">
                                        <img src="<?php echo base_url() ?>web_assets/images/experience.png" alt="image" style="width:150px; height:150px">
                                        <h4><?php echo $v_experience->client_name; ?></h4>
                                        <p>
                                            <?php
                                            if ($v_experience->project_type == 1) {
                                                echo "Medical Instruments";
                                            } else if ($v_experience->project_type == 2) {
                                                echo "Instruments & Goods";
                                            } else if ($v_experience->project_type == 3) {
                                                echo "Other";
                                            } ?>
                                        </p>
                                    </div>
                                    <div class="profilepageintro-right" style="padding-top:30px;">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#load_modal"
                                           onclick="return edit_experience(<?php echo $v_experience->id ?>);"><i class="far fa-edit"></i></a>
                                    </div>
                                </div>

                                <div class="experiences-bottom">
                                    <p><?php echo $v_experience->completion ?> </p>
                                    <ul>
                                        <?php if($v_experience->certificate){?>
                                        <li><a href="<?php echo base_url()?>public/user_profile/<?php echo $v_experience->certificate; ?>" target="_blank">Certificate</a></li>
                                        <?php } if($v_experience->completion_letter){?>
                                        <li><a href="<?php echo base_url()?>public/user_profile/<?php echo $v_experience->completion_letter; ?>" target="_blank">Complition Letter</a></li>
                                        <?php } ?>
                                        <!-- <li><a href="<?php echo base_url()?>public/user_profile/<?php echo $v_experience->certificate; ?>" target="_blank">Certificate</a></li>
                                        <li><a href="<?php echo base_url()?>public/user_profile/<?php echo $v_experience->completion_letter; ?>" target="_blank">Complition Letter</a></li> -->
                                    </ul>
                                </div>
                                <br>
                            </div>

                            <!--<div class="col-md-2">-->
                            <!--    <div class="profilepageintro-right" style="padding-top:30px;">-->
                            <!--        <a href="#" data-bs-toggle="modal" data-bs-target="#load_modal"-->
                            <!--           onclick="return edit_experience(<?php echo $v_experience->id ?>);"><i class="far fa-edit"></i></a>-->
                            <!--    </div>-->
                            <!--</div>-->
                        <?php } ?>


                    </div>

                </div>
                <div class="nominee-area">
                    <h1>Area Of Work</h1>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="legal-all">

                                    <div class="experiences-bottom pt-4">
                                        <ul>
                                            <?php foreach ($area_of_work as $data) { ?>


                                            <li><a class="mb-4"><?php echo $data->category_name; ?></a></li>
                                            <?php }?>
                                        </ul>

                                    </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- nominee-area -->
                <div class="nominee-area">
                    <h1>Legal</h1>
                    <div class="row">
                        <div class="col-md-12 profilehover-style">
                            <div class="legal-all">
                                <?php
                                $legal = $this->Frontend_model->select_legal_papers($user_id);
                                if($legal){ ?>
                                    <div class="legal-single">
                                            <a href="<?php echo base_url() ?>public/user_profile/<?php echo $legal->audit_report; ?>" target="_blank">
                                                <img src="<?php echo base_url() ?>public/user_profile/pdf45.png">
                                            <p>Audit Report</p>
                                        </a>
                                    </div>
                                <?php } ?>

                                <?php
                                $legal = $this->Frontend_model->select_legal_papers($user_id);
                                if($legal){ ?>
                                    <div class="legal-single">

                                        <a href="<?php echo base_url() ?>public/user_profile/<?php echo $legal->trade_license;?>" target="_blank">
                                            <img src="<?php echo base_url() ?>public/user_profile/pdf45.png">
                                            <p>Trade License</p>
                                        </a>
                                    </div>
                                <?php } ?>
                                <?php
                                $legal = $this->Frontend_model->select_legal_papers($user_id);
                                if($legal){ ?>
                                    <div class="legal-single">
                                        <a href="<?php echo base_url() ?>public/user_profile/<?php echo $legal->tin; ?>" target="_blank">
                                            <img src="<?php echo base_url() ?>public/user_profile/pdf45.png">
                                            <p>Tin</p>
                                        </a>
                                    </div>
                                <?php } ?>

                                <?php
                                $legal = $this->Frontend_model->select_legal_papers($user_id);
                                if($legal){ ?>
                                    <div class="legal-single">
                                            <a href="<?php echo base_url() ?>public/user_profile/<?php echo $legal->bin; ?>" target="_blank">
                                                <img src="<?php echo base_url() ?>public/user_profile/pdf45.png">
                                            <p>Bin</p>
                                        </a>
                                    </div>
                                <?php } ?>
                                <?php
                                $legal = $this->Frontend_model->select_legal_papers($user_id);
                                if($legal){ ?>
                                    <div class="legal-single">
                                            <a href="<?php echo base_url() ?>public/user_profile/<?php echo $legal->income_tax; ?>" target="_blank">
                                                <img src="<?php echo base_url() ?>public/user_profile/pdf45.png">
                                            <p>Income TAX Certificate</p>
                                        </a>
                                    </div>
                                <?php } ?>
                                <?php
                                $legal = $this->Frontend_model->select_legal_papers($user_id);
                                if($legal){ ?>
                                    <div class="legal-single">
                                            <a href="<?php echo base_url() ?>public/user_profile/<?php echo $legal->brochure; ?>" target="_blank">
                                                <img src="<?php echo base_url() ?>public/user_profile/pdf45.png">
                                            <p>Brochure</p>
                                        </a>
                                    </div>
                                <?php } ?>
                                <?php
                                $legal = $this->Frontend_model->select_legal_papers($user_id);
                                if($legal){ ?>
                                    <div class="legal-single">
                                            <a href="<?php echo base_url() ?>public/user_profile/<?php echo $legal->joint_venture; ?>" target="_blank">
                                                <img src="<?php echo base_url() ?>public/user_profile/pdf45.png">
                                            <p>Joint Venture</p>
                                        </a>
                                    </div>
                                <?php } ?>
                                <?php
                                $legal = $this->Frontend_model->select_legal_papers($user_id);
                                if($legal){ ?>
                                    <div class="legal-single">

                                            <a href="<?php echo base_url() ?>public/user_profile/<?php echo $legal->board_of_resolution; ?>" target="_blank">
                                                <img src="<?php echo base_url() ?>public/user_profile/pdf45.png">
                                            <p>Board of resolution </p>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                            <?php
                            $legal = $this->Frontend_model->select_legal_papers($user_id);
                            if($legal){ ?>
                                <div class="legal-single">
                                        <a href="<?php echo base_url() ?>public/user_profile/<?php echo $legal->completion_letter; ?>" target="_blank">
                                            <img src="<?php echo base_url() ?>public/user_profile/pdf45.png">
                                        <p>Completion Letter</p>
                                    </a>
                                </div>
                            <?php } ?>
                            <?php
                            $legal = $this->Frontend_model->select_legal_papers($user_id);
                            if($legal){ ?>
                                <div class="legal-single">
                                        <a href="<?php echo base_url() ?>public/user_profile/<?php echo $legal->work_orders; ?>" target="_blank">
                                            <img src="<?php echo base_url() ?>public/user_profile/pdf45.png">
                                        <p>Work Orders</p>
                                    </a>
                                </div>
                            <?php } ?>
                            <div class="profilepageintro-right" style="padding-top:30px; right:1%;">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#load_modal"
                                   onclick="return edit_legal();"><i class="far fa-edit"></i></a>
                            </div>
                        </div>
                        <!--<div class="col-md-2">-->
                        <!--    <div class="profilepageintro-right" style="padding-top:30px;">-->
                        <!--        <a href="#" data-bs-toggle="modal" data-bs-target="#load_modal"-->
                        <!--           onclick="return edit_legal();"><i class="far fa-edit"></i></a>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>

            <!-- nominee-area -->
            <div class="nominee-area">
                <h1>Financial</h1>
                <div class="row">
                    <div class="col-md-12 profilehover-style">
                        <div class="legal-all">
                            <?php
                            $financial = $this->Frontend_model->select_financial($user_id);
                            if($financial){ ?>
                                <div class="legal-single">
                                        <a href="<?php echo base_url() ?>public/user_profile/<?php echo $financial->financial_statement; ?>" target="_blank">
                                            <img src="<?php echo base_url() ?>public/user_profile/pdf45.png">
                                        <p>Financial Statement</p>
                                    </a>
                                </div>
                            <?php } ?>
                            <?php
                            $financial = $this->Frontend_model->select_financial($user_id);
                            if($financial){ ?>
                                <div class="legal-single">

                                        <a href="<?php echo base_url() ?>public/user_profile/<?php echo $financial->bank_solvency; ?>" target="_blank">
                                            <img src="<?php echo base_url() ?>public/user_profile/pdf45.png">
                                        <p>Bank Solvency</p>
                                    </a>
                                </div>
                            <?php } ?>
                            <?php
                            $financial = $this->Frontend_model->select_financial($user_id);
                            if($financial){ ?>
                                <div class="legal-single">
                                        <a href="<?php echo base_url() ?>public/user_profile/<?php echo $financial->credit; ?>" target="_blank">
                                            <img src="<?php echo base_url() ?>public/user_profile/pdf45.png">
                                        <p>Credit</p>
                                    </a>
                                </div>
                            <?php } ?>
                            <?php
                            $financial = $this->Frontend_model->select_financial($user_id);
                            if($financial){ ?>
                                <div class="legal-single">

                                        <a href="<?php echo base_url() ?>public/user_profile/<?php echo $financial->bank_statement; ?>" target="_blank">
                                            <img src="<?php echo base_url() ?>public/user_profile/pdf45.png">
                                        <p>Bank Statement</p>
                                    </a>
                                </div>
                            <?php } ?>
                            <?php
                            $financial = $this->Frontend_model->select_financial($user_id);
                            if($financial){ ?>
                                <div class="legal-single">
                                        <a href="<?php echo base_url() ?>public/user_profile/<?php echo $financial->liquid_money; ?>" target="_blank">
                                            <img src="<?php echo base_url() ?>public/user_profile/pdf45.png">
                                        <p>Liquid Money</p>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="profilepageintro-right" style="padding-top:30px; right: 1%">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#load_modal"
                               onclick="return edit_financial();"><i class="far fa-edit"></i></a>
                        </div>
                    </div>
                    <!--<div class="col-md-2">-->
                    <!--    <div class="profilepageintro-right" style="padding-top:30px;">-->
                    <!--        <a href="#" data-bs-toggle="modal" data-bs-target="#load_modal"-->
                    <!--           onclick="return edit_financial();"><i class="far fa-edit"></i></a>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
            <!-- nominee-area -->
            <div class="profile-management">
                <div class="row">
                    <div class="profilenew-heading">
                        <h1 style="border-top: none;">Award & Certification</h1>
                        <a href=""data-bs-toggle="modal" data-bs-target="#load_modal"
                               onclick="return add_award_certification();"><i class="fas fa-plus"></i></a>
                    </div>
                    <!--<div class="col-md-10">-->
                    <!--    <h1>Award & Certification</h1>-->
                    <!--</div>-->
                    <!--<div class="col-md-2">-->
                    <!--    <div class="profilepageintro-right">-->
                    <!--        <a href=""data-bs-toggle="modal" data-bs-target="#load_modal"-->
                    <!--           onclick="return add_award_certification();"><i class="fas fa-plus"></i></a>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
                <div class="row gy-4">
                    <?php
                    $award_certification = $this->Frontend_model->select_award_certification($user_id);
                    foreach ($award_certification as $v_certification) { ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="promanagement-single profilehover-style">
                                <div class="promanagement-img">
                                    <a href="<?php echo base_url() ?>public/user_profile/<?php echo $v_certification->image; ?>" target="_blank">
                                    <img src="<?php echo base_url() ?>public/user_profile/pdf45.png">                                
                                </a>
                                </div>
                                <div>
                                    <h4><?php echo $v_certification->award_name; ?></h4>
                                    <p><?php echo $v_certification->categories_name; ?></p>
                                    <ul>
                                        <li>Authorized By- <?php echo $v_certification->authorized_by; ?></li>
                                    </ul>
                                </div>
                                <div class="profilepageintro-right" style="padding-top:30px;">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#load_modal"
                                       onclick="return edit_award_certification(<?php echo $v_certification->id ?>);"><i class="far fa-edit"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--<div class="col-md-2">-->
                        <!--    <div class="profilepageintro-right" style="padding-top:30px;">-->
                        <!--        <a href="#" data-bs-toggle="modal" data-bs-target="#load_modal"-->
                        <!--           onclick="return edit_award_certification(<?php echo $v_certification->id ?>);"><i class="far fa-edit"></i></a>-->
                        <!--    </div>-->

                        <!--</div>-->
                    <?php } ?>
                </div>
            </div>

                <!-- nominee-area -->

                <div class="profile-management">
                    <div class="row">
                        <div class="profilenew-heading">
                            <h1 style="border-top: none;">Portfolio Link</h1>
                            <a href=""data-bs-toggle="modal" data-bs-target="#load_modal"
                                  onclick="return add_portfolio_link();"><i class="fas fa-plus"></i></a>
                        </div>
                        <!--<div class="col-md-10">-->
                        <!--    <h1>Portfolio Link</h1>-->
                        <!--</div>-->
                        <!--<div class="col-md-2 p-4">-->
                        <!--    <div class="profilepageintro-right">-->
                        <!--        <a href=""data-bs-toggle="modal" data-bs-target="#load_modal"-->
                        <!--           onclick="return add_portfolio_link();"><i class="fas fa-plus"></i></a>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                    <div class="row gy-4">
                        <?php

                        $portfolio_link = $this->Frontend_model->select_portfolio_link($user_id);
                        foreach ($portfolio_link as $v_portfolio) { ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="promanagement-single profilehover-style">
                                    <div class="promanagement-img">
                                        
                                            <a href="<?php echo base_url() ?>public/user_profile/<?php echo $v_portfolio->board_of_resolution; ?>" target="_blank">
                                                <img src="<?php echo base_url() ?>public/user_profile/pdf45.png">
                                        </a>
                                        <!--<img-->
                                        <!--    src="<?php echo base_url() ?>public/user_profile/<?php echo $v_portfolio->board_of_resolution; ?>"-->
                                        <!--    alt="image" style="width:150px; height:150px">-->
                                    </div>
                                    <div>
                                        <h4><?php echo $v_portfolio->project_name; ?></h4>
                                        <p><?php echo $v_portfolio->project_type; ?></p>
                                        <ul>
                                            <li>Project Value- <?php echo $v_portfolio->project_value; ?></li>
                                            <li>Client Name- <?php echo $v_portfolio->client_name; ?></li>
                                            <li>Link- <?php echo $v_portfolio->link; ?></li>
                                        </ul>
                                    </div>
                                    <div class="profilepageintro-right" style="padding-top:30px;">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#load_modal"
                                           onclick="return edit_portfolio_link(<?php echo $v_portfolio->id ?>);"><i class="far fa-edit"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-md-2">-->
                            <!--    <div class="profilepageintro-right" style="padding-top:30px;">-->
                            <!--        <a href="#" data-bs-toggle="modal" data-bs-target="#load_modal"-->
                            <!--           onclick="return edit_portfolio_link(<?php echo $v_portfolio->id ?>);"><i class="far fa-edit"></i></a>-->
                            <!--    </div>-->

                            <!--</div>-->
                        <?php } ?>
                    </div>
                </div>

                <!-- nominee-area -->
                <div class="nominee-area">
                    <h1>Nominee</h1>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="row gy-4">
                                <?php foreach ($nominee as $v_nominee) { ?>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="promanagement-single profilehover-style">
                                            <div class="promanagement-img">
                                                <img
                                                    src="<?php echo base_url() ?>public/user_profile/<?php echo $v_nominee->image; ?>"
                                                    alt="image" style="width:150px; height:150px">
                                            </div>
                                            <div>
                                                <h4><?php echo $v_nominee->name; ?></h4>
                                                <p><?php echo $v_nominee->designation; ?></p>
                                                <ul>
                                                    <li>NID- <?php echo $v_nominee->nid; ?></li>
                                                    <li>TIN- <?php echo $v_nominee->tin; ?></li>
                                                    <li>Email- <?php echo $v_nominee->email; ?></li>
                                                    <li>Phone<?php echo $v_nominee->phone; ?></li>
                                                </ul>
                                            </div>
                                            <div class="profilepageintro-right" style="padding-top:30px;">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#load_modal"
                                                   onclick="return edit_nominee();"><i class="far fa-edit"></i></a>
                                            </div>
                                        </div>

                                    </div>

                                <?php } ?>
                            </div>
                        </div>
                        <!--<div class="col-md-2">-->
                        <!--    <div class="profilepageintro-right" style="padding-top:30px;">-->
                        <!--        <a href="#" data-bs-toggle="modal" data-bs-target="#load_modal"-->
                        <!--           onclick="return edit_nominee();"><i class="far fa-edit"></i></a>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            

            <!-- nominee-area -->
            <div class="nominee-area">
                <h1>Official Contract Person</h1>
                <div class="row">
                    <div class="col-md-10">
                        <div class="row gy-4">
                            <?php foreach ($official_contract_person as $v_contract_person) { ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="promanagement-single profilehover-style">
                                        <div>
                                            <h4><?php echo $v_contract_person->name; ?></h4>
                                            <p><?php echo $v_contract_person->designation; ?></p>
                                            <ul>
                                                <li>NID- <span><?php echo $v_contract_person->nid; ?></span></li>
                                                <li>TIN- <span><?php echo $v_contract_person->tin; ?></span></li>
                                                <li>Email- <span><?php echo $v_contract_person->email; ?></span></li>
                                                <li>Phone <span><?php echo $v_contract_person->phone; ?></span></li>
                                            </ul>
                                        </div>
                                        <div class="profilepageintro-right" style="padding-top:30px;">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#load_modal"
                                               onclick="return edit_official_contract();"><i class="far fa-edit"></i></a>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>
                    </div>
                    <!--<div class="col-md-2">-->
                    <!--    <div class="profilepageintro-right" style="padding-top:30px;">-->
                    <!--        <a href="#" data-bs-toggle="modal" data-bs-target="#load_modal"-->
                    <!--           onclick="return edit_official_contract();"><i class="far fa-edit"></i></a>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
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
<!--                <p class="m-t text-center">-->
<!--                    <small>--><?php //echo $this->session->userdata('powered_by'); ?>
<!--                        <br>--><?php //echo $this->session->userdata('copy_write'); ?>
<!--                    </small>-->
<!--                </p>-->
                <!-- <p class="m-t text-center">
                    <small><strong>Powered by </strong><a href="https://webase.com.bd/">Webase Solutions</a>(01812442234) <span style="font-size: 10px;">&</span>
                        <br>Copyright © 2021 Enlist Work
                    </small>
                </p> -->

            </div>
        </div>
    </div>
</div>


<script>
    function edit_basic() {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>frontend/load_basic_from',
            success: function (result) {
                if (result) {
                    $('#title').html('Update Basic Information');
                    $('#load_from').html(result);
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>


<script>
    function edit_management($id) {
        var set_id = $id;
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>frontend/load_management_team_from',
            data: {id: set_id},
            success: function (result) {
                if (result) {
                    $('#load_from').html(result);
                    $('#title').html('Update Management Team Information');
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>
<script>
    function edit_experience($id) {
        var set_id = $id;
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>frontend/load_experience_from',
            data: {id: set_id},
            success: function (result) {
                if (result) {
                    $('#title').html('Update Experience Information');
                    $('#load_from').html(result);
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>


<script>
    function edit_legal() {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>frontend/load_legal_from',
            success: function (result) {
                if (result) {
                    $('#title').html('Update Legal Information');
                    $('#load_from').html(result);
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>

<script>
    function edit_nominee() {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>frontend/load_nominee_from',
            success: function (result) {
                if (result) {
                    $('#title').html('Update Nominee Information');
                    $('#load_from').html(result);
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>

<script>
    function edit_official_contract() {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>frontend/load_official_contract_from',
            success: function (result) {
                if (result) {
                    $('#title').html('Update Official Contract Information');
                    $('#load_from').html(result);
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>

<script>
    function edit_award_certification($id) {
        var set_id = $id;
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>frontend/load_award_certification_from',
            data: {id: set_id},
            success: function (result) {
                if (result) {
                    $('#title').html('Update Award Certification Information');
                    $('#load_from').html(result);
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>

<script>
    function edit_portfolio_link($id) {
        var set_id = $id;
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>frontend/load_portfolio_link_from',
            data: {id: set_id},
            success: function (result) {
                if (result) {
                    $('#title').html('Update Portfolio Link Information');
                    $('#load_from').html(result);
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>
<script>
    function edit_financial() {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>frontend/load_financial_from',
            success: function (result) {
                if (result) {
                    $('#title').html('Update Financial Information');
                    $('#load_from').html(result);
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>
<script>
    function add_portfolio_link() {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>frontend/load_add_portfolio_link_from',
            success: function (result) {
                if (result) {
                    $('#title').html('Add Portfolio Link Information');
                    $('#load_from').html(result);
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>

<script>
    function add_award_certification() {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>frontend/load_add_award_certification_from',
            success: function (result) {
                if (result) {
                    $('#title').html('Add Award Certification Information');
                    $('#load_from').html(result);
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>

