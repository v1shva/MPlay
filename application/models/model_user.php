<?php
class Model_user extends CI_Model {
    private $email_code;
    public function insert_user(){
        $name = $this->input->post('name');
        $country = $this->input->post('country');
        $dob = $this->input->('dob');
        $mlang = $this->input->('mlang');
        $email = $this->input->('email');
        $password = $this->input->('password');

        $sql = "INSERT INTO user (email,password,name,birthday,country,mlang,)
        VALUES(" . $email . ",
               " . $password  .",
                " . $this->db->escape($name) .",
                " . $this->db->escape($country) .",
                " . $this->db->escape($dob) .",
                " . $this->input->escape($mlang).")";

    }
}