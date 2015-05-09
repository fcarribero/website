<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class QuienSoy extends CI_Controller {

    public function index() {

        $view_data = array();
        $view_data['content'] = 'pages/quien_soy_view';
        $view_data['menu'] = 'quien-soy';

        $this->load->view('template_view', $view_data);
    }

}
