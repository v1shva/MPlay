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

    function getid($username){
        $query_str="SELECT id FROM user WHERE username='$username'";
        $result=$this->db->query($query_str);
        if($result->num_rows()==1){
            return $result->row(0)->id;
        }
    }
    function getemail($username){
        $query_str="SELECT email FROM user WHERE username='$username'";
        $result=$this->db->query($query_str);
        if($result->num_rows()==1){
            return $result->row(0)->email;
        }
    }
    function getname($username){
        $query_str="SELECT name FROM user WHERE username='$username'";
        $result=$this->db->query($query_str);
        if($result->num_rows()==1){
            return $result->row(0)->name;
        }
    }
    function getlang($username){
        $query_str="SELECT mlang FROM user WHERE username='$username'";
        $result=$this->db->query($query_str);
        if($result->num_rows()==1){
            return $result->row(0)->mlang;
        }
    }



    function getmlang($username){
        $query_str="SELECT musiclang FROM user WHERE username='$username'";
        $result=$this->db->query($query_str);
        if($result->num_rows()==1){
            return $result->row(0)->musiclang;
        }
    }

    function getcountry($username){
        $query_str="SELECT country FROM user WHERE username='$username'";
        $result=$this->db->query($query_str);
        if($result->num_rows()==1){
            return $result->row(0)->country;
        }
    }

    function dob($username){
        $query_str="SELECT birthday FROM user WHERE username='$username'";
        $result=$this->db->query($query_str);
        if($result->num_rows()==1){
            return $result->row(0)->birthday;
        }
    }

    function getpass($userid){
        $query_str="SELECT password FROM user WHERE id='$userid'";
        $result=$this->db->query($query_str);
        if($result->num_rows()==1){
            return $result->row(0)->password;
        }
    }

    function changepass($userid,$newpass){
        $query_str="UPDATE user SET  password='$newpass' WHERE id='$userid'";
        $result=$this->db->query($query_str);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }





    function update($userid,$newusername,$name,$dob,$country,$motherlang,$musiclang,$email){
        $query_str="UPDATE user SET username='$newusername' ,name='$name',birthday='$dob',country='$country',mlang='$motherlang',musiclang='$musiclang',email='$email'  WHERE id=$userid ;";
        $result=$this->db->query($query_str);
        if($result){
            return true;
        }else{
            return false;
        }

    }

    function checkfunction($username,$password,$email){
      $epassword=md5($password);
      $quer_str1="SELECT id FROM user WHERE password='$epassword'";
      $quer_str2="SELECT id FROM user WHERE username='$username'";
      $quer_str3="SELECT id FROM user WHERE email='$email'";
      
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
         return 4;
         
    }

    function insert($name,$username,$password,$email,$dob,$country,$mlan){
        $enpas=md($password);
        $query=
            "INSERT INTO signup(name,dob,country,motherlanguage,prefmusiclanguage,username,email,password) VALUES('$name','$dob','$country','$mlan','$mlan','$username','$email','$password')";


    }
     
     function getusercount(){
      $this->db->from('user');
      $query = $this->db->get();
      $rowcount = $query->num_rows();
      return $rowcount;
     }
}
