<?php
defined('BASEPATH') OR exit('No direct script allowed');

class LoginSignUp extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper((array('form', 'url')));
        $this->load->library('form_validation');
        $this->load->model('UserModel');
        $this->load->database();

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
            redirect(site_url('pages\view'),'refresh');
        }
        else{
            redirect(site_url('LoginSignUp\view'),'refresh');
        }

    }
    
  public function login($page = 'LoginSignUp')
    {
        $this->load->library('session');//loding the session library
        $this->form_validation->set_rules('username', 'username', 'required|trim|max_length[50]|xss_clean');//validating the username field of the login form
        $this->form_validation->set_rules('password', 'password', 'required|trim|max_length[200]|xss_clean');//validating the password field of the login form

        if ($this->form_validation->run() == FALSE) {//if validation  failed attempt again
            $this->load->view('templates/header');//loding header
            $this->load->view('pages/'.$page);//loding loginSignup page
            $this->load->view('templates/footer');//loading footer

        } 
      
      else {

            
            $username=$this->input->post('username');//getting  user name which was passed via post method
            $password=$this->input->post('password');//getting password which was ""
            $user_id=$this->UserModel->check_login($username,$password);//calling check_login function of the usermodel weather user exists
            if(! $user_id){
               //login failed
                $this->session->set_flashdata('login_error',TRUE);//setting login_error state in session varible

                redirect(site_url('LoginSignUp\view'),'refresh');//redirecting to same page

            }
            else{


                $this->session;//using the  session variable
                $login_data=array('logged_in'=> TRUE ,'username'=>$username,'email'=>$this->UserModel->getemail($username)
                 ,'dob'=>$this->UserModel->dob($username)
                    ,'id'=>$this->UserModel->getid($username)
                ,'lang'=>$this->UserModel->getlang($username)
                ,'mlang'=>$this->UserModel->getmlang($username)
                ,'country'=>$this->UserModel->getcountry($username)
                ,'name'=>$this->UserModel->getname($username)
                );//setting  login data in  $login_data array
                //$this->session->set_userdata('login',$login_data);////setting  session  user data as by passing $login_array*/
                $this->session->set_userdata($login_data);//
                redirect(site_url('RegPages/View'),'refresh');//redirecting url to home page
                //$session_data = $this->session->userdata('logged_in');
                //  $data['username'] = $session_data['username'];


            }
        }
   } 
    
 
    function logout(){
        $this->session->set_userdata('logged_in',FALSE);//setting logged_in state to false in session variable
        $this->session->sess_destroy();//destroying the session variable
        redirect(site_url('Pages/view'),'refresh');//redirecting url to login page
    }


    function update(){

        //$this->load->library('form_validation');
        /*$this->form_validation->set_rules('text', 'name', 'required|trim|max_length[50]|xss_clean');
        $this->form_validation->set_rules('date','dob','callback_checkDateFormat');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|max_length[50]|xss_clean');//validating the username field of the login form
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');

        //$this->form_validation->set_rules('email', 'trim|required|valid_email|xss_clean');
        if ($this->form_validation->run() == FALSE) {//if validation  failed attempt again


            $this->session->set_flashdata('error',TRUE);
            redirect(site_url('RegPages/Proset'),'refresh');

        }*/



        $id=0;
        if($this->session->userdata('logged_in')) {
            $id=$this->session->userdata('id');

        }

        $username=$this->input->post('Username');//getting  user name which was passed via post method
        $name=$this->input->post('name');
        $dob=$this->input->post('dob');
        $country=$this->input->post('country');
        $mlang=$this->input->post('mlang');
        $musiclang=$this->input->post('musiclang');
        $email=$this->input->post('Email');


        $up=$this->UserModel->update($id,$username,$name,$dob,$country,$mlang,$musiclang,$email);
        if($up){
            $this->session;//using the  session variable
            $login_data=array('logged_in'=> TRUE ,'username'=>$username,'email'=>$this->UserModel->getemail($username)
            ,'dob'=>$this->UserModel->dob($username)
            ,'id'=>$this->UserModel->getid($username)
            ,'lang'=>$this->UserModel->getlang($username)
            ,'mlang'=>$this->UserModel->getmlang($username)
            ,'country'=>$this->UserModel->getcountry($username)
            ,'name'=>$this->UserModel->getname($username)
            );
            $this->session->set_userdata($login_data);
            redirect(site_url('RegPages/userDetails'),'refresh');

        }else{
            redirect(site_url('RegPages/Proset'),'refresh');
        }

    }



    function changepass(){
        //$this->form_validation->set_rules('password', 'oldpass', 'required|trim|max_length[200]|xss_clean');//validating the field password
        //$this->form_validation->set_rules('password', 'newpass', 'required|trim|max_length[200]|xss_clean');//validating the field password
        /*if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error',TRUE);
            redirect(site_url('RegPages/Changepass'),'refresh');
        }*/

        $id=0;
        if($this->session->userdata('logged_in')) {
            $id=$this->session->userdata('id');
            //echo $id;
        }

        $ps=$this->UserModel->getpass($id);
        $oldpass=$this->input->post('oldpass');
        $newpass=$this->input->post('newpass');
        $anewpass=md5($newpass);
        //echo $ps;
        //echo md5($oldpass);
        if(md5($oldpass)!=$ps){
            $this->session->set_flashdata('perror',TRUE);
            redirect(site_url('RegPages/Changepass'),'refresh');
        }
        else{
            $change=$this->UserModel->changepass($id,$anewpass);
            if($change){

                redirect(site_url('RegPages/userDetails'),'refresh');
            }
            else{
                redirect(site_url('RegPages/Changepass'),'refresh');
            }

        }





    }


    
    function signin($page = 'LoginSignUp'){
        
      $this->form_validation->set_rules('text', 'Name', 'required|trim|max_length[50]|xss_clean');
      $this->form_validation->set_rules('date','Dob','callback_checkDateFormat');
      $this->form_validation->set_rules('username', 'Username', 'required|trim|max_length[50]|xss_clean');//validating the username field of the login form
      $this->form_validation->set_rules('password', 'Password', 'required|trim|max_length[200]|xss_clean');//validating the field password
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        if ($this->form_validation->run() == FALSE) {

          $this->load->view('templates/header');//loding header
          $this->load->view('pages/'.$page);//loding loginSignup page
          $this->load->view('templates/footer');
       }
        else{
            $name=$this->input->post('Name');//getting  user name which was passed via post method
            $country=$this->input->post("Username");
            $password=$this->input->post('Password');
            $email=$this->input->post('Email');
            $dob=$this->input->post("Dob");
            $country=$this->input->post("Country");
            $mlang=$this->input->post("Mlanguage");
            $dis=$this->UserModel->checkfunction();
            if($dis==1){
                $this->session->set_flashdata('login_error',TRUE);//setting login_error state in session varible

                //redirect(site_url('LoginSignUp\view'),'refresh');//redirecting to same page

            }else if($dis==2){
                $this->session->set_flashdata('login_error',TRUE);//setting login_error state in session varible

                //redirect(site_url('LoginSignUp\view'),'refresh');//redirecting to same page

            }else if($dis==3){
                $this->session->set_flashdata('login_error',TRUE);//setting login_error state in session varible

                //redirect(site_url('LoginSignUp\view'),'refresh');//redirecting to same page

            }
            else{
                echo "success";
            }











        }
    
    }







    
 }


?>
