<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 	<html lang="en"> <!--<![endif]-->
<head>

    <!-- General Metas -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	<!-- Force Latest IE rendering engine -->
    <title>Login Form</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Stylesheets -->
    <link href="<?php echo base_url(); ?>/styles_login/css/base.css" type="text/css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>/styles_login/css/skeleton.css" type="text/css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>/styles_login/css/layout.css" type="text/css" rel="stylesheet"/>

</head>
<body>

<div class="notice">
    <a href="" class="close">close</a>
    <p class="warn"><?php echo validation_errors(); ?></p>
</div>

<!-- Primary Page Layout -->

<div class="container">

    <div class="form-bg">
            <?php echo form_open('admin/users/login')?>
            <h2>Login</h2>
            <p><input type="text" placeholder="Email" name="l_email" value="<?=set_value('l_email')?>"/></p>
            <p><input type="password" placeholder="Password" name="l_pass"></p>
            <label for="remember">
                <input type="checkbox" id="remember" value="remember" />
                <span>Remember me on this computer</span>
            </label>
            <input type="submit" value="Sign in" name="signin"/>
            </form>
    </div>


    <p class="forgot">Forgot your password? <a href="">Click here to reset it.</a></p>


</div><!-- container -->

<!-- JS  -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>
<script src="js/app.js"></script>

<!-- End Document -->
</body>
</html>