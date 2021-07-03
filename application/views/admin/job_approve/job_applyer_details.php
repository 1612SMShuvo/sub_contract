<div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="jobdetails-center">
                    <div class="findwork-singlejob">
                    <br><br>
                        <center><h1>Application Details</h1></center>
                        <div class="col-sm-6">
                            <h3>Details</h3>
                        </div>
                        <?php
                        if ($details_job_apply) {
                        ?>
                        <div class="singlejob-time">
                            <div class="singlejob-ids">
                                <div class="promanagement-single">
                                    <div class="promanagement-img">
                                        <img
                                            src="<?php echo base_url() ?>public/user_profile/<?php echo $details_job_apply->catalog; ?>"
                                            alt="image">
                                    </div>
                                </div>
                                    <p>Budget:<?php echo $details_job_apply->budget; ?></p>
                                    <p>Man Power:<?php echo $details_job_apply->manpower; ?></p>
                                    <p>Catalog:<?php echo $details_job_apply->catalog; ?></p>
                                    <p>Similar Work Experience:<?php echo $details_job_apply->similar_work_experience; ?></p>
                                    <p>Quotation Price:<?php echo $details_job_apply->quotation_price_for_bidder; ?></p>
                            </div>
                            <div class="singlejob-anchors">

                            </div>
                        </div>



                    </div>

                    <div class="work-description">
                        <div class="workdes-top">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3>Cover Letter</h3>
                                </div>

                            </div>
                        </div>
                        <p><?php echo $details_job_apply->cover_letter; ?></p>
                    </div>
                    <div class="work-description">
                        <div class="workdes-top">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3>Specification</h3>
                                </div>

                            </div>
                        </div>
                        <p><?php echo $details_job_apply->specification; ?></p>
                    </div>
                    <div class="work-description">
                        <div class="workdes-top">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3>Work Process</h3>
                                </div>
                                <div class="col-sm-6">

                                </div>
                            </div>
                        </div>
                        <p><?php echo $details_job_apply->work_process; ?></p>
                    </div>
                </div>

    <?php } ?>
</div>