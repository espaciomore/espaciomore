<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->show_message();
	}

	private function show_message()
	{
		$this->load->view('welcome_message');
	}
}

