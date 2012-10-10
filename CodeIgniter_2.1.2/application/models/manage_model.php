<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Manage_model extends CI_Model{
    function manage_model(){
    parent::__construct();
    }
    
    function insert($data){
        $this->db->insert('page_user',$data);
    }
    function insertgroup($data){
        $this->db->insert('group_user',$data);
    }
    
    function delet_page($id){
        $this->db->delete('page_user',array('page_id'=>$id));
    
    }
}
?>
