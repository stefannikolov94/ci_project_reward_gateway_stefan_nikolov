<body>
<center><h1>My first blog in CI</h1></center>
<div id="wrapper">
    <!-- navigation
        <ul>
            <li><a href="<?php// echo base_url(); ?>home/home">Home</a></li> |
            <li><a href="<?php// echo base_url(); ?>home/about">About</a></li> |
            <li><a href="<?php// echo base_url(); ?>home/create_post">Create post</a></li> |
            <li><a href="<?php// echo base_url(); ?>home/contact">Contact</a></li>
        </ul>-->
        <?php
        // check if the user is logged and show certain menus
        if(($this->session->userdata('user_id') == ""))
        {
            $data = array(
                'id' => 'nav',
                'menus' => array(
                    'menu1' => 'home',
                    'menu2' => 'about',
                    'menu3' => 'login',
                    'menu4' => 'register',
                    //'menu5' => 'create post',
                    'menu5' => 'contact',
                ),
            );
        }
        else {
            $data = array(
                'id' => 'nav',
                'menus' => array(
                    'menu1' => 'home',
                    'menu2' => 'about',
                    //'menu3' => 'login',
                    //'menu4' => 'register',
                    'menu3' => 'create post',
                    'menu4' => 'contact',
                    'menu5' => 'logout',
                ),
            );
        }
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