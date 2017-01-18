<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/24/2016
 * Time: 3:18 PM
 */
class Song extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('SongModel');
    }

    public function addsong()
    {
        $this->load->helper(array('form', 'url', 'html'));
        $emotions = $this->input->post('emotions');
        $emotions = implode(", ",$emotions);
        $data = array(
            'Title' => $this->input->post('title'),
            'Artist' => $this->input->post('artist'),
            'path' => $this->input->post('url'),
            'Emotions' => $emotions
        );
        $this->load->model('SongModel');
        if($this->SongModel->addsongdb($data)){
            echo 'true';
        }
        else{
            echo 'false';
        };


    }

    public function uploadSong()
    {
        $this->load->helper(array('form', 'url', 'html'));

        $config['upload_path']          = 'media/songs/';
        $config['max_size']  = 10000;
        $config['allowed_types']        = 'mp3|wma';

        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('fileup')){
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        }
        $data = '{}';
        header('Content-Type: application/json');
        echo json_encode($data);


    }

}