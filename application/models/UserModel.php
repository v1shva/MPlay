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
        $epassword=md5($password);//Encrypting the userpassword using md5 encryptaion
        //echo $epassword;
       $query_str= "SELECT id FROM  user WHERE  username = '$username' and password = '$epassword'";//query to select the user who has username and password passed by post method
        //$result=$this->db->query($query_str,array($username,$sha1_password));
        $result=$this->db->query($query_str);
        if($result->num_rows()==1){
             return $result ->row(0)->id;//if there exist a recored than returning true
        }
        else{
               return false;
        }
}
     
    function sign_in($username,$password,$email){
      $epassword=md5($password);
      $quer_str1="SELECT id FROM user WHERE password='$epassword'";
      $quer_str2="SELECT id FROM user WHERE username='$username'";
      $quer_str3="SELECT id FROM user WHERE username='$email'";   
      
      $result1=$this->db->query($quer_str1);
       $result2=$this->db->query($quer_str2);
         $result3=$this->db->query($quer_str3);
         if($result1->num_rows()!=0){
         return 1;
         }
         if($result2->num_rows()!=0){
         return 2;
         }
         if($result3->num_rows()!=0){
         return 3;
         }
         //$query="INSERT INTO user()";
         
    } 
     
     
}
