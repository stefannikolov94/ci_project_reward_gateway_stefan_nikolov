<div id="wrapper">
    <div id="innerwrapper">
        <div id="content">
            <div id="register_form">
                <h1>Sign Up</h1>
                <?php echo form_open('user/do_register')?>
                <label for="username">User Name</label>
                <input type="text" name="username" value="<?=set_value('username') ?>"/>
                <label for="email">Email</label>
                <input type="text" name="email" value="<?=set_value('email') ?>" />
                <label for="password">Password</label>
                <input type="password" name="password"/>
                <div>
                    <label for="gender">Gender</label>
                    <input type="radio" name="gender" value="male" <?php echo set_radio('gender', 'male'); ?>/>Male
                    <input type="radio" name="gender" value="female" <?php echo set_radio('gender', 'female'); ?>/>Female
                </div>
                <input type="submit" value="Sign up" name="register"/>
                </form>
            </div>
            <br />
            <div class="error">
                <?php echo validation_errors(); ?>
            </div>
         </div>
     </div>
</div>

<?php
