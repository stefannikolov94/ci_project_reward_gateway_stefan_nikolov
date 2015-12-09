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

        <b><a href="<? site_url('post/delete/'.$post['post_id'])?>">delete</a></b>
        <h3>Comments</h3>
        <?php       //if there is comments then print the comments
        if(count($comments) > 0)
        {
            foreach ($comments as $row)
            {?>
                <p><strong><?=$row['username']?></strong> said at <?= date('d-m-Y h:i A',strtotime($row['date_added']))?><br>
                    <?=$row['comment'];?></p><hr>
            <?php   }
        }
        else //when there is no comment
        {
            echo "<p>Currently, there are no comment.</p>";
        }

        if($this->session->userdata('user_id'))//if user is loged in, display comment box
        {?>
            <form action="<?=  base_url()?>comments/add_comment/<?=$post['post_id']?>" method="post">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                <div class="form_settings">
                    <p>
                        <span>Comment</span>
                        <textarea class="textarea" rows="8" cols="100" name="comment"></textarea>
                    </p>
                    <p style="padding-top: 15px">
                        <span>&nbsp;</span>
                        <input class="submit" type="submit" name="add" value="Add comment" />
                    </p>
                </div>
            </form>
        <?php

        }
        else {//if no user is loged in, then show the loged in button
            ?>
            <a href="<?=  base_url()?>user/login">Login to comment</a>
        <?php    } ?>
    </div>
    </div>
</div>