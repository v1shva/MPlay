<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/24/2016
 * Time: 12:18 PM
 */
class AddSong extends CI_model{
    public function addsongdb($details){
        $db=$this->load->database();
        $success = $this->db->insert('Song',$details);
        return ($success);
    }
}