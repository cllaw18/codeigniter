<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CS_Controller {

	public function __construct(){
	  
		parent::__construct(); 
	  }
	  
	public function index()
	{	$this->current_page = "home";
		$this->load->helper('url'); // Load helper function
	//	echo LANGUAGE;
		$data = array();
		$data['base_url'] = base_url(); // Get the Framework URL path
		$data['site_url'] = site_url(); // Get the URL language path 
		$data['site_title'] = $this->site_data['site_title']['home'];  
		$data['content'] = $this->lang->line("general_home_content");   
		$data['main_content'] = $this->load->view('home', $data,true); // Load home View
		$this->load->view('master',$data); // Pass data to View
		
	}
	public function latest()
	{	$this->current_page = "home/latest";
		$this->load->helper('url'); // Load helper function
		$this->load->database(); 
		$this->load->model('News');  
		
		$data = array();
		$data['base_url'] = base_url(); // Get the Framework URL path
		$data['site_url'] = site_url(); // Get the URL language path 
		$data['site_title'] = $this->site_data['site_title']['latest_news'];  
		$data['content'] = $this->lang->line("general_latest_news_content");
		$data['no_data_message'] = $this->lang->line("general_latest_news_nodata"); 
		$data['latest_news'] = $this->News->get_news(); 
		$data['main_content'] = $this->load->view('latest', $data,true); // Load latest View
		$this->load->view('master',$data); // Pass data to View
		
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */