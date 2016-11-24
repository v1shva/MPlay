<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/24/2016
 * Time: 3:18 PM
 */
class Song extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function addsong()
    {
        //$this->load->helper('form');
        $this->load->model('AddSong');
        $data = array(
            'Title' => $this->input->post('title'),
            'Artist' => $this->input->post('artist'),
            'path' => $this->input->post('path')
        );
        $this->load->model('AddSong');
        $this->AddSong->addsongdb($data);
    }
}