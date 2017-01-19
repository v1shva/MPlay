<?php
$loggedin = $this->session->userdata('loggedin');

if ($loggedin != true) {
  
  $dd = base_url('index.php/AdminCtr/view');
  redirect($dd);
  exit();
}


$name = $this->session->userdata('username');

/*;*/


defined('BASEPATH') OR exit('No direct script access allowed');
?>
