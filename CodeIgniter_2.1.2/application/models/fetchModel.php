<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class FetchModel extends CI_Model{
  function fetchModel(){
    parent::__construct();
    $this->load->database();
    }
    
    function get_page_data($num,$offset){
       
      
        $query=$this->db->get('page_user',$num,$offset)->result();
        
        return $query;
        
    }
    
    function get_one_page($pageid){
        $this->db->select('page_title,page_desc,accesslevels');
        $this->db->from('page_user');
        $this->db->where('page_id',$pageid);
        $query=$this->db->get()->result();
        return $query;
    }
    function get_group_data($num,$offset){
        $query=$this->db->get('group_user',$num,$offset);
        return $query;
        
    }
}
?>
