<?php

class Upload_file extends CI_Controller
{

    public function index()
    {
        $this->load->index();
    }
    public function save()
    {
        $this->do_upload();
    }

    private function do_upload()
    {
        //To do upload file
        if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
        {
            move_uploaded_file($_FILES["pic"]["tmp_name"], "...//images/".$_FILES["pic"]["name"]);
        }
    }
}