<main class="body-padding">
    <section class="investproject-area">
        <form action="<?php echo base_url() ?>apply_for_investor/create_investor" method="post"
              enctype="multipart/form-data">
            <div class="container">
                <div class="investproject-top">
                    <?php if ($check) { ?>
                        <div class="alert alert-warning alert-dismissible fade show">

                            <h4 class="alert-heading"><i class="fas fa-exclamation-triangle"></i> Warning!</h4>
                            <hr>

                            <h5 style="text-align:left">You have already apply this job............!</h5>

                        </div>
                    <?php } ?>
                    <h1>Invest on a project</h1>
                </div>
                <div class="investproject-job">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="invesprojectjob-left">
                                <h4>Job details</h4>
                                <?php
                                $job_apply_investor = $this->Apply_for_investor_model->job_apply_view_investor($post_id);
                                if ($job_apply_investor) {
                                ?>
                                <h5>Tender ID:<?php echo $job_apply_investor->id; ?></h5>
                                <h4 class="pb-1"><a href="#"><?php echo $job_apply_investor->job_title; ?></a></h4>
                                <ul>
                                    <li>Work Type: <span>
                                        <?php
                                        if ($job_apply_investor->work_type_bidder == 1) {
                                            echo "Goods";
                                        } else if ($job_apply_investor->work_type_bidder == 2) {
                                            echo "Service";
                                        } else if ($job_apply_investor->work_type_bidder == 3) {
                                            echo "Work";
                                        } else if ($job_apply_investor->work_type_bidder == 4) {
                                            echo "Others";
                                        } ?>
                                    </span></li>
                                    <li>Work Authority: <span><?php echo $job_apply_investor->work_authority_name; ?></span></li>
                                    <li>Job Category: <span><?php echo $job_apply_investor->category_name; ?></span></li>
                                    <li>Job Sub-Category: <span><?php echo $job_apply_investor->sub_category_name; ?></span></li>
                                    <li>Tender Caller:
                                        <span><?php echo $job_apply_investor->organization_name; ?></span>
                                    </li>
                                    <li>Published in:
                                        <span><?php echo $job_apply_investor->publish_date; ?></span></li>
                                    <li>Closing date:
                                        <span><?php echo $job_apply_investor->submit_date; ?></span></li>
                                    <li>Approximate Budget:
                                        <span><?php echo $job_apply_investor->approximate_budget; ?></span>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="invesprojectjob-right">
                                <h5>Publish Date</h5>
                                <p><?php echo $job_apply_investor->publish_date; ?></p>
                                <h5>Last Date of Submission</h5>
                                <p><?php echo $job_apply_investor->submit_date; ?></p>
                                <h5>Priority Of Work</h5>
                                <p><?php
                                    if ($job_apply_investor->priority_of_works == 1) {
                                        echo "Urgent Work";
                                    } else if ($job_apply_investor->priority_of_works == 2) {
                                        echo "Very Urgent Work";
                                    } else if ($job_apply_investor->priority_of_works == 3) {
                                        echo "Regular Work";
                                    } ?></p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                </div>
                <!-- investproject-require -->
                <div class="investproject-require">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="investprojectreq-single">
                                <h4>Requirement Document</h4>
                                <p style="text-align:center; display: none; color:red;" id="alert_msg">Your Tin Id Not
                                    Found</p>
                                <p style="text-align:center; display: none; color:red;" id="alert_msg1">Your Bin Id Not
                                    Found</p>
                                <p style="text-align:center; display: none; color:red;" id="alert_msg2">Your Nid Id Not
                                    Found</p>
                                <p style="text-align:center; display: none; color:red;" id="alert_msg3">Your Liquid
                                    Money
                                    Not Found</p>
                                <p style="text-align:center; display: none; color:red;" id="alert_msg4">Your Bank
                                    Statement
                                    Not Found</p>
                                <?php

                                $result = $this->Apply_for_investor_model->check_required_document_investor($post_id);
                                ?>
                                <?php if ($result->tin_investor) { ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="tin" onclick="check_tin();"
                                           value="1" required="required">
                                    <label class="form-check-label" for="inlineCheckbox1">TIN</label>
                                </div>
                                <?php }?>

                                <?php if ($result->bin_investor) { ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="bin" onclick="check_bin();"
                                           value="2" required="required">
                                    <label class="form-check-label" for="inlineCheckbox2">BIN</label>
                                </div>
                                <?php }?>

                                <?php if ($result->nid_investor) { ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="nid" onclick="check_nid();"
                                           value="3" required="required">
                                    <label class="form-check-label" for="inlineCheckbox3">NID</label>
                                </div>
                                <?php }?>


                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="liquid_money"
                                           onclick="check_liquid_money();"
                                           value="4" required="required">
                                    <label class="form-check-label" for="inlineCheckbox4">LIQUID MONEY</label>
                                </div>


                                <?php if ($result->taxreturn_investor) { ?>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="bank_statement"
                                           onclick="check_bank_statement();"
                                           value="5" required="required">
                                    <label class="form-check-label" for="inlineCheckbox5">Bank Statement</label>
                                </div>
                                <?php }?>

                                <h5 class="pt-2">Audit Report</h5>
                                <p style="text-align:center; display: none; color:red;" id="alert_msg5">Your Audit
                                    Report
                                    Not Found</p>

                                <?php if ($result->audit_report_investor) { ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="audit_report"
                                           onclick="check_audit_report();"
                                           value="6" required="required">
                                    <label class="form-check-label" for="inlineCheckbox6">Yes</label>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <div class="investprojectreq-single">
                                <h4>Investment</h4>
                                <?php $job_apply_investor = $this->Apply_for_investor_model->job_apply_view_investor($post_id); ?>
                                <ul>
                                    <li>Investment Required
                                        <span><?php echo $job_apply_investor->investor_required; ?></span></li>
                                    <li>Invest Amount <span><?php echo $job_apply_investor->investment_amount; ?>
                                            TK</span></li>
                                    <li>Benefit of Investment
                                        <span><?php echo $job_apply_investor->profit_share; ?></span></li>
                                    <li>Security Money
                                        <span><?php echo $job_apply_investor->security_investor?></span>
                                    </li>
                                    <?php
                                   
                                    $invest_installment = $this->Apply_for_investor_model->select_invest_installment($post_id);
                                    foreach ($invest_installment as $v_installment) {
                                        ?>
                                        <li>
                                            <?php
                                            if ($v_installment->payment_sl == 0) {
                                                echo "First Investment";
                                            } else if ($v_installment->payment_sl == 1) {
                                                echo "Second Investment";
                                            } else if ($v_installment->payment_sl == 2) {
                                                echo "Third Investment";
                                            } else if ($v_installment->payment_sl == 3) {
                                                echo "Fourth Investment";
                                            } else if ($v_installment->payment_sl == 4) {
                                                echo "Five Investment";
                                            } else if ($v_installment->payment_sl == 5) {
                                                echo "Six Investment";
                                            } else if ($v_installment->payment_sl == 6) {
                                                echo "Seven Investment";
                                            } else if ($v_installment->payment_sl == 7) {
                                                echo "Eight Investment";
                                            } else if ($v_installment->payment_sl == 8) {
                                                echo "Nine Investment";
                                            } else if ($v_installment->payment_sl == 9) {
                                                echo "Ten Investment";
                                            }
                                            ?>
                                            <span><?php echo $v_installment->bidder_installment_type; ?>%</span>
                                        </li>

                                    <?php } ?>

                                </ul>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="investprojectreq-single">
                                <h4>Investment Process</h4>
                                <label class="cal">Interested Investment</label>
                                <input type="number"  class="calf" name="interested_investment" placeholder="Ex: 3000000">
                                <ul class="calff">
                                    <li>Benefit of Investment <span>
                                            <?php
                                            $tt = $job_apply_investor->investment_amount;
                                            $tt1 = $job_apply_investor->profit_share;
                                            $tt2 = $job_apply_investor->investment_amount;
                                            echo round(((int)$tt * (int)$tt1) / 100) +(int)$tt2;
                                            ?>
                                        </span></li>
                                    <?php foreach ($invest_installment as $v_installment) { ?>
                                        <li>
                                            <?php
                                            if ($v_installment->payment_sl == 0) {
                                                echo "First Investment";
                                            } else if ($v_installment->payment_sl == 1) {
                                                echo "Second Investment";
                                            } else if ($v_installment->payment_sl == 2) {
                                                echo "Third Investment";
                                            } else if ($v_installment->payment_sl == 3) {
                                                echo "Fourth Investment";
                                            } else if ($v_installment->payment_sl == 4) {
                                                echo "Five Investment";
                                            } else if ($v_installment->payment_sl == 5) {
                                                echo "Six Investment";
                                            } else if ($v_installment->payment_sl == 6) {
                                                echo "Seven Investment";
                                            } else if ($v_installment->payment_sl == 7) {
                                                echo "Eight Investment";
                                            } else if ($v_installment->payment_sl == 8) {
                                                echo "Nine Investment";
                                            } else if ($v_installment->payment_sl == 9) {
                                                echo "Ten Investment";
                                            }
                                            ?>
                                            <span><?php echo round(((int)$v_installment->bidder_installment_type * (int)$job_apply_investor->investment_amount) / 100); ?></span>
                                        </li>

                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- investproject-cover -->
                <div class="investproject-cover">
                    <h4>Cover Letter</h4>
                    <textarea id="newtext" name="cover_letter"></textarea>
                    <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
                </div>

                <!-- investproject-terms -->
                <div class="investproject-terms">
                    <h4>Terms & Conditions</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                        Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                        words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                        classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32
                        and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,
                        written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                        Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in
                        section 1.10.32.</p>
                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                        Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced
                        in their exact original form, accompanied by English versions from the 1914 translation by H.
                        Rackham.</p>
                    <div class="postjob-button row bbtt pt-4">
                        <div class="form-check mb-4 col-6">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked=""
                                   tabindex="0">
                            <label class="form-check-label" for="flexCheckChecked">
                                I agree with all statement in <a href="<?php echo base_url()?>/terms_privacy/terms_service" tabindex="0">terms of service</a>
                            </label>
                        </div>
                        <div class="signin-button col-6">
                            <?php if ($check) { ?>
                                <div class="col-md-12 pt-3 pb-3">
                                    <button disabled="disabled">Request an Investment</button>
                                </div>
                            <?php } else { ?>
                                <div class="col-md-12 pt-3 pb-3">
                                    <button>Request an Investment</button>
                                </div>
                            <?php } ?>

                        </div>
                    </div>

                </div>
            </div>
        </form>
    </section>
</main>




<script>
    function check_tin() {
        var tin = $('#tin').val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>apply_for_investor/check_tin',
            success: function (result) {
                if (result) {
                    return false;
                } else {
                    $('#tin').prop('checked', false);
                    $('#alert_msg').show().delay(2000).fadeOut(1000);

                    return false;
                }
            }
        });
        return false;
    }
</script>


<script>
    function check_bin() {
        var bin = $('#bin').val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>apply_for_investor/check_bin',
            success: function (result) {
                if (result) {
                    return false;
                } else {
                    $('#bin').prop('checked', false);
                    $('#alert_msg1').show().delay(2000).fadeOut(1000);

                    return false;
                }
            }
        });
        return false;
    }
