<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/24/2016
 * Time: 12:18 PM
 */
class Song extends CI_model{
    public function addsongdb($details){
        $db=$this->load->database();
        $success = $this->db->insert('Song',$details);
        return ($success);
    }

    public function getSongs($emotion){
        $this->db->select("ID,Title,Artist,Decade,Emotion,path,tags,url,playcount,language,UserID");
        $this->db->where('Emotion',$emotion);
        $this->db->from('song');
        $query = $this->db->get();
        return $query->result();
    }
}