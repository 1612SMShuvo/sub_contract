<div class="col-md-12 mb-4">
    <div class="signin-form postjob-form link">
        <h3>Portfolio Link</h3>
        <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
        <form id="portfolio_profile" method="post" action="#" enctype="multipart/form-data">
            <div class="postjob-det">
                <div class="form-single">
                    <label for="pclient">Project Name <span>*</span></label>
                    <input type="text" id="pclient" placeholder="Project Name"
                           name="project_name" required="required">
                </div>
                <div class="form-single">
                    <label for="ptype">Project Type <span>*</span></label>
                    <input type="text" id="ptype" placeholder="Project Type"
                           name="project_type" required="required">
                </div>
                <div class="form-single">
                    <label for="pdesc">Description <span>*</span></label>
                    <input type="text" id="pdesc" placeholder="Project Description"
                           name="description" required="required">
                </div>
                <div class="form-single">
                    <label for="pvalue">Value <span>*</span></label>
                    <input type="text" id="pvalue" placeholder="Project Value"
                           name="project_value" required="required">
                </div>
                <div class="form-single">
                    <label for="pclientn">Client Name <span>*</span></label>
                    <input type="text" id="pclientn" placeholder="Client Name"
                           name="client_name">
                </div>
                <div class="form-single">
                    <label for="Link">Link </label>
                    <input type="url" id="Link" pattern="https://.*" placeholder="Link" name="link"
                           >
                </div>
                <div class="form-single">
                    <label for="certificate">Image or PDF<span>*</span></label>
                    <input type="file" id="board_of_resolution" name="board_of_resolution"
                           tabindex="0">
                </div>

                <div class="postjob-button row pt-4">
                    <div class="form-check mb-4 col-6">
                        <input class="form-check-input" type="hidden" value="1" id="vice"
                               name="terms_condition">
                    </div>
                    <div class="signin-button col-6">
                        <button>Save</button>

                    </div>
        </form>
        <p id="portfolio_profile_msg"
           style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
            Portfolio Profile Successfully Added</p>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#portfolio_profile').submit(function () {
            var dataString = new FormData($(this)[0]);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>frontend/add_portfolio_link_profile',
                data: dataString,
                async: false,
                success: function (result) {
                    if (result) {
                        $('#portfolio_profile_msg').html(result);
                        $('#portfolio_profile_msg .alert').delay(5000).fadeOut(1000);
                        $('#portfolio_profile').trigger("reset");
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