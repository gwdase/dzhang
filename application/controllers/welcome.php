<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{
	$this->load->model('Model_welcome');
	$result = $this->Model_welcome->get_last_ten_entries();
//var_dump($result);
		$this->load->helper('url');
		$this->load->view('layout');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */