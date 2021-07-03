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

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-success" data-backdrop="static"
                                        data-keyboard="false" data-bs-toggle="modal" data-bs-target="#load_modal" onclick="return add_district();">
                                    Add district
                                </button>
                            </div>
                            <div class="col-md-4">
                                <select onchange="return search_content_by_id();" class="form-control"
                                        id="search_division_id">
                                    <option value="0">Search by division name</option>
                                    <?php foreach ($division as $v_division) { ?>
                                        <option
                                            value="<?php echo $v_division->id; ?>"><?php echo $v_division->division_name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <input onkeyup="return search_content();" type="text" class="form-control"
                                       id="search_district_name"
                                       placeholder="Search by district name">
                            </div>
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
                                                <th>Division Name</th>
                                                <th>District Name</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $i = 0;
                                            foreach ($district as $v_data) {
                                                $i++; ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $v_data->division_name; ?></td>
                                                    <td><?php echo $v_data->district_name; ?></td>
                                                    <td style="width: 145px;">
                                                        <a href="#" onclick="update_district(<?php echo $v_data->id; ?>)"
                                                           class="btn btn-success" data-backdrop="static"
                                                           data-keyboard="false" data-bs-toggle="modal" data-bs-target="#load_modal" title="Update district">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="#" onclick="delete_district(<?php echo $v_data->id; ?>)"
                                                           class="btn btn-danger" title="Delete district">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>SL NO</th>
                                                <th>Division Name</th>
                                                <th>District Name</th>
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
                    <button type="button"  data-bs-dismiss="modal" aria-label="Close">Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function add_district() {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>district/load_add_district_from',
            success: function (result) {
                if (result) {
                    $('#title').html('Add District');
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
    function update_district($id) {
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>district/load_update_district_from/' + $id,
            success: function (result) {
                if (result) {

                    $('#load_from').html(result);
                    $('#title').html('Update District');
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
    function delete_district($id) {
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
                        url: '<?php echo base_url() ?>district/delete_district/' + $id,
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
                        window.location.href = "<?php echo base_url()?>district/all_district";
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
        var district_name = $('#search_district_name').val();
        var division_id = $('#search_division_id').val();
        if (url != '') {
            $.ajax({
                type: "POST",
                url: url,
                data: {district_name: district_name, division_id: division_id},
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
        var district_name = $('#search_district_name').val();
        if ($.trim(district_name) != "") {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>district/all_district',
                data: {district_name: district_name},
                success: function (data) {
                    $("#ajaxdata").html(data);
                }
            });
        } else {
            $.post(base_url + "district/all_district/", function (data) {
                $("#ajaxdata").html(data);
            });
        }
        return false;
    }
</script>

<script>
    function search_content_by_id() {
        var base_url = "<?php echo base_url(); ?>";
        var division_id = $('#search_division_id').val();
        if ($.trim(division_id) != "") {
            $.ajax({
                type: 'post',
                url: '<?php echo base_url(); ?>district/all_district',
                data: {division_id: division_id},
                success: function (data) {
                    $("#ajaxdata").html(data);
                }
            });
        } else {
            $.post(base_url + "district/all_district/", function (data) {
                $("#ajaxdata").html(data);
            });
        }
    }
</script>