<div id="wrapper">
    <div id="innerwrapper">
    <?php
        echo $this->pagination->create_links();
        foreach($posts as $post)  { ?>
        <p><b>Title</b></p>
        <p><?php echo $post['title'].'</br>'; ?>
        <p><b>Author</b></p>
        <?php echo $post['author'];
            ?></p>
        <b><a href="<?php echo site_url('post/view/'.$post['id'])?>">read more</a></b>
        <?php } ?>

    </div>
</div>

