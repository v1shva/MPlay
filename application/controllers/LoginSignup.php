<?php

class LoginSignUp extends CI_Controller {
    /*public function __construct()
    {
        parent::_construct();
        $this->load->model('model_login');

    }*/

    public function view($page = 'LoginSignUp')
    {


        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }

    public function login_user(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email Address','trim|requred|min_length[6]|max_length[50]|valid_email|xss_clean');
        $this->form_validation->set_rules('password','Password','trim|requred|min_length[6]|max_length[50]');
        if($this->form_validation->run()==FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer', $data);
        }
        else{
            $result = $this->model_login->email_exists('$email');
        }
    }
}

?>
