<div id="ajaxdata">
    <?php echo $links; ?>
    <table class="table table-striped table-responsive table-bordered table-hover">
        <thead style="background-color: #347CA4;">
        <tr>
            <th>SL NO</th>
            <th>User ID</th>
            <th>Role Type</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i = 0;
        foreach ($user as $v_data) {
            $i++; ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $v_data->user_name; ?></td>
                <td><?php echo $v_data->role_name; ?></td>
                <td>
                    <?php
                    if ($v_data->status == 1) {
                        echo "Active";
                    } else {
                        echo "Inactive";
                    }
                    ?>
                </td>
                <td style="width: 145px;">
                    <?php
                    if ($v_data->status == 1) { ?>
                        <a href="#"
                           onclick="user_inactive(<?php echo $v_data->id; ?>)"
                           class="btn btn-warning" title="Inactive">
                            <i class="glyphicon glyphicon-arrow-down"></i>
                        </a>
                    <?php } else { ?>
                        <a href="#"
                           onclick="user_active(<?php echo $v_data->id; ?>)"
                           class="btn btn-warning" title="Active">
                            <i class="glyphicon glyphicon-arrow-up"></i>
                        </a>
                    <?php } ?>

                    <a href="#" onclick="delete_user(<?php echo $v_data->id; ?>)"
                       class="btn btn-danger" title="Delete User">
                        <i class="glyphicon glyphicon-trash"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <th>SL NO</th>
            <th>User ID</th>
            <th>Role Type</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </tfoot>
    </table>
    <?php echo $links; ?>
</div>
<script>
    $(document).ready(function () {
        $("#ajax_pagingsearc a").attr('onclick', 'return main_page_pagination($(this));');
    });
</script>