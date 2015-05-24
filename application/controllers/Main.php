<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index() {

		$view_data = array();
		$view_data['content'] = 'pages/home_view';
		$view_data['menu'] = 'home';

		$this->load->view('template_view', $view_data);
	}

}
