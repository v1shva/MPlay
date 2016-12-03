<?php
defined('BASEPATH') OR exit('No direct script allowed');
class LoginSignUp extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('UserModel');

    }

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

    public function addUserDB()
    {
        $this->load->helper(array('form', 'url', 'html'));

        $data = array(
            'name' => $this->input->post('Name'),
            'birthday' => $this->input->post('DOB'),
            'country' => $this->input->post('Country'),
            'mlang' => $this->input->post('Mlanguage'),
            'email' => $this->input->post('Email'),
            'password' => $this->input->post('Password'),
        );
        $this->load->model('UserModel');
        if($this->UserModel->addUserDB($data)){
            echo 'true';
        }
        else{
            echo 'false';
        };


    }
    
    public function main_page(){
        if($this->session->userdata('logged_in')){
            redirect(base_url('pages/view'),'refresh');
        }
        else{
            redirect(base_url('LoginSignUp'),'refresh');
        }

    }
    
  public function login()
    {
        $this->load->library('session');
        $this->form_validation->set_rules('username', 'username', 'required|trim|max_length[50]|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'required|trim|max_length[200]|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer', $data);

        } else {

            //extract($_POST);
            //process their input and login the user
            //$username=$_POST('username');
            $username=$this->input->post('username');
            //$password=$_POST('password');
            $password=$this->input->post('password');
            // $user_id=$this->user1_model-> check_login($username,$password);
            //$username=$this->input->post('username');

            $user_id=$this->UserModel->check_login($username,$password);
            if(! $user_id){
               //login failed
                $this->session->set_flashdata('login_error',TRUE);

                redirect(base_url('LoginSignUp'),'refresh');

            }
            else{
                //login passed
                //$CI=&self::get_instance();
                //echo var_dump($this->CI);
                $this->session;
                $login_data=array('logged_in'=> TRUE ,'user_id'=>$user_id);
                $this->session->set_userdata($login_data);
                redirect(base_url('LoginSignUp/main_page'),'refresh');

            }




        }


    }  
    
    
    
    
    
    
}




?>
