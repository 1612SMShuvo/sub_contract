<div id="ajaxdata">
    <?php echo $links; ?>
    <table class="table table-striped table-responsive table-bordered table-hover">
        <thead style="background-color: #347CA4;">
        <tr>
            <th>SL NO</th>
            <th>Name</th>
            <th>URL</th>
            <th>Icon</th>
            <th>Sorting Position</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i = $this->uri->segment(4) + 0;
        foreach ($module as $v_data) {
            $i++; ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $v_data->module_name; ?></td>
                <td><?php echo $v_data->module_url; ?></td>
                <td><?php echo $v_data->module_icon; ?></td>
                <td><?php echo $v_data->sort; ?></td>
                <td>
                    <?php
                    if ($v_data->status == 1) {
                        echo "Active";
                    } else {
                        echo "Inactive";
                    }
                    ?>
                </td>
                <td style="width: 146px;">
                    <a href="#" onclick="update_module(<?php echo $v_data->id; ?>)"
                       class="btn btn-success" data-backdrop="static"
                       data-keyboard="false" data-toggle="modal"
                       data-target="#update_module_modal" id="update_module"
                       title="Update Module">
                        <i class="glyphicon glyphicon-edit"></i>
                    </a>
                    <?php
                    if ($v_data->status == 1) { ?>
                        <a href="#"
                           onclick="module_inactive(<?php echo $v_data->id; ?>)"
                           class="btn btn-warning" title="Inactive">
                            <i class="glyphicon glyphicon-arrow-down"></i>
                        </a>
                    <?php } else { ?>
                        <a href="#"
                           onclick="module_active(<?php echo $v_data->id; ?>)"
                           class="btn btn-warning" title="Active">
                            <i class="glyphicon glyphicon-arrow-up"></i>
                        </a>
                    <?php } ?>

                    <a href="#" onclick="delete_module(<?php echo $v_data->id; ?>)"
                       class="btn btn-danger" title="Delete Module">
                        <i class="glyphicon glyphicon-trash"></i>
                    </a>

                </td>
            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <th>SL NO</th>
            <th>Name</th>
            <th>URL</th>
            <th>Icon</th>
            <th>Sorting Position</th>
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