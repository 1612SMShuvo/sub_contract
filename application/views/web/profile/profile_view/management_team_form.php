<div class="col-md-12  mb-4">
    <div class="signin-form postjob-form">
        <h3>Management & Team</h3>
        <?php
        foreach ($update_management as $v_management) { ?>
            <form action="#" method="post" id="management_profile" enctype="multipart/form-data">
                <div class="postjob-det">
                    <div class="form-single">
                        <label for="name">Name <span>*</span></label>
                        <input type="hidden" name="id" value="<?php echo $v_management->id; ?>">
                        <input type="text" id="name" name="name" placeholder="Name"
                               required="required" value="<?php echo $v_management->name ?>">
                    </div>
                    <div class="form-single">
                        <label for="desination">Desination <span>*</span></label>
                        <input type="text" id="desination" name="designation"
                               placeholder="Designation" required="required"
                               value="<?php echo $v_management->designation ?>">
                    </div>
                    <div class="form-single">
                        <label for="nid">NID <span>*</span></label>
                        <input type="text" onblur="check_nid()" id="nid" name="nid"
                               placeholder="Enter Your NID"
                               required="required" value="<?php echo $v_management->nid ?>">
                        <p id="err_nid" style="display: none; color: red; font-size: 12px;">This
                            NID Already exist !!!</p>
                    </div>
                    <div class="form-single">
                        <label for="tin">TIN <span>*</span></label>
                        <input type="text" id="tin" onblur="check_tin()" name="tin"
                               placeholder="TIN"
                               required="required" value="<?php echo $v_management->tin ?>">
                        <p id="err_tin" style="display: none; color: red; font-size: 12px;">This
                            TIN Number Already Exist !!!</p>
                    </div>
                    <div class="form-single">
                        <label for="email">Email <span>*</span></label>
                        <input type="email" id="email" onblur="check_email()"
                               name="email"
                               placeholder="Enter Your Email" required="required"
                               value="<?php echo $v_management->email ?>">
                        <p id="err_email" style="display: none; color: red; font-size: 12px;">
                            This
                            Email Already Exist !!!</p>
                    </div>
                    <div class="form-single">
                        <label for="phone">Phone Number <span>*</span></label>
                        <input type="tel" id="phone"  pattern="[0-9]{11}"  onblur="check_phone()"
                               name="phone"
                               placeholder="Enter Your Phone Number" required="required"
                               value="<?php echo $v_management->phone ?>">
                        <p id="err_phone" style="display: none; color: red; font-size: 12px;">
                            This
                            Phone Number Already Exist !!!</p>
                    </div>
                    <div class="form-single">
                        <label for="certificate">Certificate <span>*</span></label>
                        <input type="file" id="profile_picture" name="profile_picture"
                               tabindex="0">
                    </div>
                    <div class="postjob-button row">
                        <div class="form-check mb-4 col-6">
                            <input class="form-check-input" type="hidden" value="1"
                                   id="flexCheckChecked" >
                        </div>
                        <div class="signin-button col-6">
                            <button>Update</button>
                        </div>
                    </div>
                </div>
            </form>
        <?php } ?>
    </div>
    <p id="management_msg"
       style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
        Management Team information successfully updated</p>
    <p id="management_err"
       style="background-color: red;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
        Your Management Team information already exist !!!</p>
</div>

<script>
    $(document).ready(function () {
        $('#management_profile').submit(function () {
            var dataString = new FormData($(this)[0]);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>frontend/update_management_profile',
                data: dataString,
                async: false,
                success: function (result) {
                    if (result) {
                        $('#management_msg').show();
                        $('#management_msg .alert').delay(5000).fadeOut(1000);
                        $('#management_profile').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>frontend/profile_all_details";
                        }, 2000);
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
