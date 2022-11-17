<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_rss extends CI_Model {

public function __construct()
	{
		parent::__construct();
	}


	function get_posts($count)
	{
		$query = $this->db->get('artikel', $count)->result();
		return $query;
	}
	

}

/* End of file mdl_rss.php */
/* Location: ./application/models/mdl_rss.php */ ?>