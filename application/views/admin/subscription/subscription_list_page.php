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
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                            </div>
                        </div>
                        <!-- ./card-header -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="title">
                                    <h3 class="title-text">All Subscription List</h3>
                                    <div class="widget-content">
                                        <div class="table-responsive">
                                            <table class="table f-border-none table-hover">
                                                <thead style="background-color: #347CA4;">
                                                <tr>
                                                    <th>SL NO</th>
                                                    <th>Organization Name</th>
                                                    <th>Subscription Fee</th>
                                                    <th>Account No.</th>
                                                    <th>Transiction ID</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $i = 0;
                                                foreach ($subscription as $v_data) {
                                                    $i++; ?>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $v_data->organization_name; ?></td>
                                                        <td><?php echo $v_data->amount; ?></td>
                                                        <td><?php echo $v_data->account_no; ?></td>
                                                        <td><?php echo $v_data->txn_id; ?></td>
                                                        <td style="text-align: center;">
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
                                                                   onclick="subscriber_inactive(<?php echo $v_data->id; ?>)"
                                                                   class="btn btn-warning" title="Inactive">
                                                                    <i class="fa fa-arrow-down"></i>
                                                                </a>
                                                            <?php } else { ?>
                                                                <a href="#"
                                                                   onclick="subscriber_active(<?php echo $v_data->id; ?>)"
                                                                   class="btn btn-danger" title="Active">
                                                                    <i class="fa fa-arrow-up"></i>
                                                                </a>
                                                            <?php } ?>

                                                            <a href="#"
                                                               onclick="delete_sub_menu(<?php echo $v_data->id; ?>)"
                                                               class="btn btn-danger" title="Delete Menu">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                                <tfoot>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
        </section>
    </div>
</main>
<div class="modal inmodal" id="load_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
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
    function subscriber_active($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>subscription_view/subscriber_active/' + $id,
            success: function (result) {
                if (result) {
                    window.location.href = "<?php echo base_url()?>subscription_view/subscription_list";
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
    function subscriber_inactive($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>subscription_view/subscriber_inactive/' + $id,
            success: function (result) {
                if (result) {
                    window.setTimeout(function () {
                        window.location.href = "<?php echo base_url()?>subscription_view/subscription_list";
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
    function delete_sub_menu($id) {
        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn-danger',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function (isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: "POST",
                        url: '<?php echo base_url() ?>subscription_view/delete_subscriber/' + $id,
                        success: function (result) {
                            if (result) {
                                return false;
                            } else {
                                return false;
                            }
                        }
                    });
                    swal("Deleted!", "Your imaginary file has been deleted!", "success");
                    window.setTimeout(function () {
                        window.location.href = "<?php echo base_url()?>subscription_view/subscription_list";
                    }, 2000);
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
    }
</script>
