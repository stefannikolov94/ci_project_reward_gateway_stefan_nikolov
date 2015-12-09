<?php
/*
echo form_open('post/processupdate');
echo form_label('');
echo form_close();*/
?>
<div id="wrapper">
    <div id="innerwrapper">
        <div id="content">
<?php
echo validation_errors();
//variable type array for errors
if(isset($message))
{
    echo $message;
}
?>
            <h3>Edit user</h3>
            <form name="update_form" action="<?php echo site_url(); ?>/post/processupdate" method="POST">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                <table cellpadding="2" cellspacing="2">
                    <tr>
                        <td>Id:</td>
                        <td><?php echo $post->post_id;?></td>
                        <input type="hidden" name="id" value="<?php echo $post->post_id;?>"/>
                    <tr>
                        <td>Title:</td>
                        <td><input type="text" name="title" value="<?php echo $post->title; ?>"/></td>
                    </tr>
                    </tr>
                    <tr>
                        <td>Author:</td>
                        <td><input type="text" name="author" value="<?php echo $post->author;?>" /></td>
                    </tr>
                    <tr>
                        <td>Body:</td>
                        <td><textarea rows="4" cols="50" name="body" value="<?php echo $post->body; ?>">
</textarea></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" value="Save" name="register"/></td>
                        <!--<td><input type="submit" value="Save"></td>-->
                    </tr>
                </table>
                <?php form_close();?>
        </div>


        <script>CKEDITOR.replace('body');</script>
<!-- old version
            <table>
                    <tr>
                        <td>Post Title</td>
                        <td>:</td>
                        <td><?php //echo form_input('title'); ?></td>
                    </tr>
                    <tr>
                        <td>Post Author</td>
                        <td>:</td>
                        <td><?php //echo form_input('author'); ?></td>
                    </tr>
                    <tr>
                        <td>Post body</td>
                        <td>:</td>
                        <td><?php //echo form_textarea('body'); ?></textarea></td>
                    </tr>
                    <tr>
                        <td>FileImage</td>
                        <td>:</td>
                        <td><?php// echo form_upload('pic'); ?></td>
                    </tr>
                    <tr>
                        <td><?php //echo form_submit('submit', 'Save')?></td>
                    </tr>
                </table>
            </form>-->
<?php
/*
echo form_open_multipart('test/controller');;

    echo form_label('Post Title:');
    $data = array(
      'id' => 'title',
      'name' => 'title',
      'value' => set_value('title'),
      'style' => 'width: 400px,',
    );
    echo form_input($data);
    echo form_error('title');

    echo form_label('Post Author: ');
    $data = array(
        'id' => 'author',
        'name' => 'author',
        'value' => set_value('author'),
    );
    echo form_input($data);
    echo form_error('author');

    echo form_label('Post body:');
    $data = array(
      'id' => 'body',
      'name' => 'body',
      'value' => set_value('body'),
      'style' => 'width: 600px; height: 300px',
    );
    echo form_textarea($data);
    echo form_error('body');

    $data = array(
        'id' => 'submit',
        'name' => 'submit',
        'value' => 'Save post',
        'style' => 'padding: 10px width: 200px',
    );
    echo form_label('Image:');
    echo form_open_multipart('upload_file/save');
    echo form_upload('pic');

    echo form_submit($data);
    echo form_close(); */
?>
</div>
</div>
</div>