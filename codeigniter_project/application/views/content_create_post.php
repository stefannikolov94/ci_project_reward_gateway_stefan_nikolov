<div id="wrapper">
    <div id="innerwrapper">
        <div id="content">
            <?php
                echo form_open();

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

                echo form_submit($data);
                echo form_close();
            echo form_open_multipart('upload_file/save/');
            echo form_upload('pic');
            ?>
        </div>
    </div>
</div>