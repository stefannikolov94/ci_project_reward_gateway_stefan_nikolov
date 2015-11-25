<div id="wrapper">
    <div id="innerwrapper">
        <div id="content">
            <style>
                #header{
                    height: 40px;
                    width: 600px;
                    background: #658CBF;
                }
                input{
                    padding:3px;
                    color:#333333;
                    border:1px solid #96A6C5;
                    margin-top:2px;
                    width:150px;
                    font-size:10px;
                }
                input[type='radio']{
                    width:30px;
                }
                #register_form input[type='submit']
                {
                    margin-left: 108px;
                }
                #register_form{
                    width: 400px;
                    float: left;
                }
                #register_form label{
                    font-weight: bold;
                    float: left;
                    width: 108px;
                }
                #login_form
                {   float: left;
                    position: relative;
                    margin-top: 5px !important;
                }
                .error{
                    float:left;
                    border: 1px solid #FF607D;
                    padding: 10px;
                }
            </style>
            <div id="header" >
                    <div id="login_form">
                        <?php echo form_open('user/login')?>
                            <label for="email">Email</label>
                            <input type="text" name="l_email" value="<?=set_value('l_email') ?>" />
                            <label for="password">Password</label>
                            <input type="password" name="l_pass"/>
                            <input type="submit" value="Sign in" name="signin"/>
                        </form>
                </div>
            </div>
                <br />
                <div class="error">
                    <?php echo validation_errors(); ?>
                </div>
        </div>
    <div>
        </div>