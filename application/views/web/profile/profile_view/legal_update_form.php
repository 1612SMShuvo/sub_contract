<div class="col-md-12  mb-4">
    <div class="signin-form postjob-form legal">
        <h3>Legal</h3>
        <?php
        foreach ($update_legal as $v_update_legal) { ?>
            <form action="#" method="post" id="legal_profile" enctype="multipart/form-data">
                <div class="postjob-det">
                    <div class="form-single">
                        <label for="certificate">Audit Report<span>*</span></label>
                        <input type="file" id="audit_report" name="audit_report"
                               tabindex="0">
                        <img
                            src="<?php echo base_url() ?>public/user_profile/<?php echo $v_update_legal->audit_report ?>" height="50" width="50"/>
                    </div>
                    <div class="form-single">
                        <label for="certificate">Trade License<span>*</span></label>
                        <input type="file" id="trade_license" name="trade_license"
                               tabindex="0">
                    </div>
                    <div class="form-single">
                        <label for="certificate">Tin<span>*</span></label>
                        <input type="file" id="tin" name="tin"
                               tabindex="0">
                    </div>

                    <div class="form-single">
                        <label for="certificate">Bin<span>*</span></label>
                        <input type="file" id="bin" name="bin"
                               tabindex="0">
                    </div>
                    <div class="form-single">
                        <label for="certificate">Income TAX Certificate<span>*</span></label>
                        <input type="file" id="income_tax" name="income_tax"
                               tabindex="0">
                    </div>

                    <div class="form-single">
                        <label for="certificate">Brochure<span>*</span></label>
                        <input type="file" id="brochure" name="brochure"
                               tabindex="0">
                    </div>
                    <div class="form-single">
                        <label for="certificate">Joint Venture (JV)<span>*</span></label>
                        <input type="file" id="joint_venture" name="joint_venture"
                               tabindex="0">
                    </div>

                    <div class="form-single">
                        <label for="certificate">Board of resolution<span>*</span></label>
                        <input type="file" id="board_of_resolution" name="board_of_resolution"
                               tabindex="0">
                    </div>
                    <div class="form-single">
                        <label for="certificate">Completion letter<span>*</span></label>
                        <input type="file" id="completion_letter" name="completion_letter"
                               tabindex="0">
                    </div>
                    <div class="form-single">
                        <label for="certificate">Work Orders<span>*</span></label>
                        <input type="file" id="work_orders" name="work_orders"
                               tabindex="0">
                    </div>
                    <div class="postjob-button row pt-4">
                        <div class="form-check mb-4 col-6">
                            <input class="form-check-input" type="hidden" value="1" id="legal"
                                   name="terms_condition" required="required">
                        </div>
                        <div class="signin-button col-6">
                            <button>Update</button>
                        </div>

                    </div>
                </div>
            </form>
        <?php } ?>
    </div>
    <p id="legal_profile_msg"
       style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
        Legal Information Successfully Updated</p>
</div>


<script>
    $(document).ready(function () {
        $('#legal_profile').submit(function () {
            var dataString = new FormData($(this)[0]);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>frontend/update_legal_profile',
                data: dataString,
                async: false,
                success: function (result) {
                    if (result) {
                        $('#legal_profile_msg').show();
                        $('#legal_profile_msg').delay(5000).fadeOut(1000);
                        $('#legal_profile').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>frontend/profile_all_details";
                        }, 3000);
                        return false;
                    } else {
                        return false;
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
            return false;
        });
    });
</script>