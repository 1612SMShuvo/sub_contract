<style>
    .morecontent span {
        display: none;
    }

    .morelink {
        display: block;
    }

</style>


<!-- Content Wrapper. Contains page content -->
<main class="adminpopular-wrapper">
    <div class="container-fluid">
        <!-- breadcum -->
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Dashboard</h4>
            <ul class="db-breadcrumb-list">
                <li>
                    <a href="#"><i class="fa fa-home"></i>Home</a>
                </li>
                <li>Dashboard</li>
            </ul>
        </div>
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-2">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="title">
                                    <h3 class="title-text">All Jobs</h3>
                                    <div class="widget-content">
                                        <div class="table-responsive">
                                            <div id="ajaxdata">
                                                <?php echo $links; ?>
                                                <table class="table f-border-none table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>SL NO</th>
                                                        <th>Job Title</th>
                                                        <!-- <th class="more">Qualifications</th> -->
                                                        <th>Priority Of Works</th>
                                                        <th>Status</th>
                                                        <th>Application</th>

                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php
                                                    $i = 0;
                                                    foreach ($all_job as $v_job) {
                                                        $i++; ?>
                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo $v_job->job_title; ?></td>
                                                            <!-- <td style="width:400px;" row="2"><?php echo $v_job->qualifications; ?></td> -->
                                                            <?php if($v_job->priority_of_works==1){ ?>
                                                            <td>Urgent</td>
                                                            <?php } elseif($v_job->priority_of_works==2){?>
                                                            <td>Very Urgent</td>
                                                            <?php } else{?>
                                                            <td>Regular</td>
                                                            <?php }?>

                                                            <td>
                                                                <?php
                                                                if ($v_job->status == 1) {
                                                                    echo "New Job";
                                                                } else if ($v_job->status == 2) {
                                                                    echo "Confirmed Job";
                                                                } else {
                                                                    echo "Deny Job";
                                                                }
                                                                ?>
                                                            </td>

                                                            <td>
                                                                <a href="#"
                                                                   onclick="job_apply(<?php echo $v_job->id; ?>)"
                                                                   type="button" data-bs-toggle="modal"
                                                                   data-bs-target="#load_modal" class="btn btn-info">Application</a>
                                                                <a href="<?php echo base_url() ?>"
                                                                   onclick="job_short_list(<?php echo $v_job->id; ?>)"
                                                                   type="button" data-bs-toggle="modal"
                                                                   data-bs-target="#load_modal"
                                                                   class="btn btn-secondary">Short-List</a>
                                                            </td>

                                                            <td>
                                                                <a href="#"
                                                                   onclick="job_deny(<?php echo $v_job->id; ?>)"
                                                                   class="btn btn-danger" title="Deny"
                                                                   data-bs-toggle="modal" data-bs-target="#load_modal">
                                                                    <i class="fa fa-ban"></i>
                                                                </a>
                                                                <a href="#"
                                                                   onclick="job_active(<?php echo $v_job->id; ?>)"
                                                                   class="btn btn-success" title="Confirmed">
                                                                    <i class="fa fa-check-circle"></i>
                                                                </a>
                                                                <a href="#"
                                                                   onclick="job_details(<?php echo $v_job->id; ?>)"
                                                                   class="btn btn-warning" title="View"
                                                                   data-bs-toggle="modal" data-bs-target="#load_modal">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                                
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>
                                                <?php echo $links; ?>
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
    </div>
</main>
<div class="modal fade" id="load_modal" tabindex="-1" aria-labelledby="exampleStandardModalLabel" style="display: none;"
     aria-hidden="true">
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
                <br>
                <!-- <p class="m-t text-center">
                    <small><?php echo $this->session->userdata('powered_by'); ?>
                        <br><?php echo $this->session->userdata('copy_write'); ?>
                    </small>
                </p> -->
                <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-----------------------------View Apply Details Modal-------------------------------->
    <!-----------------------------End View Apply Details Modal-------------------------------->


    <script>
        function job_details($id) {
            var id = $id;
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>/job_approve/view_job_details_admin',
                data: {id: id},
                success: function (result) {
                    if (result) {
                        $('#title').html('Job Details');
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
        function job_deny($id) {
            var id = $id;
            var job_title = $('#product_name' + id + "").val();
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>job_approve/load_cancel_job_approve_from',
                data: {id: id, job_title: job_title},
                success: function (result) {
                    if (result) {
                        $('#title').html('Cancel Job Reason');
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
        function job_active($id) {
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>job_approve/job_approve_active/' + $id,
                success: function (result) {
                    if (result) {
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>job_approve/all_job_approve";
                        }, 100);
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
        $(document).ready(function () {
            $("#ajax_pagingsearc a").attr('onclick', 'return main_page_pagination($(this));');
        });
    </script>

    <script>
        function main_page_pagination($this) {
            var url = $this.attr("href");
            if (url != '') {
                $.ajax({
                    type: "POST",
                    url: url,
                    success: function (msg) {
                        $("#ajaxdata").html(msg);
                    }
                });
            }
            return false;
        }
    </script>


    <script>
        function job_apply($id) {
            $.ajax({
                url: '<?php echo base_url() ?>job_approve/all_job_applyer/' + $id,
                success: function (result) {
                    if (result) {
                        $('#title').html('All Applicants In This Job');
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
        function job_short_list($id) {
            $.ajax({
                url: '<?php echo base_url() ?>job_approve/all_job_short_lister/' + $id,
                success: function (result) {
                    if (result) {
                        $('#title').html('All Selected Applicants In This Job');
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
        function select_all_confirmed_job($id) {
            $.ajax({
                url: '<?php echo base_url() ?>job_approve/select_all_confirmed_job/' + $id,
                success: function (result) {
                    if (result) {
                        $('#title').html('All confirmed job');
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

