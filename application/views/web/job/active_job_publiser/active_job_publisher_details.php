<main class="body-padding">
    <section class="specification-top">
        <div class="container">
            <div class="row d-flex align-items-center">
                <?php
                foreach ($details_active_job as $v_my_bid_details) {
                    ?>
                    <div class="col-md-8">
                        <div class="specification-topleft">

                            <h4>Tender ID <?php echo $v_my_bid_details->id ?></h4>
                            <h4><span><?php echo $v_my_bid_details->job_title ?></span></h4>
                            <ul>
                                <li>Work Type: <span>
                                                 <?php
                                                 if ($v_my_bid_details->work_type_bidder == 1) {
                                                     echo "Goods";
                                                 } else if ($v_my_bid_details->work_type_bidder == 2) {
                                                     echo "Service";
                                                 } else if ($v_my_bid_details->work_type_bidder == 3) {
                                                     echo "Work";
                                                 } else if ($v_my_bid_details->work_type_bidder == 4) {
                                                     echo "Others";
                                                 } ?>
                                            </span></li>
                                <li>Work Authority:<span><?php echo $v_my_bid_details->work_authority_name; ?></span>
                                </li>

                                <li>Job Category: <span><?php echo $v_my_bid_details->category_name; ?></span></li>
                                <li>Job Sub-Category: <span><?php echo $v_my_bid_details->sub_category_name; ?></span>
                                </li>
                                <li>Tender Caller: <span><?php echo $v_my_bid_details->organization_name; ?></span></li>


                                <!--                                <li>Approve Budget: <span>-->
                                <!--                                        TK</span></li>-->

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="specification-topright">
                            <div>
                                <img
                                    src="<?php echo base_url() ?>public/user_profile/<?php echo $v_my_bid_details->company_logo; ?>"
                                    alt="image">
                            </div>
                            <div>
                                <h4><?php echo $v_my_bid_details->organization_name; ?></h4>
                                <p><?php echo $v_my_bid_details->office_address; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="requestinvite-area specification-area">
        <div class="container">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home"
                            type="button" role="tab" aria-controls="pills-home" aria-selected="true">Milestone
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link " id="pills-earning-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-earning" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">Payment
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Agreement, T&C
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Spec & Requerment
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="milestone pt-4">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Installment</th>
                                <th>Agreement Money</th>
                                <th>Work Process</th>
                                <th>Attachment</th>
                                <th>Request money</th>
                                <th>Action</th>
                                <th>Status</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php foreach ($payment_term as $v_payment_term) { ?>
                                <td><?php echo $v_payment_term->payment_date; ?></td>
                                <td><?php echo $v_payment_term->work_description; ?></td>
                                <td><?php echo $v_payment_term->amount; ?></td>
                                <td><?php echo $v_payment_term->work_process; ?></td>
                                <td>
                                    <?php if ($v_payment_term->attachment) { ?>
                                    <a href="<?php echo base_url() ?>public/user_profile/<?php echo $v_payment_term->attachment; ?>"
                                       target="_blank">
                                        <img src="<?php echo base_url() ?>public/user_profile/pdf45.png"
                                             style="height:50px; width:50px;">
                                        <?php } ?>
                                </td>
                                <td><?php echo $v_payment_term->request_money; ?></td>

                                <td>
                                    <a href="#" onclick="return payment_approve(<?php echo $v_payment_term->id ?>);"
                                       class="btn" style="background-color:#6c757d; color:white; border-radius:15px; ">Approve</a>
                                    <a href="" onclick="return payment_processing(<?php echo $v_payment_term->id ?>);"
                                       class="btn" style="background-color:#004793; color:white; border-radius:15px;">Processing</a>
                                    <a href="#" onclick="return payment_paid(<?php echo $v_payment_term->id ?>);"
                                       class="btn btn-success" style="border-radius:15px;">Paid</a>
                                </td>
                                <td>
                                    <?php if ($v_payment_term->status == 1) {
                                        echo "<p style='color: red;'>Pending</p>";
                                    } else if ($v_payment_term->status == 2) {
                                        echo "<p>Approved</p>";
                                    } else if ($v_payment_term->status == 3) {
                                        echo "<p>Processing</p>";
                                    } else if ($v_payment_term->status == 4) {
                                        echo "<p>Paid</p>";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade show " id="pills-earning" role="tabpanel"
                     aria-labelledby="pills-earning-tab">

                    <div class="milestone pt-4">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Installment</th>
                                <th>Agreement Money</th>
                                <th>Requested</th>
                                <th>Approve Money</th>
                                <th>Remaining</th>
                                <th>Total Paid</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $total_paid = 0;
                            foreach ($payment_term as $v_payment_term) { ?>
                                <tr>
                                    <td><?php echo $v_payment_term->payment_date; ?></td>
                                    <td><?php echo $v_payment_term->work_description; ?></td>
                                    <td><?php echo $v_payment_term->amount; ?></td>
                                    <td><?php echo $v_payment_term->request_money; ?></td>
                                    <td>
                                        <?php
                                        if ($v_payment_term->status == 2 or $v_payment_term->status == 4) {
                                            echo $v_payment_term->request_money;
                                        } ?>
                                    </td>
                                    <td>
                                        <?php
                                        $tt = $v_payment_term->amount;
                                        $tt1 = $v_payment_term->request_money;

                                        echo round((int)$tt - (int)$tt1);
                                        ?>
                                    </td>

                                    <td>
                                        <?php
                                        if ($v_payment_term->status == 4) {
                                            $ss = $v_payment_term->request_money;
                                            $total_paid += (int)$ss;
                                            echo $total_paid;
                                        } else {
                                            echo "";
                                        } ?>
                                    </td>

                                    <td>
                                        <?php if ($v_payment_term->status == 1) {
                                            echo "<p style='color: red;'>Pending</p>";
                                        } else if ($v_payment_term->status == 2) {
                                            echo "<p>Approved</p>";
                                        } else if ($v_payment_term->status == 3) {
                                            echo "<p>Processing</p>";
                                        } else if ($v_payment_term->status == 4) {
                                            echo "<p>Paid</p>";
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="agrement-all pt-4">
                        <div class="agremetn-single">
                            <h5>Agreement</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard
                                McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of
                                the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through
                                the cites of the word in classical literature, discovered the undoubtable source. Lorem
                                Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The
                                Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the
                                theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum,
                                "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                        </div>
                        <div class="agremetn-single">
                            <h5>Terms of Service</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard
                                McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of
                                the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through
                                the cites of the word in classical literature, discovered the undoubtable source. Lorem
                                Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The
                                Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the
                                theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum,
                                "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                        </div>
                        <div class="agremetn-single">
                            <h5>Condiion</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard
                                McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of
                                the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through
                                the cites of the word in classical literature, discovered the undoubtable source. Lorem
                                Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The
                                Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the
                                theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum,
                                "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                        </div>
                        <div class="agremetn-single">
                            <h5>Privacy & Policy</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard
                                McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of
                                the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through
                                the cites of the word in classical literature, discovered the undoubtable source. Lorem
                                Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The
                                Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the
                                theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum,
                                "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                    <div class="reqinvite-right pt-4">

                        <?php
                        foreach ($requirement as $v_requirement) {
                        ?>
                            <div class="reqinvite-rightsingle">

                                <div class="reqinvite-righttop">
                                    <div class="reqinvite-righttop-left">
                                        <h4>Cover Latter for this Project</h4>
                                    </div>
                                    <div class="reqinvite-righttop-right">
                                        <p>Budget <span
                                                class="ml-20"><?php echo $v_requirement->approximate_budget; ?></span>
                                        </p>
                                        <p>Quotation Price <span class="ml-20"><?php echo $v_requirement->quotation_price_for_bidder; ?></span></p>
                                    </div>
                                </div>
                                <p><?php echo $v_requirement->cover_letter; ?></p>
                            </div>

                            <div class="reqinvite-rightsingle pt-4">
                                <h4 class="pb-4">Specification</h4>
                                <p><?php echo $v_requirement->specification; ?></p>
                                <ul class="legal">
                                    <li><a href="<?php echo base_url() ?>public/user_profile/<?php echo $v_requirement->specification_file; ?>" target="_blank">
                                            <img src="<?php echo base_url() ?>public/user_profile/pdf45.png"
                                                 style="width:100px; height:100px;">

                                        </a></li>

                                </ul>
                            </div>

                            <div class="reqinvite-rightsingle pt-4">
                                <h4 class="pb-4">Work Process</h4>
                                <p><?php echo $v_requirement->work_process; ?></p>
                                <ul class="legal">
                                    <li><a href="<?php echo base_url() ?>public/user_profile/<?php echo $v_requirement->work_process_file; ?>" target="_blank">
                                            <img src="<?php echo base_url() ?>public/user_profile/pdf45.png"
                                                 style="width:100px; height:100px;">

                                        </a></li>

                                </ul>
                            </div>

                            <div class="reqinvite-rightsingle pt-4">
                                <h4 class="pb-4">Budget</h4>
                                <p><?php echo $v_requirement->budget; ?></p>
                                <ul class="legal">
                                    <li><a href="<?php echo base_url() ?>public/user_profile/<?php echo $v_requirement->budget_file; ?>" target="_blank">
                                            <img src="<?php echo base_url() ?>public/user_profile/pdf45.png"
                                                 style="width:100px; height:100px;">

                                        </a></li>

                                </ul>
                            </div>

                            <div class="reqinvite-rightsingle pt-4">
                                <h4 class="pb-4">Manpower</h4>
                                <p><?php echo $v_requirement->manpower; ?></p>

                            </div>

                            <div class="reqinvite-rightsingle pt-4">

                                <h4 class="pb-4">Catalog</h4>
                                <p></p>
                                <ul class="legal">
                                    <?php
                                    $get_file = $this->View_profile_publisher_model->select_all_file($v_requirement->id);
                                    foreach ($get_file as $v_file) {
                                        ?>
                                        <li>
                                            <a href="<?php echo base_url() ?>public/user_profile/<?php echo $v_file->catalog; ?>"
                                               target="_blank">
                                                <img src="<?php echo base_url() ?>public/user_profile/pdf45.png"
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
                                    $work_schedule = $this->View_profile_publisher_model->select_all_work_schedule($v_requirement->id);
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

                        <?php }?>
                    </div>

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

            </div>
        </div>
    </div>
</div>


<script>
    function payment_approve($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>active_job_publiser/payment_approve_active/' + $id,
            success: function (result) {
                if (result) {
                    window.setTimeout(function () {
                        window.location.href = "<?php echo base_url()?>/active_job_publiser/all_active_job_publiser/";
                    }, 100);
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
    function payment_processing($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>active_job_publiser/payment_processing_active/' + $id,
            success: function (result) {

                if (result) {
                    window.setTimeout(function () {
                        window.location.href = "<?php echo base_url()?>/active_job_publiser/all_active_job_publiser/";
                    }, 100);
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
    function payment_paid($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>active_job_publiser/payment_paid_active_bidder/' + $id,
            success: function (result) {
                if (result) {
                    window.setTimeout(function () {
                        window.location.href = "<?php echo base_url()?>/active_job_publiser/all_active_job_publiser/";
                    }, 100);
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>



