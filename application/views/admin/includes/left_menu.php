<div class="adminpopular-sidebar">
    <div class="adminpopular-sidebar-wrapper content-scroll">
        <nav class="adminpopular-sidebar-navi">
            <div class="adminpopular-sidebar-user">
                <!-- <img class="ap-sidebar-avatar" src="<?php echo base_url() ?>admin_assets/images/pic.jpg"
                     alt="User Image"/> -->
                <div>
                    <p class="ap-username"><?php $user_role = $this->session->userdata("role_id");
                        if ($user_role == 1){ ?></p><br>
                    <h3 class="ap-user-designation">Administration</h3>
                    <?php } ?>
                </div>
            </div>
            <ul class="nav">
                <a href="#" class="adminpopular-material-button">
                    <span class="adminpopular-icon"><i class="ti-home"></i></span>
                    <span class="adminpopular-label">Dashboard</span>
                </a>
                <?php
                $CI = &get_instance();
                $user_id = $this->session->userdata('role_id');
                $module = $CI->Main_model->select_all_module($user_id);
                foreach ($module as $v_module) {
                    ?>
                    <li>
                        <?php if ($v_module->menu_level == 1) { ?>
                            <a href="<?php echo $v_module->module_url; ?>"
                               class="adminpopular-material-button">
                                <span class="adminpopular-icon"><i class="ti-layout-grid4"></i></span>
                                <span class="adminpopular-label"><?php echo $v_module->module_name; ?></span>
                                <span class="adminpopular-arrow-icon"></span>
                            </a>
                        <?php } else { ?>
                            <a href="<?php echo $v_module->module_url; ?>"
                               class="adminpopular-material-button">
                                <span class="adminpopular-icon"><i class="ti-layout-grid4"></i></span>
                                <span class="adminpopular-label"><?php echo $v_module->module_name; ?></span>
                                <span class="adminpopular-arrow-icon"><i class="fa fa-angle-down"></i></span>
                            </a>
                            <ul>
                                <?php
                                $CI = &get_instance();
                                $menu = $CI->Main_model->select_menu_by_module_id($v_module->id, $user_id);
                                foreach ($menu as $v_menu) {
                                    ?>
                                    <li>
                                    <?php if ($v_menu->show_status == 1) { ?>
                                        <li>
                                            <a href="<?php echo base_url() ?><?php echo $v_menu->menu_url; ?>">
                                                <i class="<?php echo $v_menu->menu_icon; ?>"></i>
                                                <?php echo $v_menu->menu_name; ?>
                                            </a>
                                        </li>
                                    <?php } else { ?>
                                        <a href="<?php echo base_url() ?><?php echo $v_menu->menu_url; ?>"
                                           class="adminpopular-material-button">
                                            <span class="adminpopular-icon"><i class="ti-layout-grid4"></i></span>
                                            <span class="adminpopular-label"><?php echo $v_menu->menu_name; ?></span>
                                            <span class="adminpopular-arrow-icon"><i
                                                    class="fa fa-angle-down"></i></span>
                                        </a>
                                        <ul>
                                            <?php
                                            $CI = &get_instance();
                                            $result = $CI->Main_model->select_sub_menu_by_menu_id($v_menu->id, $user_id);
                                            foreach ($result as $v_sub_menu) {
                                                ?>
                                                <li class="active">
                                                    <a href="<?php echo base_url() ?><?php echo $v_sub_menu->sub_menu_url; ?>"><?php echo $v_sub_menu->sub_menu_name; ?></a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</div>


