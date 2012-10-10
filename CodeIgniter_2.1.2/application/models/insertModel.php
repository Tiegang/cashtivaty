<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class InsertModel extends CI_Model{
    function insertModel(){
    parent::__construct();
    }
    
    function insert($data){
        $this->db->insert('page_user',$data);
    }
    function insertgroup($data){
        $this->db->insert('group_user',$data);
    }
}
?>
