<body>
<center><h1>My first blog in CI</h1></center>
<div id="wrapper">
    <!-- navigation -->
        <!--
        <ul>
            <li><a href="<?php //echo base_url(); ?>site/home">Home</a></li> |
            <li><a href="<?php // echo base_url(); ?>site/about">About</a></li> |
            <li><a href="<?php //echo base_url(); ?>site/create_post">Create post</a></li> |
            <li><a href="<?php //echo base_url(); ?>site/contact">Contact</a></li>
        </ul>-->
        <?php
        $data = array(
            'id' =>'nav',
            'menus' => array(
              'menu1' => 'home',
              'menu2' => 'about',
              'menu3' => 'create post',
              'menu4' => 'contact',
            ),
        );

        echo menu($data);
        ?>
    </div>

<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
    window.__lc = window.__lc || {};
    window.__lc.license = 6761311;
    (function() {
        var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
        lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
    })();
</script>
<!-- End of LiveChat code -->