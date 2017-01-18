<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {


    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/player');
        $this->load->view('templates/footer');
    }

    public function load_playlist($emotion="joyful"){
        $this->load->model('Song');
        $this->data['songs']=$this->Song->getSongs($emotion);
        echo json_encode($this->data);
    }

}
