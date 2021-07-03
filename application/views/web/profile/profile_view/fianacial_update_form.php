<div class="col-md-12 mb-4">
    <div class="signin-form postjob-form financial">
        <h3>Financial</h3>
        <?php
        foreach ($update_financial as $v_financial)
        {?>
        <form id="financial_profile" method="post" action="#" enctype="multipart/form-data">
            <div class="postjob-det">
                <div class="row">
                    <div class="col-12">
                        <div class="form-single">
                            <label for="certificate">Financial Statement
                                <input type="hidden" name="id" value="<?php echo $v_financial->id;?>">
                                <span>*</span></label>

                            <input type="file" id="financial_statement"
                                   name="financial_statement"
                                   tabindex="0">
                        </div>
                        <div class="form-single">
                            <label for="certificate">Bank Solvency<span>*</span></label>
                            <input type="file" id="bank_solvency" name="bank_solvency"
                                   tabindex="0">
                        </div>
                        <div class="form-single">
                            <label for="certificate">Credit Line
                                Letter<span>*</span></label>
                            <input type="file" id="credit" name="credit"
                                   tabindex="0">
                        </div>
                        <div class="form-single">
                            <label for="certificate">Bank Statement <span>*</span></label>
                            <input type="file" id="bank_statement" name="bank_statement"
                                   tabindex="0">
                        </div>
                        <div class="form-single">
                            <label for="certificate">Liquid Money<span>*</span></label>
                            <input type="file" id="liquid_money" name="liquid_money"
                                   tabindex="0">
                        </div>

                       
                        <div class="postjob-button row">
                            <div class="form-check mb-4 col-6">
                                <input class="form-check-input" type="hidden" value="1"
                                       id="flexCheckChecked" name="terms_condition"
                                       >
                            </div>
                            <div class="signin-button col-6">
                                <button>Update</button>
                            </div>
                            <p id="experience_msg"
                               style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
                                Financial Information Successfully Updated</p>
                        </div>
        </form>
        <?php }?>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#financial_profile').submit(function () {
            var dataString = new FormData($(this)[0]);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>frontend/update_financial_profile',
                data: dataString,
                async: false,
                success: function (result) {
                    if (result == 1) {
                        $('#experience_msg').show();
                        $('#experience_msg').delay(6000).fadeOut(1000);
                        $('#financial_profile').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>frontend/profile_all_details";
                        }, 1000);
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
<script>
    if($('#bank_solvency').val() != '') {
        $.each($('#file').prop("files"), function(k,v){
            var filename = v['name'];
            var ext = filename.split('.').pop().toLowerCase();
            if($.inArray(ext, ['pdf','doc','docx','png','jpg','jpeg']) == -1) {
                alert('Please upload only pdf,doc,docx format files.');
                return false;
            }
        });
    }
</script>