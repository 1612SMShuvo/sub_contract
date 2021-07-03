

<!-- header-area start -->

<main class="body">
    <section class="profilepage-area">
        <div class="container">
                    <div class="profilepageintro-left">
                        <div class="profilepagel-img">
                            <img src="<?php echo base_url() ?>web_assets/images/webase.png" alt="image">
                        </div>
                        <?php
                        foreach ($user_profile as $v_profile)
                        {?>
                        <div class="profilepagel-text">
                            <h4><?php echo $v_profile->organization_name; ?></h4>
                            <p>
                                <?php
                                if ($v_profile->publisher == 1) {
                                    echo "This Person is a:Publisher";
                                } ?>

                            </p>
                            <p>
                                <?php
                                if ($v_profile->investor == 2) {
                                    echo "This Person is a: Investor";
                                } ?>
                            </p>
                            <p>
                                <?php
                                if ($v_profile->bidder == 3) {
                                    echo "This Person is a: Bidder";

                                } ?>

                            </p>
                            <ul>
                                <li>Experiences Year: </li><span><?php echo $v_profile->years_of_experiences ?></span>

                                <li>Number Of Employee: </li><span><?php echo $v_profile->number_of_employees ?></span>

                                <li>Official Contact: </li><span><?php echo $v_profile->official_contact ?></span>
                                <li>Web Address: </li><span><?php echo $v_profile->web_address ?></span>
                                <li>Office Address: </li><span><?php echo $v_profile->office_address ?></span>

                            </ul>
                        </div>
                        <?php }?>
                    </div>
            <br>
                <!-- profile-management -->
                <div class="profile-management">
                    <h1>Management & Team</h1>
                    <div class="row gy-4">
                        <?php foreach ($management_team as $v_team) { ?>
                                <div class="promanagement-single">
                                    <div class="promanagement-img">
                                        <img
                                            src="<?php echo base_url() ?>public/user_profile/<?php echo $v_team->profile_picture; ?>"
                                            alt="image">
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
                                </div>
                        <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- nominee-area -->
                <div class="nominee-area">
                    <h1>Nominee</h1>
                    <div class="row gy-4">
                        <?php foreach ($nominee as $v_nominee) { ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="promanagement-single">
                                    <div class="promanagement-img">
                                        <img
                                            src="<?php echo base_url() ?>public/user_profile/<?php echo $v_nominee->image; ?>"
                                            alt="image">
                                    </div>
                                    <div>
                                        <h4><?php echo $v_nominee->name; ?></h4>
                                        <p><?php echo $v_nominee->designation; ?></p>
                                        <ul>
                                            <li>NID- <span><?php echo $v_nominee->nid; ?></span></li>
                                            <li>TIN- <span><?php echo $v_nominee->tin; ?></span></li>
                                            <li>Email- <span><?php echo $v_nominee->email; ?></span></li>
                                            <li>Phone <span><?php echo $v_nominee->phone; ?></span></li>
                                        </ul>
                                    </div>

                                </div>

                            </div>

                        <?php } ?>
                    </div>
                </div>

                <!-- nominee-area -->
                <div class="nominee-area">
                    <h1>Official Contract Person</h1>
                    <div class="row gy-4">
                        <?php foreach ($official_contract_person as $v_contract_person) { ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="promanagement-single">
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
                                </div>
                            </div>

                        <?php } ?>
                    </div>
                </div>

                <!-- nominee-area -->
                <div class="nominee-area">
                    <h1>Experience</h1>
                    <div class="row gy-4">
                        <?php foreach ($experience as $v_experience) { ?>
                            <div class="col-lg-4 col-md-10">
                                <div class="experience-single">
                                    <div class="experiences-top">
                                        <img src="<?php echo base_url() ?>web_assets/images/experience.png" alt="image">
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
                                </div>

                                <div class="experiences-bottom">
                                    <p><?php echo $v_experience->completion ?> </p>
                                    <ul>
                                        <li><a href="#">Certificate</a></li>
                                        <li><a href="#">Complition Letter</a></li>
                                    </ul>
                                </div>
                                <br>
                            </div>
                        <?php } ?>


                    </div>
                </div>

        <div class="nominee-area">
            <h1>Area Of Work</h1>
            <div class="row">
                <div class="col-md-10">
                    <div class="legal-all">
                        <?php
                       
                        foreach ($area_of_work as $v_work)
                        { ?>
                            <div class="experiences-bottom p-4">
                                <ul>
                                    <li><a href="#"><?php echo $v_work->telecom_communication; ?></a></li>
                                    <li><a href="#"><?php echo $v_work->telecom_communication; ?></a></li>
                                    <li><a href="#"><?php echo $v_work->telecom_communication; ?></a></li>
                                </ul>

                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>

                <!-- nominee-area -->
                <div class="nominee-area">
                    <h1>Legal</h1>
                    <div class="legal-all">
                        <?php
                        if (isset($legal->audit_report)) { ?>
                            <div class="legal-single">
                                <a href="#">
                                    <img
                                        src="<?php echo base_url() ?>public/user_profile/<?php echo $legal->audit_report; ?>">

                                    <p>Audit Report</p>
                                </a>
                            </div>
                        <?php } ?>

                        <?php
                        if (isset($legal->trade_license)) { ?>
                            <div class="legal-single">

                                <a href="#">
                                    <img
                                        src="<?php echo base_url() ?>public/user_profile/<?php echo $legal->trade_license; ?>">
                                    <p>Trade License</p>
                                </a>
                            </div>
                        <?php } ?>
                        <?php
                        if (isset($legal->tin)) { ?>
                            <div class="legal-single">
                                <a href="#">
                                    <img
                                        src="<?php echo base_url() ?>public/user_profile/<?php echo $legal->tin; ?>">
                                    <p>Tin</p>
                                </a>
                            </div>
                        <?php } ?>

                        <?php
                        if (isset($legal->bin)) { ?>
                            <div class="legal-single">
                                <a href="#">
                                    <img
                                        src="<?php echo base_url() ?>public/user_profile/<?php echo $legal->bin; ?>">
                                    <p>Bin</p>
                                </a>
                            </div>
                        <?php } ?>
                        <?php
                        if (isset($legal->income_tax)) { ?>
                            <div class="legal-single">
                                <a href="#">
                                    <img
                                        src="<?php echo base_url() ?>public/user_profile/<?php echo $legal->income_tax; ?>">
                                    <p>Income TAX Certificate</p>
                                </a>
                            </div>
                        <?php } ?>
                        <?php
                        if (isset($legal->brochure)) { ?>
                            <div class="legal-single">
                                <a href="#">
                                    <img
                                        src="<?php echo base_url() ?>public/user_profile/<?php echo $legal->brochure; ?>">
                                    <p>Brochure</p>
                                </a>
                            </div>
                        <?php } ?>
                        <?php
                        if (isset($legal->joint_venture)) { ?>
                            <div class="legal-single">
                                <a href="#">
                                    <img
                                        src="<?php echo base_url() ?>public/user_profile/<?php echo $legal->joint_venture; ?>">
                                    <p>Joint Venture</p>
                                </a>
                            </div>
                        <?php } ?>
                        <?php
                        if (isset($legal->board_of_resolution)) { ?>
                            <div class="legal-single">
                                <a href="#">
                                    <img
                                        src="<?php echo base_url() ?>public/user_profile/<?php echo $legal->board_of_resolution; ?>">
                                    <p>Board of resolution </p>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <?php
                    if (isset($legal->completion_letter)) { ?>
                        <div class="legal-single">
                            <a href="#">
                                <img
                                    src="<?php echo base_url() ?>public/user_profile/<?php echo $legal->completion_letter; ?>">
                                <p>Completion Letter</p>
                            </a>
                        </div>
                    <?php } ?>
                    <?php
                    if (isset($legal->work_orders)) { ?>
                        <div class="legal-single">
                            <a href="" target="_blank">
                                <img
                                    src="<?php echo base_url() ?>public/user_profile/<?php echo $legal->work_orders; ?>">
                                <p>Work Orders</p>
                            </a>
                        </div>
                    <?php } ?>
                </div>

                <!-- nominee-area -->
                <div class="nominee-area">
                    <h1>Financial</h1>
                    <div class="row">
                            <div class="legal-all">
                                <?php
                                if (isset($financial->financial_statement)) { ?>
                                    <div class="legal-single">
                                        <a href="#">
                                            <img
                                                src="<?php echo base_url() ?>public/user_profile/<?php echo $financial->financial_statement; ?>">
                                            <p>Financial Statement</p>
                                        </a>
                                    </div>
                                <?php } ?>
                                <?php
                                if (isset($financial->bank_solvency)) { ?>
                                    <div class="legal-single">
                                        <a href="#">
                                            <img
                                                src="<?php echo base_url() ?>public/user_profile/<?php echo $financial->bank_solvency; ?>">
                                            <p>Bank Solvency</p>
                                        </a>
                                    </div>
                                <?php } ?>
                                <?php
                                if (isset($financial->credit)) { ?>
                                    <div class="legal-single">
                                        <a href="#">
                                            <img
                                                src="<?php echo base_url() ?>public/user_profile/<?php echo $financial->credit; ?>">
                                            <p>Credit</p>
                                        </a>
                                    </div>
                                <?php } ?>
                                <?php
                                if (isset($financial->bank_statement)) { ?>
                                    <div class="legal-single">
                                        <a href="#">
                                            <img
                                                src="<?php echo base_url() ?>public/user_profile/<?php echo $financial->bank_statement; ?>">
                                            <p>Bank Statement</p>
                                        </a>
                                    </div>
                                <?php } ?>
                                <?php
                                if (isset($financial->liquid_money)) { ?>
                                    <div class="legal-single">
                                        <a href="#">
                                            <img
                                                src="<?php echo base_url() ?>public/user_profile/<?php echo $financial->liquid_money; ?>">
                                            <p>Liquid Money</p>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                    </div>
                </div>

            <!--nominee-area-->
                <div class="nominee-area">
                    <h1>Award & Certification</h1>
                    <div class="row">
                            <div class="legal-all">

                                <?php
                                foreach ($award_certification as $v_certification) { ?>
                                    <div class="legal-single">
                                        <a href="#">
                                            <img
                                                src="<?php echo base_url() ?>public/user_profile/<?php echo $v_certification->image; ?>">

                                            <p><?php echo $v_certification->award_name; ?></p>
                                        </a>

                                    </div>
                                <?php } ?>

                            </div>
                </div>

                <!-- nominee-area -->
                <div class="nominee-area">
                    <h1>Portfolio Link</h1>
                    <div class="legal-all">
                        <?php
                        foreach ($portfolio_link as $v_portfolio) { ?>
                            <div class="legal-single">
                                <a href="#">
                                    <img
                                        src="<?php echo base_url() ?>public/user_profile/<?php echo $v_portfolio->board_of_resolution; ?>">

                                    <p><?php echo $v_portfolio->project_name; ?></p>
                                </a>
                            </div>
                        <?php } ?>

                    </div>
                </div>



            </div>
        </div>
    </section>
</main>


