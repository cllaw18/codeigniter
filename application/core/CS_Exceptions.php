<?
  class CS_Exceptions extends CI_Exceptions {
  
	  public $current_page = '';
	  public function __construct(){
	  
		parent::__construct(); 
	  }
	  
	  function show_404($page = '', $log_error = TRUE)
		{
		  
			exit();  
		 
		}
	 
		function show_error($heading, $message, $template = 'error_general', $status_code = 500)
		{
		 
			$CI =& get_instance();
		 	$CI->load->helper('url'); // Load helper function
			
			$data = array();
			$data['base_url'] = base_url(); // Get the Framework URL path
			$data['site_title'] = "Error Page";
			$data['message'] = $message;
			$data['heading'] = $heading; 
			$data['content'] = 	$this->lang->line('general_'.$template);
			$this->current_page = "error_page"
		//	echo $heading;
		//	echo $message;
			$data['main_content'] = $CI->load->view($template, $data,true); // Load home View
		 	return $CI->load->view('master',$data,true); // Pass data to View
		}

	  
  
  }