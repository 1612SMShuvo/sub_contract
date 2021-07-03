<div id="ajaxdata">
    <?php echo $links; ?>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>SL NO</th>
            <th>Module Name</th>
            <th>Menu Name</th>
            <th>Sub-menu Name</th>
            <th>URL</th>
            <th>Order</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i = $this->uri->segment(3) + 0;
        foreach ($sub_menu as $v_data) {
            $i++; ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $v_data->module_name; ?></td>
                <td><?php echo $v_data->menu_name; ?></td>
                <td><?php echo $v_data->sub_menu_name; ?></td>
                <td><?php echo chunk_split($v_data->sub_menu_url, 8); ?></td>
                <td><?php echo $v_data->sub_menu_sort; ?></td>
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
                    <a href="#" onclick="update_sub_menu(<?php echo $v_data->id; ?>)"
                       class="btn btn-success" data-backdrop="static"
                       data-keyboard="false" data-toggle="modal"
                       data-target="#load_modal" id="update_sub_menu"
                       title="Update Sub-Menu">
                        <i class="fas fa-edit"></i>
                    </a>
                    <?php
                    if ($v_data->status == 1) { ?>
                        <a href="#"
                           onclick="sub_menu_inactive(<?php echo $v_data->id; ?>)"
                           class="btn btn-warning" title="Inactive">
                            <i class="fas fa-arrow-down"></i>
                        </a>
                    <?php } else { ?>
                        <a href="#"
                           onclick="sub_menu_active(<?php echo $v_data->id; ?>)"
                           class="btn btn-danger" title="Active">
                            <i class="fas fa-arrow-up"></i>
                        </a>
                    <?php } ?>

                    <a href="#" onclick="delete_sub_menu(<?php echo $v_data->id; ?>)"
                       class="btn btn-danger" title="Delete Menu">
                        <i class="far fa-trash-alt"></i>
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
            <th>Sub-menu Name</th>
            <th>URL</th>
            <th>Order</th>
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