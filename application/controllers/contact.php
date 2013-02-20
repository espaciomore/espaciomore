<?php

class Contact extends CI_Controller {

	public function index($page = 'contact')
	{
		if( !file_exists('application/views/pages/'.$page.'.php') )
		{
			show_404();
		}
	}
	
	$data['title'] = ucfirst($page);

	$this->load->view('pages/'.$page, $data);
}
