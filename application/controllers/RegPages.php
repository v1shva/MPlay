<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/17/2016
 * Time: 10:38 PM
 */
class RegPages extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        //$this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('UserModel');
        $this->load->database();
    }



    public function view($page = 'home')
    {
        $data['activeHome'] = 'active';
        $data['activeAboutUs'] = '';
        $data['activeUser'] = '';
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('templates/headerreg', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('pages/emotionbar',$data);
        $this->load->view('pages/suggestions',$data);
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library('form_validation');
        $this->load->view('pages/addsong',$data);
        //$this->load->view('pages/player',$data);
        $this->load->view('templates/footerreg', $data);
    }

    public function userDetails(){

        $data['userName'] ='';
        $data['userLevel'] = '';
        $data['activeUser'] = 'active';
        $data['activeHome'] = '';
        $data['activeAboutUs'] = '';
        //$this->load->view('templates/headerreg', $data);
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library('form_validation');
        $this->load->view('templates/headerprofile',$data);
        $this->load->view('pages/profile', $data);
        //$this->load->view('pages/player',$data);
        //$this->load->view('templates/footerreg', $data);
    }

    public function  Proset(){

        $data['userName'] ='';
        $data['userLevel'] = '';
        $data['activeUser'] = 'active';
        $data['activeHome'] = '';
        $data['activeAboutUs'] = '';
        //$this->load->view('templates/headerreg', $data);
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library('form_validation');
        $this->load->view('templates/headerprofile',$data);
        $this->load->view('pages/changeprofile', $data);
        //$this->load->view('pages/player',$data);
        //$this->load->view('templates/footerreg', $data);
    }


    public function  Changepass(){

        $data['userName'] ='';
        $data['userLevel'] = '';
        $data['activeUser'] = 'active';
        $data['activeHome'] = '';
        $data['activeAboutUs'] = '';
        //$this->load->view('templates/headerreg', $data);
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library('form_validation');
        $this->load->view('templates/headerprofile',$data);
        $this->load->view('pages/changepass', $data);
        //$this->load->view('pages/player',$data);
        //$this->load->view('templates/footerreg', $data);
    }

    public function  Upload(){

        $data['userName'] ='';
        $data['userLevel'] = '';
        $data['activeUser'] = 'active';
        $data['activeHome'] = '';
        $data['activeAboutUs'] = '';

        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library('form_validation');
        $this->load->view('templates/headerprofile',$data);
        $this->load->view('pages/upload', $data);

        $config["upload_path"] = "./images";
        $config["alowed_types"]='jpg|jpeg|gif|png';
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload()){
              $error= array('error'=>$this->upload->display_errors());
              //$this->load->view('templates/headerprofile',$data);
              //$this->load->view('pages/upload', $data);
        }
        else{
            $file_data=$this->upload->data();
            $data['img']=base_url().'/images /' .$file_data['file_name'];
            $this->load->view('templates/headerprofile',$data);
            $this->load->view('pages/profile', $data);
            //$this->load->view('success_msg',$data);
        }



    }








}

