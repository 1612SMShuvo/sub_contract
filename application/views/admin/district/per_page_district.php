<div id="ajaxdata">
    <?php echo $links; ?>
    <table class="table table-striped  table-bordered table-hover">
        <thead>
        <tr>
            <th>SL NO</th>
            <th>Division Name</th>
            <th>District Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i = $this->uri->segment(3) + 0;
        foreach ($district as $v_data) {
            $i++; ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $v_data->division_name; ?></td>
                <td><?php echo $v_data->district_name; ?></td>
                <td style="width: 145px;">
                    <a href="#" onclick="update_district(<?php echo $v_data->id; ?>)"
                       class="btn btn-success" data-backdrop="static"
                       data-keyboard="false" data-toggle="modal"
                       data-target="#load_modal" id="update_district"
                       title="Update district">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" onclick="delete_district(<?php echo $v_data->id; ?>)"
                       class="btn btn-danger" title="Delete district">
                        <i class="far fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <th>SL NO</th>
            <th>Division Name</th>
            <th>District Name</th>
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