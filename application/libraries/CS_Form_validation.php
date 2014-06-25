<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class CS_Form_validation extends CI_Form_validation {
   
	  public function __construct($rules = array()){
	  
		parent::__construct($rules); 
	  }
	  
	  public function error_array()
		{
		  
		 return $this->_error_array;
		 
		}
	  
  }