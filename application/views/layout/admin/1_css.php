<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wrappixel.com/demos/admin-templates/admin-pro/minimal/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Sep 2018 06:00:35 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>themes/admin-pro/assets/assets/images/favicon.png">
    <title><?php if(empty($pagetitle)){ echo 'QCPESO'; } else {echo $pagetitle;} ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- Vector CSS -->
    <link href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- chartist CSS -->
    <link href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>themes/admin-pro/minimal/css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="<?php echo base_url(); ?>themes/admin-pro/minimal/css/pages/dashboard4.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url(); ?>themes/admin-pro/minimal/css/colors/default.css" id="theme" rel="stylesheet">

    <link href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/wizard/steps.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />

    
    <?php
    if (!empty($datepicker)) { ?>
    <!-- page css -->
    <link href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <!-- Color picker plugins css -->
    <link href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/jquery-asColorPicker-master/dist/css/asColorPicker.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker plugins css -->
    <link href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet">
    <?php
        }
    ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    
  <link href="<?php echo base_url(); ?>themes/admin-pro/minimal/css/pages/tab-page.css" rel="stylesheet">
    <?php
    if (!empty($login)) { ?>
    <!-- page css -->
    <link href="<?php echo base_url(); ?>themes/admin-pro/minimal/css/pages/login-register-lock.css" rel="stylesheet">
    <?php
        }
    ?>
   
     <link href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/html5-editor/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/dropify/dist/css/dropify.min.css">
  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/datatables/media/css/dataTables.bootstrap4.css">

    <link href="<?php echo base_url(); ?>themes/admin-pro/assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet">

    <style type="text/css">
        body {
            font-size:14px !important; 
        }
    </style>



    <script src="https://js.pusher.com/4.3/pusher.min.js"></script>
      <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('b40201798c4cfcffea24', {
          cluster: 'ap1',
          forceTLS: true
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
         $.toast({
          heading: 'Notification:',
          text:data.message,
          position: 'top-right',
          loaderBg:'#ff6849',
          icon: 'info',
          hideAfter: 3500, 
          stack: 6
        }); 
          // alert(JSON.stringify(data));
        });
      </script>



</head>
