<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller {

	public function index() {

		$view_data = array();
		$view_data['content'] = 'pages/servicios_view';
		$view_data['menu'] = 'servicios';

		$this->load->view('template_view', $view_data);
	}

}
