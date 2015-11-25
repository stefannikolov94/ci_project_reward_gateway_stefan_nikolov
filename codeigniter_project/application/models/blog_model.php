<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model
{
/*
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
    public function save_post($title, $author, $body, $url)
    {
        $this->db->set('title', $title);
        $this->db->set('author', $author);
        $this->db->set('body', $body);
        $this->db->set('pic', $url);
        $this->db->insert('posts');
    }*/

    function save_post($data, $title, $author, $body)
    {
        $this->db->set('title', $title);
        $this->db->set('author', $author);
        $this->db->set('body', $body);
        $this->db->insert('posts',$data);
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

    public function view_count($id)
    {
        $result = $this->db->get_where('posts', array('id'=>$id))->row();
        $result->view_count++;
        $this->db->query("UPDATE `posts` SET `view_count`= $result->view_count
                          WHERE id = id");
    }

    public function delete_post($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('posts');
    }

    public function update_post($id)
    {

    }
}