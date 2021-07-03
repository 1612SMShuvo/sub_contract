
<div class="publisher-menu mb-4">
    <ul>
        <li><a  href="<?php echo base_url() ?>active_job_publiser/all_active_job_publiser">Active Job</a></li>
        <li><a href="<?php echo base_url() ?>pending_job/all_pending_job">Pending Job</a></li>
        <li><a class="active"  href="<?php echo base_url() ?>my_job/all_my_job">New Job</a></li>
        <li><a href="<?php echo base_url() ?>job_post/create_job_post">Post New Job</a></li>
    </ul>
</div>
<main class="body-padding">
    <section class="requestinvite-area specification-area">
        <div class="container">

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-earning" role="tabpanel"
                     aria-labelledby="pills-earning-tab"><br>
                    <div class="row " style="margin-left: 200px;">
                        <div class="col-md-2">
                            <h5 style="color:#98A4B1;" class="budget">Budget</h5><br><br>
                            <h3 class="" id="set_total_budget"></h3>
                        </div>
                        <div class="col-md-2">
                            <h5 style="color:#98A4B1;">Requested</h5><br>
                            <h3 class="pt-4 pr-2" id="set_total_Requested"></h3>
                        </div>
                        <div class="col-md-2">
                            <h5 style="color:#98A4B1;">Milestone</h5><br>
                            <h3 class="pt-4 pr-2" id="set_total_milestone"></h3>
                        </div>
                        <div class="col-md-2">
                            <h5 style="color:#98A4B1;">Remaining</h5><br>
                            <h3 class="pt-4 pr-2" id="set_total_remaining"></h3>
                        </div>
                        <div class="col-md-2">
                            <h5 style="color:#98A4B1;">Total Earning</h5><br>
                            <h3 class="pt-4 pr-2"id="set_total_earn"></h3>
                        </div>
                    </div><br>
                    <div class="milestone pt-4">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Tender Name</th>
                                <th>Budget</th>
                                <th>Requested</th>
                                <th>Milestone</th>
                                <th>Remaining</th>
                                <th>Total Earning</th>
                                <th>Status</th>
                            </tr>
                            </thead>

                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<div class="modal fade bd-example-modal-lg show" id="load_modal" tabindex="-1"
     aria-labelledby="exampleStandardModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div id="load_from">

                </div>

            </div>
        </div>
    </div>
</div>

<script>
    function payment_request($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>my_work/payment_request/' + $id,
            success: function (result) {
                if (result) {
                    $('#title').html('Payment Request');
                    $('#load_from').html(result);
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>
