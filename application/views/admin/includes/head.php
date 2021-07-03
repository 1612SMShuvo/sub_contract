<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta  -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="keywords" content="adminpopular"/>
    <!-- Description -->
    <meta name="description" content="AdminPopular : Bootstrap 4 Responsive Admnin Template"/>
    <!-- Favicon icon  -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>web_assets/images/favicon.png"/>
    <!-- Page title -->
    <title>Enlist Work : Admin Panel</title>
    <!-- Mobile specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- Template assets CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>admin_assets/css/assets.css"/>
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>admin_assets/css/dashboard.css"/>
    <script src="<?php echo base_url() ?>admin_assets/dist/js/sweetalert.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>admin_assets/dist/js/sweetalert.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>admin_assets/css/style.css">
    <!--    <link rel="stylesheet" type="text/css" href="-->
    <?php //echo base_url()?><!--admin_assets/dist/css/bootstrap.min.css" />-->


    <!--    Frontend Design-->
    <link rel="stylesheet" href="<?php echo base_url() ?>web_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>web_assets/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>web_assets/css/slick.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>web_assets/css/slick-theme.css"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>web_assets/style.css">
    <script src="https://cdn.tiny.cloud/1/bipmow4lkz6ivlma357ta46a3z9l0e2dpuxap9eqizuo2j11/tinymce/5/tinymce.min.js"></script>

</head>

<!-- ************************************* -->
<!-- ************************************* -->
<script>
    var url = window.location;
    var element = $('ul.nav a').filter(function () {
        return this.href == url;
    }).addClass('active').parent().parent().parent().addClass('menu-open').parent();
    var element = $('ul.nav li ul a').filter(function () {
        return this.href == url;
    }).addClass('active').parent().parent().parent().parent().addClass('menu-is-opening  menu-open').parent();
    while (true) {
        if (element.is('ul li')) {
            element = element.addClass('menu-is-opening menu-open').parent().parent().parent();
        } else {
            break;
        }
    }
</script>
<!-- ************************************* -->
<!-- ************************************* -->