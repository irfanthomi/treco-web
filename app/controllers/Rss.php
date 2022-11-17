<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Rss extends Rtx_controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('xml', 'text'));
		$this->load->model('Mdl_rss');
	}

	public function index()
	{

		$data = array(
			'encoding' 			=> 'utf-8',
			'feed_name' 		=> 'Universitas ekasakti',
			'feed_url' 			=> 'https://unespadang.ac.id/Rss',
			'page_description' 	=> 'berita',
			'page_language' 	=> 'en-ca',
			'creator_email' 	=> 'pustikon@unespadang.ac.id',
			'posts' 			=> $this->Mdl_rss->get_posts(10)
		);



		$this->load->vars($data);
		$this->load->view('admin/rss');
	}
}
