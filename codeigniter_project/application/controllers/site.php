<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller
{
    // constructor for database model
    function __construct()
    {
        parent:: __construct();
        $this->load->model('insert_model');
    }

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
        // Form validation
        $this->load->library("form_validation");
        //set_rules is function from CI library where first parameter is the field name,
        // second is name for this field, which will be inserted into the error message
        // and the third is the validation rules for this form field
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
            /*Storing submitted values
            $fullName = $this->input->post('fullName');
            $email = $this->input->post('email');
            $message = $this->input->post('message');*/

            // Configure email library
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.googlemail.com';
            $config['smtp_port'] = 465;
            $config['smtp_user'] = 'stefan.borislavov.nikolov@gmail.com';
            $config['smtp_pass'] = 'stefannikolov1234';
            $config['mailtype'] = 'html';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['newline'] = "\r\n"; //use double quotes to comply with RFC 822 standard

            //load the codeigniter email library and use its methods to send mail.
            $this->load->library("email");
            $this->email->from(set_value("email"), set_value("fullName"));
            $this->email->to("stefan.borislavov.nikolov@gmail.com");
            $this->email->subject("Message from out from");
            $this->email->message(set_value("message"));
            $this->email->send();
            // show message..print_debugger from the CI library
            echo $this->email->print_debugger();
            // Insert into database model
            $insert['query'] = $this->insert_model->insert();
            if ($insert['query'] != NULL)
            {
                $data = "The email is not successful send!";
                $this->load->view("site_header");
                $this->load->view("site_nav");
                $this->load->view("content_contact", $data);
                $this->load->view("site_footer");
            }
            else
            {
                $data['message'] = "The email is successful send!";
                $this->load->view("site_header");
                $this->load->view("site_nav");
                $this->load->view("content_contact", $data);
                $this->load->view("site_footer");
            }

        }
    }
//Recaptcha with google
    public function recaptcha($str='')
    {
        $this->load->library("form_validation");
        $google_url="https://www.google.com/recaptcha/api/siteverify";
        // google key
        $secret='6LfC1xATAAAAAPa0xAvetGgpCkButnS7OAmywtwU';
        $ip=$_SERVER['REMOTE_ADDR'];
        $url=$google_url."?secret=".$secret."&response=".$str."&remoteip=".$ip;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
        $res = curl_exec($curl);
        curl_close($curl);
        $res= json_decode($res, true);
        //reCaptcha success check
        if($res['success'])
        {
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('recaptcha', 'The reCAPTCHA field is telling me that you are a robot. Shall we give it another try?');
            return FALSE;
        }
    }
}
?>