<?php
class Model_user extends CI_Model {
    private $email_code;
    public function insert_user(){
        $name = $this->input->post('name');
        $country = $this->input->post('country');
        $dob = $this->input->post('dob');
        $mlang = $this->input->post('mlang');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $sql = "INSERT INTO user (email,password,name,birthday,country,mlang,)
        VALUES(" . $email . ",
               " . $password  .",
                " . $this->db->escape($name) .",
                " . $this->db->escape($dob) .",
                " . $this->db->escape($country) .",
                " . $this->input->escape($mlang).")";
        $result = $this->db->query($sql);
        if($this->db->affected_rows()===1){
            $this->set_session($name,$country,$email);
            $this->send_validation_email();
            return $name;
        }
        else{
            $this->load->library('email');
            $this->email->from($this->config->item('bot_email'),"Mplay");
            $this->email->to($this->config->item('admin_email'));
            $this->email->subject("problem inserting user into the database");
        }
        $this->email->send();
        return false;


    }

    private function set_session($name,$country,$email){
        $sql = "SELECT id,reg_time FROM user WHERE email = '" .$email . "' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();
        $sess_data = array(
            'id' => $row->id,
            'name' => $row-> name,
            'country' => $row-> country,
            'email' => $email,
            'logged_in' =>0
        );
        $this->email_code = md5((string)$row->reg_time);
        $this->session->set_userdata($sess_data);


    }
}