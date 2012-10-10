<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_Ctrl extends CI_Controller{

    /*
    function new_page(){
            parent::__construct();
            $this->load->database();
            
        }*/
    public function Page_Ctrl(){
    	parent::__construct();
    	
		$this->load->model('page_manager');
    }
	public function index()
	{
                 //$this->load->view('create_page');
                //$this->load->scaffolding('page_user');
                echo 'Test.. This should work';
    }
	
	public function createPage(){
		$this->load->view('create_page');
	}
	
	public function insertData(){
		$data=array(
                'page_title'=>$_POST['pagename'],
                'page_desc'=>$_POST['description'],
                'upload_setting'=>$_POST['upload_setting'],
                'accesslevels'=>$_POST['accesslevels'],
				'type'=>0
            );
          
            
			
            $this->page_manager->insertData($data);
			
			$data['msg'] = "Page Created..";
			$this->load->view('create_page',$data);
	}
	
	public function displayPages(){
		// retriew pages DB
		$pages = $this->page_manager->getPages();
		
		echo print_r($pages);
		$data['results'] = $pages;
		
		$this->load->view('create_page_succ',$data);
	}

}
?>

