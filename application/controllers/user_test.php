<?php
class user_test extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('UserModel');
    }
    public function get_user(){
        $this->data['users']= $this->UserModel->get_userinfo();
        $this->load->view('pages/user_test',$this->data);
    }
}
?>

