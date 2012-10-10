<?php

class Upload_video extends CI_Controller {
 
 function __construct()
 {
  parent::__construct();
  $this->load->helper(array('form', 'url'));
 }
 
 function index()
 { 
  $this->load->view('upload_form_video', array('error' => ' ' ));
 }

 function do_upload_video()
 {
  $config['upload_path'] = './uploads/';
  $content_type = $config['allowed_types'] = 'mp4|flv';
  $config['max_size'] = '0';
  $config['max_width']  = '0';
  $config['max_height']  = '0';
  
  $this->load->library('upload', $config);
 
  if ( ! $this->upload->do_upload())
  {
   $error = array('error' => $this->upload->display_errors());
   
   $this->load->view('upload_form_video', $error);
  } 
  else
  {
  	$today = date("Ymd His");
  	$data = array('upload_data' => $this->upload->data());
	
	$dir = "C:/wamp/www/CodeIgniter_2.1.2/uploads/";
	//Working on it
	//rename($dir.$data['upload_data']['file_name'], $dir .$today.".jpg");
  	//print_r($data);
	//file Name (file_name: campus14.jpg)
	//echo($data['upload_data']['file_name']."<br />");
	//File Path Location (full_path: C:/wamp/www/CodeIgniter_2.1.2/uploads/)
	echo $path = $data['upload_data']['file_path'];

	echo $file_extention = $data['upload_data']['file_ext'];
	$dir = "C:/wamp/www/CodeIgniter_2.1.2/uploads/";
	//Working on it
	rename($dir.$data['upload_data']['file_name'], $dir .$today.$file_extention);

	//File Size (file_size: 67.65)
	//Number of file (is_image: 1)
  	
  	$data1 = array(
	'contentName' => $today,
	'type' => $file_extention,
	'path' => $path.$today
	
	);


	$this->data_content->add_content($data1);
	//$this->db->insert_batch('content', $data1);
    
   $this->load->view('upload_success_video', $data);
  }
 } 
}
?>