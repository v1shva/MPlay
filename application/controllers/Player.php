<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/18/2017
 * Time: 3:36 PM
 */

class Player extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/player');
        $this->load->view('templates/footer');
    }

    public function load_playlist(){
        $emotion = $this->input->post('emotion');
        $this->load->model('SongModel');
        $this->data['songs']=$this->SongModel->getSongs($emotion);
        echo json_encode($this->data);
    }

}