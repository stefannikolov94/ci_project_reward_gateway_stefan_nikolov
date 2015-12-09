<?php

class Comments extends CI_Controller
{
    function add_comment($postID)
    {
        if(!$this->input->post())
        {
            redirect(base_url().'post/view'.$postID);
        }

        $this->load->model('comments_model');
        $data = array(
            'post_id' => $postID,
            'user_id' => $this->session->userdata('user_id'),
            'comment' => $this->input->post('comment'),
        );
        $this->comments_model->add_comment($data);
        redirect(base_url().'post/view/'.$postID);
    }
}