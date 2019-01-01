<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php if(!empty($site_title)){echo $site_title;} ?></title>
        <!-- Favicons-->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>themes/admin-pro/assets/images/qcpeso.png">
        <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">
        <!-- Web Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7cPlayfair+Display:400i" rel="stylesheet">
        <link href="<?php echo base_url(); ?>themes/boomerang/use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- Plugins-->
        <link href="<?php echo base_url(); ?>themes/boomerang/assets/css/plugins.min.css" rel="stylesheet">
        <!-- Template core CSS-->
        <link href="<?php echo base_url(); ?>themes/boomerang/assets/css/template.css" rel="stylesheet">
        
        <?php
        if (!empty($websetting) && !empty($websetting['ENABLE_GOOGLE_AUTH'])) {
            if ($websetting['ENABLE_GOOGLE_AUTH'] == 'YES') { ?>

            <meta name="google-signin-client_id" content="695408817379-9bfd5ft39pl37hjh273aq87tsdfl35cv.apps.googleusercontent.com">
            <script src="https://apis.google.com/js/platform.js" async defer></script>

        <?php
            }
        }
        ?>
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/bower_components/pnotify/dist/pnotify.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/bower_components/pnotify/dist/pnotify.brighttheme.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/bower_components/pnotify/dist/pnotify.buttons.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/bower_components/pnotify/dist/pnotify.history.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/bower_components/pnotify/dist/pnotify.mobile.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/ltr/vertical-static/assets/pages/pnotify/notify.css">

    <link href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet">
    
    <?php
    if (!empty($addons)) { ?>

    <link href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <?php
        }
    ?>
    </head>

    <!-- <script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/jquery/jquery.min.js"></script>

<script src="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/toast-master/js/jquery.toast.js"></script>
 -->
    <?php //$this->load->view('layout/admin/15_api'); ?>