<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class New_page extends CI_Controller{

    function new_page(){
        parent::__construct();
        $this->load->database();
        
    }
	public function index()
	{
           
		
                $this->load->view('create_page');
                //$this->load->scaffolding('page_user');
 
                }

   function insertdata(){
        
               
        
            $data=array(
                'page_title'=>$_POST['pagename'],
                'page_desc'=>$_POST['description'],
                'upload_setting'=>$_POST['upload_setting'],
                'accesslevels'=>$_POST['accesslevels'],
		'type'=>0
            );
          //$data2['query']=$this->db->get('page_user');
            $this->load->model('manage_model');
            $this->manage_model->insert($data);
            echo "insert done!(create page)";
            
         //$this->load->view('create_page_succ',$data2);
            
           
            
        }//
        
   function delet_page(){
       $this->load->model('manage_model');
       $this->manage_model->delect_page();
       echo 'delecte page done!';
   }
}
echo '<a href="http://localhost/cashtivaty/CodeIgniter_2.1.2/index.php/show_pages">show pages</a>';
?>

