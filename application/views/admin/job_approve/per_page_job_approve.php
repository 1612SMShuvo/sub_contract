<div id="ajaxdata">
    <?php echo $links; ?>
    <table class="table f-border-none table-hover">
        <thead>
        <tr>
            <th>SL NO</th>
            <th>Job Title</th>
            <th class="more">Qualifications</th>
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
                <td style="width:400px;"><?php echo $v_job->qualifications; ?></td>
                <td><?php echo $v_job->priority_of_works; ?></td>


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
                    <a href="<?php echo base_url() ?>"
                       onclick="select_all_confirmed_job(<?php echo $v_job->id; ?>)"
                       type="button" data-bs-toggle="modal"
                       data-bs-target="#load_modal" class="btn btn-success">Confirm-list</a>
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
                       class="btn btn-warning" title="Deny"
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
<script>
    $(document).ready(function () {
        $("#ajax_pagingsearc a").attr('onclick', 'return main_page_pagination($(this));');
    });
</script>