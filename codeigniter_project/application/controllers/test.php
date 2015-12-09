<?php
class Test extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->helper(array('form', 'url'));
        $this->load->model('blog_model');
    }

    public function index()
    {
        $this->load->view('content_create_post');
    }

    function do_upload()
    {
        if ($this->input->post('upload')) {
            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']	= '100';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';
            $config['overwrite'] = false;

            $this->load->library('upload', $config);
            $this->load->library("form_validation");
            $this->form_validation->set_rules('title', 'Title', 'trim|required');
            $this->form_validation->set_rules('author', 'Author', 'trim|required');
            $this->form_validation->set_rules('body', 'Body', 'trim|required');

            if ($this->form_validation->run() === FALSE)
            {
                // failed validation
                $this->load->view("site_header");
                $this->load->view("site_nav");
                $this->load->view("content_create_post");
                //$this->load->view('upload_view');
                $this->load->view("site_footer");

                // quit here`
                return false;
            }

            if (!$this->upload->do_upload()) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('content_create_post', $error);
            } else {
                $upload_data = $this->upload->data();

                $file = array(
                    'pic' => $upload_data['orig_name'],
                );
                $title = $this->input->post('title');
                $author = $this->input->post('author');
                $body = $this->input->post('body');

                $this->blog_model->save_post($file, $title, $author, $body);
                $data = array(
                    'upload_data' => $upload_data,
                    'message' => "The post is successful send!"
                );
                $this->load->view("site_header");
                $this->load->view("site_nav");
                $this->load->view("content_create_post", $data);
                //$this->load->view('upload_view');
                $this->load->view("site_footer");
                //redirect(base_url());
            }
        } else {
            redirect(site_url('upload'));
        }
    }
}
/* old version without CI library
    public function save()
    {
        $url = $this->do_upload();
        $title = $_POST['title'];
        $author = $_POST['author'];
        $body = $_POST['body'];
        $this->blog_model->save_post($title, $author, $body, $url);
    }

    private function do_upload()
    {
        $type = explode('.', $_FILES["pic"]["name"]);
        $type = $type[count($type)-1];
        $url = "./images/".uniqid(rand()).'.'.$type;
        if(in_array($type, array("jpg", "jpeg", "gif", "png")))
        if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
            if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
                return $url;
        return "";
        $this->load->view('home');
    } */
