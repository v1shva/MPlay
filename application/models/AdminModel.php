<?php
/**
 * Created by PhpStorm.
 * User: sudesh
 * Date: 11/25/2016
 * Time: 7:58 AM
 */
class AdminModel extends CI_Model {


    public function signin($username, $password){
        $sql = "SELECT * FROM admin WHERE email ='$username' AND password = '$password'";
        $query=$this->db->query($sql);
        $res = $query->result();
        if($query->num_rows()==1){
            return true;
        }else{
            return false;
        }
    }
}
