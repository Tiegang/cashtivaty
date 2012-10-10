<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Show_pages extends CI_Controller{

    function show_pages(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        
    }
	public function index()
	{
          
           //$this->load->scaffolding('page_user');
                
             $this->load->library('pagination');
             //$this->load->library('table');
             
             $config['base_url']=site_url('show_pages/index');
             $config['total_rows']=$this->db->count_all('page_user');
             $config['per_page']=4;
             $config['uri_segment']=3;
             $config['num_links']=4;
             //$config['page_query_string']=true;
             $config['full_tag_open']='<p>';
             $config['full_tag_close']='</p>';
        
             $config['first_link']='First';
             $config['first_tag_open']='<div>';
             $config['first_tag_close']='</div>';
             $config['last_link']='Last';
             $config['last_tag_open']='<div>';
             $config['last_tag_close']='</div>';
             
             $this->load->model('fetchModel');
            $data2['results']=$this->fetchModel->get_page_data($config['per_page'],$this->uri->segment(3));
            $this->pagination->initialize($config);
            
            
            
        // $tmpl = array (
                    //'table_open'          => '<table border="1" table width=20% height=10%>',

                    //'heading_row_start'   => '<tr>',
                    //'heading_row_end'     => '</tr>',
                    //'heading_cell_start'  => '<th>',
                   // 'heading_cell_end'    => '</th>',

                    //'row_start'           => '<tr>',
                   // 'row_end'             => '</tr>',
                   // 'cell_start'          => '<td colspan="2">',
                   // 'cell_end'            => '</td>',

                   // 'row_alt_start'       => '<tr>',
                   // 'row_alt_end'         => '</tr>',
                   // 'cell_alt_start'      => '<td td colspan="2">',
                   // 'cell_alt_end'        => '</td>',

                   // 'table_close'         => '</table>'
              //);
            //$this->table->set_template($tmpl);

            $this->load->view('create_page_succ',$data2);
            //$this->load->view('display_page',$data2);
           
        }
           
        function display_page($pageid){
               $this->load->model('fetchModel');
               $data3['results']=$this->fetchModel->get_one_page($pageid);
               $this->load->view('display_page',$data3);
               
               //echo "Title";
               //echo $result->page_title;
               //echo "Body";
               //echo $result->page_desc;
           }
        
 function delet_page($pageid){
     $this->load->model('manage_model');
     $this->manage_model->delet_page($pageid);
     echo 'delete page done!';
     echo '<a href="http://localhost/cashtivaty/CodeIgniter_2.1.2/index.php/show_pages">show pages</a>';
 }
               
}
?>
