<?php
class test_model extends CI_Model{
    function getSongs(){
        $this->db->select("ID,Title,Artist,Decade,Emotion,path,tags,url,playcount,language,UserID");
        $this->db->from('song');
        $query = $this->db->get();
        return $query->result();
    }

}

?>