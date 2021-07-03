<div class="col-md-12  mb-4">
    <div class="signin-form postjob-form award">
        <h3>Award & Certification</h3>
        <?php
        foreach ($update_award_certification as $v_award_certification)
        {?>
        <form id="award_profile" method="post" action="#" enctype="multipart/form-data">
            <div class="postjob-det">

                <div class="form-single">
                    <label for="aname">Award Name <span>*</span></label>
                    <input type="hidden" name="id" value="<?php echo $v_award_certification->id;?>">
                    <input type="text" id="aname" placeholder="Award Name "
                           name="award_name"  value="<?php echo $v_award_certification->award_name ?>">
                </div>
                <div class="form-single">
                    <label for="cname">Categories Name <span>*</span></label>
                    <input type="text" id="cname" placeholder="Categories Name "
                           name="categories_name"  value="<?php echo $v_award_certification->categories_name ?>">
                </div>
                <div class="form-single">
                    <label for="uthorized">Authorized By <span>*</span></label>
                    <input type="text" id="uthorized"
                           placeholder="Authorized By " name="authorized_by"
                           value="<?php echo $v_award_certification->authorized_by ?>">
                </div>
                <div class="form-single">
                    <label for="image">Image or PDF <span>*</span></label>
                    <input type="file" id="image" name="image"
                           tabindex="0">
                </div>
                <div class="form-single">
                    <label for="ption">Description <span>*</span></label>
                    <input type="text" id="ption" placeholder="Type Description "
                           name="description" required="required" value="<?php echo $v_award_certification->description ?>">
                </div>
                <div class="postjob-button row pt-4">
                    <div class="form-check mb-4 col-6">
                        <input class="form-check-input" type="hidden" value="1" id="ported" name="terms_condition"required>
                        <label class="form-check-label" for="ported">
                        </label>
                    </div>
                    <div class="signin-button col-6">
                        <button>Update</button>
                    </div>
                    
                </div>
            </div>
        </form>
        <p id="award_profile_msg"
           style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
            Award Profile Successfully Updated</p>

        <?php }?>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#award_profile').submit(function () {
            var dataString = new FormData($(this)[0]);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>frontend/update_award_profile',
                data: dataString,
                async: false,
                success: function (result) {
                    if (result == 1) {

                        $('#award_profile_msg').show();
                        $('#award_profile_msg').delay(5000).fadeOut(1000);
                        $('#award_profile').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>frontend/profile_all_details";
                        }, 3000);
                        return false;
                    } else {
                        $('#award_profile_msg').show();
                        $('#award_profile_msg').delay(6000).fadeOut(1000);
                        $('#award_profile').trigger("reset");
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