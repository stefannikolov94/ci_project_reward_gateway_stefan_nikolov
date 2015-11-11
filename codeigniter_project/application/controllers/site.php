<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller
{
    public function index()
    {
        // load the view
        $this->contact();
    }

    //controllers
    public function home()
    {
        $this->load->view("site_header");
        $this->load->view("site_nav");
        $this->load->view("content_home");
        $this->load->view("site_footer");
    }

    public function about()
    {
        $this->load->view("site_header");
        $this->load->view("site_nav");
        $this->load->view("content_about");
        $this->load->view("site_footer");
    }

    public function contact()
    {
        $data['message'] = "";

        $this->load->view("site_header");
        $this->load->view("site_nav");
        $this->load->view("content_contact", $data);
        $this->load->view("site_footer");
    }

    public function send_email()
    {
        $this->load->library("form_validation");
        //set_rules is function from library, xss_clean
        $this->form_validation->set_rules("fullName", "Full Name", "required|alpha");
        $this->form_validation->set_rules("email", "Email Address", "required|valid_email");
        $this->form_validation->set_rules("message", "Message", "required");

        if($this->form_validation->run() == FALSE)
        {
            $data['message'] = "";

            $this->load->view("site_header");
            $this->load->view("site_nav");
            $this->load->view("content_contact", $data);
            $this->load->view("site_footer");
        }
        else
        {
            $data['message'] = "The email is successful send!";

            //use email library from CI
            $this->load->library("email");
            $this->email->from(set_value("email"), set_value("fullName"));
            $this->email->to("stefan.borislavov.nikolov@gmail.com");
            $this->email->subject("Message from out from");
            $this->email->message(set_value("message"));

            $this->email->send();

            // show message..print_debugger from the CI library
            echo $this->email->print_debugger();

            $this->load->view("site_header");
            $this->load->view("site_nav");
            $this->load->view("content_home", $data);
            $this->load->view("site_footer");
        }

    }
}
?>