<div id="wrapper">
    <div id="innerwrapper">
        <div id="content">
            <!--<form action="<?php// echo base_url('test/insert_file');?>" method="POST" enctype="multipart/form-data"/>-->
            <?php// echo form_open_multipart('test/save'); ?>
            <?php echo form_open_multipart('test/do_upload');
            echo validation_errors();
            //variable type array for errors
            if(isset($message))
            {
                echo $message;
            }
            ?>
            <table>
             <tr>
                <td>Post Title</td>
                <td>:</td>
                <td><?php echo form_input('title'); ?></td>
            </tr>
            <tr>
                <td>Post Author</td>
                <td>:</td>
                <td><?php echo form_input('author'); ?></td>
            </tr>
            <tr>
                <td>Post body</td>
                <td>:</td>
                <td><?php echo form_textarea('body'); ?></textarea></td>
                <script>CKEDITOR.replace('body');</script>
            </tr>
            </table>

            <input type="file" name="userfile" size="20" />

            <br /><br />

            <input type="submit" value="upload" name="upload" />
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