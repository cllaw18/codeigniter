<?
class News extends CI_Model {  

    function __construct()
    { 
       parent::__construct();
    }
	
	function get_news(){
		$sql = "select * from news ";
		$query = $this->db->query($sql); 
		$result = $query->result_array(); 
		return $result;
	}
	
}
?>

