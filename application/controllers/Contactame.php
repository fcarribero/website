<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contactame extends CI_Controller {

    public function index() {

        $view_data = array();
        $view_data['content'] = 'pages/contactame_view';
        $view_data['menu'] = 'contactame';

        $this->load->view('template_view', $view_data);
    }

    public function enviar() {
        $data = array();
        if (!($data['nombre'] = $this->input->post('nombre'))) {
            show_404();
        }
        if (!($data['email'] = $this->input->post('email'))) {
            show_404();
        }
        if (!($data['mensaje'] = $this->input->post('mensaje'))) {
            show_404();
        }

        $this->load->library('Recaptcha');
        if (!$this->recaptcha->check()) {
            echo json_encode(array('success' => false, 'message' => lang('captcha_failed')));
            return;
        }

        $mensaje = '';
        $mensaje .= utf8_decode($data['mensaje']);
        $mensaje .= PHP_EOL . PHP_EOL . utf8_decode($data['nombre']);

        $this->load->library('email');
        $this->email->clear(true);
        $this->config->load('mail', true);
        $this->email->initialize($this->config->item('mail'));
        $this->email->to('francisco.carribero@webneex.com');
        $this->email->subject('[Web] ' . $data['email']);
        $this->email->from($data['email'], $data['nombre']);
        $this->email->message($mensaje);
        $this->email->mailtype = "text";
        if ($this->email->send()) {
            echo json_encode(array('success' => true));
        } else {
            echo json_encode(array('success' => false, 'debug' => $this->email->print_debugger()));
        }
    }

}
