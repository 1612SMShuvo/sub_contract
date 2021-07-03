<?php
$CI = &get_instance();
$user_id = $this->session->userdata('role_id');
$result = $CI->Main_model->select_all_module($user_id);
foreach ($result as $v_module) {
    ?>
    <li>
        <a href="<?php echo $v_module->module_url; ?>"><i
                class="<?php echo $v_module->module_icon; ?>"></i><?php echo $v_module->module_name; ?><span
                class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <?php
            $CI = &get_instance();
            $result = $CI->Main_model->select_menu_by_module_id($v_module->id, $user_id);
            foreach ($result as $v_menu) {
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
                    <a href="<?php echo base_url() ?><?php echo $v_menu->menu_url; ?>">
                        <i class="<?php echo $v_menu->menu_icon; ?>"></i>
                        <?php echo $v_menu->menu_name; ?>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-third-level">
                        <?php
                        $CI = &get_instance();
                        $result = $CI->Main_model->select_sub_menu_by_menu_id($v_menu->id, $user_id);
                        foreach ($result as $v_sub_menu) {
                            ?>
                            <li>
                                <a href="<?php echo base_url() ?><?php echo $v_sub_menu->sub_menu_url; ?>">
                                    <i class="<?php echo $v_sub_menu->sub_menu_icon; ?>"></i>
                                    <?php echo $v_sub_menu->sub_menu_name; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
                
                
                
                </li>
                
                
                
                
                
                
            <?php } ?>
        </ul>
    </li>
<?php } ?>



