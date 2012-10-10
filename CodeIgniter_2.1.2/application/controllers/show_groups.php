<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


class Show_groups extends CI_Controller{

    function show_groups(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        
    }
	public function index()
	{
          
           //$this->load->scaffolding('page_user');
                
             $this->load->library('pagination');
             $config['base_url']=site_url('show_groups/index');
             $config['total_rows']=$this->db->count_all('group_user');
             $config['per_page']=10;
             $config['uri_segment']=3;
             $config['num_links']=4;
             $config['full_tag_open']='<p>';
             $config['full_tag_close']='</p>';
        
             $config['first_link']='First';
             $config['first_tag_open']='<div>';
             $config['first_tag_close']='</div>';
             $config['last_link']='Last';
             $config['last_tag_open']='<div>';
             $config['last_tag_close']='</div>';
             
            
            $this->pagination->initialize($config);
            $this->load->model('fetchModel');
            $data2['results']=$this->fetchModel->get_group_data($config['per_page'],$this->uri->segment(3));
            $this->load->library('table');
            $this->table->set_heading('Title','Body');
            $this->load->view('create_page_succ',$data2);
 
                }
}
?>