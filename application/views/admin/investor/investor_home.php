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
                                    <h3 class="title-text">All Register User</h3>
                                    <div class="widget-content">
                                        <div class="table-responsive">
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
                                                    $i = 0;
                                                    foreach ($investor as $investor_data) {
                                                        $i++; ?>
                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo $investor_data->user_name; ?></td>
                                                            <td><?php echo $investor_data->email; ?></td>
                                                            <td><?php echo $investor_data->phone; ?></td>
                                                            <td><?php echo $investor_data->organization_name; ?></td>
                                                            <td><?php echo $investor_data->number_of_employees; ?></td>
                                                            <td>
                                                                <?php if ($investor_data->status == 1) {
                                                                    echo "<p style='color: green'>Active</p>";
                                                                } else {
                                                                    echo "<p style='color: red'>Inactive</p>";
                                                                } ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                if ($investor_data->status == 1) { ?>
                                                                    <a href="#"
                                                                       onclick="investor_inactive(<?php echo $investor_data->id; ?>)"
                                                                       class="btn btn-success" title="Inactive">
                                                                        <i class="fa fa-arrow-up"></i>
                                                                    </a>
                                                                <?php } else { ?>
                                                                    <a href="#"
                                                                       onclick="investor_active(<?php echo $investor_data->id; ?>)"
                                                                       class="btn btn-danger" title="Active">
                                                                        <i class="fa fa-arrow-down"></i>
                                                                    </a>
                                                                <?php } ?>

                                                                <a href="#"
                                                                   onclick="view_details(<?php echo $investor_data->id; ?>)"
                                                                   class="btn btn-info" title="View Details">
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
<script>
    function investor_active($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>investor/investor_active/' + $id,
            success: function (result) {
                if (result) {
                    window.location.href = "<?php echo base_url()?>investor/all_investor";
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
    function investor_inactive($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>investor/investor_inactive/' + $id,
            success: function (result) {
                if (result) {
                    window.setTimeout(function () {
                        window.location.href = "<?php echo base_url()?>investor/all_investor";
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