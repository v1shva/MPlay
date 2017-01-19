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
        $url = $this->input->post('url');
        $filename = $this->input->post('filename');
        $path = "";
        if($filename){
            $path = "media/songs/" . $filename;
        }
        $data = array(
            'Title' => $this->input->post('title'),
            'Artist' => $this->input->post('artist'),
            'path' => $path,
            'Emotion' => $this->input->post('emotion')
        );
        $this->load->model('SongModel');
        if($this->SongModel->addsongdb($data)){
            echo 'true';
        }
        else{
            echo 'false';
        }


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
        $data = '{success:"true"}';
        header('Content-Type: application/json');
        echo json_encode($data);


    }

    public function getAllSongs(){
        $this->load->model('SongModel');
        $this->data['Allsongs']=$this->SongModel->getAllSongDetails();
        echo json_encode($this->data);
    }

    public function searchSong(){
        $this->load->modal('SongModel');
        $this->data['song']=$this->SongModel->searcSong();
        echo json_encode($this->data);

    }
}