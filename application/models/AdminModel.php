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



    public function reportRequests(){
        $this->db->from('report_requests');
        $query = $this->db->get();
        $num_rows = $query->num_rows();
        return $num_rows;

    }

}
