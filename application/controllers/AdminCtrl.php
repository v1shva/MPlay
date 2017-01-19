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
        $this->load->model('AdminModel');
        $this->load->database();

    }


    public function index($page = 'AdminLogIn')
    {
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);

    }
    public function login(){
        $data=$this->AdminModel->signin();
       if($data){
       	    $this->load->view('templates/session');
            $this->home();

        }else{

            $this->index();
            
        }
    }

    function logout(){

		$this->AdminModel->logout();
		$this->index();

	}
   

    public function home(){
    	$this->load->model('UserModel');
    	$username=$this->session->userdata('username'); 
    	$id=$this->session->userdata('id'); 
    	$data['count'] = $this->UserModel->getusercount();
    	$data['profiledata'] = $this->AdminModel->profile($username,$id);
    	$this->load->view('pages/admin_dashboard', $data);
    }
    //   function profile(){ 
 	 	  
  		 
  		// $this->load->view('pages/AdminProfile',$this->data); 

 // } 
    


   public function report(){
    $this->load->view('templates/session'); 
    $username=$this->session->userdata('username'); 
    $id=$this->session->userdata('id'); 
    $data['profiledata'] = $this->AdminModel->profile($username,$id);  	
   	$this->load->view('pages/reports', $data);
   }

}