<?php
class Post extends CI_Controller
{
    public function view($id)
    {
        $this->load->model('comments_model');
        $data['comments'] = $this->comments_model->get_comment($id);
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
        redirect(site_url('home'));
        /*$data = "Delete sucessfull";
        $this->load->view("site_header", $data);
        $this->load->view("site_nav");
        //$this->load->view("content_view", $data);
        $this->load->view("site_footer");*/
    }

    public function processupdate()
    {
        $id = $this->input->post('post_id');
        $title = $this->input->post('username');
        $author = $this->input->post('email');
        $body = $this->input->post('gender');
        $this->blog_model->update_post($id, $title, $author, $body);
        return redirect(site_url('home'));
    }

    public function update($id)
    {
        $data['post'] = $this->blog_model->find($id);
        $this->load->view("site_header", $data);
        $this->load->view("site_nav");
        $this->load->view("update_post_view", $data);
        $this->load->view("site_footer");
    }

}