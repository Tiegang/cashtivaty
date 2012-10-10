<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Page_Manager extends CI_Model{
    function Page_Manager(){
	    parent::__construct();
		$this->load->database();
    }
    
    function insertData($data){
        $this->db->insert('page_user',$data);
    }
    function insertgroup($data){
        $this->db->insert('group_user',$data);
    }
	
	public function getPages($num = 0,$offset = 0){
		//return $this->db->get('page_user',$num,$offset)->result();
		return $this->db->get('page_user')->result();
	}
}
?>
