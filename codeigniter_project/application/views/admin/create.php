<div id="content" class="shell">
    <!-- Help Navigation -->
    <div id="help-nav">
        <?php echo anchor('admin/users/dashboard', 'Dashboard');?> &gt; Current User
    </div>
<h3>Add new user</h3>
<form name="update_form" action="<?php base_url(); ?>create" method="POST">
    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
<table cellpadding="2" cellspacing="2">
    <tr>
        <td>Username:</td>
        <td><input type="text" name="username" value="<?=set_value('username') ?>"/></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><input type="text" name="email" value="<?=set_value('email') ?>" /></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><input type="password" name="password"/></td>
    </tr>
    <tr>
        <td>Gender:</td>
        <td><input type="radio" name="gender" value="male" <?php echo set_radio('gender', 'male'); ?>/>Male
        <input type="radio" name="gender" value="female" <?php echo set_radio('gender', 'female'); ?>/>Female</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td><input type="submit" value="Save" name="register"/></td>
        <!--<td><input type="submit" value="Save"></td>-->
    </tr>
</table>
    <?php echo validation_errors();?>
<?php form_close();?>
<!-- End Content -->
</div>