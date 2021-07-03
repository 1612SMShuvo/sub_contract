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
                            <div class="row">
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-success" data-backdrop="static"
                                            data-keyboard="false" data-bs-toggle="modal" data-bs-target="#load_modal"
                                            onclick="return add_sub_menu();">
                                        Add Sub-Menu
                                    </button>
                                </div>

                                <div class="col-md-3">
                                    <select onchange="return search_content_by_id();" class="form-control"
                                            id="search_module_id"
                                            name="search_module_id">
                                        <option value="0">Search by module name</option>
                                        <?php foreach ($module as $v_module) { ?>
                                            <option
                                                value="<?php echo $v_module->id; ?>"><?php echo $v_module->module_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select onchange="return search_content_by_id();" class="form-control"
                                            id="search_menu_id"
                                            name="search_menu_id">
                                        <option value="0">Search by menu name</option>
                                        <?php foreach ($menu as $v_menu) { ?>
                                            <option
                                                value="<?php echo $v_menu->id; ?>"><?php echo $v_menu->menu_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input onkeyup="return search_content_by_name();" type="text" class="form-control"
                                           id="search_sub_menu_name"
                                           placeholder="Search by sub-menu name">
                                </div>
                            </div>
                        </div>
                        <!-- ./card-header -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="title">
                                    <h3 class="title-text">ALl Menu</h3>
                                    <div class="widget-content">
                                        <div class="table-responsive">
                                            <table class="table f-border-none table-hover">
                                                <thead>
                                                <tr>
                                                    <th>SL NO</th>
                                                    <th>Module Name</th>
                                                    <th>Menu Name</th>
                                                    <th>Sub-menu Name</th>
                                                    <th>URL</th>
                                                    <th>Order</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $i = 0;
                                                foreach ($sub_menu as $v_data) {
                                                    $i++; ?>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $v_data->module_name; ?></td>
                                                        <td><?php echo $v_data->menu_name; ?></td>
                                                        <td><?php echo $v_data->sub_menu_name; ?></td>
                                                        <?php //echo word_limiter($v_data->sub_menu_url,5); ?>
                                                        <td><?php echo chunk_split($v_data->sub_menu_url, 8); ?></td>
                                                        <td><?php echo $v_data->sub_menu_sort; ?></td>
                                                        <td style="text-align: center;">
                                                            <?php
                                                            if ($v_data->status == 1) {
                                                                echo "Active";
                                                            } else {
                                                                echo "Inactive";
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <a href="#"
                                                               onclick="update_sub_menu(<?php echo $v_data->id; ?>)"
                                                               class="btn btn-success" data-backdrop="static"
                                                               data-keyboard="false" data-bs-toggle="modal"
                                                               data-bs-target="#load_modal" id="update_sub_menu"
                                                               title="Update Sub-Menu">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <?php
                                                            if ($v_data->status == 1) { ?>
                                                                <a href="#"
                                                                   onclick="sub_menu_inactive(<?php echo $v_data->id; ?>)"
                                                                   class="btn btn-warning" title="Inactive">
                                                                    <i class="fa fa-arrow-down"></i>
                                                                </a>
                                                            <?php } else { ?>
                                                                <a href="#"
                                                                   onclick="sub_menu_active(<?php echo $v_data->id; ?>)"
                                                                   class="btn btn-danger" title="Active">
                                                                    <i class="fa fa-arrow-up"></i>
                                                                </a>
                                                            <?php } ?>

                                                            <a href="#"
                                                               onclick="delete_sub_menu(<?php echo $v_data->id; ?>)"
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
                                                    <th>Sub-menu Name</th>
                                                    <th>URL</th>
                                                    <th>Order</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </section>
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
    function add_sub_menu() {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>sub_menu/load_add_sub_menu_from',
            success: function (result) {
                if (result) {
                    $('#title').html('Add Sub-Menu');
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
    function update_sub_menu($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>sub_menu/load_update_sub_menu_from/' + $id,
            success: function (result) {
                if (result) {
                    $('#title').html('Update Sub-Menu');
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
    function sub_menu_active($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>sub_menu/sub_menu_active/' + $id,
            success: function (result) {
                if (result) {
                    window.location.href = "<?php echo base_url()?>sub_menu/all_sub_menu";
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
    function sub_menu_inactive($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>sub_menu/sub_menu_inactive/' + $id,
            success: function (result) {
                if (result) {
                    window.setTimeout(function () {
                        window.location.href = "<?php echo base_url()?>sub_menu/all_sub_menu";
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
                        url: '<?php echo base_url() ?>sub_menu/delete_sub_menu/' + $id,
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
                        window.location.href = "<?php echo base_url()?>sub_menu/all_sub_menu";
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
        var module_id = $('#search_module_id').val();
        var menu_id = $('#search_menu_id').val();
        if (url != '') {
            $.ajax({
                type: "POST",
                url: url,
                data: {module_id: module_id, menu_id: menu_id},
                success: function (msg) {
                    $("#ajaxdata").html(msg);
                }
            });
        }
        return false;
    }
</script>

<script>
    function search_content_by_name() {
        var base_url = "<?php echo base_url(); ?>";
        var sub_menu_name = $('#search_sub_menu_name').val();
        if ($.trim(sub_menu_name) != "") {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>sub_menu/all_sub_menu',
                data: {sub_menu_name: sub_menu_name},
                success: function (data) {
                    $("#ajaxdata").html(data);
                }
            });
        } else {
            $.post(base_url + "sub_menu/all_sub_menu/", function (data) {
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
        var menu_id = $('#search_menu_id').val();
        if ($.trim(module_id) != "" || (menu_id) != "") {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>sub_menu/all_sub_menu',
                data: {module_id: module_id, menu_id: menu_id},
                success: function (data) {
                    $("#ajaxdata").html(data);
                }
            });
        } else {
            $.post(base_url + "sub_menu/all_sub_menu/", function (data) {
                $("#ajaxdata").html(data);
            });
        }
    }
</script>