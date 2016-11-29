<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Madura
 * Date: 11/17/2016
 * Time: 10:38 PM
 */
class Forgetpassword extends CI_Controller {

    public function reset_password(){
        if(isset($_POST['email'] )&& !empty($_POST['email']))
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('email','Email Address','trim|requred|min_length[6]|max_length[50]|valid_email|xss_clean');
        if ($this->form_validation->run()==FALSE){
            $this->load->view('templates/header');
            $this->load->view('templates/footer');
        }
        else{
            $email = trim($this->input->post('email'));
            $result = $this->model_login->email_exists($email);
            if ($result){
                $this->send_reset_password_email($email,$result);
                $this->load->view('templates/header');
                $this->laod->view('templates/footer');
            }
            else{
                $this->load->view('templates/header');
                $this->load->view('templates/footer');
            }
        }
        }
    }
    public function email_exists($email){
        $sql = "SELECT name,email FROM user WHERE email = '{$email}' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();
        return ($result->num_rows()===1 && $row->email)? $row->name:false;
    }

    public function vertify_reset_password_code($email,$code){
        $sql = "SELECT name,email FROM user WHERE email = '{$email}' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();

        if ($result->num_rows() ===1){
            return ($code == md5($this->config->item('salt').$row->name)) ? true :false;
        }
        else{
            return false;
        }

    }

    private function send_reset_password_email($email,$name){
        $this->load->library('email');
        $email_code = md5($this->config->item('salt').$name);
        $this->email->set_mailtype('html');
        $this->email->from($this->config->item('bot_email'),'Maplay');
        $this->email->to($email);
        $this->email->subject('Please reset your password at Mplay');

        $message = '<!DOCTYPE html><body><h1>My First Heading</h1><p>My first paragraph.</p></body></html>
';
        $this->email->message($message);
        $this->email->send();
    }
  /*  public function view($page = 'recover')
    {

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('templates/headerreg', $data);
        $this->load->view('pages/'.$page, $data);
        //$this->load->view('pages/emotionbar',$data);
        //$this->load->view('pages/suggestions',$data);
        $this->load->helper('url');
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library('form_validation');
        //$this->load->view('pages/addsong',$data);
        //$this->load->view('pages/player',$data);
        $this->load->view('templates/footerreg', $data);
    }*/
}

