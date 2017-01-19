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


    public function view($page = 'AdminLogIn')
    {
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);

    }
    public function login(){
        $data=$this->AdminModel->signin();
       if($data){
            $this->load->view('pages/admin_dashboard');

        }else{

            $this->view();
            
        }
    }
    function logout(){

		$this->AdminModel->logout();
		$this->view();

	}
   
}