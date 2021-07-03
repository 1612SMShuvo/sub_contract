<div class="col-md-12  mb-4">
    <div class="signin-form postjob-form official">
        <h3>Official Contract Pearson</h3>
        <form id="official_contract_profile" method="post" action="#"
              enctype="multipart/form-data">
            <?php
            foreach($update_official_contract as $v_official_contract)


            {?>
            <div class="postjob-det">
                <div class="form-single">
                    <label for="oname">Name <span>*</span></label>
                    <input type="hidden" name="id" value="<?php echo $v_official_contract->id;?>">
                    <input type="text" id="oname" placeholder="Name" name="name" value="<?php echo $v_official_contract->name ?>" >
                </div>
                <div class="form-single">
                    <label for="odesi">Designation <span>*</span></label>
                    <input type="text" id="odesi" placeholder="Designation" name="designation" value="<?php echo $v_official_contract->designation ?>">
                </div>
                <div class="form-single">
                    <label for="onid">NID <span>*</span></label>
                    <input type="text" id="onid" placeholder="NID" name="nid" value="<?php echo $v_official_contract->nid ?>">
                </div>
                <div class="form-single">
                    <label for="otin">TIN <span>*</span></label>
                    <input type="text" id="otin" placeholder="TIN" name="tin" value="<?php echo $v_official_contract->tin ?>">
                </div>
                <div class="form-single">
                    <label for="oemail">Email <span>*</span></label>
                    <input type="email" id="oemail" placeholder="Enter Your Email Address"
                           name="email" value="<?php echo $v_official_contract->email ?>">
                </div>
                <div class="form-single">
                    <label for="ophone">Phone Number <span>*</span></label>
                    <input type="tel" id="ophone" pattern="[0-9]{11}"  placeholder="Enter Phone Number"
                           name="phone" value="<?php echo $v_official_contract->phone ?>">
                </div>
                <div class="postjob-button row pt-4">
                    <div class="form-check mb-4 col-6">
                        <input class="form-check-input" type="hidden" value="1" id="oported"
                               name="terms_condition">
                    </div>
                    <div class="signin-button col-6">
                        <button>Update</button>
                    </div>
                </div>
                <?php }?>
        </form>
        <p id="official_contract_profile_msg"
           style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
            Official Contract Profile Successfully Updated</p>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#official_contract_profile').submit(function () {
            var dataString = $('#official_contract_profile').serialize();
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>frontend/update_official_contract_profile',
                data: dataString,
                success: function (result) {
                    if (result) {
                        $('#official_contract_profile_msg').show();
                        $('#official_contract_profile_msg .alert').delay(5000).fadeOut(1000);
                        $('#official_contract_profile').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>frontend/profile_all_details";
                        }, 1000);
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