</script>


<script>
    function check_nid() {
        var nid = $('#nid').val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>apply_for_investor/check_nid',
            success: function (result) {
                if (result) {
                    return false;
                } else {
                    $('#nid').prop('checked', false);
                    $('#alert_msg2').show().delay(2000).fadeOut(1000);

                    return false;
                }
            }
        });
        return false;
    }
</script>

<script>
    function check_liquid_money() {
        var liquid_money = $('#liquid_money').val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>apply_for_investor/check_liquid_money',
            success: function (result) {
                if (result) {
                    return false;
                } else {
                    $('#liquid_money').prop('checked', false);
                    $('#alert_msg3').show().delay(2000).fadeOut(1000);

                    return false;
                }
            }
        });
        return false;
    }
</script>

<script>
    function check_bank_statement() {
        var bank_statement = $('#bank_statement').val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>apply_for_investor/check_bank_statement',
            success: function (result) {
                if (result) {
                    return false;
                } else {
                    $('#bank_statement').prop('checked', false);
                    $('#alert_msg4').show().delay(2000).fadeOut(1000);

                    return false;
                }
            }
        });
        return false;
    }
</script>

<script>
    function check_audit_report() {
        var audit_report = $('#audit_report').val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>apply_for_investor/check_audit_report',
            success: function (result) {
                if (result) {
                    return false;
                } else {
                    $('#audit_report').prop('checked', false);
                    $('#alert_msg5').show().delay(2000).fadeOut(1000);

                    return false;
                }
            }
        });
        return false;
    }
</script>
