<style>
    #ul_id {
        list-style-type: none;
    }
</style>


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
<!--    <section class="content">-->
<!--        <div class="row">-->
<!--            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">-->
<!--                <div class="card">-->
<!--                    <!-- ./card-header -->
<!--                    <div class="card-body">-->
<!--                        <div class="form-group">-->
<!--                            <div style="display: none;" id="add_result"-->
<!--                                 class="alert text-success text-center"></div>-->
<!--                        </div>-->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="title">
                                    <h3 class="title-text">ALl User Roll</h3>
                                    <div class="widget-content">
                                        <form action="#" method="post" id="user_privilege">
                                            <div class="col-md-12">
                                                <p>USER ID :
                                                    <select style="width: 200px;" required="required" name="user_id" id="user_id" required onchange="select_user_id();">
                                                        <option value="">Select</option>
                                                        <?php foreach ($user_role as $temp) { ?>
                                                            <option
                                                                value="<?php echo $temp->id; ?>"><?php echo $temp->role_name; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </p>
                                                Check All:<input type="checkbox" onClick="checkAll(this)">
                                                <div id="hide_content">
                                                    <div>
                                                        <?php
                                                        foreach ($module as $v_module) { ?>
                                                            <ul id="ul_id">
                                                                <li style="font-size: 19px;">
                                                                    <input type="checkbox"><?php echo $v_module->module_name; ?>
                                                                    <?php
                                                                    $CI = get_instance();
                                                                    $menu = $CI->User_model->select_all_menu($v_module->id);
                                                                    foreach ($menu as $v_menu) { ?>
                                                                        <ul id="ul_id">
                                                                            <li style="font-size: 17px;">
                                                                                <input type="checkbox"><?php echo $v_menu->menu_name; ?>
                                                                                <?php
                                                                                $CI = get_instance();
                                                                                $sub_menu = $CI->User_model->select_all_sub_menu($v_module->id, $v_menu->id);
                                                                                foreach ($sub_menu as $v_sub_menu) {
                                                                                    ?>
                                                                                    <ul id="ul_id">
                                                                                        <li style="font-size: 15px;">
                                                                                            <input type="checkbox"><?php echo $v_sub_menu->sub_menu_name; ?>
                                                                                        </li>
                                                                                    </ul>
                                                                                <?php } ?>
                                                                            </li>
                                                                        </ul>
                                                                    <?php } ?>
                                                                </li>
                                                            </ul>
                                                        <?php } ?>
                                                        <input type="submit" value="Set Privilege" class="btn btn-success">
                                                    </div>
                                                </div>
                                                <div id="show_content"></div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <!-- /.card-body -->

                <!-- /.card -->

</div>
</main>
<script>
    function select_user_id() {
        var user_id = $('#user_id').val();
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url()?>user/load_user_data/' + user_id,
            success: function (result) {
                if (result) {
                    $('#hide_content').hide();
                    $('#show_content').show();
                    $('#show_content').html(result);
                    return false;
                } else {
                    return false;
                }
            }
        });
        return false;
    }
</script>





