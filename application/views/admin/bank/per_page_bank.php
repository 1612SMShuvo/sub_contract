<div id="ajaxdata">
    <?php echo $links; ?>
    <table class="table table-striped  table-bordered table-hover">
        <thead>
        <tr>
            <th>SL NO</th>
            <th>Bank Name</th>

            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i = $this->uri->segment(3) + 0;
        foreach ($bank as $v_data) {
            $i++; ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $v_data->bank_name; ?></td>
                <td style="width: 145px;">
                    <a href="#" onclick="update_bank(<?php echo $v_data->id; ?>)"
                       class="btn btn-success" data-backdrop="static"
                       data-keyboard="false" data-toggle="modal"
                       data-target="#update_bank_modal" id="update_bank"
                       title="Update bank">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" onclick="delete_bank(<?php echo $v_data->id; ?>)"
                       class="btn btn-danger" title="Delete bank">
                        <i class="far fa-trash-alt"></i>
                    </a>

                </td>
            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
        
        </tfoot>
    </table>
    <?php echo $links; ?>
</div>
<script>
    $(document).ready(function () {
        $("#ajax_pagingsearc a").attr('onclick', 'return main_page_pagination($(this));');
    });
</script>