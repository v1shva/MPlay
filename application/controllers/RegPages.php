<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/17/2016
 * Time: 10:38 PM
 */
class RegPages extends CI_Controller {

    public function Home($page = 'home')
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
        $data['activeUser'] = 'active';
        $data['activeHome'] = '';
        $data['activeAboutUs'] = '';
        $this->load->view('templates/headerreg', $data);
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library('form_validation');
        $this->load->view('pages/addsong',$data);
        $this->load->view('pages/userpage', $data);
        //$this->load->view('pages/player',$data);
        $this->load->view('templates/footerreg', $data);
    }
}

