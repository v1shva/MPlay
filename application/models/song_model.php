<?php
class song_model extends CI_Model{
    function getSongs($emotion){
        $this->db->select("ID,Title,Artist,Decade,Emotion,path,tags,url,playcount,language,UserID");
        $this->db->where('Emotion',$emotion);
        $this->db->from('song');
        $query = $this->db->get();
        return $query->result();
    }

}

?>