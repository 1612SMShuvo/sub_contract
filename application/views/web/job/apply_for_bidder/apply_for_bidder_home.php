<main class="body-padding">
    <section class="investproject-area">
        <form action="<?php echo base_url() ?>apply_for_bidder/create_bidder" method="post"
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
                    <h1>Submit a proposal</h1>

                </div>
                <div class="investproject-job">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="invesprojectjob-left">

                                <h4>Job details</h4>
                                <?php
                                if ($job_applys) {
                                    ?>
                                    <h5>Tender ID:<?php echo $job_applys->id; ?></h5>
                                    <h4 class="pb-1"><a href="#"><?php echo $job_applys->job_title; ?></a></h4>
                                    <ul>
                                        <li>Work Type:
                                            <span>
                                                <?php
                                                if ($job_applys->work_type_bidder == 1) {
                                                    echo "Goods";
                                                } else if ($job_applys->work_type_bidder == 2) {
                                                    echo "Service";
                                                } else if ($job_applys->work_type_bidder == 3) {
                                                    echo "Work";
                                                } else if ($job_applys->work_type_bidder == 4) {
                                                    echo "Others";
                                                } ?>
                                            </span>
                                        </li>
                                        <li>Work Authority: <span><?php echo $job_applys->work_authority_name; ?></span>
                                        </li>
                                        <li>Job Category: <span><?php echo $job_applys->category_name; ?></span></li>
                                        <li>Job Sub-Category: <span><?php echo $job_applys->sub_category_name; ?></span>
                                        </li>
                                        <li>Tender Caller: <span><?php echo $job_applys->organization_name; ?></span>
                                        </li>
                                        <li>Published in:
                                            <span><?php echo $job_applys->publish_date; ?></span></li>
                                        <li>Closing date:
                                            <span><?php echo $job_applys->submit_date; ?></span></li>
                                        <li>Approximate Budget:
                                            <span><?php echo $job_applys->approximate_budget; ?></span>
                                        </li>
                                    </ul>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="invesprojectjob-right">
                                <h5>Publish Date</h5>
                                <p><?php echo $job_applys->publish_date; ?></p>
                                <h5>Last Date of Submission</h5>
                                <p><?php echo $job_applys->submit_date; ?></p>
                                <h5>Priority Of Work</h5>
                                <p><?php
                                    if ($job_applys->priority_of_works == 1) {
                                        echo "Urgent Work";
                                    } else if ($job_applys->priority_of_works == 2) {
                                        echo "Very Urgent Work";
                                    } else if ($job_applys->priority_of_works == 3) {
                                        echo "Regular Work";
                                    } ?>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- investproject-require -->
                <div class="investproject-require">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="investprojectreq-single">
                                <h4>Requirement Document (Upto)</h4>
                                <p style="text-align:center; display: none; color:red;" id="alert_msg">Your Tin Id Not
                                    Found</p>
                                <p style="text-align:center; display: none; color:red;" id="alert_msg1">Your Bin Id Not
                                    Found</p>
                                <p style="text-align:center; display: none; color:red;" id="alert_msg2">Your Nid Id Not
                                    Found</p>
                                <p style="text-align:center; display: none; color:red;" id="alert_msg3">Your Tax Return
                                    Id Not Found</p>


                                <?php

                                $result = $this->Apply_for_bidder_model->check_required_document($post_id);
                                ?>
                                <?php if ($result->tin_bidder) { ?>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" id="tin" onclick="get_value();" type="checkbox"
                                               value="1">
                                        <label class="form-check-label"
                                               for="inlineCheckbox1">TIN</label>
                                    </div>
                                <?php } ?>

                                <?php if ($result->bin_bidder) { ?>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="bin"
                                               value="2" onclick="check_bin();">
                                        <label class="form-check-label" for="inlineCheckbox2">BIN</label>
                                    </div>
                                <?php } ?>

                                <?php if ($result->nid_bidder) { ?>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="nid"
                                               value="3" onclick="check_nid();">
                                        <label class="form-check-label" for="inlineCheckbox3">NID</label>
                                    </div>
                                <?php } ?>

                                <?php if ($result->taxreturn_bidder) { ?>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" onclick="check_tax_return();" type="checkbox"
                                               id="tax_return"
                                               value="4">
                                        <label class="form-check-label" for="inlineCheckbox4">Tax Return</label>
                                    </div>
                                <?php } ?>

                                <?php if ($result->taxreturn_bidder) { ?>
                                    <h5 class="pt-2">Audit Report( <?php echo $job_applys->audit_year_bidder; ?>
                                        Years)</h5>
                                    <p style="text-align:center; display: none; color:red;" id="alert_msg4">Your Audit
                                        Report Not Found</p>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="audit_report"
                                               value="option6" onclick="check_audit();">
                                        <label class="form-check-label" for="inlineCheckbox6">Yes</label>
                                    </div>
                                <?php } ?>

                                <!--                                <div class="proposal-input">-->
                                <!--                                    <label>Years</label>-->
                                <!--                                    <input type="text" placeholder="02" name="">-->
                                <!--                                </div>-->
                                <?php if ($result->similar_work_bidder) { ?>
                                    <h5 class="pt-2">Similar Work Experience</h5>
                                    <div class="form-check form-check-inline">
                                        <input type="file" id="inlineCheckbox6" name="similar_work_experience"
                                               onchange="similar_pdf()">
                                        <p id="similar" style="color:red; font-size:12px;"></p>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <div class="investprojectreq-single">
                                <?php if ($result->time) { ?>
                                    <h4>Submit Your Work Schedule</h4>
                                    <table class="add_more_field table table-bordered table-striped table-hover">
                                        <tr>
                                            <td>Submit Your Work Schedule</td>
                                            <td style="width: 80px;">Time</td>
                                            <td style="width: 50px">Action</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" name="work_description[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="time[]">
                                            </td>
                                            <td>
                                                <button type="button" onclick="return add_more();"
                                                        class="btn btn-success">
                                                    <i class="fas fa-plus"></i></button>
                                            </td>
                                        </tr>
                                    </table>
                                    <input type="hidden" name="total_num_of_fields" value="1">
                                    <div id="add_msg" class="text-center"></div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="investprojectreq-single submitproposal">
                                <h4>Budget & Payment</h4>
                                <ul class="calff">
                                    <li>Budget <span><?php echo $job_applys->approximate_budget; ?></span></li>
                                    <li class="pb-3 pt-1">Quotation Price<input type="number" class="form-control"
                                                                                placeholder="Your Quotation Ex:100000"
                                                                                name="quotation_price_for_bidder"></li>
                                    <li><h5>Payment Term</h5> <span>
                                           <?php
                                           //                                           $user_id = $this->session->userdata('user_id');
                                           $bidder_installment = $this->Apply_for_bidder_model->select_bidder_installment($post_id);
                                           foreach ($bidder_installment as $v_installment) { ?>
                                    <li>
                                        <?php
                                        if ($v_installment->payment_sl == 0) {
                                            echo "1st Installment";
                                        } else if ($v_installment->payment_sl == 1) {
                                            echo "2nd Installment";
                                        } else if ($v_installment->payment_sl == 2) {
                                            echo "3rd Installment";
                                        } else if ($v_installment->payment_sl == 3) {
                                            echo "4th Installment";
                                        } else if ($v_installment->payment_sl == 4) {
                                            echo "5th Installment";
                                        } else if ($v_installment->payment_sl == 5) {
                                            echo "6th Installment";
                                        } else if ($v_installment->payment_sl == 6) {
                                            echo "7th Installment";
                                        } else if ($v_installment->payment_sl == 7) {
                                            echo "8th Installment";
                                        } else if ($v_installment->payment_sl == 8) {
                                            echo "9th Installment";
                                        } else if ($v_installment->payment_sl == 9) {
                                            echo "10th Installment";
                                        }
                                        ?>
                                        <span><?php echo $v_installment->bidder_installment_type; ?>%</span>
                                    </li>
                                    <?php } ?>

                                    </span></li>
                                    <li>Security Money <span>10%</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- invest project-cover -->

                <div class="row submit-project">

                    <div class="col-md-6">
                        <div class="investproject-cover">
                            <h4>Cover Letter</h4>
                            <input type="hidden" name="category_id" value="<?php echo $job_applys->work_category_id ?>">
                            <input type="hidden" name="post_id" value="<?php echo $post_id ?>">
                            <textarea id="newtext" name="cover_letter" class="form-control" placeholder="Cover Letter"></textarea>
                            <div class="form-single">
                                <input type="file" id="cover_letter_file" class="form-control" name="cover_letter_file"
                                       tabindex="0" onchange="cover_letter_pdf()" required="required">
                                <p id="cover" style="color:red; font-size: 12px;"></p>
                            </div>
                        </div>
                    </div>

                    <?php if ($result->spec) { ?>
                        <div class="col-md-6">
                            <div class="investproject-cover">
                                <h4>Work Description/ Specification</h4>
                                <textarea id="newtext4" name="specification"></textarea>
                                <div class="form-single">
                                    <input type="file" required="required" class="form-control" id="specification_file"
                                           name="specification_file"
                                           tabindex="0" onchange="specification_pdf()">
                                    <p id="specification" style="color:red; font-size:12px;"></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if ($result->workprocess) { ?>
                        <div class="col-md-6">
                            <div class="investproject-cover">
                                <h4>Work Process</h4>
                                <textarea id="newtext5" name="work_process"></textarea>
                                <div class="form-single">
                                    <input type="file" id="work_process_file" class="form-control"
                                           name="work_process_file" tabindex="0" onchange="work_process_pdf()">
                                    <p id="work_process" style="color:red; font-size:12px;"></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="col-md-6">
                        <div class="investproject-cover">
                            <h4>Budget</h4>
                            <textarea id="newtext6" name="budget"></textarea>
                            <div class="form-single">
                                <input type="file" id="budget_file" class="form-control" name="budget_file" tabindex="0"
                                       onchange="budget_pdf()">
                                <p id="budget" style="color:red; font-size:12px;"></p>
                            </div>
                        </div>
                    </div>


                    <?php if ($result->catalog) { ?>
                        <div class="col-md-6">
                            <div class="investproject-cover">
                                <h4>Catalog</h4>
                                <div class="divupload">
                                    <table class="add_more_field1 table table-bordered table-striped table-hover">
                                        <tr>
                                            <td></td>
                                            <td style="width: 50px">Action</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="file" class="form-control" id="catalog_file1"
                                                       name="catalog_file1"
                                                       onchange="catelog_pdf(1)">
                                            </td>
                                            <td>
                                                <button type="button" onclick="return add_more1();"
                                                        class="btn btn-success">
                                                    <i class="fas fa-plus"></i></button>
                                            </td>
                                        </tr>
                                    </table>
                                    <input type="hidden" name="total_num_of_fields1" value="1">
                                    <p id="catelog" style="color: red; font-size: 12px; "></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($result->manpower) { ?>
                        <div class="col-md-6">
                            <div class="investproject-cover">
                                <h4>Manpower</h4>
                                <textarea id="newtext7" name="manpower"></textarea>
                                <div class="form-single">
                                    <input type="file" id="manpower_file" class="form-control" name="manpower_file"
                                           tabindex="0" onblur="manpower_pdf()">
                                    <p id="manpower" style="color:red; font-size: 12px;"></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php
                    if ($check) { ?>
                        <div class="col-md-12 pt-3 pb-3">
                            <button disabled="disabled">Submit</button>
                        </div>
                    <?php } else { ?>

                        <div class="col-md-12 pt-3 pb-3">
                            <button>Submit</button>
                        </div>
                    <?php } ?>

                </div>

            </div>
        </form>
    </section>
</main>
<script>
    tinymce.init({
        selector: '#newtext4'
    });
</script>

<script>
    var i = 1;
    function add_more() {
        i++;
        $('.add_more_field').append('<tr class="remove_field' + i + '">\
            <td>\
            <input type="text" class="form-control" name="work_description[]">\
            </td>\
            <td>\
            <input type="text" class="form-control" name="time[]">\
            </td>\
            <td>\
            <button onclick="return remove_button($(this));" value="' + i + '" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>\
        </td>\
        </tr>');
        var total_fields = parseInt($('input[name="total_num_of_fields"]').val());
        $('input[name="total_num_of_fields"]').val(total_fields + 1);
    }
</script>
<script>
    function remove_button($this) {
        var remove_id = $this.val();
        $(".remove_field" + remove_id + "").remove();
        var total_fields = parseInt($('input[name="total_num_of_fields"]').val());
        $('input[name="total_num_of_fields"]').val(total_fields - 1);
    }
</script>


<script>
    var i = 1;
    function add_more1() {
        i++;
        $('.add_more_field1').append('<tr class="remove_field' + i + '">\
            <td>\
             <input type="file" class="form-control" id="catalog_file' + i + '" name="catalog_file' + i + '" onchange="catelog_pdf(' + i + ')">\
            </td>\
            <td>\
            <button onclick="return remove_button1($(this));" value="' + i + '" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>\
        </td>\
        </tr>');
        var total_fields = parseInt($('input[name="total_num_of_fields1"]').val());
        $('input[name="total_num_of_fields1"]').val(total_fields + 1);
    }
</script>
<script>
    function remove_button1($this) {
        var remove_id = $this.val();
        $(".remove_field" + remove_id + "").remove();
        var total_fields = parseInt($('input[name="total_num_of_fields1"]').val());
        $('input[name="total_num_of_fields1"]').val(total_fields - 1);
    }
</script>


<script>
    function get_value() {
        var tin = $('#tin').val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>apply_for_bidder/check_tin',
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
            url: '<?php echo base_url() ?>apply_for_bidder/check_bin',
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
            url: '<?php echo base_url() ?>apply_for_bidder/check_nid',
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
    function check_audit() {
        var tax_return = $('#audit_report').val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>apply_for_bidder/check_audit_report',
            success: function (result) {
                if (result) {
                    return false;
                } else {
                    $('#audit_report').prop('checked', false);
                    $('#alert_msg4').show().delay(2000).fadeOut(1000);

                    return false;
                }
            }
        });
        return false;
    }
</script>

<script>
    function check_tax_return() {
        var tax_return = $('#tax_return').val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>apply_for_bidder/check_tax_return',
            success: function (result) {
                if (result) {
                    return false;
                } else {
                    $('#tax_return').prop('checked', false);
                    $('#alert_msg3').show().delay(2000).fadeOut(1000);

                    return false;
                }
            }
        });
        return false;
    }
</script>


<script>
    function check_user() {
        var submit = $('#submit').val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>apply_for_bidder/check_user',
            success: function (result) {
                if (result) {
                    return false;
                } else {
                    $('#submit').prop('checked', false);
                    $('#alert_msg7').show().delay(2000).fadeOut(1000);

                    return false;
                }
            }
        });
        return false;
    }
</script>


<script type="text/javascript">
    function similar_pdf() {
        var fname = $('#inlineCheckbox6').val();
        var re = /(\.pdf|\.docx|\.doc)$/i;

        if (re.exec(fname)) {

            document.getElementById("similar").innerHTML = "";

        }
        else {
            document.getElementById("similar").innerHTML = " Invalid File Extension Only Pdf and Doc and Docx!";

        }
    }
</script>

<script type="text/javascript">
    function cover_letter_pdf() {
        var fname = $('#cover_letter_file').val();
        var re = /(\.pdf|\.docx|\.doc)$/i;

        if (re.exec(fname)) {

            document.getElementById("cover").innerHTML = "";

        }
        else {
            document.getElementById("cover").innerHTML = " Invalid File Extension Only Pdf and Doc and Docx!";

        }
    }
</script>


<script type="text/javascript">
    function cover_letter_pdf() {
        var fname = $('#cover_letter_file').val();
        var re = /(\.pdf|\.docx|\.doc)$/i;

        if (re.exec(fname)) {

            document.getElementById("cover").innerHTML = "";

        }
        else {
            document.getElementById("cover").innerHTML = " Invalid File Extension Only Pdf and Doc and Docx!";

        }
    }
</script>

<script type="text/javascript">
    function specification_pdf() {
        var fname = $('#specification_file').val();
        var re = /(\.pdf|\.docx|\.doc)$/i;

        if (re.exec(fname)) {

            document.getElementById("specification").innerHTML = "";

        }
        else {
            document.getElementById("specification").innerHTML = " Invalid File Extension Only Pdf and Doc and Docx!";

        }
    }
</script>


<script type="text/javascript">
    function work_process_pdf() {
        var fname = $('#work_process_file').val();
        var re = /(\.pdf|\.docx|\.doc)$/i;

        if (re.exec(fname)) {

            document.getElementById("work_process").innerHTML = "";

        }
        else {
            document.getElementById("work_process").innerHTML = " Invalid File Extension Only Pdf and Doc and Docx!";

        }
    }
</script>


<script type="text/javascript">
    function budget_pdf() {
        var fname = $('#budget_file').val();
        var re = /(\.pdf|\.docx|\.doc)$/i;

        if (re.exec(fname)) {

            document.getElementById("budget").innerHTML = "";

        }
        else {
            document.getElementById("budget").innerHTML = " Invalid File Extension Only Pdf and Doc and Docx!";

        }
    }
</script>


<script type="text/javascript">
    function catelog_pdf($id) {
        var set_id = $id;
        var fname = $('#catalog_file' + set_id + "").val();
        var re = /(\.pdf|\.docx|\.doc)$/i;
        if (re.exec(fname)) {
            document.getElementById("catelog").innerHTML = "";
        }
        else {
            document.getElementById("catelog").innerHTML = " Invalid File Extension Only Pdf and Doc and Docx!";
        }
    }
</script>


<script type="text/javascript">
    function manpower_pdf() {
        var fname = $('#manpower_file').val();
        var re = /(\.pdf|\.docx|\.doc)$/i;

        if (re.exec(fname)) {

            document.getElementById("manpower").innerHTML = "";

        }
        else {
            document.getElementById("manpower").innerHTML = " Invalid File Extension Only Pdf and Doc and Docx!";

        }
    }
</script>


