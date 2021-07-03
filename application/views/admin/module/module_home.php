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
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-success" id="add_module" data-backdrop="static"
                                        data-keyboard="false"
                                        data-bs-toggle="modal" data-bs-target="#load_modal" onclick="return add_module();">
                                    Add Module
                                </button>
                            </div>
                        </div>
                        <!-- ./card-header -->

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
                                                    foreach ($module as $v_data) {
                                                        $i++; ?>
                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo $v_data->module_name; ?></td>
                                                            <td><?php echo $v_data->module_url; ?></td>
                                                            <td><?php echo $v_data->module_icon; ?></td>
                                                            <td><?php echo $v_data->sort; ?></td>
                                                            <td>
                                                                <?php
                                                                if ($v_data->status == 1) {
                                                                    echo "Active";
                                                                } else {
                                                                    echo "Inactive";
                                                                }
                                                                ?>
                                                            </td>
                                                            <td >
                                                                <a href="#" onclick="update_module(<?php echo $v_data->id; ?>)"
                                                                   class="btn btn-success" data-backdrop="static"
                                                                   data-keyboard="false" data-bs-toggle="modal" data-bs-target="#load_modal" id="update_module"
                                                                   title="Update Module">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                                <?php
                                                                if ($v_data->status == 1) { ?>
                                                                    <a href="#"
                                                                       onclick="module_inactive(<?php echo $v_data->id; ?>)"
                                                                       class="btn btn-warning" title="Inactive">
                                                                        <i class="fa fa-arrow-down"></i>
                                                                    </a>
                                                                <?php } else { ?>
                                                                    <a href="#"
                                                                       onclick="module_active(<?php echo $v_data->id; ?>)"
                                                                       class="btn btn-danger" title="Active">
                                                                        <i class="fa fa-arrow-up"></i>
                                                                    </a>
                                                                <?php } ?>
                                                                <a href="#" onclick="delete_module(<?php echo $v_data->id; ?>)"
                                                                   class="btn btn-danger" title="Delete Module">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>

                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>

</div>
                    </div>
                </div>
            </div>
        </main>
    <div class="modal fade" id="load_modal" tabindex="-1" aria-labelledby="exampleStandardModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleStandardModalLabel">Modal title</h5>
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
    function add_module() {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>Module/load_add_module_from',
            success: function (result) {
                if (result) {
                    $('#title').html('Add Module');
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
    function update_module($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>Module/load_update_module_from/' + $id,
            success: function (result) {
                if (result) {
                    $('#title').html('Update Module');
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
    function module_active($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>Module/module_active/' + $id,
            success: function (result) {
                if (result) {
                    window.location.href = "<?php echo base_url()?>Module/all_module";
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
    function module_inactive($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>Module/module_inactive/' + $id,
            success: function (result) {
                if (result) {
                    window.setTimeout(function () {
                        window.location.href = "<?php echo base_url()?>Module/all_module";
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
    function delete_module($id) {
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
                        url: '<?php echo base_url() ?>Module/delete_module/' + $id,
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
                        window.location.href = "<?php echo base_url()?>Module/all_module";
                    }, 2000);
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
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
        var user_name = $('#user_name').val();
        if (url != '') {
            $.ajax({
                type: "POST",
                url: url,
                data: {user_name: user_name},
                success: function (msg) {
                    $("#ajaxdata").html(msg);
                }
            });
        }
        return false;
    }
</script>