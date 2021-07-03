<div id="ajaxdata">
    <?php echo $links; ?>
    <table class="table f-border-none table-hover">
        <thead>
        <tr>
            <th>SL NO</th>
            <th>User Name</th>
            <th>User Phone</th>
            <th>User Email</th>
            <th>Organization Name</th>
            <th>Number Of Employees</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i = $this->uri->segment(4) + 0;
        foreach ($bidder as $bidder_data) {
            $i++; ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $bidder_data->user_name; ?></td>
                <td><?php echo $bidder_data->email; ?></td>
                <td><?php echo $bidder_data->phone; ?></td>
                <td><?php echo $bidder_data->organization_name; ?></td>
                <td><?php echo $bidder_data->number_of_employees; ?></td>
                <td>
                    <?php if ($bidder_data->status == 1) {
                        echo "<p style='color: green'>Active</p>";
                    } else {
                        echo "<p style='color: red'>Inactive</p>";
                    } ?>
                </td>
                <td>
                    <?php
                    if ($bidder_data->status == 1) { ?>
                        <a href="#"
                           onclick="bidder_inactive(<?php echo $bidder_data->id; ?>)"
                           class="btn btn-success" title="Inactive">
                            <i class="fa fa-arrow-up"></i>
                        </a>
                    <?php } else { ?>
                        <a href="#"
                           onclick="bidder_active(<?php echo $bidder_data->id; ?>)"
                           class="btn btn-danger" title="Active">
                            <i class="fa fa-arrow-down"></i>
                        </a>
                    <?php } ?>
                    <a href="#"
                       onclick="view_details(<?php echo $bidder_data->id; ?>)"
                       class="btn btn-info" title="view_details">
                        <i class="fa fa-eye"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php echo $links ?>
</div>
<script>
    $(document).ready(function () {
        $("#ajax_pagingsearc a").attr('onclick', 'return main_page_pagination($(this));');
    });
</script>