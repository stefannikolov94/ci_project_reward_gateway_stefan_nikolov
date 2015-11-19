<?php
class Create_post extends CI_Controller
{
    public function create_post()
    {
        $this->form_validation->set_rules('title', 'Title', 'required|is_unique[posts.title]');
        $this->form_validation->set_rules('author', 'Author', 'required');
        $this->form_validation->set_rules('body', 'Post body', 'required');


        if ($this->form_validation->run() === false) {
            $this->load->view("site_header");
            $this->load->view("site_nav");
            $this->load->view("content_create_post");
            $this->load->view("site_footer");
        } else {
            //save the post in the table
            $post_title = $this->input->post('title');
            $post_author = $this->input->post('author');
            $post_body = $this->input->post('body');
            $this->blog_model->save_post($post_title, $post_author, $post_body);
            redirect(base_url());
        }
    }
}
