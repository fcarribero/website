<?php

class Recaptcha {

	public function check() {
		$CI = &get_instance();
		$CI->load->config('recaptcha', true);
		$config = $CI->config->item('recaptcha');
		$data = array(
			'secret' => $config['private_key'],
			'response' => $CI->input->post('g-recaptcha-response'),
			'remoteip' => $CI->input->ip_address()
		);

		$options = array(
			'http' => array(
				'header' => "Content-type: application/x-www-form-urlencoded\r\n",
				'method' => 'POST',
				'content' => http_build_query($data),
			),
		);
		$context = stream_context_create($options);
		$result = @json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context), true);
		if (!$result || !$result['success']) {
			return false;
		} else {
			return true;
		}
	}

}
