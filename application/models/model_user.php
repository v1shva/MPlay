<?php
class Model_user extends CI_Model {
    private $email_code;
    public function insert_user(){
        $name = $this->input->post('name');
    }
}