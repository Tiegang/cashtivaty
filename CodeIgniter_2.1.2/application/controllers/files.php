<?php
class Files extends CI_Controller {
	
	var $file;
	var $path;
	/*
	function Files() {
		parent::CI_Controller();
		$this->load->helper('file');
		$this->load->helper('download');
		$this->load->helper('directory');
		$this->load->helper('url');
		
		$this->path = "application" . DIRECTORY_SEPARATOR . "test_files"
			 . DIRECTORY_SEPARATOR;
		$this->file = $this->path . "hello.txt";
	}
	*/
	function index(){
	
	}
	function write_test() {
	$this->load->helper('file');
		$this->load->helper('download');
		$this->load->helper('directory');
		$this->load->helper('url');
		
				$this->path = "application" . DIRECTORY_SEPARATOR . "test_files"
			 . DIRECTORY_SEPARATOR;
		$this->file = $this->path . "hello.txt";
	
		$data = "Hello World";
		write_file($this->file,$data);
		echo "finished writing";
	}
	
	function read_test() {
	$this->load->helper('file');
		$this->load->helper('download');
		$this->load->helper('directory');
		$this->load->helper('url');
		
				$this->path = "application" . DIRECTORY_SEPARATOR . "test_files"
			 . DIRECTORY_SEPARATOR;
		$this->file = $this->path . "hello.txt";
		
		$string = read_file($this->file);
		echo $string;
	}
	
	function filenames_test() {
	$this->load->helper('file');
		$this->load->helper('download');
		$this->load->helper('directory');
		$this->load->helper('url');
				$this->path = "application" . DIRECTORY_SEPARATOR . "test_files"
			 . DIRECTORY_SEPARATOR;
		$this->file = $this->path . "hello.txt";
		$files = get_filenames($this->path, TRUE);
		print_r($files);
	}

	function dir_file_info_test() {
	$this->load->helper('file');
		$this->load->helper('download');
		$this->load->helper('directory');
		$this->load->helper('url');
				$this->path = "application" . DIRECTORY_SEPARATOR . "test_files"
			 . DIRECTORY_SEPARATOR;
		$this->file = $this->path . "hello.txt";
		$files = get_dir_file_info($this->path);
		print_r($files);
	}

	function file_info_test() {
			$this->load->helper('file');
		$this->load->helper('download');
		$this->load->helper('directory');
		$this->load->helper('url');
				$this->path = "application" . DIRECTORY_SEPARATOR . "test_files"
			 . DIRECTORY_SEPARATOR;
		$this->file = $this->path . "hello.txt";
		$info = get_file_info($this->file, 'date');
		print_r($info);
	}
	
	function mime_test() {
			$this->load->helper('file');
		$this->load->helper('download');
		$this->load->helper('directory');
		$this->load->helper('url');
				$this->path = "application" . DIRECTORY_SEPARATOR . "test_files"
			 . DIRECTORY_SEPARATOR;
		$this->file = $this->path . "hello.txt";
		//echo get_mime_by_extension($this->file);
		echo get_mime_by_extension('hello.png');
	}
	
	function download_test() {
			$this->load->helper('file');
		$this->load->helper('download');
		$this->load->helper('directory');
		$this->load->helper('url');
		
				$this->path = "application" . DIRECTORY_SEPARATOR . "test_files"
			 . DIRECTORY_SEPARATOR;
		$this->file = $this->path . "hello.txt";
		$string = "Hello";
		force_download('hello.txt',read_file($this->file));
	}
	
	function display() {
	
		$this->load->helper('file');
		$this->load->helper('download');
		$this->load->helper('directory');
		$this->load->helper('url');
		
		$this->path = "application" . DIRECTORY_SEPARATOR . "test_files"
			 . DIRECTORY_SEPARATOR;
		$this->file = $this->path . "hello.txt";
		
		$data['files'] = directory_map(BASEPATH);

		$this->load->view('files', $data);
	}

}




