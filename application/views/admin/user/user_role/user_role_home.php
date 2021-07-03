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
        <!-- End breadcum -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="title">
                    <h3 class="title-text">ALl User Roll</h3>
                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table f-border-none table-hover">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 0;
                                foreach ($user_role as $v_data) {
                                    $i++; ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $v_data->role_name; ?></td>
                                        <td>
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
                                                   onclick="role_inactive(<?php echo $v_data->id; ?>)"
                                                   class="btn btn-warning" title="Inactive">
                                                    <i class="fa fa-arrow-down"></i>
                                                </a>
                                            <?php } else { ?>
                                                <a href="#"
                                                   onclick="role_active(<?php echo $v_data->id; ?>)"
                                                   class="btn btn-danger" title="Active">
                                                    <i class="fa fa-arrow-up"></i>
                                                </a>
                                            <?php } ?>

                                            <a href="#" onclick="delete_role(<?php echo $v_data->id; ?>)"
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
</main>


<div class="modal inmodal" id="load_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
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
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function add_user_role() {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>user/load_add_user_role_from',
            success: function (result) {
                if (result) {
                    $('#title').html('Create User Roll');
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
    function role_active(id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>user/role_active/' + id,
            success: function (result) {
                if (result) {
                    window.location.href = "<?php echo base_url()?>user/all_role";
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
    function role_inactive(id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>user/role_inactive/' + id,
            success: function (result) {
                if (result) {
                    window.setTimeout(function () {
                        window.location.href = "<?php echo base_url()?>user/all_role";
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
    function delete_role($id) {
       
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
                        url: '<?php echo base_url() ?>user/delete_role/' + $id,
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
                        window.location.href = "<?php echo base_url()?>user/all_role";
                    }, 2000);
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
    }
</script>

