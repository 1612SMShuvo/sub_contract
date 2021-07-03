<div class="col-md-12  mb-4">
    <div class="signin-form postjob-form experience">
        <h3>Experience</h3>
        <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
        <form id="experience_profile" method="post" action="#" enctype="multipart/form-data">
            <div class="postjob-det">
                <div class="form-single">
                    <label for="client">Client Name <span>*</span></label>
                    <input type="text" id="client" placeholder="Client Name" name="client_name"
                           required="required">
                </div>
                <div class="form-single">
                    <label class="mb-3">Project Type</label>
                    <select class="form-select form-select" name="project_type">
                        <option selected="1">Medical Instruments</option>
                        <option value="2">Instruments & Goods</option>
                        <option value="3">Others</option>
                    </select>
                </div>
                <div class="form-single">
                    <label for="completion">Completion <span>*</span></label>
                    <input type="text" id="completion" placeholder="Desination" name="completion"
                           required="required">
                </div>
                <div class="form-single">
                    <label for="certificate">Certificate <span>*</span></label>
                    <input type="file" id="certificate" name="certificate" required="required">
                </div>
                <div class="form-single">
                    <label for="Completion">Completion letter <span>*</span></label>
                    <input type="file" id="Completion" name="completion_letter" required="required">
                </div>


                <div class="postjob-button row pt-4">
                    <div class="form-check mb-4 col-6">
                        <input class="form-check-input" type="hidden" value="1" id="terms"
                               name="terms_condition" required="required">
                    </div>
                    <div class="signin-button col-6">
                        <button>Save</button>
                    </div>
                   
                </div>
                <p id="experience_msg"
                   style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
                    Experience Information Successfully Added</p>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#experience_profile').submit(function () {
            var dataString = new FormData($(this)[0]);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>frontend/add_experience_profile',
                data: dataString,
                async: false,
                success: function (result) {
                    if (result) {
                        $('#experience_msg').show();
                        $('#experience_msg .alert').delay(5000).fadeOut(1000);
                        $('#experience_profile').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>frontend/work_area_profile_view";
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