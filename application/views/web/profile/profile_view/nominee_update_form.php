<div class="col-md-12 mb-4">
    <div class="signin-form postjob-form nominee">
        <h3>Nominee</h3>
        <form id="nominee_profile" method="post" action="#" enctype="multipart/form-data">
            <div class="postjob-det">
                <?php
                foreach ($update_nominee as $v_nominee) { ?>
                <div class="form-single">
                    <label for="nname">Name <span>*</span></label>
                    <input type="hidden" name="id" value="<?php echo $v_nominee->id;?>">
                    <input type="text" id="nname" placeholder="Name" name="name" value="<?php echo $v_nominee->name?>">
                </div>
                <div class="form-single">
                    <label for="ndesi">Designation <span>*</span></label>
                    <input type="text" id="ndesi" placeholder="Designation"
                           name="designation" value="<?php echo $v_nominee->designation?>">
                </div>
                <div class="form-single">
                    <label for="nnid">NID <span>*</span></label>
                    <input type="number" id="nnid" placeholder="NID" name="nid" value="<?php echo $v_nominee->nid?>">
                </div>
                <div class="form-single">
                    <label for="ntin">TIN <span>*</span></label>
                    <input type="number" id="ntin" placeholder="TIN" name="tin" value="<?php echo $v_nominee->tin?>">
                </div>
                <div class="form-single">
                    <label for="nemail">Email <span>*</span></label>
                    <input type="email" id="nemail" placeholder="Enter Your Email Address"
                           name="email" value="<?php echo $v_nominee->email?>">
                </div>
                <div class="form-single">
                    <label for="nphone">Phone Number <span>*</span></label>
                    <input type="text"  pattern="[0-9]{11}" id="nphone" placeholder="Enter Phone Number"
                           name="phone" value="<?php echo $v_nominee->phone?>" >
                </div>

                <div class="form-single">
                    <label for="certificate">Image<span>*</span></label>
                    <input type="file" id="image" name="image"
                           tabindex="0" value="<?php echo $v_nominee->image?>">
                </div>
                <div class="postjob-button row pt-4">
                    <div class="form-check mb-4 col-6">
                        <input class="form-check-input" type="hidden" value="1" id="nvice"
                               name="terms_condition">
                    </div>
                    <div class="signin-button col-6">
                        <button>Update</button>
                    </div>
                </div>
        </form>
        <p id="nominee_profile_msg"
           style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
            Nominee Profile Successfully Updated</p>
    </div>
    <?php }?>

</div>
<script>
    $(document).ready(function () {
        $('#nominee_profile').submit(function () {
            var dataString = new FormData($(this)[0]);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>frontend/update_nominee_profile',
                data: dataString,
                async: false,
                success: function (result) {
                    if (result == 1) {

                        $('#nominee_profile_msg').show();
                        $('#nominee_profile_msg').delay(5000).fadeOut(1000);
                        $('#nominee_profile').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>frontend/profile_all_details";
                        }, 3000);
                        return false;
                    } else {
                        $('#management_err').show();
                        $('#management_err').delay(6000).fadeOut(1000);
                        $('#nominee_profile').trigger("reset");
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