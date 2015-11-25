<div id="wrapper">
    <div id="innerwrapper">
        <p><b>Image</b></p>
        <?php
        ?> <img src="<?php echo base_url('images').'/'. $post['pic'];?>"/>
        <p><b>Title</b></p>
        <?php
        echo ucfirst($post['title']).'</br>';
        ?>
        <p><b>Author</b></p>
        <?php
        echo $post['author'];
        ?>
        <p><b>Description</b></p>
        <?php
        echo '<p>'.$post['body'].'</p>';
        echo '<span class="posted_date">'.$post['date'].'</span>'

        ?>
        <b><a href="<? site_url('post/delete/'.$post['id'])?>">delete</a></b>
    </div>
</div>