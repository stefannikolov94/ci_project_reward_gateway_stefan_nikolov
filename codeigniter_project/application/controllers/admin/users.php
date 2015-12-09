<?php
class Users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('table');
        $this->load->model("admin_model");
    }

    public function index()
    {
        $this->load->view('admin/index_login');
    }

    public function dashboard()
    {
        $data['users'] = $this->admin_model->findAll();
        $this->load->view('admin/admin_header');
        $this->load->view('admin/index', $data);
        $this->load->view('admin/admin_footer');
    }

    public function dashboard_login()
    {
        if(($this->session->userdata('user_id')!=""))
        {
            redirect(site_url());
        }
        else
        {
            $this->load->view('admin/admin_header');
            $this->load->view('admin/index_login');
            $this->load->view('admin/admin_footer');
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
            $auth=$this->admin_model->login($this->input->post('l_email'),$this->input->post('l_pass'));
            if($auth)
            {
                redirect(site_url('admin/users/dashboard'));
            }
            else
            {
                $this->index();
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        return redirect('admin/users');
    }

    public function create()
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
            $this->load->view('admin/admin_header');
            $this->load->view("admin/create");
            $this->load->view('admin/admin_footer');
        }
        else
        {
            $this->admin_model->create();
            return redirect('admin/users/dashboard');
        }
    }

    public function processedit()
    {
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        //$password = md5($this->input->post('password'));
        $gender = $this->input->post('gender');
        $this->admin_model->edit($id, $username, $email, $gender);
        return redirect('admin/users/dashboard');
    }

    public function delete($id)
    {
        $this->admin_model->delete($id);
        return redirect('admin/users/dashboard');
    }

    public function edit($id)
    {
        $data['user'] = $this->admin_model->find($id);
        $this->load->view('admin/admin_header');
        $this->load->view('admin/edit', $data);
        $this->load->view('admin/admin_footer');
    }
}