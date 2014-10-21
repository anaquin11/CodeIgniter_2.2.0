<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class helloworld extends CI_Controller {
	public function index()
	{
		$this->load->view('helloworld');
	}
}

/* End of file helloworld.php */
/* Location: ./application/controllers/helloworld.php */