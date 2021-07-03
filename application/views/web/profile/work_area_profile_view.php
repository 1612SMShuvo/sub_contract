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
                                    <h3>Experience</h3>
                                    <div class="postjob-det">
                                        <?php foreach ($experience_info as $v_experience) { ?>

                                            <div class="postprofile">
                                                <div class="postpro-img">
                                                    <img src="<?php echo base_url() ?>web_assets/images/experience.png"
                                                         alt="image" style="width:100px; height:100px;">

                                                </div>
                                                <div class="postpro-desc">
                                                    <div class="experiences-bottom">
                                                        <h4><?php echo $v_experience->client_name; ?></h4>
                                                        <p><?php echo $v_experience->completion; ?></p>
                                                        <ul>
                                                            <?php if($v_experience->certificate){?>
                                                            <li><a href="<?php echo base_url()?>public/user_profile/<?php echo $v_experience->certificate; ?>" target="_blank">Certificate</a></li>
                                                            <?php } if($v_experience->completion_letter){?>
                                                            <li><a href="<?php echo base_url()?>public/user_profile/<?php echo $v_experience->completion_letter; ?>" target="_blank">Complition Letter</a></li>
                                                        <?php } ?>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        <?php } ?>
                                        <div class="postprof-add">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#load_modal"
                                               onclick="return add_new_experience();"><i class="fas fa-plus"></i> Add New</a>
                                            <a href="<?php echo base_url() ?>frontend/financial_legal">Next</a>
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


<footer class="footer-2">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-6">
                <p>&copy; 2021 Enlist Work LTD.| All Right Reserved by Webase Solutions</p>
            </div>
            <div class="col-md-6">
                <ul>
                    <li><a href="<?php echo base_url() ?>terms_privacy/terms_service">Terms of Service</a></li>
                    <li><a href="<?php echo base_url() ?>terms_privacy/privacy">Privacy Policy </a></li>
                    <li><a href="<?php echo base_url() ?>terms_privacy/aggrement_service">Agreement</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade bd-example-modal-lg show" id="load_modal" tabindex="-1"
     aria-labelledby="exampleStandardModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleStandardModalLabel">Add Experience</h5>
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
                    <small><strong>Powered by </strong><a href="https://webase.com.bd/">Webase Solutions</a> <span style="font-size: 10px;">&</span>
                        <br>Copyright © 2021 Enlist Work
                    </small>
                </p> -->

            </div>
        </div>
    </div>
</div>


<script>
    function add_new_experience() {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>frontend/load_add_new_experience_from',
            success: function (result) {
                if (result) {
                    $('#title').html('Add Experience');
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

