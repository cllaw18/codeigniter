<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error_404 extends CS_Controller {

	public function __construct(){
	  
		parent::__construct(); 
	  }
	  
	public function index()
	{	
		$this->load->helper('url'); // Load helper function
		$this->current_page = "error_page";
		
		$data = array();
		$data['base_url'] = base_url(); // Get the Framework URL path
		$data['site_url'] = site_url();
		$data['site_title'] = "Error Page"; 
		$data['content'] = 	$this->lang->line('general_error_404'); 
		$data['main_content'] = $this->load->view('error_404', $data,true); // Load home View
		$this->load->view('master',$data); // Pass data to View
		
	}
	 
}

/* End of file home.php */
/* Location: ./application/controllers/error404.php */