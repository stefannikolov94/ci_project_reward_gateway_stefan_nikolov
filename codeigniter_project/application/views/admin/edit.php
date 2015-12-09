<div id="content" class="shell">
    <!-- Help Navigation -->
    <div id="help-nav">
        <?php echo anchor('admin/users/dashboard', 'Dashboard');?> &gt; Current User
    </div>
<h3>Edit user</h3>
<form name="update_form" action="<?php echo site_url(); ?>admin/users/processedit" method="POST">
    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
    <table cellpadding="2" cellspacing="2">
    <tr>
        <td>Id:</td>
        <td><?php echo $user->id;?></td>
        <input type="hidden" name="id" value="<?php echo $user->id; ?>"/>
    <tr>
        <td>Username:</td>
        <td><input type="text" name="username" value="<?php echo $user->username; ?>"/></td>
    </tr>
    </tr>
    <tr>
        <td>Email:</td>
        <td><input type="text" name="email" value="<?php echo $user->email; ?>" /></td>
    </tr>
    <tr>
        <td>Gender:</td>
        <td>&nbsp;</td>
        <?php //echo form_radio('gender', 'male', @$mchecked, 'id=male').form_label('Male', 'male'); ?>
        <?php //echo form_radio('gender', 'female', @$fchecked, 'id=female').form_label('Female','female'); ?>
        <td><input type="radio" name="gender" value="male" <?php echo set_radio('gender', 'male'); ?>/>Male
        <input type="radio" name="gender" value="female" <?php echo set_radio('gender', 'female'); ?>/>Female</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td><input type="submit" value="Save" name="register"/></td>
        <!--<td><input type="submit" value="Save"></td>-->
    </tr>
</table>
<?php form_close();?>
</div>