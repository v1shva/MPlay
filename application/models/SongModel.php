<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/24/2016
 * Time: 12:18 PM
 */
class SongModel extends CI_model{

    public function addsongdb($details){
        $db=$this->load->database();
        $success = $this->db->insert('Song',$details);
        return ($success);
    }

    public function getSongs($emotion){
        $db=$this->load->database();

        $this->db->select("ID,Title,Artist,Decade,Emotion,path,tags,url,playcount,language,UserID");
        if(is_array($emotion)){
            $this->db->where_in('Emotion',$emotion);
        }
        else{
            $this->db->where('Emotion',$emotion);
        }
        $this->db->from('song');
        $query = $this->db->get();
        return $query->result();
    }
}