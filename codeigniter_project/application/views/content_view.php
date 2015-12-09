<div id="wrapper">
    <div id="innerwrapper">
    <?php
    //check if the user is logged and show message
        if($this->session->userdata('username'))
        {
            echo "Welcome,".$this->session->userdata('username').'</br>';
        }
    ?>
        <?php
        echo $this->pagination->create_links();
        foreach($posts as $post)  { ?>
        <p><b>Title</b></p>
        <p><?php echo $post['title'].'</br>'; ?>
        <p><b>Author</b></p>
        <?php echo $post['author'];
            ?></p>
        <b><a href="<?php echo site_url('post/view/'.$post['post_id'])?>">read more</a></b>
        <b><a href="<?php echo site_url('post/delete/'.$post['post_id'])?>">delete</a></b>
        <b><a href="<?php echo site_url('post/update/'.$post['post_id'])?>"</b>update</a></b>
        <?php } ?>

    </div>
</div>

