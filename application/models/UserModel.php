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
    
    function  check_login($username,$password){
        $epassword=md5($password);
        //echo $epassword;
       $query_str= "SELECT id FROM  user WHERE  name = '$username' and password = '$epassword'";
        //$result=$this->db->query($query_str,array($username,$sha1_password));
        $result=$this->db->query($query_str);
        if($result->num_rows()==1){
             return $result ->row(0)->id;
        }
        else{
               return false;
        }
}
}
