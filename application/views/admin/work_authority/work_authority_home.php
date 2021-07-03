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
                                    <button type="button" class="btn btn-success" data-backdrop="static"
                                            data-keyboard="false" data-bs-toggle="modal" data-bs-target="#load_modal" onclick="return add_work_authority();">
                                        Add Work Authority
                                    </button>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="title">
                                    <h3 class="title-text">All Work Authority</h3>
                                    <div class="widget-content">
                                        <div class="table-responsive">
                                            <table class="table f-border-none table-hover">
                                                <thead>
                                                <tr>
                                                    <th>SL NO</th>
                                                    <th>Work Authority Name</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $i = 0;
                                                foreach ($work_authority as $v_authority) {
                                                    $i++; ?>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $v_authority->work_authority_name; ?></td>
                                                        <td>
                                                            <?php
                                                            if ($v_authority->status == 1) {
                                                                echo "Active";
                                                            } else {
                                                                echo "Inactive";
                                                            }
                                                            ?>
                                                        </td>

                                                        <td>
                                                            <?php
                                                            if ($v_authority->status == 1) { ?>

                                                                <a href="#"
                                                                   onclick="work_authority_inactive(<?php echo $v_authority->id; ?>)"
                                                                   class="btn btn-warning" title="Inactive">
                                                                    <i class="fa fa-arrow-down"></i>
                                                                </a>
                                                            <?php } else { ?>
                                                                <a href="#"
                                                                   onclick="work_authority_active(<?php echo $v_authority->id; ?>)"
                                                                   class="btn btn-danger" title="Active">
                                                                    <i class="fa fa-arrow-up"></i>
                                                                </a>

                                                            <?php } ?>
                                                            <a href="#"
                                                               onclick="delete_work_authority(<?php echo $v_authority->id; ?>)"
                                                               class="btn btn-danger" title="Delete Role">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
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

<div class="modal fade" id="load_modal" tabindex="-1" aria-labelledby="exampleStandardModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleStandardModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
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
                    <button type="button"  data-bs-dismiss="modal" aria-label="Close">Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function add_work_authority() {
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>work_authority/load_add_work_authority_from',
                success: function (result) {
                    if (result) {
                        $('#title').html('Add Work Authority');
                        $('#load_from').html(result);
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
        function work_authority_active($id) {
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>work_authority/work_authority_active/' + $id,
                success: function (result) {
                    if (result) {
                        window.location.href = "<?php echo base_url()?>work_authority/all_work_authority";
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
        function work_authority_inactive($id) {
            $.ajax({
                type: "POST",
                url: '<?php echo base_url() ?>work_authority/work_authority_inactive/' + $id,
                success: function (result) {
                    if (result) {
                        window.setTimeout(function () {
                            window.location.href = "<?php echo base_url()?>work_authority/all_work_authority";
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
        function delete_work_authority($id) {
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
                            url: '<?php echo base_url() ?>work_authority/delete_work_authority/' + $id,
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
                            window.location.href = "<?php echo base_url()?>work_authority/all_work_authority";
                        }, 2000);
                    } else {
                        swal("Cancelled", "Your imaginary file is safe :)", "error");
                    }
                });
        }
    </script>

