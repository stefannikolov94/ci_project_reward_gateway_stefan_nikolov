<!-- Content -->
<div id="content" class="shell">

    <!-- Help Navigation -->
    <div id="help-nav">
        <a href="#">Dashboard</a> &gt; Current Users
    </div>
    <!-- End Help Navigation -->
<!--
    <div class="message thank-message">
        <p><strong>Congratulations your information has been submited!</strong></p>
    </div>

    <div class="message error-message">
        <p><strong>Error! The following fields were not entred correctly...</strong></p>
    </div>
    -->
    <h3>Users List</h3>
    <br/>
    <!-- anchor is like href in CI-->
    <?php echo anchor('admin/users/create', 'Add new user');?>
    <?php
    $tmpl = array ( 'table_open'  => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">' );
    $this->table->set_template($tmpl);

    $this->table->set_heading('ID', 'Username', 'Email', 'Gender', 'Registered', 'Operations');
    foreach ($users as $user)
    {
        $this->table->add_row($user->user_id, $user->username, $user->email, $user->gender, date('Y-m-d', $user->registered), anchor('admin/users/delete/'.$user->user_id, 'Delete', array('onclick'=>'return confirm("Are you sure?")')).' | '.anchor('admin/users/edit/'.$user->user_id, 'Edit'));
    }
    echo $this->table->generate();
    ?>
</div>
