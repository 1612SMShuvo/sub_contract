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
                            <button type="button" class="btn btn-success" d data-backdrop="static"
                                    data-keyboard="false" data-bs-toggle="modal" data-bs-target="#load_modal"  onclick="return add_menu();">
                                Add Menu
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
                                                        <th>Module Name</th>
                                                        <th>Menu Name</th>
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
                                                    foreach ($menu as $v_data) {
                                                        $i++; ?>
                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo $v_data->module_name; ?></td>
                                                            <td><?php echo $v_data->menu_name; ?></td>
                                                            <td><?php echo $v_data->menu_url; ?></td>
                                                            <td><?php echo $v_data->menu_icon; ?></td>
                                                            <td><?php echo $v_data->menu_sort; ?></td>
                                                            <td>
                                                                <?php
                                                                if ($v_data->status == 1) {
                                                                    echo "Active";
                                                                } else {
                                                                    echo "Inactive";
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a href="#" onclick="update_menu(<?php echo $v_data->id; ?>)"
                                                                   class="btn btn-success" data-backdrop="static"
                                                                   data-keyboard="false" data-bs-toggle="modal" data-bs-target="#load_modal" id="update_menu"
                                                                   title="Update Menu">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                                <?php
                                                                if ($v_data->status == 1) { ?>
                                                                    <a href="#"
                                                                       onclick="menu_inactive(<?php echo $v_data->id; ?>)"
                                                                       class="btn btn-warning" title="Inactive">
                                                                        <i class="fa fa-arrow-down"></i>
                                                                    </a>
                                                                <?php } else { ?>
                                                                    <a href="#"
                                                                       onclick="menu_active(<?php echo $v_data->id; ?>)"
                                                                       class="btn btn-danger" title="Active">
                                                                        <i class="fa fa-arrow-up"></i>
                                                                    </a>
                                                                <?php } ?>

                                                                <a href="#" onclick="delete_menu(<?php echo $v_data->id; ?>)"
                                                                   class="btn btn-danger" title="Delete Menu">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>SL NO</th>
                                                        <th>Module Name</th>
                                                        <th>Menu Name</th>
                                                        <th>URL</th>
                                                        <th>Icon</th>
                                                        <th>Sorting Position</th>
                                                        <th>Status</th>
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
</div>


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
</div>
<script>
    function add_menu() {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>menu/load_add_menu_from',
            success: function (result) {
                if (result) {
                    $('#title').html('Add Menu');
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
    function update_menu($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>menu/load_update_menu_from/' + $id,
            success: function (result) {
                if (result) {
                    $('#title').html('Update Menu');
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
    function menu_active($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>menu/menu_active/' + $id,
            success: function (result) {
                if (result) {
                    window.location.href = "<?php echo base_url()?>menu/all_menu";
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
    function menu_inactive($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>menu/menu_inactive/' + $id,
            success: function (result) {
                if (result) {
                    window.setTimeout(function () {
                        window.location.href = "<?php echo base_url()?>menu/all_menu";
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
    function delete_menu($id) {
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
                        url: '<?php echo base_url() ?>menu/delete_menu/' + $id,
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
                        window.location.href = "<?php echo base_url()?>menu/all_menu";
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
        var menu_name = $('#menu_name').val();
        var module_id = $('#module_id').val();
        if (url != '') {
            $.ajax({
                type: "POST",
                url: url,
                data: {menu_name: menu_name, module_id: module_id},
                success: function (msg) {
                    $("#ajaxdata").html(msg);
                }
            });
        }
        return false;
    }
</script>

<script>
    function search_content() {
        var base_url = "<?php echo base_url(); ?>";
        var menu_name = $('#menu_name').val();
        if ($.trim(menu_name) != "") {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>master/menu/all_menu',
                data: {menu_name: menu_name},
                success: function (data) {
                    $("#ajaxdata").html(data);
                }
            });
        } else {
            $.post(base_url + "master/menu/all_menu/", function (data) {
                $("#ajaxdata").html(data);
            });
        }
        return false;
    }
</script>

<script>
    function search_content_by_id() {
        var base_url = "<?php echo base_url(); ?>";
        var module_id = $('#search_module_id').val();
        if ($.trim(module_id) != "") {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>master/menu/all_menu',
                data: {module_id: module_id},
                success: function (data) {
                    $("#ajaxdata").html(data);
                }
            });
        } else {
            $.post(base_url + "master/menu/all_menu/", function (data) {
                $("#ajaxdata").html(data);
            });
        }
    }
</script>