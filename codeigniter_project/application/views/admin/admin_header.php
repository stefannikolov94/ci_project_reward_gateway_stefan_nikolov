<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>My First Blog in CI Admin Panel</title>
    <link href="<?php echo base_url(); ?>styles_admin/style.css" type="text/css" rel="stylesheet" media="all"/>
</head>
<body>

<!-- Header -->
<div id="header">
    <div class="shell">

        <div id="head">
            <h1><a href="#">Admin Panel</a></h1>
            <div class="right">
                <p>
                    <?php if($this->session->userdata('username'))
                    {?>
                        Welcome <a href="#"><strong><?php echo $this->session->userdata('username');?></strong></a> |
                    <?php
                    }
                    ?>
                    <a href="#">Help</a> |
                    <a href="#">Profile Settings</a> |
                    <a href="<?php echo site_url();?>admin/users/logout">Logout</a>
                </p>
            </div>
        </div>

        <!-- Navigation -->
        <div id="navigation">
            <ul>
                <li><a href="#"><span>Dashboard</span></a></li>
                <li><a href="#"><span>Posts Management</span></a></li>
                <li><a href="<?php echo site_url(); ?>/admin/users/dashboard" class="active"><span>User Management</span></a></li>
                <li><a href="#"><span>Comments Management</span></a></li>
            </ul>
        </div>
        <!-- End Navigation -->
    </div>
</div>
<!-- End Header -->