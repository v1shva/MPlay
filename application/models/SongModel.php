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
        $this->db->where('Emotion',$emotion);
        $this->db->from('song');
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllSongDetails(){
        $db=$this->load->database();
        $this->db->select("ID,Title,Artist,Decade,Emotion,path,tags,url,playcount,language,UserID");
        $this->db->from('song');
        $query = $this->db->get();
        return $query->result();
    }


    public function searchSong($title){
        $db=$this->load->database();
         $query = $this->db->select('*')->from('song')->like('Title',$title)->get();
        return $query->result();
/*        $this->db->from('song');
        $query =$this->db->like('Title','$title');
        return $query->result();*/

    }



    public function getUploads(){
      $this->db->from('song');
      $query = $this->db->get();
      $rowcount = $query->num_rows();
      return $rowcount;
     }


     public function searchSongByid($id){
        $db=$this->load->database();
         $query = $this->db->select('*')->from('song')->where('ID',$id)->get();
        return $query->result();
     }

}