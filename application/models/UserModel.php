<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/29/2016
 * Time: 1:01 PM
 */
class UserModel extends CI_model{
    public function addUserDB($details){
        $db=$this->load->database();
        $success = $this->db->insert('User',$details);
        return ($success);
    }
}