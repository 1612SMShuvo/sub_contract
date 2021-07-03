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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-md-3">
                            <button type="button" class="btn btn-success" data-backdrop="static"
                                    data-keyboard="false" data-bs-toggle="modal" data-bs-target="#load_modal" onclick="return add_division();">
                                Add Division
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
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $i = 0;
                                            foreach ($division as $v_data) {
                                                $i++; ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $v_data->division_name; ?></td>
                                                    <td style="width: 145px;">
                                                        <a href="#" onclick="update_division(<?php echo $v_data->id; ?>)"
                                                           class="btn btn-success" data-backdrop="static"
                                                           data-keyboard="false" data-bs-toggle="modal" data-bs-target="#load_modal"  id="update_division"
                                                           title="Update Division">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="#" onclick="delete_division(<?php echo $v_data->id; ?>)"
                                                           class="btn btn-danger" title="Delete Division">
                                                            <i class="fa fa-trash"></i>
                                                        </a>

                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>SL NO</th>
                                                <th>Name</th>
                                                <th>Action</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                            <?php echo $links; ?>
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
    function add_division() {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>division/load_add_division_from',
            success: function (result) {
                if (result) {
                    $('#title').html('Add Division');
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
    function update_division($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>division/load_update_division_from/' + $id,
            success: function (result) {
                if (result) {
                    $('#title').html('Update Division');
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
    function delete_division($id) {
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
                        url: '<?php echo base_url() ?>division/delete_division/' + $id,
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
                        window.location.href = "<?php echo base_url()?>division/all_division";
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