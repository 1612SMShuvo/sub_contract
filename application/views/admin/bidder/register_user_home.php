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
                                                                   class="btn btn-info"  data-backdrop="static"
                                                                   data-keyboard="false" data-bs-toggle="modal" data-bs-target="#load_modal" title="view_details">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>
                                                <?php echo $links ?>
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
<div class="modal inmodal" id="load_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl ">
        <div class="modal-content animated fadeIn ">
            <div class="modal-header">
                <h4 class="modal-title text-center" id="title"></h4>
            </div>
            <div class="modal-body">
                <div id="load_from">
                </div>
                <p class="m-t text-center">
                    <small><?php echo $this->session->userdata('powered_by'); ?>
                        <br><?php echo $this->session->userdata('copy_write'); ?>
                    </small>
                </p>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function bidder_active($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>bidder/bidder_active/' + $id,
            success: function (result) {
                if (result) {
                    window.location.href = "<?php echo base_url()?>bidder/all_bidder";
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
    function bidder_inactive($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>bidder/bidder_inactive/' + $id,
            success: function (result) {
                if (result) {
                    window.setTimeout(function () {
                        window.location.href = "<?php echo base_url()?>bidder/all_bidder";
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
    function view_details($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>bidder/load_view_bidder_from/' + $id,
            success: function (result) {
                if (result) {
                    $('#load_from').html(result);
                    $('#title').html('View Bidder');
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>
