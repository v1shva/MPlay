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
      $data['emo'] = $this->AdminModel->songsManthly();
      $data['num'] = $this->AdminModel->numrow();
      $data['numOfLikes'] = $this->AdminModel->ratedUsers();
    	$this->load->view('pages/admin_dashboard', $data);

    }
    //   function profile(){ 
 	 	  
  		 
  		// $this->load->view('pages/AdminProfile',$this->data); 

 // } 
    


   public function report(){
    $this->load->view('templates/session'); 
    $username=$this->session->userdata('username'); 
    $id=$this->session->userdata('id');
    $this->load->model('SongModel');
    $data['uploadcount'] = $this->SongModel->getUploads(); 
    $data['profiledata'] = $this->AdminModel->profile($username,$id);  	
   	$this->load->view('pages/reports', $data);

   }

   public function addforms(){
    $this->load->view('templates/session'); 
    $username=$this->session->userdata('username'); 
    $id=$this->session->userdata('id'); 
    $data['profiledata'] = $this->AdminModel->profile($username,$id);
   	$this->load->view('templates/Addforms',$data);
   }

   public function deleteform(){
    $this->load->view('templates/session');
    $username=$this->session->userdata('username'); 
    $id=$this->session->userdata('id'); 
    $data['profiledata'] = $this->AdminModel->profile($username,$id);  
   	$this->load->view('templates/Deleteforms', $data);
   }

   public function modifyforms(){
    $this->load->view('templates/session'); 
    $username=$this->session->userdata('username'); 
    $id=$this->session->userdata('id'); 
    $data['profiledata'] = $this->AdminModel->profile($username,$id); 
   	$this->load->view('templates/Modifyforms',$data);
   }

       public function uploadSong()
    {
        $this->load->helper(array('form', 'url', 'html'));

        $config['upload_path']          = 'media/songs/';
        $config['max_size']  = 10000;
        $config['allowed_types']        = 'mp3|wma';

        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('fileup')){
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        }
        $data = '{}';
        header('Content-Type: application/json');
        echo json_encode($data);


    }



    public function addsong()
    {
        $this->load->helper(array('form', 'url', 'html'));
        $url = $this->input->post('url');
        $filename = $this->input->post('filename');
        $path = "";
        if($filename){
            $path = "media/songs/" . $filename;
        }
        $data = array(
            'Title' => $this->input->post('title'),
            'Artist' => $this->input->post('artist'),
            'path' => $path,
            'Emotion' => $this->input->post('emotion')
        );
        $this->load->model('SongModel');
        if($this->SongModel->addsongdb($data)){
            echo 'true';
        }
        else{
            echo 'false';
        }


    }
    public function searchSong(){
        $this->load->model('SongModel');
        $search=$this->input->post('search');
        $this->data['song']=$this->SongModel->searchSong($search);
        echo json_encode($this->data);

    }

    public function getUploades(){
    	$this->load->model('SongModel');
    	$data['uploadcount'] = $this->SongModel->getUploads();
    	$this->load->view('pages/reports');
    }


    public function searchSongByid(){
        $this->load->model('SongModel');
        $search=$this->input->post('id');
        $this->data['song']=$this->SongModel->searchSongByid($search);
        echo json_encode($this->data);
    }
}