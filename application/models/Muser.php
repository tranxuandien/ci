<?php
/**
 * Created by PhpStorm.
 * User: GOLDEN LOTUS
 * Date: 5/16/2015
 * Time: 11:32 PM
 */

class Muser extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function listUser()
    {
        $this->db->select("id,username,password,level");
        $query=$this->db->get("user");
        return $query->result_array();
    }
    public function countAll(){
        return $this->db->count_all('user');
    }
}