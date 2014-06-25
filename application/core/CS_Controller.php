<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class CS_Controller extends CI_Controller {
	
	  public $current_page = '';
	  public $menu_data = array();
	  public $site_data = array();
	  
	  public function __construct(){
		parent::__construct(); 
		
		//global menu data variable
		$menu = array("home"=> $this->lang->line('general_home') , "latest_news"=>$this->lang->line('general_latest_news') , "contact"=>$this->lang->line('general_contact'));
		
		$site_data = array();
		$site_data['site_title'] = array("home"=> $this->lang->line('general_home') , "latest_news"=>$this->lang->line('general_latest_news') , "contact"=>$this->lang->line('general_contact'));
		$site_data['site_language'] = array("en"=> $this->lang->line('general_lang_english') , "tc"=>$this->lang->line('general_lang_traditional_chinese')  );
	   
		$this->menu_data = $menu;
		$this->site_data = $site_data; 
		
	  }
	  
	 
	  
  
  }