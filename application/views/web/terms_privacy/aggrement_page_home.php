<br><br><br><br><br>
<section class="newjobs-area">
        <div class="agreement-all">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row gx-4 gy-4">
                        <?php
                            foreach ($agreement as $v_agreement) {
                        ?>   
                        <div class="col-lg-4 col-md-6">
                            <a href="<?php echo base_url() ?>public/job_file/<?php echo $v_agreement->aggrement_file;?>" target="_blank">
                                <div class="agreement-single">
                                    <div class="card-doc__cover ">
                                        <img src="<?php echo base_url()?>public/job_file/agreement.jpg">
                                    </div>
                                    <h3> <?php echo $v_agreement->title; ?> </h3>
                                    <p> <?php echo $v_agreement->short_description; ?>. </p>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




    