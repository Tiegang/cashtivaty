<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class New_group extends CI_Controller{

    function new_group(){
        parent::__construct();
        $this->load->database();
      
    }
	public function index()
	{
           
		$this->load->view('create_group');
               
}
    function insertdata(){
        
            $data=array(
                'page_title'=>$_POST['pagename'],
                'page_desc'=>$_POST['description'],
                'upload_setting'=>$_POST['upload_setting'],
                'accesslevels'=>$_POST['accesslevels'],
		'type'=>1
            );
            $this->load->model('insertModel');
            $this->insertModel->insertgroup($data);
            echo "insert done!(create group)";
        }
}
        echo '<a href="http://localhost/cashtivaty/CodeIgniter_2.1.2/index.php/show_groups">show pages</a>';

?>

