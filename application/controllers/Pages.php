<?php

/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/17/2016
 * Time: 10:38 PM
 */
class Pages extends CI_Controller {


    public function view($page = 'home')
    {

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('pages/emotionbar',$data);
        $this->load->view('pages/suggestions',$data);
        $this->load->model('Player');
        $data['playlist']=$this->Player->getPlaylist();
        $this->load->view('pages/player',$data);


        $this->load->view('templates/footer', $data);
    }


}