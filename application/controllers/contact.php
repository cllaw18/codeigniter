<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CS_Controller {

	public function __construct(){
	  
		parent::__construct(); 
	}
	  
	function index()
	{
		 $this->load->helper(array('form', 'url'));  
		 $this->current_page = "contact";
		 //echo $this->lang->line("general_contact_content"); 
		 
		// Load helper function ,form is for building a form
		$load_form = true; 
		$error_messages = array();
		
		$name = $this->input->post('name', TRUE);
		$email = $this->input->post('email', TRUE);
		$content = $this->input->post('content', TRUE);
		
		$data = array();
		$data['base_url'] = base_url(); // Get the Framework URL path
		$data['site_title'] = $this->site_data['site_title']['contact'];  
		$data['site_url'] = site_url(); // Get the URL language path 
		$data['submit'] = $this->lang->line("general_contact_submit"); 
		// Form validation parts
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', $this->lang->line("general_contact_field_name"), 'required');
		$this->form_validation->set_rules('email', $this->lang->line("general_contact_field_email"), 'required|valid_email');
		$this->form_validation->set_rules('content', $this->lang->line("general_contact_field_content"), 'required'); 
		
		// Form validation custom error messages
		$this->form_validation->set_message('required', $this->lang->line("general_contact_required_field"));
		$this->form_validation->set_message('valid_email', $this->lang->line("general_contact_valid_field")); 
		 
		// If there is/are error(s), show error message(s)
		if ($this->form_validation->run() == FALSE) {
		
			$errors = $this->form_validation->error_array();
			
			if(count($errors)>0){
				$error_messages = $errors;
			}  
			
		}
		// Display success message View
		else {
		
		  $load_form = false; 
		  
		} 
    
	    $data['error_messages'] = $error_messages; 
	    $data['contact_success'] = $this->lang->line("general_contact_success");
	    $data['field_name'] = $this->lang->line("general_contact_field_name");
	    $data['field_email'] = $this->lang->line("general_contact_field_email");
	    $data['field_content'] = $this->lang->line("general_contact_field_content");
	    $data['content'] = $this->lang->line("general_contact_content");
		
		if($load_form)
			$data['main_content'] = $this->load->view('contact', $data,true); // Load contact form View
		else $data['main_content'] = $this->load->view('contact_success', $data,true); // Load form submit success View
		
		$this->load->view('master',$data); // Pass data to View
		 
	}
	 
}
/* End of file home.php */
/* Location: ./application/controllers/contact.php */