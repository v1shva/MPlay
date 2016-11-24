<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 11/24/2016
 * Time: 12:20 PM
 */

class Player extends CI_model{
    public function getPlaylist(){
        $db=$this->load->database();
        $query = $this->db->query("SELECT * FROM song");
        foreach ($query->result() as $row)
        {
            $playlist[]['title'] =  $row->Title;
            $playlist[]['path'] =  $row->path;
        }

        return ( $playlist);
    }
}