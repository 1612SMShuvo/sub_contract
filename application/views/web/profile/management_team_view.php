<main class="fullpage-area">
    <section class="postjob-area">
        <div class="container">
            <div class="row">
                <div class="project-slides">
                    <!-- project-singleslide -->
                    <div class="project-singleslide">
                        <div class="row">
                            <!-- ====================================== -->
                            <!-- ==========Management & Team Update=========== -->
                            <!-- ====================================== -->
                            <div class="col-md-12  mb-4">
                                <div class="signin-form postjob-form">
                                    <h3>Management & Team</h3>
                                    <div class="postjob-det">
                                        <?php foreach ($management_team_info as $s_data) { ?>
                                            <div class="postprofile">
                                                <div class="postpro-img">
                                                    <img
                                                        src="<?php echo base_url() ?>public/user_profile/<?php echo $s_data->profile_picture; ?>"
                                                        alt="image">
                                                </div>
                                                <div class="postpro-desc">

                                                    <h4><?php echo $s_data->name ?></h4>
                                                    <p><?php echo $s_data->designation ?></p>
                                                    <ul>
                                                        <li>NID- <span><?php echo $s_data->nid ?></span></li>
                                                        <li>TIN- <span><?php echo $s_data->tin ?></span></li>
                                                        <li>Email- <span><?php echo $s_data->email ?></span></li>
                                                        <li>Phone- <span><?php echo $s_data->phone ?></span></li>
                                                    </ul>
                                                </div>
                                                <div class="postpro-edit">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#load_modal"
                                                       onclick="return update_new_team(<?php echo $s_data->id; ?>);"><i
                                                            class="fas fa-edit"></i> Edit</a>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <div class="postprof-add">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#load_modal"
                                               onclick="return add_new_team();"><i class="fas fa-plus"></i> Add New</a>
                                            <a href="<?php echo base_url() ?>frontend/create_work_area_profile">Next</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<!--<footer class="footer-2">-->
<!--    <div class="container">-->
<!--        <div class="row d-flex align-items-center">-->
<!--            <div class="col-md-6">-->
<!--                <p>&copy; 2021 Enlist Work LTD.| All Right Reserved by Webase Solutions</p>-->
<!--            </div>-->
<!--            <div class="col-md-6">-->
<!--                <ul>-->
<!--                    <li><a href="--><?php //echo base_url() ?><!--terms_privacy/terms_service">Terms of Service</a></li>-->
<!--                    <li><a href="--><?php //echo base_url() ?><!--terms_privacy/privacy">Privacy Policy </a></li>-->
<!--                    <li><a href="--><?php //echo base_url() ?><!--terms_privacy/aggrement_service">Agreement</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->
<div class="modal fade bd-example-modal-lg show" id="load_modal" tabindex="-1"
     aria-labelledby="exampleStandardModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleStandardModalLabel">Add Management Team</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div id="load_from">

                </div>
<!--                <p class="m-t text-center">-->
<!--                    <small>--><?php //echo $this->session->userdata('powered_by'); ?>
<!--                        <br>--><?php //echo $this->session->userdata('copy_write'); ?>
<!--                    </small>-->
<!--                </p>-->

                <!-- <p class="m-t text-center">
                    <small><strong>Powered by </strong><a href="https://webase.com.bd/">Webase Solutions</a>
                        <br>Copyright © 2021 Enlist Work
                    </small>
                </p> -->
            </div>
        </div>
    </div>
</div>

<script>
    function add_new_team() {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>frontend/load_add_management_team_from',
            success: function (result) {
                if (result) {
                    $('#title').html('Add Management Team');
                    $('#load_from').html(result);
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
    function update_new_team($id) {
        var set_id = $id;
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>frontend/load_update_management_team_from',
            data: {id: set_id},
            success: function (result) {
                if (result) {
                    $('#title').html('Update Management Team');
                    $('#load_from').html(result);
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>

   