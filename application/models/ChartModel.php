<?php
/**
 * Created by PhpStorm.
 * User: sudesh
 * Date: 11/25/2016
 * Time: 7:58 AM
 */
class ChartModel extends CI_Model {

    public function load_usercount(){
        $sql = "SELECT count FROM reg_count";
        $result=$this->db->query($sql);
        return $result;
    }
}
