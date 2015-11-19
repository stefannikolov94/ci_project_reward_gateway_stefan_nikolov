<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model
{
    public function save_post($title, $author, $body)
    {
        $this->db->insert('posts',
            array(
                'title' => $title,
                'author' => $author,
                'body' => $body,
            )
        );
    }

    public function get_posts ($per_page, $row)
    {
        $this->db->limit($per_page, $row);
        return $posts = $this->db->get('posts')->result_array();
    }

    public function get_post($id)
    {
        $query = $this->db->get_where('posts', array('id'));

        if ($query->num_rows() > 0)
        {
            $query = $this->db->get_where('posts', array('id'=>$id))->row_array();
            return $query;
        }
        else
        {
            redirect(base_url());
        }
    }
}