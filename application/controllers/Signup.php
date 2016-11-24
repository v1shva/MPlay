<?php

class Signup extends CI_Controller {

    public function view($page = 'Signup')
    {


        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('templates/header', $data);
        $this->load->view('pages/Signup',$page, $data);
        $this->load->view('templates/footer', $data);
    }
}

?>
