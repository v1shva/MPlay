 <?php
/**
 * Created by PhpStorm.
 * User: sudesh
 * Date: 1/18/2017
 * Time: 9:28 PM
 */
defined('BASEPATH') OR exit('No direct script allowed');
class AdminCtrl extends CI_Controller {
	 public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
      //  $this->load->library('form_validation');
       // $this->load->model('UserModel');
        $this->load->database();

    }


    public function view($page = 'AdminLogIn')
    {
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);

    }
    public function login(){
    	$username=$this->input->post('username');
        $password=$this->input->post('password');
        $this->load->model('AdminModel');
        $data=$this->AdminModel->signin($username,$password);
       if($data){
            $this->load->view('pages/admin_dashboard');

        }else{

            $this->load->view('pages/AdminLogIn');
            
        }
    }
   
}