<main class="fullpage-area">
    <section class="postjob-area">
        <div class="container">
            <div class="row">
                <div class="project-slides">
                    <div class="project-singleslide">
                        <div class="row">
                            <?php
                            $user_id = $this->session->userdata("user_id");
                            $area = $this->Frontend_model->work_area_info($user_id);
                            if (!$area) {
                            ?>
                            <div class="col-md-6 mb-4">
                                <div class="signin-form postjob-form area">
                                    <h3>Area of Works</h3>
                                    <div class="postjob-det">
                                        <div class="row">
                                            <form id="work_area_profile" method="post" action="#">
                                                <div class="col-12">
                                                    <div class="formcheck-single mb-3">
                                                        <label class="form-checks mb-3">Business Type</label>
                                                        <?php
                                                        $i = 0;
                                                        foreach ($category as $v_cat) {
                                                            $i++;
                                                            ?>
                                                            <div class="form-check">
                                                                <input
                                                                    class="form-check-input area_of_works<?php echo $i ?>"
                                                                    onclick="check_checked_box(<?php echo $i; ?>)"
                                                                    type="checkbox"
                                                                    id="area_of_works<?php echo $i ?>"
                                                                    name="area_of_works[]"
                                                                    value="<?php echo $v_cat->id; ?>">
                                                                <label class="form-check-label" for="Telecom">
                                                                    <?php echo $v_cat->category_name; ?>
                                                                </label>
                                                            </div>
                                                        <?php } ?>


                                                        <div class="postjob-button pt-3">
                                                            <div class="signin-button">
                                                                <button>
                                                                    Save
                                                                </button>
                                                            </div>
                                                        </div>



                                                        <input type="hidden" id="total_number_of_fields"
                                                               name="total_number_of_fields" value="0">
                                                        <p id="area_of_works_msg"
                                                           style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center; color: white;height: 41px;padding-top: 7px;">
                                                            Area of Works Successfully Added</p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } else { ?>

                            <div class="col-md-6 mb-4" style="opacity: 0.5">
                                <div class="signin-form postjob-form area">
                                    <h3>Area of Works</h3>
                                    <div class="postjob-det">
                                        <div class="row">
                                            <form id="work_area_profile" method="post"
                                                  action="#">
                                                <div class="col-12">
                                                    <div class="formcheck-single mb-3">
                                                        <label class="form-checks mb-3">Business
                                                            Type</label>
                                                        <?php
                                                        $i = 0;
                                                        foreach ($category as $v_cat) {
                                                            $i++;
                                                            ?>
                                                            <div class="form-check">
                                                                <input
                                                                    class="form-check-input area_of_works<?php echo $i ?>"
                                                                    onclick="check_checked_box(<?php echo $i; ?>)"
                                                                    type="checkbox"
                                                                    id="area_of_works<?php echo $i ?>"
                                                                    name="area_of_works[]"
                                                                    value="<?php echo $v_cat->id; ?>" disabled>
                                                                <label class="form-check-label"
                                                                       for="Telecom">
                                                                    <?php echo $v_cat->category_name; ?>
                                                                </label>
                                                            </div>
                                                        <?php }?>


                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                    <div class="col-md-6  mb-4">
                        <div class="signin-form postjob-form experience">
                            <h3>Experience</h3>
                            <form id="experience_profile" method="post" action="#" enctype="multipart/form-data">
                                <div class="postjob-det">
                                    <div class="form-single">
                                        <label for="client">Client Name <span>*</span></label>
                                        <input type="text" id="client" placeholder="Client Name" name="client_name"
                                               >
                                               <span id="v1"></span>
                                    </div>
                                    <div class="form-single">
                                        <label class="mb-3">Project Type</label>
                                        <select class="form-select form-select" id="project_type" name="project_type">
                                            <option selected="1">Choose Please......</option>
                                            <?php foreach ($category as $v_cat) { ?>
                                                <option
                                                    value="<?php echo $v_cat->id; ?>"><?php echo $v_cat->category_name; ?></option>
                                            <?php } ?>
                                        </select>
                                        <span id="v2"></span>
                                    </div>
                                    <div class="form-single">
                                        <label for="completion">Completion Date <span>*</span></label>
                                        <input type="date" id="completion" placeholder="Desination" name="completion"
                                               >
                                               <span id="v3"></span>
                                    </div>
                                    <div class="form-single">
                                        <label for="certificate">Certificate </label>
                                        <input type="file" id="certificate" name="certificate">
                                    </div>
                                    <div class="form-single">
                                        <label for="Completion">Completion letter </label>
                                        <input type="file" id="Completion" name="completion_letter">
                                    </div>


                                    <div class="postjob-button row pt-4">
                                        <div class="form-check mb-4 col-6">
                                            <input class="form-check-input" type="hidden" value="1" id="terms"
                                                   name="terms_condition" required="required">
                                            <label class="form-check-label" for="terms">
                                        </div>
                                        <div class="postjob-button row pt-4">
                                            <div class="signin-button col-6">
                                                <button>Save</button>
                                            </div>
                                            <div class="signin-button col-6">
                                                <a href="<?php echo base_url() ?>frontend/work_area_profile_view">skip</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p id="experience_msg"
                                       style="background-color: #984e0eed;border-radius: 5px;width: 100%; display: none; text-align: center;color: white;height: 41px;padding-top: 7px;">
                                        Experience Information Successfully Added</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<script>
    $(document).ready(function () {
        $('#work_area_profile').submit(function () {
            var dataString = $('#work_area_profile').serialize();
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>frontend/add_work_area_profile',
                data: dataString,
                success: function (result) {
                    if (result) {
                        $('#area_of_works_msg').show();
                        $('#area_of_works_msg').delay(5000).fadeOut(1000);
                        $('#work_area_profile').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>frontend/create_work_area_profile";
                        }, 3000);
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
    $(document).ready(function () {
        $('#experience_profile').submit(function () {
             if (validation() == true) {
            var dataString = new FormData($(this)[0]);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>frontend/create_experience_profile',
                data: dataString,
                async: false,
                success: function (result) {
                    if (result) {
                        $('#experience_msg').show();
                        $('#experience_msg .alert').delay(5000).fadeOut(1000);
                        $('#experience_profile').trigger("reset");
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>frontend/work_area_profile_view";
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
             } else {
                return false;
            }
        });
        
        function validation() {
        var client = $('#client').val();
        var project_type = $('#project_type').val();
      
        

        if (client.length == "" || project_type.length=="") {
            if (client.length == "") {
                $('#v1').html("<code class='err_msg'>* Client Name field is Mandatory *</code>");
                $("#v1 .err_msg").delay(3000).fadeOut(800);
                $("#client").focus();
            }
            if (project_type.length == "") {
                $('#v2').html("<code class='err_msg'>* Project Type field is mandatory *</code>");
                $("#v2 .err_msg").delay(3000).fadeOut(800);
                $("#project_type").focus();
            }
          
            return false;
        }
        else {
            return true
        }
    }
    });
</script>

<script>
    function check_checked_box($id) {
        var set_id = $id;
        if ($('input.area_of_works' + set_id + "").is(':checked')) {
            var get_value = $('#total_number_of_fields').val();
            var set_new_value = parseInt(get_value) + 1;
            if (set_new_value > 10) {
                $('#area_of_works' + set_id + "").prop('checked', false);
                alert('You can only select Maximum 10 Work Categories.');
            } else {
                $('#total_number_of_fields').val(set_new_value);
            }
        } else {
            var get_value = $('#total_number_of_fields').val();
            var set_new_value = parseInt(get_value) - 1;
            $('#total_number_of_fields').val(set_new_value);
        }
    }


</script>
