<?php
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

    public function delete($id)
    {
        //$id = $this->uri->segment(3);
        $data['post'] = $this->blog_model->delete_post($id);
        $data = "Delete sucessfull";
        $this->load->view("site_header", $data);
        $this->load->view("site_nav");
        //$this->load->view("content_view", $data);
        $this->load->view("site_footer");
    }

    public function update()
    {
        echo 'hey';
    }

}