<div id="wrapper">
    <div id="innerwrapper">
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
    </div>
</div>