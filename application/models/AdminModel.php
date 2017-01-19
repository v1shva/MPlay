<?php
/**
 * Created by PhpStorm.
 * User: sudesh
 * Date: 11/25/2016
 * Time: 7:58 AM
 */
class AdminModel extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }


    public function signin(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $sql = "SELECT * FROM admin WHERE email ='$username' AND password = '$password'";
        $query=$this->db->query($sql);
        $res = $query->result();

        foreach ($res as $value) {
            $id = $value->id;
        }

        $row=$query->num_rows();

        if($row==1){
            $this->session->set_userdata(

                  array('username' => $username,
                        'id' => $id,
                        'loggedin'=>TRUE 

                        )
                );

            return true;
        }else{
            return false;
        }
     
    }
    public function loggedin(){

        return (bool)$this->session->user_data('loggedin');

    }

    public function logout(){

        $this->session->sess_destroy();
    }
    public function profile($username,$id){
        
        $sql = "SELECT * FROM admin WHERE email ='$username' AND id = '$id'";
        $query=$this->db->query($sql);
        $res = $query->result();
        return $res;

    }



    public function reportRequests(){
        $this->db->from('report_requests');
        $query = $this->db->get();
        $num_rows = $query->num_rows();
        return $num_rows;

    }
     public function songsManthly(){
        $sql = "SELECT Emotion, COUNT(Emotion) AS cunt FROM song WHERE dateAdded BETWEEN (now() - INTERVAL 1 MONTH) AND now() GROUP BY Emotion;";
        $query=$this->db->query($sql);
        $res = $query->result();
        return $res;
       
         }
    public function numrow(){
        $sql = "SELECT * FROM song";
        $query=$this->db->query($sql);
        $res = $query->result();
        $row=$query->num_rows();
        return $row;
        
    }     

}
