<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_model');
    }
    public function index()
    {
        if(($this->session->userdata('user_id')!=""))
        {
            redirect(site_url('about'));
        }
        else
        {
            $this->load->view("site_header");
            $this->load->view("site_nav");
            $this->load->view("content_login");
            $this->load->view("site_footer");
        }
    }
    public function login()
    {
        $rules = array(array('field'=>'l_email','label'=>'Email','rules'=>'required|valid_email'),
            array('field'=>'l_pass','label'=>'Password','rules'=>'required'));
        $this->form_validation->set_rules($rules);
        if($this->form_validation->run() == FALSE)
        {
            $this->index();
        }
        else
        {
            $auth=$this->user_model->login($this->input->post('l_email'),$this->input->post('l_pass'));
            if($auth)
            {
                redirect(site_url('home'));
            }
            else
            {
                $this->index();
            }
        }
    }
    public function register()
{
    $this->load->view('content_login');//loads the content_login.php file in views folder
}
    public function do_register()
    {
        $rules = array(
            array('field'=>'username','label'=>'User Name','rules'=>'trim|required|min_length[4]|max_length[12]'),
            array('field'=>'email','label'=>'Email','rules'=>'trim|required|valid_email|is_unique[users.email]'),
            array('field'=>'password','label'=>'Password','rules'=>'trim|required|min_length[6]'),
            array('field'=>'gender','label'=>'Gender','rules'=>'required')
        );
        $this->form_validation->set_rules($rules);
        if($this->form_validation->run() == FALSE)
        {

            $this->load->view("site_header");
            $this->load->view("site_nav");
            $this->load->view("content_register");
            $this->load->view("site_footer");
        }
        else
        {
            //$key = md5(uniqid());
            $data=array(
                'username'=>$this->input->post('username'),
                'email'=>$this->input->post('email'),
                /*
                'email_verification_code' =>$key,
                'active_status'=>$this->input->post('active_status'),*/
                'password'=>md5($this->input->post('password')),
                'gender'=>$this->input->post('gender'),
                'registered'=>time()
            );
            $this->user_model->register_user($data);
            redirect(site_url('home'));
        }
    }
/*
    function sendVerificatinEmail($email, $key){
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.yourdomain.com.',
            'smtp_port' => 465,
            'smtp_user' => 'admin@yourdomain.com', // change it to yours
            'smtp_pass' => '########', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );


        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('admin@yourdomain.com', "Admin Team");
        $this->email->to($email);
        $this->email->subject("Email Verification");
        $this->email->message(site_url('user/verify/'.$key));
        $this->email->send();

    }

    public function verify($key)
    {
        $this->user_model->verifyEmailUser($key);
    }
*/
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url());
    }
}