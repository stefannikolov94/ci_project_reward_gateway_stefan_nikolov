<?php

/**
 * Created by PhpStorm.
 * User: USER
 * Date: 19.11.2015 г.
 * Time: 10:26
 */
class Post extends CI_Controller
{
    public function view($id)
    {
        $data['post'] = $this->blog_model->get_post($id);
        $this->load->view("site_header", $data);
        $this->load->view("site_nav");
        $this->load->view("post_view", $data);
        $this->load->view("site_footer");
    }

}