<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/18/2017
 * Time: 3:36 PM
 */

class Player extends CI_Controller
{

    public function view($page = 'home')
    {
        $data['activeHome'] = 'active';
        $data['activeAboutUs'] = '';
        $data['activeUser'] = '';
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('templates/headerreg', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('pages/emotionbar', $data);
        $this->load->view('pages/suggestions', $data);
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library('form_validation');
        $this->load->view('pages/addsong', $data);
        //$this->load->view('pages/player',$data);
        $this->load->view('templates/footerreg', $data);
    }
}