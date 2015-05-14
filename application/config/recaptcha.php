<?php

$config['public_key'] = "";
$config['private_key'] = "";

if (($local_config = @json_decode(file_get_contents('config.json'), true))) {
    if (!isset($local_config['recaptcha'])) {
        throw new Exception('Recaptcha config is not set');
    }
    $config['public_key'] = $local_config['recaptcha']['public_key'];
    $config['private_key'] = $local_config['recaptcha']['private_key'];
}
