<main>
    <section class="specification-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab">
                        <?php
                        foreach ($aggrement_job as $v_jobs) { ?>
                        <div class="jobdetails-left">
                            <div class="findwork-singlejob">
                                <div class="singlejob-time">
                                    <div class="singlejob-ids">
                                        <h4>Tender ID:<?php echo $v_jobs->id; ?></h4>
                                        <p><?php echo $v_jobs->date_and_time; ?></p>
                                    </div>
                                    <div class="singlejob-anchors">

                                    </div>
                                </div>
                                <h4><a href="#"><?php echo $v_jobs->job_title; ?></a></h4>
                                <div class="singlejob-feature">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <ul>
                                                <ul>

                                                    <li>Work Type: <span>
                                                 <?php
                                                 if ($v_jobs->work_type_bidder == 1) {
                                                     echo "Goods";
                                                 } else if ($v_jobs->work_type_bidder == 2) {
                                                     echo "Service";
                                                 } else if ($v_jobs->work_type_bidder == 3) {
                                                     echo "Work";
                                                 } else if ($v_jobs->work_type_bidder == 4) {
                                                     echo "Others";
                                                 } ?>
                                            </span></li>
                                                    <li>Work Authority:
                                                        <span><?php echo $v_jobs->work_authority_name; ?></span></li>
                                                    <li>Job Category: <span><?php echo $v_jobs->category_name; ?></span>
                                                    </li>
                                                    <li>Job Sub-Category:
                                                        <span><?php echo $v_jobs->sub_category_name; ?></span></li>
                                                    <li>Tender Caller:<span><?php echo $v_jobs->organization_name; ?></span></li>
                                                    <li>Total Budget:<span><?php echo $v_jobs->approximate_budget; ?></span></li>
                                                </ul>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="#" method="post" id="invest_agreement_from">
                        <div class="form-group purple-border">
                            <input type="hidden" name="post_id" value="<?php echo $v_jobs->id; ?>">
                            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                            <label for="exampleFormControlTextarea4">Work Description</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea4" cols="30" rows="7" placeholder="Work Description">
                            
                        </textarea>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="second">Time</label>
                                <input type="text" name="time" class="form-control" placeholder="Time">
                            </div>
                            <div class="col-md-6">
                                <label for="second">Total Budget</label>
                                <input type="text" name="budget" class="form-control" placeholder="Budget">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                        <div class="col-md-6">
                            <label for="second">Investment Amount</label>
                            <input type="text" name="invest_amount" onkeyup="addNumbers()" id="first" class="form-control" placeholder="Invest Amount">
                        </div>
                            <div class="col-md-6">
                                <label for="second">Profit Share</label>
                                <input type="text" name="profit_share" id="second" value="<?php echo $v_jobs->profit_share; ?>" readonly="readonly" class="form-control" placeholder="Invest Amount">
                            </div>
                            </div> <br>

                        <div class="col-md-12">
                            <label for="second">Total Benefit Amount</label>
                            <input type="text" name="total_benifit_amount" id="total_benifit_amount"  class="form-control" placeholder="Total Profit Amount">
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="investprojectreq-single">
                                <form action="#" id="add_fieldset_info" method="post">
                                    <table class="add_more_field table table-bordered table-striped table-hover">
                                        <tr>
                                            <td>Payment Process</td>
                                            <td style="width: 140px;">Amount</td>
                                            <td style="width: 50px">Action</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" name="work_description[]">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="amount[]">
                                            </td>
                                            <td>
                                                <button type="button" onclick="return add_more();"
                                                        class="btn btn-success">
                                                    <i class="fas fa-plus"></i></button>
                                            </td>
                                        </tr>
                                    </table>
                                    <input type="hidden" name="total_num_of_fields" value="1">
                                    <div id="experience_msg" class="text-center" style="display: none; color:green;">
                                        Agreement form Successfully Submitted
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success btn-sm">Hire Bidder</button>
                                    </div>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="requestinvite-area specification-area">
        <div class="container">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    var i = 1;
    function add_more() {
        i++;
        $('.add_more_field').append('<tr class="remove_field' + i + '">\
            <td>\
            <input type="text" class="form-control" name="work_description[]">\
            </td>\
            <td>\
            <input type="text" class="form-control" name="amount[]">\
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
    $(document).ready(function () {
        $('#invest_agreement_from').submit(function () {
            var dataString = $('#invest_agreement_from').serialize();
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>pending_job/add_investor_agreement_from',
                data: dataString,
                success: function (result) {
                    if (result) {
                        $('#experience_msg').show();
                        $('#experience_msg .alert').delay(5000).fadeOut(1000);
                        $('#invest_agreement_from').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>pending_job/all_pending_job";
                        }, 2000);
                        return false;
                    } else {
                        return false;
                    }
                }
            });
            return false;
        });
    });
</script>

<script>
    function job_hire_investors($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>pending_job/hire_investor_active/' + $id,
            success: function (result) {
                if (result) {
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
    function addNumbers() {
        var first = $("#first").val();
        var second = $("#second").val();
        sum = (parseInt(first) * parseInt(second))/100 +parseInt(first);
        $("#total_benifit_amount").val(sum);

    }
</script>
