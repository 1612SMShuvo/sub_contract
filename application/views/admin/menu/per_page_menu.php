<div id="ajaxdata">
    <?php echo $links; ?>
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>SL NO</th>
            <th>Module Name</th>
            <th>Menu Name</th>
            <th>URL</th>
            <th>Icon</th>
            <th>Sorting Position</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i = 0;
        foreach ($menu as $v_data) {
            $i++; ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $v_data->module_name; ?></td>
                <td><?php echo $v_data->menu_name; ?></td>
                <td><?php echo $v_data->menu_url; ?></td>
                <td><?php echo $v_data->menu_icon; ?></td>
                <td><?php echo $v_data->menu_sort; ?></td>
                <td>
                    <?php
                    if ($v_data->status == 1) {
                        echo "Active";
                    } else {
                        echo "Inactive";
                    }
                    ?>
                </td>
                <td style="width: 156px;">
                    <a href="#" onclick="update_menu(<?php echo $v_data->id; ?>)"
                       class="btn btn-success" data-backdrop="static"
                       data-keyboard="false" data-toggle="modal"
                       data-target="#load_modal" id="update_menu"
                       title="Update Menu">
                        <i class="fa fa-edit"></i>
                    </a>
                    <?php
                    if ($v_data->status == 1) { ?>
                        <a href="#"
                           onclick="menu_inactive(<?php echo $v_data->id; ?>)"
                           class="btn btn-warning" title="Inactive">
                            <i class="fa fa-arrow-down"></i>
                        </a>
                    <?php } else { ?>
                        <a href="#"
                           onclick="menu_active(<?php echo $v_data->id; ?>)"
                           class="btn btn-danger" title="Active">
                            <i class="fa fa-arrow-up"></i>
                        </a>
                    <?php } ?>

                    <a href="#" onclick="delete_menu(<?php echo $v_data->id; ?>)"
                       class="btn btn-danger" title="Delete Menu">
                        <i class="fa fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <th>SL NO</th>
            <th>Module Name</th>
            <th>Menu Name</th>
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