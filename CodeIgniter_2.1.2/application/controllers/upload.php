<?php

class Upload extends CI_Controller {
 
 function __construct()
 {
  parent::__construct();
  $this->load->helper(array('form', 'url'));
 }
 
 function index()
 { 
  //$this->load->view('upload_form', array('error' => ' ' ));
  //$this->load->view('view_video', array('error' => ' ' ));
  $this->load->view('uploadtext', array('error' => ' ' ));
 }
 function download(){
 	$this->load->helper('download');
	$data = file_get_contents("C:/wamp/www/CodeIgniter_2.1.2/uploads/20120930 110110.jpg"); // Read the file's contents
	$name = '20120930 110110.jpg';

	force_download($name, $data);
 } 
	
 function do_upload()
 {
  $config['upload_path'] = './uploads/';
  $content_type = $config['allowed_types'] = 'gif|jpg|png|bmp|pdf|txt';
  $config['max_size'] = '20240';
  $config['max_width']  = '0';
  $config['max_height']  = '0';
  
  $this->load->library('upload', $config);
 
  if ( ! $this->upload->do_upload())
  {
   $error = array('error' => $this->upload->display_errors());
   
   $this->load->view('uploadphotos', $error);
  } 
  else
  {
  	$today = date("Ymd His");
  	$data = array('upload_data' => $this->upload->data());
	//File extention (file_ext: .jpg)
	echo $file_extention = $data['upload_data']['file_ext'];
	$dir = "C:/wamp/www/CodeIgniter_2.1.2/uploads/";
	//Working on it
	rename($dir.$data['upload_data']['file_name'], $dir .$today.$file_extention);
  	//print_r($data);
	//file Name (file_name: campus14.jpg)
	//echo($data['upload_data']['file_name']."<br />");
	//File Path Location (full_path: C:/wamp/www/CodeIgniter_2.1.2/uploads/)
	echo $path = $data['upload_data']['file_path'];
	$path_time = $path."".$today;
	//File Location (full_path: C:/wamp/www/CodeIgniter_2.1.2/uploads/campus14.jpg)
	//echo $path = $data['upload_data']['full_path'];
	

	//File Size (file_size: 67.65)
	//Number of file (is_image: 1)
  	
  	$data1 = array(
	'contentName' => $today,
	'type' => $file_extention,
	'path' => $path_time
	
	);


	$this->data_content->add_content($data1);

    
   $this->load->view('upload_success', $data);
  }
 } 
}
?>